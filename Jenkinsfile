node {


    currentBuild.result = "SUCCESS"

    try {

       stage 'Checkout'

            checkout scm

       stage 'Install requirements'

            sh '#!/bin/bash -l nvm use 4'
            sh 'whoami'
            sh '#!/bin/bash -l npm install'
            sh '#!/bin/bash -l composer install --prefer-source --no-interaction'
            sh '#!/bin/bash -l ./node_modules/.bin/aquifer build'
            sh '#!/bin/bash -l ./node_modules/.bin/gulp phplint'
            sh '#!/bin/bash -l ./node_modules/.bin/gulp drupalcs'
            sh '#!/bin/bash -l ./node_modules/.bin/gulp eslint'

        }


    catch (err) {

        currentBuild.result = "FAILURE"
        throw err
    }

}
