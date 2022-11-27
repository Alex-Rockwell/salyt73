function toggleCatalogueView() {
    const mainLists = document.querySelectorAll('.main-list');
    const mainListActiveClass = 'main-list_active';
    const shortLists = document.querySelectorAll('.short-list');
    const shortListActiveClass = 'short-list_active';
    const btns = document.querySelectorAll('.view__item-button');
    const btnActiveClass = 'view__item-button_active';

    btns.forEach(btn => {
        btn.addEventListener('click', () => {
            btns.forEach(btn => btn.classList.remove(btnActiveClass));
            btn.classList.add(btnActiveClass);

            if (btn.classList.contains('view__item-button_main')) {
                mainLists.forEach(item => item.classList.add(mainListActiveClass));
                shortLists.forEach(item => item.classList.remove(shortListActiveClass));
            }

            if (btn.classList.contains('view__item-button_short')) {
                shortLists.forEach(item => item.classList.add(shortListActiveClass));
                mainLists.forEach(item => item.classList.remove(mainListActiveClass));
            }
        });
    });
}

export default toggleCatalogueView;