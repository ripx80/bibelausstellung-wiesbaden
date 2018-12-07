var map = L.map('map').setView([50.0267454,8.2678261], 14);
L.tileLayer('https://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',    
    crs: L.CRS.EPSG4326
}).addTo(map);
L.marker([50.0267454,8.2678261]).addTo(map)
    .bindPopup('<b>Königreichssaal Jehovas Zeugen</b><br/ > 55252 Wiesbaden (Mainz-Kastel)<br /> Anton-Zeeh-Str. 4')
    .openPopup();