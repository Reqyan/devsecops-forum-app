pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
        WWWUSER = sh(returnStdout: true, script: 'id -u jenkins').trim()
        WWWGROUP = sh(returnStdout: true, script: 'id -g jenkins').trim()
    }

    stages {
        
        stage('Build and Start Containers') {
            steps {
            sh 'docker-compose build --build-arg WWWUSER=$WWWUSER --build-arg WWWGROUP=$WWWGROUP'
            sh "${SAIL} up --build -d"
            sh "${SAIL} exec -u root laravel.test usermod -u ${WWWUSER} jenkins"
            sh "${SAIL} exec -u root laravel.test groupmod -g ${WWWGROUP} jenkins"
            }
        }

        stage('Run Tests') {
            steps {
                sh "${SAIL} artisan migrate"
                sh "${SAIL} test"
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
