node('node') {


    def err = null
    currentBuild.result = "SUCCESS"

    try {

       stage 'Checkout'

            checkout scm

       stage 'Install requirements'

            sh 'npm install'
            sh 'composer install --prefer-source --no-interaction'

        }


    catch (err) {

        currentBuild.result = "FAILURE"
        throw err
    }

}
