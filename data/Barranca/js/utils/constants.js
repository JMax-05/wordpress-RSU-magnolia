export const SELECTORS = {
  header: '#siteHeader', hamburger: '.hamburger', navLinks: '.nav-links',
  navAnchor: '.nav-links a', timelineButton: '.timeline-btn', filterButton: '.filter-btn',
  placesGrid: '#places-grid', galleryStage: '.gallery-stage', mainBoxes: '.mainBoxes'
};

export const DEFAULT_PLACE_IMAGE = 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg';

export const historyData = {
  colonial: {
    title: 'Los Orígenes Coloniales',
    desc: 'Barranca fue fundada en el siglo XVI como enclave colonial en la costa norte de Lima. Su ubicación estratégica en la desembocadura del río Pativilca la convirtió en punto de paso obligado entre Lima y el norte del Perú, favoreciendo el comercio y la ocupación de sus fértiles tierras.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/8/8b/Cathedral_of_Lima_-_Peru.JPG',
    chapter: 1
  },
  algodon: {
    title: 'El Algodón y la Hacienda',
    desc: 'A lo largo del siglo XIX, los valles de Barranca se convirtieron en importantes productores de algodón y caña de azúcar. Las grandes haciendas organizaron la economía local, atrayendo trabajadores migrantes que enriquecieron la cultura del lugar con nuevas tradiciones y sabores.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png',
    chapter: 2
  },
  industria: {
    title: 'Puerto y Pesca',
    desc: 'Con el crecimiento pesquero del siglo XX, Barranca consolidó su identidad costera. Los mercados de pescado fresco, las caletas y el trabajo de los pescadores artesanales dieron forma a una economía popular que aún late en sus muelles y mercados.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg',
    chapter: 3
  },
  crecimiento: {
    title: 'Crecimiento Urbano',
    desc: 'Entre 1960 y 1990, Barranca experimentó un fuerte crecimiento demográfico y urbano. La construcción del malecón, nuevos barrios residenciales y la mejora de infraestructura vial la posicionaron como el centro comercial y administrativo más importante de la provincia.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg',
    chapter: 4
  },
  hoy: {
    title: 'Barranca Hoy',
    desc: 'La Barranca actual es una ciudad costera vibrante que combina comercio, gastronomía y turismo. Sus playas, su malecón y la célebre cachanga barranquina atraen visitantes de toda la región. La ciudad es también puerta de acceso a la Fortaleza de Paramonga y al sitio arqueológico de Caral.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/9/96/Miraflores_Costa_Verde_Skyline_%28Lima%2C_Peru%29.jpg',
    chapter: 5
  }
};

export const placesData = [
  /* PLAYAS */
  { name: 'Playa Chorrillos', category: 'playas', desc: 'La playa más concurrida de Barranca. Arena dorada, olas moderadas y servicios turísticos completos. Ideal para familias, surf y deportes acuáticos en temporada de verano.', img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg', tags: ['Verano', 'Familias'] },
  { name: 'Playa Las Totoritas', category: 'playas', desc: 'Playa tranquila y poco transitada, ideal para quienes buscan descanso. Sus aguas calmas y su entorno natural la hacen perfecta para observación de aves costeras y caminatas al atardecer.', img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg', tags: ['Tranquila', 'Naturaleza'] },

  /* MUSEOS */
  { name: 'Museo Municipal de Barranca', category: 'museo', desc: 'Museo local que alberga colecciones arqueológicas, documentos históricos y fotografías de la Provincia de Barranca desde la época preinca hasta el siglo XX. Entrada libre los domingos.', img: 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Zampo%C3%B1a_Caral_%283000_a.C%29_valle_de_Supe._Costa_central_del_Per%C3%BA._Museo_de_sitio_Caral.png', tags: ['Arqueología', 'Historia local'] },
  { name: 'Biblioteca Municipal — Sala Histórica', category: 'museo', desc: 'Espacio de memoria y cultura que conserva hemerotecas, mapas coloniales y el archivo fotográfico más completo de la provincia. Organiza exposiciones itinerantes sobre patrimonio barranquino.', img: 'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg', tags: ['Cultura', 'Educación'] },

  /* CULTURA */
  { name: 'Malecón F. Bolognesi', category: 'cultura', desc: 'El corazón del turismo barranquino. Paseo marítimo con vista panorámica al Pacífico, bancas, iluminación nocturna y puestos de la famosa cachanga. El punto de encuentro de locales y visitantes.', img: 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg', tags: ['Atardecer', 'Gastronomía'] },
  { name: 'Plaza de Armas', category: 'cultura', desc: 'Centro histórico y cívico de la ciudad. La iglesia, el municipio y el parque central configuran el corazón de Barranca, donde se celebran las principales festividades y mercados locales.', img: 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg', tags: ['Historia', 'Fotos'] },
  { name: 'Caleta de Pescadores', category: 'cultura', desc: 'El alma portuaria de Barranca. Cada mañana, los botes regresan cargados de pesca fresca que se comercializa directamente en el muelle. Experiencia auténtica de la vida costera.', img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg', tags: ['Pesca', 'Mañana'] },

  /* NATURALEZA */
  { name: 'Cerro Colorado', category: 'naturaleza', desc: 'Elevación natural al norte de la ciudad con senderos de trekking y vistas panorámicas del valle. Ideal para excursionistas y fotógrafos en busca de amanecer o atardecer sobre el Pacífico.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg', tags: ['Trekking', 'Vistas'] },
  { name: 'Laguna de Ocucho', category: 'naturaleza', desc: 'Pequeño humedal costero cercano a la ciudad donde habitan diversas aves migratorias. Un refugio de biodiversidad en el litoral barranquino, ideal para ecoturismo y avistamiento de aves.', img: 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Algod%C3%B3n_amarillo-_caral.jpg', tags: ['Aves', 'Ecoturismo'] }
];

export const galleryImages = [
  'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png',
  'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg'
];
