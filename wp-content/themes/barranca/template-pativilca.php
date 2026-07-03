<?php
/**
 * Template Name: Distrito - Pativilca
 */
get_header();
$base_img = get_template_directory_uri() . '/assets/pativilca/images';
?>

<main>

<!-- ═══════════════════════════════════════ INICIO ═══ -->
<section class="hero" id="inicio" aria-label="Presentacion de Pativilca">
  <div class="swiper heroSwiper" aria-hidden="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide slide1 hero-slide--1" role="img" aria-label="Casa Bolivar en Pativilca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg" alt="" decoding="async" fetchpriority="high">
      </div>
      <div class="swiper-slide hero-slide slide2 hero-slide--2" role="img" aria-label="Plaza de Armas de Pativilca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/2/26/Plaza_de_armas_of_Pativilca.jpg" alt="" decoding="async">
      </div>
      <div class="swiper-slide hero-slide slide3 hero-slide--3" role="img" aria-label="Iglesia de Pativilca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg" alt="" decoding="async">
      </div>
    </div>
  </div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content container">
    <h1>Pativilca</h1>
    <p>Donde el Libertador dijo: Triunfar. Historia bolivariana, campiña verde y la hospitalidad de un pueblo que abraza su leyenda.</p>
    <a href="#historia" class="btn-primary">Explorar destino</a>
  </div>
</section>

<!-- ═══════════════════════════════════════ HISTORIA ═══ -->
<section class="history section" id="historia" aria-labelledby="historyTitleSection">
  <div class="container">
    <header class="history-header">
      <span class="section-tag">Nuestra historia</span>
      <h2 id="historyTitleSection">Un viaje a traves del tiempo</h2>
      <p class="history-subtext">Desde los origenes hasta el presente. Cinco capitulos que narran la identidad de Pativilca.</p>
    </header>
    <div class="timeline-buttons" role="group" aria-label="Capitulos historicos">
      <button class="timeline-btn active" type="button" data-period="colonial" aria-pressed="true">Origen</button>
      <button class="timeline-btn" type="button" data-period="bolivar" aria-pressed="false">S. XVIII-XIX</button>
      <button class="timeline-btn" type="button" data-period="junin" aria-pressed="false">S. XIX-XX</button>
      <button class="timeline-btn" type="button" data-period="agropecuario" aria-pressed="false">S. XX</button>
      <button class="timeline-btn" type="button" data-period="hoy" aria-pressed="false">Hoy</button>
    </div>
    <div class="history-grid" id="historyDynamic" aria-live="polite">
      <figure class="history-image">
        <img id="historyImg" src="https://upload.wikimedia.org/wikipedia/commons/3/37/Church_in_Pativilca.jpg" alt="Villa Real de Pativilca" loading="lazy">
      </figure>
      <article class="history-content">
        <span class="section-tag">Capitulo historico</span>
        <h2 id="historyTitle">Villa Real de Pativilca</h2>
        <div class="line" aria-hidden="true"></div>
        <p id="historyDesc">Fundada en el periodo colonial como villa de paso entre Lima y Trujillo.</p>
        <p class="history-chapter"><span id="chapterCounter">1</span> de 5 capitulos historicos</p>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════ TURISMO ═══ -->
<section class="tourism section" id="turismo" aria-labelledby="tourismTitle">
  <div class="container">
    <header class="tourism-header">
      <span class="section-tag">Descubre el destino</span>
      <h2 id="tourismTitle">Lugares Turísticos</h2>
      <p class="tourism-subtitle">Historia bolivariana, río, campiña verde y ecoturismo. Pativilca es el destino donde la historia y la naturaleza se abrazan.</p>
    </header>
    <div class="filter-buttons" role="group" aria-label="Filtrar lugares turísticos">
      <button class="filter-btn active" type="button" data-filter="todos" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-filter="museo" aria-pressed="false">Museos</button>
      <button class="filter-btn" type="button" data-filter="historia" aria-pressed="false">Historia</button>
      <button class="filter-btn" type="button" data-filter="naturaleza" aria-pressed="false">Naturaleza</button>
      <button class="filter-btn" type="button" data-filter="cultura" aria-pressed="false">Cultura</button>
    </div>
    <div id="places-grid" class="places-grid" aria-live="polite"></div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GASTRONOMIA ═══ -->
