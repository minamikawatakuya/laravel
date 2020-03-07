pipeline {
	agent any
	stages {
		stage('git-pull') {
			steps {
				sh label: '', script: '''cd /home/minami/sites/laravel
                git checkout .
                git pull origin master'''
			}
		}
        stage('unit-test') {
			steps {
				sh label: '', script: '''cd /home/minami/sites/laravel
		        vendor/bin/phpunit'''
			}
		}
	}
    post {
        always {
            mail bcc: '', 
			body: 'always', 
			cc: '', 
			from: '', 
			replyTo: '', 
			subject: 'test', 
			to: 'minata.user@gmail.com'
        }
        success {
			mail bcc: '', 
			body: 'success', 
			cc: '', 
			from: '', 
			replyTo: '', 
			subject: 'test', 
			to: 'minata.user@gmail.com'
        }
        unstable {
            mail bcc: '', 
			body: 'unstable', 
			cc: '', 
			from: '', 
			replyTo: '', 
			subject: 'test', 
			to: 'minata.user@gmail.com'
        }
        failure {
			mail bcc: '', 
			body: 'failure', 
			cc: '', 
			from: '', 
			replyTo: '', 
			subject: 'test', 
			to: 'minata.user@gmail.com'
        }
        changed {
            mail bcc: '', 
			body: 'changed', 
			cc: '', 
			from: '', 
			replyTo: '', 
			subject: 'test', 
			to: 'minata.user@gmail.com'   
        }
    }
}