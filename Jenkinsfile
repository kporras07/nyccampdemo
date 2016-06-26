node {


    currentBuild.result = "SUCCESS"

    try {

       stage 'Checkout'

            checkout scm

       stage 'Install requirements'

            sh 'nvm use 4'
            sh 'npm install'
            sh 'composer install --prefer-source --no-interaction'
            sh './node_modules/.bin/aquifer build'
            sh './node_modules/.bin/gulp phplint'
            sh './node_modules/.bin/gulp drupalcs'
            sh './node_modules/.bin/gulp eslint'
            sh 'env'

        }


    catch (err) {

        currentBuild.result = "FAILURE"
        throw err
    }

}