<section class="gastronomy section-dark" id="gastronomia" aria-labelledby="gastronomyTitle">
  <div class="container">
    <header class="gastronomy-header">
      <span class="section-tag">Sabores de Pativilca</span>
      <h2 id="gastronomyTitle">Gastronomia Pativilquina</h2>
      <p class="gastronomy-subtitle">Cocina de valle y campiña. Las humitas, el cuy y la chicha de jora narran la identidad profundamente agricola de Pativilca.</p>
    </header>
    <div class="dish-grid-4x4">
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/arroz.jpg" alt="Humitas" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Emblema del Valle</span>
            <h3>Humitas</h3>
            <p>Masa de choclo fresco con queso y aji amarillo, envuelta en chalas y cocida al vapor. El sabor mas autentico de la campiña de Pativilca, preparado con maiz del propio valle.</p>
            <div class="dish-meta-grid"><span>⏱️ 40 min</span><span>🌽 Del campo al vapor</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/sudado.jpg" alt="Tamales Negros" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Tradicion</span>
            <h3>Tamales Negros</h3>
            <p>Tamales elaborados con masa de maiz negro o morado, rellenos de cerdo y aceitunas. Plato tipico de los sabados de mercado en Pativilca, con sabor profundo y color oscuro caracteristico.</p>
            <div class="dish-meta-grid"><span>⏱️ 60 min</span><span>🫙 Negro y sabroso</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chicharron.jpg" alt="Cuy al horno" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Andino Costero</span>
            <h3>Cuy al Horno</h3>
            <p>Cuy marinado en aji panca, comino y ajos, horneado hasta quedar dorado y crocante. Servido con papa sancochada y sarza criolla. Plato de festividad en Pativilca.</p>
            <div class="dish-meta-grid"><span>⏱️ 90 min</span><span>🦔 Manjar andino</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chilcano.jpg" alt="Chicha de jora" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Bebida Ancestral</span>
            <h3>Chicha de Jora</h3>
            <p>Bebida fermentada de maiz jora con tradicion prehispanica. La mas apreciada en los trabajos de campo y las celebraciones religiosas de Pativilca y sus alrededores.</p>
            <div class="dish-meta-grid"><span>⏱️ Fermentacion 3 dias</span><span>🌽 Bebida de siembra</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/picante.jpg" alt="Picante de cuy" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Picante</span>
            <h3>Picante de Cuy</h3>
            <p>Guiso intenso de cuy con aji amarillo, papa y maiz, de sabor profundo y picante moderado. Tipico de las fiestas religiosas y los domingos de campiña en el valle de Pativilca.</p>
            <div class="dish-meta-grid"><span>⏱️ 60 min</span><span>🌶️ Fuego del valle</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/reventado.jpg" alt="Mazamorra Colorada" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre</span>
            <h3>Mazamorra Colorada</h3>
            <p>Dulce espeso de maiz amarillo con chancaca y canela, de color dorado rojizo. Postre de temporada en Pativilca, especialmente en las fiestas de agosto y diciembre.</p>
            <div class="dish-meta-grid"><span>⏱️ 35 min</span><span>🌾 Oro del maiz</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/parihuela.jpg" alt="Arroz con leche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre Criollo</span>
            <h3>Arroz con Leche</h3>
            <p>Clasico postre criollo preparado con leche fresca de las haciendas del valle. Servido con canela molida y acompanado de mazamorra morada en el celebre combinado criollo.</p>
            <div class="dish-meta-grid"><span>⏱️ 30 min</span><span>🍚 Clasico de domingo</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/jalea.jpg" alt="Aguardiente de cana" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Artesanal</span>
            <h3>Aguardiente de Cana</h3>
            <p>Destilado artesanal de cana elaborado en los alambiques del valle. Bebida de honor en las cosechas y vendimias, brindado entre agricultores como sello de amistad y trabajo.</p>
            <div class="dish-meta-grid"><span>⏱️ Artesanal</span><span>🥃 Brindis del campo</span></div>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════ TRADICIONES ═══ -->
