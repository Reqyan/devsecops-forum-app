pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        
        stage('Build and Start Containers') {
            steps {
                // sh 'docker-compose build --build-arg WWWUSER=1000 --build-arg WWWGROUP=1000'
                sh "${SAIL} up --build -d"
            }
        }

        stage('Run Migration') {
            steps {
                script {
                    sleep(time: 30, unit: 'SECONDS')
                }
                sh "docker exec forum_app-laravel.test-1 php artisan migrate:fresh --seed"
            }
        }
    }
}
