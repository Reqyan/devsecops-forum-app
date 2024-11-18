pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        stage('Checkout') {
            steps {
                git 'https://github.com/Reqyan/devsecops-forum-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                sh 'composer require laravel/sail --dev'
                sh 'php artisan sail:install'
                sh "${SAIL} up -d"
                sh "${SAIL} composer install"
            }
        }

        stage('Run Tests') {
            steps {
                sh "${SAIL} artisan migrate:fresh --seed"
                sh "${SAIL} test"
            }
        }

        stage('Static Analysis') {
            steps {
                sh "${SAIL} phpstan analyse"
            }
        }

        stage('Lint') {
            steps {
                sh "${SAIL} phpcs"
            }
        }

        stage('Teardown') {
            steps {
                sh "${SAIL} down"
            }
        }
    }

    post {
        always {
            sh "${SAIL} down"
        }
    }
}