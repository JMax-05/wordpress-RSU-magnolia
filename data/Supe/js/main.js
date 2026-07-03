import { loadSections } from './loader.js';
import { initGallery } from './modules/gallery.js';
import { initHeaderScroll, initMobileMenu } from './modules/menu.js';
import { initHeroSlider } from './modules/slider.js';
import { initHistoryTabs } from './modules/history.js';
import { initMap } from './modules/map.js';
import { initMythsAccordion } from './modules/myths.js';
import { initTourismFilters } from './modules/tourism.js';
import { initFestivitiesTimeline } from './modules/traditions.js';
import { initServices } from './modules/services.js';

const SECTIONS = [
  'inicio',
  'historia',
  'turismo',
  'gastronomia',
  'tradiciones',
  'mitos',
  'servicios',
  'galeria',
  'contacto'
];

document.addEventListener('DOMContentLoaded', async () => {
  initMobileMenu();
  initHeaderScroll();

  await loadSections(SECTIONS);

  initHeroSlider();
  initHistoryTabs();
  initTourismFilters();
  initFestivitiesTimeline();
  initMythsAccordion();
  initServices();
  initGallery();
  initMap();
});
