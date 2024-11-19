pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
        scannerHome = tool 'jenkins' // Pastikan ini sesuai nama tool di Jenkins
    }

    stages {
        stage('SCM Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Reqyan/devsecops-forum-app.git'
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv(credentialsId: 'jenkins', installationName: 'jenkins') { // Pastikan ini sesuai nama konfigurasi di Jenkins
                    sh "${scannerHome}/bin/sonar-scanner"
                }
            }
        }

        stage('Remove Containers') {
            steps {
                sh "docker compose down || true" // Gunakan || true agar tidak gagal jika tidak ada container berjalan
            }
        }

        stage('Build and Start Containers') {
            steps {
                sh "docker compose up --build -d"
            }
        }

        stage('Run Migration') {
            steps {
                script {
                    sleep(time: 15, unit: 'SECONDS')
                }
                sh "docker exec forum_app-laravel.test-1 php artisan migrate:fresh --seed"
            }
        }

        stage('Set Permissions') {
            steps {
                sh "docker exec forum_app-laravel.test-1 chmod -R 777 /var/www/html/storage"
            }
        }
    }
}
