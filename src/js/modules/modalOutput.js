function dateOutput() {
    let dateOutput = document.querySelector('.dateOutput');
    let date = document.querySelector("#datetime-local").value.replace(/[T]/gi, ' в ');
    dateOutput.innerHTML = date;
}

let checkboxSmoke = document.getElementById('smokE');
let checkboxfirE = document.getElementById('firE');
let checkboxbengaL = document.getElementById('bengaL');
let checkboxsalyT = document.getElementById('salyT');
let checkboxpyro = document.getElementById('pyro');
let checkboxcolored = document.getElementById('colored');

let outputSmoke = document.querySelector('.checkboxOutput--smokE');
let outputfirE = document.querySelector('.checkboxOutput--firE');
let outputbengaL = document.querySelector('.checkboxOutput--bengaL');
let outputsalyT = document.querySelector('.checkboxOutput--salyT');
let outputpyro = document.querySelector('.checkboxOutput--pyro');
let outputcolored = document.querySelector('.checkboxOutput--colored');

let modalItem1 = document.querySelector('.modal__item1');
let modalItem2 = document.querySelector('.modal__item2');
let modalItem3 = document.querySelector('.modal__item3');
let modalItem4 = document.querySelector('.modal__item4');
let modalItem5 = document.querySelector('.modal__item5');
let modalItem6 = document.querySelector('.modal__item6');

modalItem1.addEventListener('click', () => {
    if (checkboxSmoke.checked) {
        outputSmoke.classList.remove('visible');
    } else {
        outputSmoke.classList.add('visible');
    }
})

modalItem2.addEventListener('click', () => {
    if (checkboxfirE.checked) {
        outputfirE.classList.remove('visible');
    } else {
        outputfirE.classList.add('visible');
    }
})

modalItem3.addEventListener('click', () => {
    if (checkboxbengaL.checked) {
        outputbengaL.classList.remove('visible');
    } else {
        outputbengaL.classList.add('visible');
    }
})

modalItem4.addEventListener('click', () => {
    if (checkboxsalyT.checked) {
        outputsalyT.classList.remove('visible');
    } else {
        outputsalyT.classList.add('visible');
    }
})

modalItem5.addEventListener('click', () => {
    if (checkboxpyro.checked) {
        outputpyro.classList.remove('visible');
    } else {
        outputpyro.classList.add('visible');
    }
})

modalItem6.addEventListener('click', () => {
    if (checkboxcolored.checked) {
        outputcolored.classList.remove('visible');
    } else {
        outputcolored.classList.add('visible');
    }
})

function modalInputValue() {
    let name = document.querySelector('.modal__user-name');
    let phone = document.querySelector('.modal__user-phone');

    let nameField = document.querySelector('.modal__user-namefield');
    let phoneField = document.querySelector('.modal__user-phonefield');

    nameField.innerHTML = name.value;
    phoneField.innerHTML = phone.value;
}