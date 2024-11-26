pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
        scannerHome = tool 'jenkins-tool' // Pastikan ini sesuai nama tool di Jenkins
    }

    stages {
        stage('SCM Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Reqyan/devsecops-forum-app.git'
            }
        }

        stage('SonarQube Analysis') {
            steps {
                withSonarQubeEnv('SonarQube Server') { // Pastikan ini sesuai nama konfigurasi di Jenkins
                    sh "${scannerHome}/bin/sonar-scanner"
                }
            }
        }

        stage("Quality Gate") {
            steps {
                timeout(time: 30, unit: 'MINUTES') {
                    // Parameter indicates whether to set pipeline to UNSTABLE if Quality Gate fails
                    // true = set pipeline to UNSTABLE, false = don't
                    waitForQualityGate abortPipeline: true
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
        stage('DAST OWASP ZAP') {
            agent {
                docker {
                    image 'ghcr.io/zaproxy/zaproxy:stable'
                    args '-u root --network host -v /var/run/docker.sock:/var/run/docker.sock --entrypoint= -v .:/zap/wrk/:rw'
                }
            }
            steps {
                catchError(buildResult: 'SUCCESS', stageResult: 'FAILURE') {
                    sh 'zap-baseline.py -t https://filkomfess.reqyan.my.id -r zapbaseline.html -x zapbaseline.xml'
                }
                sh 'cp /zap/wrk/zapbaseline.html ./zapbaseline.html'
                sh 'cp /zap/wrk/zapbaseline.xml ./zapbaseline.xml'
                archiveArtifacts artifacts: 'zapbaseline.html'
                archiveArtifacts artifacts: 'zapbaseline.xml'
            }
        }
    }
}