<section class="traditions section" id="tradiciones" aria-labelledby="traditionsTitle">
  <div class="container">
    <header class="traditions-header">
      <span class="section-tag">Costumbres y festividades</span>
      <h2 id="traditionsTitle">Festividades</h2>
      <p class="traditions-subtitle">El calendario de Pativilca, marcado por la fe, la siembra y el recuerdo de Bolivar.</p>
    </header>
    <div class="festivities-timeline">
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Febrero</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/pesca.jpg" alt="Carnaval" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Carnaval del Valle</h3>
            <div class="line"></div>
            <p>El carnaval de Pativilca recorre los campos y el centro del pueblo con comparsas de agricultores disfrazados, agua de olor y humitas recien hechas. Tradicion que une campo y ciudad en tres dias de alegria popular.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Enero</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/aniversario.jpg" alt="Conmemoracion Bolivar" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Conmemoracion de Bolivar</h3>
            <div class="line"></div>
            <p>El 1 de enero se conmemora la llegada de Simon Bolivar a Pativilca en 1824. Acto civico en la Casa Bolivar, discursos, representaciones teatrales y el tradicional almuerzo comunitario con humitas y cuy al horno.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Mayo</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/artesania.jpg" alt="Festival del Agricultor" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Festival del Agricultor</h3>
            <div class="line"></div>
            <p>Celebracion en honor a los trabajadores del campo. Feria de productos agricolas, concurso de humitas, demostracion de tecnicas ancestrales de siembra y la eleccion de la Reina de la Campiña de Pativilca.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Marzo</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/bendicion.jpg" alt="Fiesta de la Vendimia" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Fiesta de la Vendimia</h3>
            <div class="line"></div>
            <p>En los meses de cosecha, las familias viticultoras de los alrededores celebran la vendimia con bailes, concurso de pisado de uva y degustacion de vinos y aguardiente artesanal. La alegria del campo que se comparte.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Octubre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/semana_santa.jpg" alt="San Francisco" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Fiestas de San Francisco</h3>
            <div class="line"></div>
            <p>El patron franciscano es celebrado con misa solemne en la iglesia colonial, procesion nocturna y feria de artesanias locales. La festividad une a la comunidad en torno a la fe y la identidad historica de Pativilca.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Septiembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/san_pedro.jpg" alt="Aniversario Pativilca" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Aniversario de Pativilca</h3>
            <div class="line"></div>
            <p>Desfile civico escolar, presentacion de danzas costenas y un gran almuerzo comunitario en la Plaza de Armas. El pueblo entero celebra su identidad con bandas de musica y la eleccion de la Srta. Pativilca.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/cruz_motupe.jpg" alt="Cosecha de frutas" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Cosecha de Frutas</h3>
            <div class="line"></div>
            <p>El valle de Pativilca es frutero por excelencia: mango, palta, limon y maracuya se cosechan en diferentes epocas del año. Las familias agricultoras venden directamente en la carretera, convirtiendo la cosecha en fiesta familiar y economica.</p>
          </div>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════ MITOS ═══ -->
