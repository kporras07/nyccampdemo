node('node') {


    currentBuild.result = "SUCCESS"

    try {

       stage 'Checkout'

            checkout scm

       stage 'Install requirements'

            sh 'whoami'
            sh 'env'
            sh 'pwd'
            sh 'ls'

        }


    catch (err) {

        currentBuild.result = "FAILURE"
        throw err
    }

}
