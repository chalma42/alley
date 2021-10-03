// инициализация движка карты
var map = L.map('map', {
       crs: L.CRS.Simple,
    });
    // наложение каринки
    var w = 1000;
    var h = 1000;
    var ibounds = [[0,0], [h, w]];
    
    var image = L.imageOverlay('map.svg', ibounds).addTo(map);
    map.fitBounds(ibounds);