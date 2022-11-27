function getCategory() {
    const selectCurrent = document.querySelector('.select__current');
    const h2 = document.querySelector('.section-title');
    const breadcrumbsCurrent = document.querySelector('.breadcrumbs__current');
    const categories = document.querySelectorAll('.category__item');
    const categoryActiveClass = 'category__item_active';
    const text = localStorage.getItem('category');

    document.title = `Салют73 — Каталог — ${text}`;
    selectCurrent.textContent = text;
    h2.textContent = text;
    breadcrumbsCurrent.textContent = text;

    categories.forEach(category => {
        if (category.dataset.category === text) {
            category.classList.add(categoryActiveClass);
        } else {
            category.classList.remove(categoryActiveClass);
        }
    });
}

export default getCategory;