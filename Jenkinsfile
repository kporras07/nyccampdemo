node {


    currentBuild.result = "SUCCESS"

    try {

       stage 'Checkout'

            checkout scm

       stage 'Install requirements'

            sh '''#!/bin/bash -l
            whoami
            nvm use 4
            npm install
            composer install --prefer-source --no-interaction
            ./node_modules/.bin/aquifer build
            ./node_modules/.bin/gulp phplint
            ./node_modules/.bin/gulp drupalcs
            ./node_modules/.bin/gulp eslint
            '''

        }


    catch (err) {

        currentBuild.result = "FAILURE"
        throw err
    }

}
