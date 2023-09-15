var map = L.map('map').setView([53.8525, 10.69], 13);
var tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
  maxZoom: 19,
  attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(map);

var standardIcon = L.Icon.extend({
  options: {
    shadowUrl: 'Content/lib/Leaflet/images/marker-shadow.png',
    iconSize: [25, 41],
    shadowSize: [40, 50],
    iconAnchor: [12, 41],
    shadowAnchor: [4, 62],
    popupAnchor: [-3, -76]
  }
});

var berolinaIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/berolina_map_marker.png' });
var uniIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/marker-icon-2x.png' });
var lübeckIcon = new standardIcon({ iconUrl: 'Content/lib/Leaflet/images/marker-icon-2x.png' });

var mBerolina = L.marker([53.84657345950489, 10.682917057670299], { icon: berolinaIcon }).addTo(map).bindPopup('Das Korporationshaus', { autoClose: false }).openPopup();
var mUniversität = L.marker([53.83442099279524, 10.703647997530705], { icon: uniIcon }).addTo(map).bindPopup('Die Universität');
var mLübeck = L.marker([53.86642783061478, 10.687160749005853], { icon: uniIcon }).addTo(map).bindPopup('Die Altstadt Lübecks');