// function controlCardResize() {
//     const mainLists = document.querySelectorAll('.main-list');
//     const mainListActiveClass = 'main-list_active';
//     const shortLists = document.querySelectorAll('.short-list');
//     const shortListActiveClass = 'short-list_active';

//     window.addEventListener('resize', () => {
//         if (document.documentElement.offsetWidth <= 991) {
//             mainLists.forEach(item => {
//                 if (!item.classList.contains(mainListActiveClass)) {
//                     item.classList.add(mainListActiveClass)
//                 }
//             });

//             shortLists.forEach(item => {
//                 if (item.classList.contains(shortListActiveClass)) {
//                     item.classList.remove(shortListActiveClass)
//                 }
//             });
//         }
//     });
// }

// export default controlCardResize;