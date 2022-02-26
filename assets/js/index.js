    const d = document;
    const form = d.querySelector('.form')
    const formGroup = d.querySelector('.form__group')
    const label = d.querySelector('.form__group--placeholder')
    const input = d.querySelector('.form__group--input')
    const errorMessage = d.querySelector('.form__message')
    const button = d.querySelector('.form__next')
    const expression = /^[0-9]{4}$/
    let verify = false

    input.addEventListener('focus', () => {
        label.classList.add('input-focus')
    })


    input.addEventListener('keyup', (e) => {
        let inputValue = e.target.value

        if ( expression.test(inputValue) ) {
            formGroup.classList.remove('form__group--err')
            formGroup.classList.remove('form__group--warning')
            formGroup.classList.add('form__group--success')
            errorMessage.classList.remove('form__message--active')
            button.classList.remove('button-off')

            verify = true
        } else {
            if (inputValue.length < 2) {
                formGroup.classList.remove('form__group--success')
                formGroup.classList.remove('form__group--warning')
                formGroup.classList.add('form__group--err')
                errorMessage.classList.add('form__message--active')
                button.classList.add('button-off')

                verify = false 
            } else if (inputValue.length >= 2) {
                formGroup.classList.remove('form__group--success')
                formGroup.classList.remove('form__group--err')
                formGroup.classList.add('form__group--warning')
                errorMessage.classList.add('form__message--active')
                button.classList.add('button-off')

                verify = false
            }
        }
    })

    input.addEventListener('blur', (e) => {
        if ( e.target.value == "" ) {
            label.classList.remove('input-focus')
        } else {
            label.classList.add('input-focus')
        }   
    })

    form.addEventListener('submit', (e) => {
        if ( verify ) {

        } else {
            e.preventDefault()
        }
    })