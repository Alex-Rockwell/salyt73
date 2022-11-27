function toggleSelect({
    selectSelector,
    selectActiveClass, 
    selectHeaderSelector,
    selectHeaderActiveClass,
    selectCurrentSelector,
    selectItemSelector
    }) {
    const select = document.querySelector(selectSelector);
    const selectHeader = document.querySelector(selectHeaderSelector);
    const selectCurrent = document.querySelector(selectCurrentSelector);
    const selectItem = document.querySelectorAll(selectItemSelector);
    const h2 = document.querySelector('.section-title');
    const breadcrumbsCurrent = document.querySelector('.breadcrumbs__current');

    function closeSelect() {
        select.classList.remove(selectActiveClass);
        selectHeader.classList.remove(selectHeaderActiveClass);
    }

    selectCurrent.addEventListener('click', () => {
        select.classList.toggle(selectActiveClass);
        selectHeader.classList.toggle(selectHeaderActiveClass);

        document.addEventListener('click', (e) => {
            if (!e.target.closest(selectSelector)) {
                closeSelect();
            }
        });
    });

    selectItem.forEach((item) => {
        item.addEventListener('click', () => {
            const text = item.textContent;

            localStorage.setItem('category', text);

            document.title = `Салют73 — Каталог — ${text}`;
            selectCurrent.textContent = text;
            h2.textContent = text;
            breadcrumbsCurrent.textContent = text;

            closeSelect();
        });
    });
}

export default toggleSelect;