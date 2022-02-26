
    const d = document;
    const contentA = d.querySelector('.modal-a')
    const contentB = d.querySelector('.modal-b')
    const background = d.querySelector('.background')

    d.addEventListener('click', (e) => {
        const target = e.target;

        if (target.dataset.plancha == "A") {
            background.classList.add('background-active')
            contentA.classList.add('modal--active')
        }

        if (target.dataset.close == "A") {
            background.classList.remove('background-active')
            contentA.classList.remove('modal--active')
        }


        if (target.dataset.plancha == "B") {
            background.classList.add('background-active')
            contentB.classList.add('modal--active')
        }

        if (target.dataset.close == "B") {
            background.classList.remove('background-active')
            contentB.classList.remove('modal--active')
        }
    })