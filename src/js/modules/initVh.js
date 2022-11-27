// Свойство Vh неправильно работает на мобильных устройствах. Эта штука фиксит его
function initVh() {
    function init() {
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    }

    init();
    window.addEventListener('resize', init);
}

export default initVh;