import initMap from '../modules/initMap';

function lazyLoadMap1920(mainSwiper) {
    let isMapLoaded = false;

    mainSwiper.on('slideChange', () => {
        if (mainSwiper.activeIndex === 4 && !isMapLoaded) {
            initMap('.contacts__wrapper');

            isMapLoaded = true;
        };
    }); 
}

export default lazyLoadMap1920;