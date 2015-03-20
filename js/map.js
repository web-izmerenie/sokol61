ymaps.ready(init);

function init () {
    var ya_map = new ymaps.Map("ya-map", {
        center: [arMap[0].x, arMap[0].y],
        zoom: arMap[0].zoom
    });
	if(arMap[0].icon){
		placemark = new ymaps.Placemark([arMap[0].x, arMap[0].y], {
		    hintContent: arMap[0].name,
			balloonContent: arMap[0].name
		},{
		    iconImageHref: arMap[0].icon,
		    iconImageSize: [27, 43],
		    iconImageOffset: [-13, -42]
		});
	}else{
		placemark = new ymaps.Placemark([arMap[0].x, arMap[0].y], {
		    hintContent: arMap[0].name,
			balloonContent: arMap[0].name
		});
	}
	ya_map.controls
        .add('zoomControl')
        .add('typeSelector')
        .add('mapTools');
    ya_map.geoObjects.add(placemark);
}