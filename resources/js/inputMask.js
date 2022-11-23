import IMask from "imask";

window.addEventListener('load', () => {
    let phone = document.getElementById('phone-mask')
    if(phone) {
        let maskOptions = {
            mask: '+{7}(000)000-00-00'
        };
        IMask(phone, maskOptions)
    }
})
