function toggleCategoryBtn(btnSelector, btnActiveClass) {
    const btns = document.querySelectorAll(btnSelector);

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            btn.classList.toggle(btnActiveClass);
        });
    });
}

export default toggleCategoryBtn;