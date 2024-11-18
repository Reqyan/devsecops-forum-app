pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        stage('Check Docker Compose') {
            steps {
                sh 'docker-compose --version'
                sh 'docker-compose config' // Validates the docker-compose.yml file
            }
        }

        stage('Load .env') {
            steps {
                script {
                    def props = readProperties file: '.env'
                    props.each { key, value ->
                        env[key] = value
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