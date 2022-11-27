// function addAnimations(mainSwiper) {
//     function animate() {
//         const elems = mainSwiper.slides[mainSwiper.activeIndex].querySelectorAll('.animated');

//         elems.forEach(elem => {
//             elem.classList.add('animate');
            
//             if (elem.classList.contains('remove-animation')) {
//                 elem.addEventListener('animationend', () => {
//                     elem.classList.add('delete-animation');
//                 }); 
//             } 
//         });
//     }

//     animate();

//     mainSwiper.on('slideChange', () => {
//         animate();
//     });
// }

// export default addAnimations;