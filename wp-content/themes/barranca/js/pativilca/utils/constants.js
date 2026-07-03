export const SELECTORS = {
  header: '#siteHeader', hamburger: '.hamburger', navLinks: '.nav-links',
  navAnchor: '.nav-links a', timelineButton: '.timeline-btn', filterButton: '.filter-btn',
  placesGrid: '#places-grid', galleryStage: '.gallery-stage', mainBoxes: '.mainBoxes'
};

export const DEFAULT_PLACE_IMAGE = 'https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg';

export const historyData = {
  colonial: {
    title: 'Villa Real de Pativilca',
    desc: 'Fundada en el período colonial como villa de paso entre Lima y Trujillo, Pativilca fue siempre un nodo estratégico en el Camino Real costero. Sus tierras fértiles regadas por el río de su mismo nombre atrajeron a colonos españoles, religiosos y comerciantes.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg',
    chapter: 1
  },
  bolivar: {
    title: 'La Carta de Bolívar (1824)',
    desc: 'En enero de 1824, gravemente enfermo, Simón Bolívar se hospedó en Pativilca y desde allí dictó la célebre carta en que ratificó su determinación de liberar América del Sur. La escena del Libertador, interrogado sobre sus planes, responde con una sola palabra: "Triunfar."',
    img: 'https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg',
    chapter: 2
  },
  junin: {
    title: 'Camino a Junín y Ayacucho',
    desc: 'Tras recuperarse en Pativilca, Bolívar organizó la campaña final que culminó con las batallas de Junín y Ayacucho en 1824, sellando la independencia definitiva del Perú. Pativilca quedó inscrita para siempre en la historia de la liberación americana.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/9/93/Batalla_de_Jun%C3%ADn.jpg',
    chapter: 3
  },
  agropecuario: {
    title: 'El Auge Agropecuario',
    desc: 'A lo largo del siglo XX, Pativilca se afirmó como centro agrícola, con cultivos de algodón, maíz, caña y frutas tropicales. Sus haciendas y cooperativas estructuraron la economía local, y la feria agropecuaria anual se convirtió en evento regional de referencia.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png',
    chapter: 4
  },
  hoy: {
    title: 'Pativilca Hoy',
    desc: 'La Pativilca de hoy es una villa agrícola y cultural que recibe visitantes atraídos por la Casa Bolívar, el río y los paisajes de campiña verde. Su cocina tradicional, su gente hospitalaria y sus fiestas religiosas la hacen un destino auténtico de la Provincia de Barranca.',
    img: 'https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg',
    chapter: 5
  }
};

export const placesData = [
  /* MUSEOS */
  { name: 'Casa Bolívar — Museo Bolivariano', category: 'museo', desc: 'Museo instalado en la vivienda donde el Libertador Bolívar se hospedó en 1824. Conserva mobiliario, documentos y objetos de la época. Declarado Patrimonio Cultural del Perú. El sitio más emblemático del turismo pativilquino.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg', tags: ['Historia', 'Patrimonio'] },
  { name: 'Sala Histórica Municipal', category: 'museo', desc: 'Espacio dedicado a la historia pativilquina desde la época colonial hasta el siglo XXI. Fotografías, mapas y documentos originales narran la vida del pueblo que recibió al Libertador y se convirtió en símbolo de la independencia americana.', img: 'https://upload.wikimedia.org/wikipedia/commons/4/41/Museo_Simon_Bolivar_Pativilca.jpg', tags: ['Documentos', 'Fotos históricas'] },

  /* HISTORIA */
  { name: 'Iglesia San Francisco', category: 'historia', desc: 'Templo colonial cuya arquitectura refleja la historia religiosa del pueblo desde el siglo XVII. Alberga imágenes de valor artístico y es el centro espiritual de las procesiones y celebraciones anuales de Pativilca.', img: 'https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg', tags: ['Colonial', 'Arte'] },
  { name: 'Plaza de Armas', category: 'historia', desc: 'Centro cívico del pueblo con su iglesia, palmeras y el monumento al Libertador. Desde aquí se celebran las fiestas patrias, procesiones y ferias que articulan la vida social de Pativilca a lo largo del año.', img: 'https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg', tags: ['Centro', 'Monumento'] },

  /* NATURALEZA */
  { name: 'Río Pativilca', category: 'naturaleza', desc: 'El río que da nombre al distrito recorre el valle entre cerros y campos de cultivo. Sus riberas son propicias para paseos en bote, pesca artesanal y observación de aves costero-ribereñas en un entorno de gran belleza natural.', img: 'https://upload.wikimedia.org/wikipedia/commons/6/65/Barranca_und_Caral_21.jpg', tags: ['Río', 'Pesca'] },
  { name: 'Laguna de Medio Mundo', category: 'naturaleza', desc: 'Humedal costero de importancia para la conservación de aves migratorias. A pocos kilómetros de Pativilca, ofrece experiencias de ecoturismo, birdwatching y contacto con la naturaleza ribereña del litoral norteño de Lima.', img: 'https://upload.wikimedia.org/wikipedia/commons/a/ae/Algod%C3%B3n_amarillo-_caral.jpg', tags: ['Aves', 'Ecoturismo'] },
  { name: 'Campiña de Pativilca', category: 'naturaleza', desc: 'Los campos agrícolas que rodean el pueblo ofrecen un paisaje de campiña verde en contraste con el desierto costero. Frutas, maíz y algodón crecen en un valle fértil ideal para caminatas y turismo rural.', img: 'https://upload.wikimedia.org/wikipedia/commons/1/1e/%28CCC_No._8._1925%29_-_Camion_Cargando_Algod%C3%B3n_Peruano_Para_Llevarlo_a_una_F%C3%A1brica_de_Tejidos_en_Lancashire.png', tags: ['Rural', 'Caminata'] },

  /* CULTURA */
  { name: 'Miradores del Valle', category: 'cultura', desc: 'Desde las colinas que enmarcan el valle de Pativilca se obtienen vistas panorámicas de los campos, el río y el pueblo. Puntos ideales para la fotografía al amanecer o al atardecer, cuando la luz baña los cañaverales.', img: 'https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg', tags: ['Vista', 'Fotografía'] }
];

export const galleryImages = [
  'https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/4/41/Museo_Simon_Bolivar_Pativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/9/93/Batalla_de_Jun%C3%ADn.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/d/df/Batalla_de_Ayacucho_by_Mart%C3%ADn_Tovar_y_Tovar_%281827_-_1902%29.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/4/41/Museo_Simon_Bolivar_Pativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/9/93/Batalla_de_Jun%C3%ADn.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/d/df/Batalla_de_Ayacucho_by_Mart%C3%ADn_Tovar_y_Tovar_%281827_-_1902%29.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg',
  'https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg'
];
