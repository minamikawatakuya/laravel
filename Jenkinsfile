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
	}
}