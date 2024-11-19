pipeline {
    agent any

    environment {
        SAIL = './vendor/bin/sail'
        WWWUSER = sh(returnStdout: true, script: '1000').trim()
        WWWGROUP = sh(returnStdout: true, script: '1000').trim()
    }

    stages {
        
        stage('Build and Start Containers') {
            steps {
            sh 'docker-compose build --build-arg WWWUSER=1000 --build-arg WWWGROUP=1000'
            sh "${SAIL} up --build -d"
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