<section class="myths section-dark" id="mitos" aria-labelledby="mythsTitle">
  <div class="container">
    <header class="section-header">
      <span class="section-tag">Misterio</span>
      <h2 id="mythsTitle">Mitos y Leyendas</h2>
      <p class="myths-subtitle">El rio, los canaverales y la sombra de Bolivar llenan de misterio las noches de Pativilca.</p>
    </header>
  </div>
  <div class="myths-accordion-wrap">
    <ul class="myths-accordion" aria-label="Mitos y leyendas de Pativilca">
      <li class="myth-card is-active">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/caballero.jpg" alt="El Espiritu de Bolivar" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="true" aria-controls="myth-1-content">
          <span class="myth-card__eyebrow">El Libertador</span>
          <span class="myth-card__title">El Espiritu de Bolivar</span>
        </button>
        <div class="myth-card__content" id="myth-1-content" aria-hidden="false">
          <p>Los vecinos de la Casa Bolivar aseguran que en las madrugadas del 1 de enero se escucha el sonido de papeles y plumas escribiendo en la habitacion donde Bolivar estuvo enfermo. Dicen que el Libertador vuelve cada año a releer su carta, como si quisiera recordar el momento en que decidio no rendirse.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llorona.jpg" alt="La Llorona del Rio" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-2-content">
          <span class="myth-card__eyebrow">Rio Pativilca</span>
          <span class="myth-card__title">La Llorona del Rio</span>
        </button>
        <div class="myth-card__content" id="myth-2-content" aria-hidden="true">
          <p>En las noches de crecida del rio Pativilca, los agricultores escuchan el llanto de una mujer entre las totoras de la orilla. Dicen que es el alma de una madre que perdio a sus hijos en una inundacion colonial. Para apaciguarla, las familias lanzan ramos de flores al rio en la noche de San Juan.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llama.jpg" alt="El Duende del Canaveralp" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-3-content">
          <span class="myth-card__eyebrow">Madrugada agricola</span>
          <span class="myth-card__title">El Duende del Cañaveral</span>
        </button>
        <div class="myth-card__content" id="myth-3-content" aria-hidden="true">
          <p>Los trabajadores que entran de madrugada a los canaverales de Pativilca a veces escuchan risas y silbidos entre las canas. El duende, segun los mayores, es un ser pequeño con sombrero de paja que desorienta a los intrusos y los hace caminar en circulos hasta el amanecer. Solo se escapa mirando al sur.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/ahogado.jpg" alt="El Tesoro de la Hacienda" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-4-content">
          <span class="myth-card__eyebrow">Herencia oculta</span>
          <span class="myth-card__title">El Tesoro de la Hacienda</span>
        </button>
        <div class="myth-card__content" id="myth-4-content" aria-hidden="true">
          <p>Se cuenta que el hacendado colonial de Pativilca entierro toda su fortuna en oro y plata antes de que llegaran los ejercitos libertadores. Un mapa con la ubicacion habria sido dividido en tres partes y repartido entre sus hijos. Hasta hoy, los descendientes de esas familias guardan en secreto lo que saben.</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<!-- ═══════════════════════════════════════ SERVICIOS ═══ -->
