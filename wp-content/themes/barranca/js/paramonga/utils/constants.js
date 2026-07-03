export const SELECTORS = {
  header: '#siteHeader', hamburger: '.hamburger', navLinks: '.nav-links',
  navAnchor: '.nav-links a', timelineButton: '.timeline-btn', filterButton: '.filter-btn',
  placesGrid: '#places-grid', galleryStage: '.gallery-stage', mainBoxes: '.mainBoxes'
};

export const DEFAULT_PLACE_IMAGE = 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg';

export const historyData = {
  chimu: {
    title: 'La Fortaleza Chimú',
    desc: 'Entre los siglos XIII y XV, el pueblo Chimú construyó sobre una colina costera la imponente fortaleza que hoy lleva el nombre de Paramonga. Sus muros de adobe escalonados, dispuestos en terrazas, dominan el horizonte del valle. Fue usada como centro administrativo, ceremonial y militar del Imperio Chimú antes de la expansión Inca.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg',
    chapter: 1
  },
  conquista: {
    title: 'La Conquista y el Camino Real',
    desc: 'Tras la conquista inca de la costa norte, Paramonga se integró al Tahuantinsuyo como punto de control del Camino Real costero. Durante la Conquista española, la fortaleza sirvió de hito geográfico y fue objeto de asombro para los cronistas de la época.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/e/eb/Machu_Picchu%2C_Peru.jpg',
    chapter: 2
  },
  hacienda: {
    title: 'La Hacienda Azucarera',
    desc: 'En el siglo XIX, los valles fértiles de Paramonga se convirtieron en grandes productores de caña de azúcar. La Hacienda Paramonga, con su ingenio y su comunidad de trabajadores, moldeó la identidad cultural del distrito.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png',
    chapter: 3
  },
  industria: {
    title: 'La Industria y el Pueblo',
    desc: 'Con la instalación de la fábrica azucarera Paramonga S.A. a inicios del siglo XX, el distrito experimentó un salto económico y demográfico. Barrios obreros, club social, escuelas y comercio configuraron un pueblo industrial.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/e/e8/Ingenio_Azucarero_San_Javier.jpg',
    chapter: 4
  },
  hoy: {
    title: 'Paramonga Hoy',
    desc: 'El Paramonga de hoy es un distrito que honra su pasado. La Fortaleza recibe miles de visitantes al año y ha sido declarada Patrimonio Cultural de la Nación. Sus fiestas religiosas, su gastronomía local y la calidez de su gente hacen de Paramonga un destino auténtico e irrepetible.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg',
    chapter: 5
  }
};

export const placesData = [
  /* FORTALEZA */
  { name: 'Fortaleza de Paramonga', category: 'fortaleza', desc: 'Ciudadela de adobe de la cultura Chimú, datada entre los siglos XIII y XV. Sus terrazas escalonadas sobre una colina ofrecen vistas del mar y el valle. Patrimonio Cultural de la Nación y principal atractivo de la región.', img: 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg', tags: ['Patrimonio', 'Historia'] },
  { name: 'Terraplenes de la Fortaleza', category: 'fortaleza', desc: 'Los murales de adobe y las rampas de acceso escalonadas de la fortaleza muestran la maestría constructiva Chimú. Recorridos guiados disponibles para conocer la historia de cada nivel de la ciudadela.', img: 'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg', tags: ['Arqueología', 'Guía'] },

  /* MUSEOS */
  { name: 'Museo de Sitio Paramonga', category: 'museo', desc: 'Museo que exhibe cerámicas, herramientas y objetos recuperados de las excavaciones en la Fortaleza. Cuenta la historia de la cultura Chimú y de las sucesivas ocupaciones del sitio hasta la época colonial.', img: 'https://upload.wikimedia.org/wikipedia/commons/d/dd/Zampo%C3%B1a_Caral_%283000_a.C%29_valle_de_Supe._Costa_central_del_Per%C3%BA._Museo_de_sitio_Caral.png', tags: ['Cerámica', 'Historia'] },
  { name: 'Centro Cultural Paramonga', category: 'museo', desc: 'Espacio cultural municipal que alberga exposiciones temporales sobre arte local, fotografía histórica del distrito y el legado de la industria azucarera. Entrada libre, funciona todo el año.', img: 'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg', tags: ['Arte', 'Exposiciones'] },

  /* PLAYAS */
  { name: 'Playa Paramonga', category: 'playas', desc: 'Playa de aguas tranquilas al pie de los acantilados, con arenas oscuras típicas del litoral norte de Lima. Refugio de pescadores artesanales y visitantes que buscan un entorno natural auténtico.', img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg', tags: ['Tranquila', 'Pesca'] },
  { name: 'Playa El Paraíso', category: 'playas', desc: 'Playa de acantilado con acceso por sendero, famosa por sus aguas limpias y el espectáculo visual de los peñascos rocosos. Ideal para fotografía y pesca artesanal desde las rocas.', img: 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg', tags: ['Fotografía', 'Pesca'] },

  /* NATURALEZA */
  { name: 'Campos de Caña', category: 'naturaleza', desc: 'Los extensos cañaverales que rodean Paramonga son parte del paisaje cultural del valle. Al atardecer, la luz dorada sobre la caña en flor crea un espectáculo visual único, imperdible para los fotógrafos.', img: 'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png', tags: ['Paisaje', 'Fotografía'] },
  { name: 'Río Fortaleza', category: 'naturaleza', desc: 'El río que da vida al valle de Paramonga. Sus riberas albergan fauna costera, áreas de picnic y rutas de ciclismo. En temporada de lluvias su caudal crea un espectáculo natural único.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg', tags: ['Río', 'Ciclismo'] }
];

export const galleryImages = [
  'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png',
  'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg'
];
