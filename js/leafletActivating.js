var map = L.map('map1', {
    center: [52.2349, 0.1534],
    preferCanvas: true,
    zoom: 13
});

var map1 = L.map('map2', {
    center: [52.5759, 1.1363],
    zoom: 13
});

var map2 = L.map('map3', {
    center: [52.5558, 1.713],
    zoom: 13
});

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map1);

L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map2)

L.marker([52.2349, 0.1534]).addTo(map);

L.marker([52.5759, 1.1363]).addTo(map1);

L.marker([52.5558, 1.713]).addTo(map2);