<section class="services section-dark" id="servicios" aria-labelledby="servicesTitle">
  <div class="container">
    <header class="services-header">
      <span class="section-tag">Directorio local</span>
      <h2 id="servicesTitle">Servicios</h2>
      <p class="services-subtitle">Hospedajes, restaurantes y negocios locales para conocer Pativilca con comodidad.</p>
    </header>
    <div class="services-tabs" role="tablist">
      <button class="service-tab" role="tab" data-tab="hoteles" aria-selected="false">Hoteles</button>
      <button class="service-tab" role="tab" data-tab="restaurantes" aria-selected="false">Restaurantes</button>
      <button class="service-tab" role="tab" data-tab="bar" aria-selected="false">Bar</button>
      <button class="service-tab" role="tab" data-tab="negocios" aria-selected="false">Negocios</button>
    </div>
    <div class="service-panel" data-panel="hoteles" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hostal Casa Bolivar</h3><span class="service-card__tag">Historico</span><p>Hostal ubicado en el centro historico a pasos de la Casa Bolivar. Habitaciones coloniales con mobiliario de epoca restaurado. El hospedaje mas singular de Pativilca.</p><div class="service-card__meta"><span>📍 Centro Historico</span><span>💰 Desde S/50 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hostal El Rio</h3><span class="service-card__tag">Naturaleza</span><p>Hostal con terraza y vistas al Rio Pativilca. Habitaciones frescas y limpias con agua caliente. El mejor lugar para escuchar el rio al despertar en el corazon del valle.</p><div class="service-card__meta"><span>📍 Ribera del rio</span><span>💰 Desde S/45 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏕️</span><h3>Camping Campiña Verde</h3><span class="service-card__tag">Rural</span><p>Camping en una chacra familiar del valle. Fogones, tiendas de campaña disponibles y desayuno con productos del huerto. Experiencia de turismo rural unica en Pativilca.</p><div class="service-card__meta"><span>📍 Sector Campiña</span><span>💰 Desde S/25/persona</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Residencial San Francisco</h3><span class="service-card__tag">Economico</span><p>Alojamiento sencillo y accesible en el centro de Pativilca. Cerca de la iglesia de San Francisco y el mercado. Ideal para estancias cortas de paso entre Lima y el norte.</p><div class="service-card__meta"><span>📍 Jr. Bolivar</span><span>💰 Desde S/35 la noche</span></div></article>
    </div>
    <div class="service-panel" data-panel="restaurantes" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Restaurant La Hacienda</h3><span class="service-card__tag">Criolla</span><p>Cocina de hacienda con humitas, cuy al horno y patachi. Platos del valle pativilquino en ambiente rustico con musica de banda los domingos por la tarde.</p><div class="service-card__meta"><span>📍 Jr. Bolivar</span><span>🕐 10am - 7pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Humatera El Campo</h3><span class="service-card__tag">Tradicional</span><p>Especialidad en humitas y tamales recien hechos. La masa se prepara cada mañana con choclo fresco del propio campo. Cola asegurada los domingos desde las 8am.</p><div class="service-card__meta"><span>📍 Mercado de Pativilca</span><span>🕐 7am - 2pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Cuyeria Don Augusto</h3><span class="service-card__tag">Andino</span><p>El mejor cuy al horno de Pativilca. Marinado en aji panca y comino, horneado lento durante dos horas. Servido con papa sancochada y zarza criolla de la propia huerta.</p><div class="service-card__meta"><span>📍 Jr. Lima</span><span>🕐 11am - 6pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>El Rincon del Valle</h3><span class="service-card__tag">Popular</span><p>Menus del dia con sopa, segundo y refresco desde S/10. Ambiente popular y porciones abundantes. El almuerzo del trabajador pativilquino de toda la vida.</p><div class="service-card__meta"><span>📍 Centro</span><span>🕐 12pm - 4pm</span></div></article>
    </div>
    <div class="service-panel" data-panel="bar" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🥃</span><h3>Bar El Libertador</h3><span class="service-card__tag">Historico</span><p>Bar tematico sobre la historia bolivariana de Pativilca. Aguardiente de cana local, pisco sour y cocteleria criolla. Las paredes estan cubiertas de mapas y retratos de la Independencia.</p><div class="service-card__meta"><span>📍 Frente a Casa Bolivar</span><span>🕐 5pm - 12am</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌿</span><h3>Chicha Bar La Jora</h3><span class="service-card__tag">Artesanal</span><p>Bar especializado en chicha de jora artesanal y masato. Bebidas fermentadas con recetas ancestrales del valle. El espacio perfecto para entender la bebida sagrada de Caral.</p><div class="service-card__meta"><span>📍 Jr. San Francisco</span><span>🕐 4pm - 11pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🎸</span><h3>La Taberna del Rio</h3><span class="service-card__tag">Cultural</span><p>Bar con musica en vivo los fines de semana: cumbia de la costa, musica criolla y huayno festivo. Tragos locales y piqueos de la campiña en un ambiente de reunion comunal.</p><div class="service-card__meta"><span>📍 Ribera del Rio</span><span>🕐 6pm - 1am</span></div></article>
    </div>
    <div class="service-panel" data-panel="negocios" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏪</span><h3>Mercado Pativilca</h3><span class="service-card__tag">Mercado</span><p>El mercado del pueblo con los productos mas frescos del valle: frutas tropicales, humitas caseras, cuy vivo y artesanias locales. Abre todos los dias, mas concurrido los sabados.</p><div class="service-card__meta"><span>📍 Centro</span><span>🕐 5am - 2pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🚌</span><h3>Tours Ruta Bolivar</h3><span class="service-card__tag">Turismo</span><p>Tours tematicos siguiendo los pasos de Bolivar por la Provincia de Barranca. Incluye visita a la Casa Bolivar, el valle y conexion con Caral y la Fortaleza de Paramonga.</p><div class="service-card__meta"><span>📍 Plaza de Armas</span><span>🕐 7am - 5pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌺</span><h3>Artesanias del Campo</h3><span class="service-card__tag">Artesanal</span><p>Taller y tienda de artesanias rurales elaboradas con cana, totora y algodon del valle. Cestos, sombreros y figuras decorativas hechas a mano por artesanos locales.</p><div class="service-card__meta"><span>📍 Sector Artesanal</span><span>🕐 9am - 6pm</span></div></article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GALERIA ═══ -->
