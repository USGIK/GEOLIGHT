'use strict';

Cesium.Ion.defaultAccessToken = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiI4N2E5ZGY4ZC02YmQzLTQ2YjEtOGZjYy1kMjU1NTZjZmY0OWMiLCJpZCI6NDI0MDksImlhdCI6MTYxMzM5ODE3NX0.-3-6sinkXL4LKfCfEXzVVN7C8naBtVgfvfE7ln_6tXE';
const viewer = new Cesium.Viewer('cesiumContainer', {
    terrainProvider: Cesium.createWorldTerrain(),
});
let scene = viewer.scene;
viewer.camera.flyTo({
    destination: Cesium.Cartesian3.fromDegrees(60.595576, 56.842336, 1000),
    duration: 3,
});

let extent = Cesium.Rectangle.fromDegrees(60.595576, 56.842336, 60.595576, 56.842336);
Cesium.Camera.DEFAULT_VIEW_RECTANGLE = extent;
Cesium.Camera.DEFAULT_VIEW_FACTOR = 0.0001;


// css
{
    let header = document.querySelector('.header');
    header.style.height = document.documentElement.clientHeight - 91 + 'px';
    let map = document.querySelector('#cesiumContainer')
    map.style.height = document.documentElement.clientHeight - 100 + 'px';
}