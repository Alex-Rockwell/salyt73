function toggleHeader() {
    const btnMin = document.querySelector('.header__minimize');
    const btnsMax = document.querySelectorAll('[data-maximize]');
    const container = document.querySelector('.header__container');
    const containerMinClass = 'header__container_min';
    const minElems = document.querySelectorAll('.header__min');
    const maxElems = document.querySelectorAll('.header__max');
    const elemActiveClass = 'header__active-elem';

    const modifyElems = document.querySelectorAll('[data-modify]');
    const smallClass = 'header__small';

    btnMin.addEventListener('click', () => {
        container.classList.add(containerMinClass);
        maxElems.forEach(elem => elem.classList.remove(elemActiveClass));
        minElems.forEach(elem => elem.classList.add(elemActiveClass));
        modifyElems.forEach(elem => elem.classList.add(smallClass));
    });

    btnsMax.forEach(btn => {
        btn.addEventListener('click', () => {
            container.classList.remove(containerMinClass);
            minElems.forEach(elem => elem.classList.remove(elemActiveClass));
            maxElems.forEach(elem => elem.classList.add(elemActiveClass));
            modifyElems.forEach(elem => elem.classList.remove(smallClass));
        });
    });
}

export default toggleHeader;