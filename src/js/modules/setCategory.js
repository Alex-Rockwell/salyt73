function setCategory() {
    const parent = document.querySelector('.catalogue__list');

    if (parent) {
        parent.addEventListener('click', (e) => {
            const activeLink = e.target.closest('.catalogue__link');
            
            if (e.target && activeLink) {
                localStorage.setItem('category', e.target.textContent);
            }
        });
    }

    const assortment = document.querySelector('.assortment');

    if (assortment) {
        assortment.addEventListener('click', (e) => {
            const activeLink = e.target.closest('.assortment__info-link');
    
            if (e.target && activeLink) {
                const text = activeLink.dataset.category;
                
                localStorage.setItem('category', text);
            }
        });
    }
}

export default setCategory;