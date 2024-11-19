pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        
        stage('Build and Start Containers') {
            steps {
                // Build and start containers using Docker Compose
                sh "docker compose up --build -d"
            }
        }

        stage('Run Migration') {
            steps {
                script {
                    // Sleep to ensure the containers are up before running commands
                    sleep(time: 15, unit: 'SECONDS')
                }
                // Run migrations
                sh "docker exec forum_app-laravel.test-1 php artisan migrate:fresh --seed"
            }
        }

        stage('Set Permissions') {
            steps {
                // Set permissions for the storage directory to 777
                sh "docker exec forum_app-laravel.test-1 chmod -R 777 /var/www/html/storage"
            }
        }
    }
}
