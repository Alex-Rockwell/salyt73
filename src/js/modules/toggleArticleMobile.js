function toggleArticleMobile() {
    const btns = document.querySelectorAll('.articles__item-btn');
    const btnActiveClass = 'articles__item-btn_active';
    const articles = document.querySelectorAll('.article_991');
    const articleActiveClass = 'article_active';
    const btnsClose = document.querySelectorAll('.article__close')

    btns.forEach((btn, i) => {
        btn.addEventListener('click', () => {
            btn.classList.toggle(btnActiveClass);
            articles[i].classList.toggle(articleActiveClass);
        });
    });

    btnsClose.forEach((btn, i) => {
        btn.addEventListener('click', () => {
            btns.forEach(btn => btn.classList.remove(btnActiveClass));
            articles[i].classList.remove(articleActiveClass);
        });
    });
}

export default toggleArticleMobile;