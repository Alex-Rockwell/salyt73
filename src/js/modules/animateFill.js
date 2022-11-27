// function animateFill(itemSelector) {
//     const items = document.querySelectorAll(itemSelector);

//     items.forEach(item => {
//         item.addEventListener('mousemove', (e) => {
//             // const x = e.pageX - item.offsetLeft;
//             // const y = e.pageY - item.offsetTop;

//             const bounds = e.target.getBoundingClientRect();
//             const x = e.clientX - bounds.left;
//             const y = e.clientY - bounds.top;

//             item.style.setProperty('--x', x + 'px');
//             item.style.setProperty('--y', y + 'px');
//         });
//     })
// }

// export default animateFill;