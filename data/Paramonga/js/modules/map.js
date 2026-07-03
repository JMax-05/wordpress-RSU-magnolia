import { $ } from '../utils/dom.js';

export function initMap() {
  const mapElement = $('#map');
  if (!mapElement || !window.L) return;

  const ubicacion = [-10.6777,  -77.8194];
  const map = window.L.map(mapElement).setView(ubicacion, 13);

  window.L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap'
  }).addTo(map);

  window.L.marker(ubicacion)
    .addTo(map)
    .bindPopup('Paramonga - Perú')
    .openPopup();
}
