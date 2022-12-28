ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [41.32831772718153, 69.28601321349304],
        zoom: 14
    }, {
        searchControlProvider: 'yandex#search'
    });
    myMap.geoObjects
        .add(new ymaps.Placemark([41.32831772718153, 69.28601321349304], {
        }, {
            iconLayout: 'default#image',
            iconImageHref: 'img/map.svg',
            iconImageSize: [50, 71],
        }))
    
    myMap.behaviors.disable('scrollZoom')
    myMap.panes.get('ground').getElement().style.filter = 'grayscale(100%)';
}