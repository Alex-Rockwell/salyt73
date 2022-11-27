import initMap from '../modules/initMap';

function lazyLoadMap991() {
    const contacts = document.querySelector('.main__wrapper .contacts');
    let isMapLoaded = false;
    
    function onScroll() {
        let windowCenter = (window.innerHeight / 2) + window.scrollY;
        let contactsOffset = contacts.offsetTop - 500;
        
        if (windowCenter >= contactsOffset) {
            initMap('.main__wrapper .contacts__wrapper');

            isMapLoaded = true;
        }
    }

    window.addEventListener('scroll', onScroll);
    window.addEventListener('scroll', () => {
        if (isMapLoaded) {
            window.removeEventListener('scroll', onScroll);
        }
    });
}

export default lazyLoadMap991;