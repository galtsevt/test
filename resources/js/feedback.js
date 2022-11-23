window.addEventListener('load', buttonListener)

function buttonListener() {
    let button = document.getElementById('button')
    button.addEventListener('click', sendData)
}

function sendData() {
    let form = document.getElementById('feedbackForm')
    let sendData = new FormData(form)

    progress('start')
    window.axios({
        method: "POST",
        url: "api/feedback/store",
        data: sendData,
    }).then((response) => {
        let message = document.getElementById('message')
        if (response.data.success !== false) {
            message.classList.remove('d-none')
            clearErrorMessages(sendData.keys())
            form.reset()
        } else {
            message.classList.add('d-none')
            showErrorMessages(response.data.data)
        }
    }).catch((response) => {
        console.log(response)
    })
    progress('stop')
}

function showErrorMessages(errors) {
    for(let error in errors) {
        let div = document.getElementById(error)
        div.innerHTML = errors[error]
    }
}

function clearErrorMessages(keys) {
    for(let value of keys) {
        let div = document.getElementById(value)
        div.innerHTML = ''
    }
}

function progress(type) {
    let spinner = document.getElementById('progress')
    if(type === 'start') {
        spinner.classList.remove('d-none')
    } else {
        spinner.classList.add('d-none')
    }
}




