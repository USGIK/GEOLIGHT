'use strict';

let map = L.map('map').setView([56.84193111, 60.59743307], 20)
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map)
let marker
map.on('click', function(e) {
    if (marker) map.removeLayer(marker)
    marker = new L.Marker(e.latlng).addTo(map)
    document.getElementById('latlng').value=`${e.latlng.lng}, ${e.latlng.lat}`
})