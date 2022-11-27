function initBackBtns(formSwiper) {
    const backBtns = document.querySelectorAll('.swiper-button-back');

    backBtns.forEach(backBtn => {
        backBtn.addEventListener('click', (e) => {
            e.preventDefault();

            formSwiper.slidePrev();
        });
    });
}

export default initBackBtns;