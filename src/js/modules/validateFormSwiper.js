function initFormSwiper() {
    const parent = document.querySelector('.modal__form');
    const btnStep1 = parent.querySelector('.swiper-button-next_1');
    const btnStep2 = parent.querySelector('.swiper-button-next_2');
    const btnStep3 = parent.querySelector('.modal__submit');
    const btnEnabledClass = 'swiper-button-next_enabled'; 
    const inputDate = parent.querySelector('.modal__date');
    const inputRadios = parent.querySelectorAll('.modal__item');
    const inputName = parent.querySelector('.modal__user-name');
    const inputPhone = parent.querySelector('.modal__user-phone');

    inputDate.addEventListener('change', () => {
        btnStep1.classList.add(btnEnabledClass);
    });

    inputRadios.forEach(inputRadio => {
        inputRadio.addEventListener('click', () => {
            btnStep2.classList.add(btnEnabledClass);
        });
    });

    function handleBlur(input) {
        input.addEventListener('input', () => {
            if (inputName.value !== '' && inputPhone.value.length === 18) {
                btnStep3.classList.add(btnEnabledClass);
            }
        });
    }

    handleBlur(inputName);
    handleBlur(inputPhone);
}

export default initFormSwiper;