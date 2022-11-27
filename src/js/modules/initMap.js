function initMap() {
    function init() {
        const map = new ymaps.Map("contacts__map", {
            center: [54.323945, 48.508830],
            zoom: 11
        });

        const surovaPlaceMark = new ymaps.Placemark([54.383945, 48.598830], {}, {
            iconLayout: 'default#image',
            iconImageHref: '../../../dist/img/blocks/contacts/firework.svg',
            iconImageSize: [33.75, 42],
        });

        const promPlaceMark = new ymaps.Placemark([54.282797, 48.307776], {}, {
            iconLayout: 'default#image',
            iconImageHref: '../../../dist/img/blocks/contacts/firework.svg',
            iconImageSize: [33.75, 42],
        });

        const tupolevaPlaceMark = new ymaps.Placemark([54.370179, 48.573587], {}, {
            iconLayout: 'default#image',
            iconImageHref: '../../../dist/img/blocks/contacts/firework.svg',
            iconImageSize: [33.75, 42],
        });

        const cherdakliPlaceMark = new ymaps.Placemark([54.355338, 48.854050], {}, {
            iconLayout: 'default#image',
            iconImageHref: '../../../dist/img/blocks/contacts/firework.svg',
            iconImageSize: [33.75, 42],
        });

        map.geoObjects
            .add(surovaPlaceMark)
            .add(promPlaceMark)
            .add(tupolevaPlaceMark)
            .add(cherdakliPlaceMark);
    }

    ymaps.ready(init);
}

export default initMap;