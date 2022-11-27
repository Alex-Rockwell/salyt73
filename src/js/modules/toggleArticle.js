import imgData from '../db/imgData';

function toggleArticle() {
    const btnsPrev = document.querySelectorAll('.article__buttons-button_prev');
    const btnsNext = document.querySelectorAll('.article__buttons-button_next');
    const btnInactiveClass = 'article__buttons-button_inactive';

    btnsPrev[0].setAttribute('disabled', 'disabled');
    btnsPrev[0].classList.add(btnInactiveClass);
    btnsNext[btnsNext.length - 1].setAttribute('disabled', 'disabled');
    btnsNext[btnsNext.length - 1].classList.add(btnInactiveClass);

    const tabHeaders = document.querySelectorAll('.articles__item-btn');
    const tabHeaderActiveClass = 'articles__item-btn_active';
    
    const tabContents = document.querySelectorAll('.articles__tabs-item');
    const tabContentActiveClass = 'articles__tabs-item_active';
    
    const wrapper = document.querySelector('.articles__container');

    function toggle(index) {
        let tabHeaderActive = document.querySelector('.articles__item-btn_active');
        tabHeaderActive.classList.remove(tabHeaderActiveClass);
        tabHeaders[index].classList.add(tabHeaderActiveClass);
        tabHeaderActive = tabHeaders[index];

        let tabContentActive = document.querySelector('.articles__tabs-item_active');
        tabContentActive.classList.remove(tabContentActiveClass);
        tabContents[index].classList.add(tabContentActiveClass);
        tabContentActive =  tabContents[index];

        wrapper.style.backgroundImage = imgData[1][index];
        
        window.scrollTo({
            top: 0,
            left: 0,
            behavior: 'instant',
        });
    }

    btnsNext.forEach((btn, i) => {
        btn.addEventListener('click', () => {
            toggle(i + 1);
        });
    });

    btnsPrev.forEach((btn, i) => {
        btn.addEventListener('click', () => {
            toggle(i - 1);
        });
    });
}

export default toggleArticle;