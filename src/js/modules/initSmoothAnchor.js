function initSmoothAnchor() {
    const links = document.querySelectorAll('.article__nav-link');
    const anchors = document.querySelectorAll('.article__subtitle');

    links.forEach((link, i) => {
        link.addEventListener('click', () => {
            window.scroll({
                left: 0,
                top: anchors[i].offsetTop - document.querySelector('.header_991').offsetHeight,
                behavior: 'smooth'
            });
        });
    });
}

export default initSmoothAnchor;