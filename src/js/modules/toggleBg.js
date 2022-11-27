function toggleBg(imagesData, wrapperSelector, btnSelector, btnActiveClass, event) {
    const wrapper = document.querySelector(wrapperSelector);
    const btns = document.querySelectorAll(btnSelector);

    wrapper.addEventListener(event, () => {
        btns.forEach((btn, i) => {
            if (btn.classList.contains(btnActiveClass)) {
                wrapper.style.backgroundImage = imagesData[i];
            }
        });
    });
}

export default toggleBg;