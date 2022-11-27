function toggleCard() {
    const cards = document.querySelectorAll('.main-list__item');

    document.addEventListener('mousemove', () => {
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                cards.forEach(card => {
                    card.classList.remove('main-list__item_active')
                });
                card.classList.add('main-list__item_active');
    
                document.addEventListener('click', (e) => {
                    if (!e.target.closest('.main-list__item') && !e.target.closest('.fslightbox-container')) {
                        card.classList.remove('main-list__item_active')
                    }
                });
            });
        });
    });

    
}

export default toggleCard;