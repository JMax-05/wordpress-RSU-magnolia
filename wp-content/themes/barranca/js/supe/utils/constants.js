export const SELECTORS = {
  header: '#siteHeader', hamburger: '.hamburger', navLinks: '.nav-links',
  navAnchor: '.nav-links a', timelineButton: '.timeline-btn', filterButton: '.filter-btn',
  placesGrid: '#places-grid', galleryStage: '.gallery-stage', mainBoxes: '.mainBoxes'
};

export const DEFAULT_PLACE_IMAGE = 'https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg';

export const historyData = {
  caral: {
    title: 'La Civilización Caral (3000 a.C.)',
    desc: 'El Valle de Supe alberga Caral, la civilización más antigua de América, con más de 5000 años de historia. En este valle se erigieron las primeras pirámides del continente, plazas ceremoniales y complejos hidráulicos. Caral es Patrimonio de la Humanidad por la UNESCO desde 2009.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg',
    chapter: 1
  },
  intermedio: {
    title: 'El Valle Intermedio',
    desc: 'Tras el florecimiento de Caral, el valle de Supe continuó siendo habitado por culturas sucesivas. Las evidencias de ocupación Chimú e Inca muestran que el valle mantuvo su importancia estratégica y agrícola a lo largo de milenios.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/e/eb/Machu_Picchu%2C_Peru.jpg',
    chapter: 2
  },
  colonial: {
    title: 'La Colonia en el Valle',
    desc: 'Con la llegada de los españoles en el siglo XVI, el valle de Supe fue integrado al sistema de encomiendas y haciendas coloniales. La población indígena se redujo drásticamente, pero sus descendientes mantuvieron tradiciones agrícolas y artesanales.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg',
    chapter: 3
  },
  moderno: {
    title: 'Supe Moderno',
    desc: 'A lo largo del siglo XX, Supe se consolidó como distrito agrícola de la Provincia de Barranca, con producción de algodón, espárragos y frutas tropicales. El turismo arqueológico comenzó a florecer tras el redescubrimiento de Caral en los años 90.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg',
    chapter: 4
  },
  hoy: {
    title: 'Supe Hoy',
    desc: 'El Supe actual es un distrito que vive con orgullo su herencia milenaria. Caral recibe miles de visitantes al año y la comunidad trabaja en un modelo de desarrollo sostenible que une patrimonio, agricultura y turismo de naturaleza.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/3/37/Anfiteatro_de_Caral.jpg',
    chapter: 5
  }
};

export const placesData = [
  /* CARAL */
  { name: 'Caral', category: 'caral', desc: 'La ciudad más antigua de América, con más de 5000 años. Sus seis pirámides, plazas circulares y anfiteatro revelan una civilización avanzada mucho antes que cualquier otra en el continente. Patrimonio de la Humanidad UNESCO desde 2009.', img: 'https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg', tags: ['UNESCO', 'Milenario'] },
  { name: 'Chupacigarro', category: 'caral', desc: 'Sitio arqueológico secundario del complejo Caral, ubicado en el mismo valle. Sus estructuras revelan patrones urbanos similares a Caral, evidenciando que el Valle de Supe albergó una red de ciudades interconectadas hace 5000 años.', img: 'https://upload.wikimedia.org/wikipedia/commons/3/3f/Arquitectura_en_Caral.jpg', tags: ['Arqueología', 'Caral'] },
  { name: 'Miraya', category: 'caral', desc: 'Otro de los sitios del complejo Caral, con estructuras piramidales en proceso de investigación. Las excavaciones recientes han revelado cerámicas y objetos rituales que enriquecen la comprensión de la civilización Caral.', img: 'https://upload.wikimedia.org/wikipedia/commons/9/9e/Almacenes_de_Caral.jpg', tags: ['Excavación', 'Caral'] },

  /* MUSEOS */
  { name: 'Centro de Interpretación de Caral', category: 'museo', desc: 'Moderno museo en el sitio arqueológico de Caral que exhibe hallazgos exclusivos: tejidos de algodón, instrumentos musicales de hueso y objetos rituales con más de 5000 años. Imprescindible para comprender la civilización más antigua de América.', img: 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Zampo%C3%B1a_Caral_%283000_a.C%29_valle_de_Supe._Costa_central_del_Per%C3%BA._Museo_de_sitio_Caral.png', tags: ['UNESCO', 'Hallazgos únicos'] },
  { name: 'Casa de la Cultura de Supe', category: 'museo', desc: 'Espacio cultural del distrito que alberga réplicas de artefactos de Caral, fotografías de excavaciones y una sala interactiva sobre la vida cotidiana en el Valle de Supe hace 5000 años. Ideal para familias y grupos escolares.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Alrededores_del_Centro_arqueol%C3%B3gico_Caral.jpg', tags: ['Educativo', 'Réplicas'] },

  /* NATURALEZA */
  { name: 'Valle del Supe', category: 'naturaleza', desc: 'El verde valle regado por el río Supe ofrece paisajes de gran belleza agrícola. Sus campos de algodón nativo, espárragos y frutales contrastan con el desierto costero, creando un ecosistema único de enorme valor biogeográfico.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg', tags: ['Paisaje', 'Agricultura'] },
  { name: 'Río Supe', category: 'naturaleza', desc: 'El río que dio vida a la civilización más antigua de América. Sus aguas recorren el valle entre campos y restos arqueológicos, ofreciendo rutas de ciclismo y caminata con vistas únicas de las pirámides de Caral al fondo.', img: 'https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg', tags: ['Río', 'Ciclismo'] },
  { name: 'Lomas de Supe', category: 'naturaleza', desc: 'Durante los meses de junio a noviembre, las lomas que rodean el valle de Supe se cubren de vegetación gracias a la camanchaca. Este ecosistema único alberga flora endémica y aves silvestres, ideal para el ecoturismo.', img: 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Algod%C3%B3n_amarillo-_caral.jpg', tags: ['Lomas', 'Flora'] },

  /* CULTURA */
  { name: 'Pueblo de Supe', category: 'cultura', desc: 'El distrito de Supe conserva una arquitectura vernacular de gran carácter. Su mercado, su plaza y sus casonas muestran la vida cotidiana de una comunidad orgullosa de su herencia milenaria y agrícola.', img: 'https://upload.wikimedia.org/wikipedia/commons/2/22/Altar_de_fuego_Caral.jpg', tags: ['Cultura', 'Mercado'] }
];

export const galleryImages = [
  'https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/9/9a/Ciudad_Sagrada_de_Caral%2C_ruinas.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/0/0f/Esificio_pir%C3%A1mide_Huanca_-_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/7/75/Caral_Peru.JPG',
  'https://upload.wikimedia.org/wikipedia/commons/3/37/Anfiteatro_de_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/2/22/Altar_de_fuego_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/9/9e/Almacenes_de_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/6/6f/Alrededores_del_Centro_arqueol%C3%B3gico_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/3/3f/Arquitectura_en_Caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/a/ae/Algod%C3%B3n_amarillo-_caral.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg'
];
