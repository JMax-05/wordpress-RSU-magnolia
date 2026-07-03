import { initGallery }           from './modules/gallery.js';
import { initHeaderScroll, initMobileMenu } from './modules/menu.js';
import { initHeroSlider }         from './modules/slider.js';
import { initHistoryTabs }        from './modules/history.js';
import { initMap }                from './modules/map.js';
import { initMythsAccordion }     from './modules/myths.js';
import { initTourismFilters }     from './modules/tourism.js';
import { initFestivitiesTimeline } from './modules/traditions.js';
import { initServices }           from './modules/services.js';

function init() {
  initMobileMenu();
  initHeaderScroll();
  initHeroSlider();
  initHistoryTabs();
  initTourismFilters();
  initFestivitiesTimeline();
  initMythsAccordion();
  initServices();
  initGallery();
  initMap();
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', init);
} else {
  init();
}