<section class="gallery section" id="galeria" aria-labelledby="galleryTitle">
  <div class="container">
    <header class="section-header">
      <span class="section-tag">Visual</span>
      <h2 id="galleryTitle">Galería</h2>
    </header>
  </div>
  <div class="gallery-stage" aria-label="Galería 3D interactiva">
    <div class="mainBoxes"></div>
  </div>
</section>

<!-- ═══════════════════════════════════════ CONTACTO ═══ -->
<section class="contact section" id="contacto" aria-labelledby="contactTitle">
  <div class="container">
    <header class="contact-header">
      <span class="section-tag">Visitanos</span>
      <h2 id="contactTitle">Contacto</h2>
    </header>
    <div class="contact-grid">
      <div class="contact-info">
        <h3>Como llegar?</h3>
        <div class="contact-info-item"><div class="contact-info-item__icon">📍</div><div class="contact-info-item__text"><strong>Ubicacion</strong><span>Pativilca, Barranca, Lima – Perú</span></div></div>
        <div class="contact-info-item"><div class="contact-info-item__icon">🚗</div><div class="contact-info-item__text"><strong>Desde Lima</strong><span>202 km por la Panamericana Norte. Aprox. 3h en auto.</span></div></div>
        <div class="contact-info-item"><div class="contact-info-item__icon">🚌</div><div class="contact-info-item__text"><strong>En bus</strong><span>Buses interprovinciales desde el Terminal Norte de Lima hacia Barranca, luego colectivo o combi hasta Pativilca.</span></div></div>
        <div class="contact-info-item"><div class="contact-info-item__icon">☀️</div><div class="contact-info-item__text"><strong>Mejor epoca</strong><span>Mayo–octubre para la campiña. Enero para la Conmemoración Bolivariana.</span></div></div>
      </div>
      <div id="map" role="application" aria-label="Mapa de Pativilca, Peru"></div>
    </div>
    <div class="contact-form-wrap">
      <h3>Escribenos</h3>
      <form class="contact-form" aria-label="Formulario de contacto" novalidate>
        <div class="form-field"><label for="contact-name">Nombre</label><input type="text" id="contact-name" name="name" placeholder="Tu nombre" autocomplete="name"></div>
        <div class="form-field"><label for="contact-email">Correo electronico</label><input type="email" id="contact-email" name="email" placeholder="tu@correo.com" autocomplete="email"></div>
        <div class="form-field"><label for="contact-topic">Tema</label><select id="contact-topic" name="topic"><option value="">Selecciona un tema</option><option value="turismo">Turismo</option><option value="gastronomia">Gastronomia</option><option value="servicios">Servicios</option><option value="otro">Otro</option></select></div>
        <div class="form-field"><label for="contact-phone">Telefono (opcional)</label><input type="tel" id="contact-phone" name="phone" placeholder="+51 999 999 999" autocomplete="tel"></div>
        <div class="form-field full"><label for="contact-message">Mensaje</label><textarea id="contact-message" name="message" placeholder="En que podemos ayudarte?"></textarea></div>
        <button type="submit" class="btn-primary">Enviar mensaje</button>
      </form>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
