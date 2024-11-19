pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
        WWWUSER = sh(script: 'id -u jenkins', returnStdout: true).trim()
        WWWGROUP = sh(script: 'id -g jenkins', returnStdout: true).trim()
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
                sh 'docker-compose config'  // Validates the docker-compose.yml file
            }
        }

        stage('Checkout Code') {
            steps {
                git branch: 'main', url: 'https://github.com/Reqyan/devsecops-forum-app.git'
            }
        }

        stage('Install Dependencies') {
            steps {
                script {
                    sh 'composer require laravel/sail --dev'
                    sh 'php artisan config:clear'
                    sh 'php artisan sail:install --with=mariadb'
                    sh "${SAIL} down" // Ensure no running containers
                    sh "${SAIL} up --build -d"  // Build and start containers
                }
            }
        }

        stage('Fix Permissions') {
            steps {
                script {
                    sh "docker-compose exec -T laravel.test chown -R ${WWWUSER}:${WWWGROUP} /var/www/html/storage /var/www/html/bootstrap/cache"
                    sh "docker-compose exec -T laravel.test chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache"
                }
            }
        }

        stage('Run Tests') {
            steps {
                sh "${SAIL} artisan migrate"
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
