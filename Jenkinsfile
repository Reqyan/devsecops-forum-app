pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
    }

    stages {
        stage('Pre-checks') {
            steps {
                sh 'which docker-compose || { echo "docker-compose not installed"; exit 1; }'
                sh 'which composer || { echo "composer not installed"; exit 1; }'
                sh 'docker-compose --version'
            }
        }

        stage('Check Docker Compose Config') {
            steps {
                sh 'docker-compose config' // Validates the docker-compose.yml file
            }
        }

        stage('Load .env') {
            steps {
                script {
                    def props = readProperties file: '.env'
                    def envVars = props.collect { key, value -> "${key}=${value}" }
                    withEnv(envVars) {
                        echo "Environment variables loaded."
                    }
                }
            }
        }

        stage('Checkout Code') {
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
