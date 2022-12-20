ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.2589251131454, 69.1385123133777],
        zoom: 12
    }, {
        searchControlProvider: 'yandex#search'
    });
    myMap.geoObjects
        .add(new ymaps.Placemark([41.22411341667512, 69.24052571733323], {
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.svg',
            iconImageSize: [50, 71],
        }))

    myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
}
