// function showPortfolio() {
//     const portfolioItems = Array.from(document.querySelectorAll('.portfolio__item'));
//     const portfolioItemActiveClass = 'portfolio__item_active';
//     const btn = document.querySelector('.portfolio__more');
//     const btnInactiveClass = 'portfolio__more_inactive';

//     for (let i = 0; i < 20; i++) {
//         portfolioItems[i].classList.add(portfolioItemActiveClass);
//     }

//     btn.addEventListener('click', () => {
//         portfolioItems.forEach(portfolioItem => {
//             if (!portfolioItem.classList.contains(portfolioItemActiveClass)) {
//                 portfolioItem.classList.add(portfolioItemActiveClass);
//             }
//         });

//         btn.classList.add(btnInactiveClass);
//     });
// }

// export default showPortfolio;