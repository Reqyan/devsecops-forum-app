pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        stage('Load .env') {
            steps {
                script {
                    def props = readProperties file: '.env'
                    for (entry in props) {
                        env[entry.key] = entry.value
                    }
                }
            }
        }

        stage('Checkout') {
            steps {
                git branch: 'main', url: 'https://github.com/Reqyan/devsecops-forum-app.git'
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