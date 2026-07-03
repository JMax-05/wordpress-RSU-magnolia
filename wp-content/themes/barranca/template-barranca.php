<?php
/**
 * Template Name: Distrito - Barranca
 */
get_header();
$base_img = get_template_directory_uri() . '/assets/barranca/images';
?>

<main>

<!-- ═══════════════════════════════════════ INICIO ═══ -->
<section class="hero" id="inicio" aria-label="Presentacion de Barranca">
  <div class="swiper heroSwiper" aria-hidden="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide slide1 hero-slide--1" role="img" aria-label="Vista de Barranca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg" alt="" decoding="async" fetchpriority="high">
      </div>
      <div class="swiper-slide hero-slide slide2 hero-slide--2" role="img" aria-label="Pescadores en Barranca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg" alt="" decoding="async">
      </div>
      <div class="swiper-slide hero-slide slide3 hero-slide--3" role="img" aria-label="Historia colonial de Barranca" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/7/76/Casa_hacienda_Punchauca-Lima-Per%C3%BA_2.jpg" alt="" decoding="async">
      </div>
    </div>
  </div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content container">
    <h1>Barranca</h1>
    <p>Ciudad costera, capital de provincia. Playas, malecon, gastronomia y tradicion en el corazon del litoral norteño de Lima.</p>
    <a href="#historia" class="btn-primary">Explorar destino</a>
  </div>
</section>

<!-- ═══════════════════════════════════════ HISTORIA ═══ -->
<section class="history section" id="historia" aria-labelledby="historyTitleSection">
  <div class="container">
    <header class="history-header">
      <span class="section-tag">Nuestra historia</span>
      <h2 id="historyTitleSection">Un viaje a traves del tiempo</h2>
      <p class="history-subtext">Desde los origenes hasta el presente. Cinco capitulos que narran la identidad de Barranca.</p>
    </header>
    <div class="timeline-buttons" role="group" aria-label="Capitulos historicos">
      <button class="timeline-btn active" type="button" data-period="colonial" aria-pressed="true">Origen</button>
      <button class="timeline-btn" type="button" data-period="algodon" aria-pressed="false">S. XVIII-XIX</button>
      <button class="timeline-btn" type="button" data-period="industria" aria-pressed="false">S. XIX-XX</button>
      <button class="timeline-btn" type="button" data-period="crecimiento" aria-pressed="false">S. XX</button>
      <button class="timeline-btn" type="button" data-period="hoy" aria-pressed="false">Hoy</button>
    </div>
    <div class="history-grid" id="historyDynamic" aria-live="polite">
      <figure class="history-image">
        <img id="historyImg" src="https://upload.wikimedia.org/wikipedia/commons/8/8b/Cathedral_of_Lima_-_Peru.JPG" alt="Los Origenes Coloniales" loading="lazy">
      </figure>
      <article class="history-content">
        <span class="section-tag">Capitulo historico</span>
        <h2 id="historyTitle">Los Origenes Coloniales</h2>
        <div class="line" aria-hidden="true"></div>
        <p id="historyDesc">Barranca fue fundada en el siglo XVI como enclave colonial en la costa norte de Lima. Su ubicacion estrategica en la desembocadura del rio Pativilca la convirtio en punto de paso obligado entre Lima y el norte del Peru, favoreciendo el comercio y la ocupacion de sus fertiles tierras.</p>
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
      <h2 id="tourismTitle">Lugares Turisticos</h2>
      <p class="tourism-subtitle">Desde playas doradas hasta el malecon mas famoso de la costa norteña. Barranca, la capital costera que nunca decepciona.</p>
    </header>
    <div class="filter-buttons" role="group" aria-label="Filtrar lugares turisticos">
      <button class="filter-btn active" type="button" data-filter="todos" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-filter="playas" aria-pressed="false">Playas</button>
      <button class="filter-btn" type="button" data-filter="museo" aria-pressed="false">Museos</button>
      <button class="filter-btn" type="button" data-filter="cultura" aria-pressed="false">Cultura</button>
      <button class="filter-btn" type="button" data-filter="naturaleza" aria-pressed="false">Naturaleza</button>
    </div>
    <div id="places-grid" class="places-grid" aria-live="polite"></div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GASTRONOMIA ═══ -->
<section class="gastronomy section-dark" id="gastronomia" aria-labelledby="gastronomyTitle">
  <div class="container">
    <header class="gastronomy-header">
      <span class="section-tag">Sabores de Barranca</span>
      <h2 id="gastronomyTitle">Gastronomia Barranquina</h2>
      <p class="gastronomy-subtitle">La cachanga, el ceviche y los frutos del mar se unen con recetas criollas de generaciones en la capital provincial.</p>
    </header>
    <div class="dish-grid-4x4">
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/jalea.jpg" alt="Cachanga" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Emblema Local</span>
            <h3>Cachanga</h3>
            <p>Masa frita de harina de trigo, azucar y anis, crocante por fuera y suave por dentro. El dulce mas emblematico de Barranca, consumido en las tardes del malecon.</p>
            <div class="dish-meta-grid"><span>⏱️ 15 min</span><span>🍩 Tradicion barranquina</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/ceviche.jpg" alt="Ceviche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Marino</span>
            <h3>Ceviche</h3>
            <p>Pescado fresco de la caleta barranquina marinado en limon con aji limo y cebolla morada. Preparado al momento con el mejor pescado de la bahia.</p>
            <div class="dish-meta-grid"><span>⏱️ 15 min</span><span>🐟 Frescura del Pacifico</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chicharron.jpg" alt="Bunuelo" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Dulce Criollo</span>
            <h3>Bunuelo</h3>
            <p>Masa esponjosa frita banada en miel de chancaca con anis. Se prepara especialmente en Semana Santa, aunque los mejores puestos lo ofrecen todo el ano.</p>
            <div class="dish-meta-grid"><span>⏱️ 20 min</span><span>🍯 Miel de chancaca</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/picante.jpg" alt="Causa Barranquina" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Criolla</span>
            <h3>Causa Barranquina</h3>
            <p>Papa amarilla sazonada con limon y aji amarillo, rellena de atun o pollo. Servida fria con huevo duro y aceituna, version costena de un clasico peruano.</p>
            <div class="dish-meta-grid"><span>⏱️ 25 min</span><span>🥔 Receta de abuela</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/arroz.jpg" alt="Arroz con mariscos" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Especialidad</span>
            <h3>Arroz con Mariscos</h3>
            <p>Arroz cremoso con calamares, camarones y conchas negras, perfumado con culantro y aji amarillo. El plato fuerte de los restaurantes del malecon.</p>
            <div class="dish-meta-grid"><span>⏱️ 25 min</span><span>🍚 Plato del mar</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chilcano.jpg" alt="Chicha Morada" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Bebida</span>
            <h3>Chicha Morada</h3>
            <p>Bebida refrescante de maiz morado cocido con pina, membrillo y especias. Dulce y medicinal, es el acompanamiento favorito de cualquier almuerzo barranquino.</p>
            <div class="dish-meta-grid"><span>⏱️ 40 min</span><span>🌽 Maiz morado local</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/sudado.jpg" alt="Sudado de pescado" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Aromatico</span>
            <h3>Sudado de Pescado</h3>
            <p>Pescado entero cocinado al vapor en salsa de cebolla, tomate y aji panca. Plato reconfortante que abre el apetito con sus aromas y su caldo rico.</p>
            <div class="dish-meta-grid"><span>⏱️ 25 min</span><span>🌿 Vapor del Pacifico</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/parihuela.jpg" alt="Arroz con leche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre Criollo</span>
            <h3>Arroz con Leche</h3>
            <p>Arroz cremoso cocinado en leche con canela, clavo y azucar. Servido tibio o frio, es el postre de las quintas y las ferias gastronomicas de Barranca.</p>
            <div class="dish-meta-grid"><span>⏱️ 30 min</span><span>🍚 Dulce de siempre</span></div>
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
      <p class="traditions-subtitle">El calendario barranquino, marcado por la fe, el mar y el orgullo de su gente.</p>
    </header>
    <div class="festivities-timeline">
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Febrero</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/artesania.jpg" alt="Carnaval" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Carnaval de Barranca</h3>
            <div class="line"></div>
            <p>El mas colorido de la provincia. Comparsas, agua, talco y musica llenan las calles durante tres dias de festejo popular. Las familias preparan pachamancas y el malecon se convierte en escenario de celebracion masiva.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Marzo/Abril</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/semana_santa.jpg" alt="Semana Santa" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Semana Santa</h3>
            <div class="line"></div>
            <p>Procesiones solemnes, alfombras de flores y el consumo de platos de vigilia como el arroz con leche y los buñuelos. Las familias recorren las siete iglesias del distrito en una jornada de reflexion y comunidad.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Agosto</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/san_pedro.jpg" alt="Festival de la Cachanga" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Festival de la Cachanga</h3>
            <div class="line"></div>
            <p>El evento gastronomico mas importante de Barranca. Decenas de puestos preparan la cachanga frente al malecon mientras suena la musica criolla. Concurso de la mejor cachanga, danzas y feria artesanal.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Septiembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/cruz_motupe.jpg" alt="Virgen de las Mercedes" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Virgen de las Mercedes</h3>
            <div class="line"></div>
            <p>Devocion mariana de gran arraigo en Barranca. La imagen de la Virgen recorre las calles del centro historico en procesion nocturna, acompañada por cientos de fieles con velas encendidas.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">28 de Julio</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/aniversario.jpg" alt="Fiestas Patrias" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Fiestas Patrias</h3>
            <div class="line"></div>
            <p>Desfile civico-militar en la Plaza de Armas, conciertos en el malecon y fuegos artificiales sobre el Pacifico. La fecha en que Barranca viste sus calles con los colores rojo y blanco de la bandera peruana.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">12 de Noviembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/bendicion.jpg" alt="Aniversario Barranca" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Aniversario de Barranca</h3>
            <div class="line"></div>
            <p>Celebracion civica del aniversario de la provincia con eleccion de reina, feria gastronomica, conciertos populares y el tradicional brindis con chicha morada y cachanga en la Plaza de Armas.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/pesca.jpg" alt="Pesca artesanal" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Pesca Artesanal</h3>
            <div class="line"></div>
            <p>Al amanecer, los pescadores de la caleta barranquina salen al mar. Al mediodia regresan con corvinas, pejerreyes y bonitos que se venden directamente en el muelle a restaurantes y familias del pueblo.</p>
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
      <p class="myths-subtitle">Relatos que se susurran en las noches del malecon y las calles del centro historico de Barranca.</p>
    </header>
  </div>
  <div class="myths-accordion-wrap">
    <ul class="myths-accordion" aria-label="Mitos y leyendas de Barranca">
      <li class="myth-card is-active">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/caballero.jpg" alt="El Pishtaco del Puerto" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="true" aria-controls="myth-1-content">
          <span class="myth-card__eyebrow">Terror del muelle</span>
          <span class="myth-card__title">El Pishtaco del Puerto</span>
        </button>
        <div class="myth-card__content" id="myth-1-content" aria-hidden="false">
          <p>Los pescadores que regresan de noche dicen ver una figura alta y delgada que ronda el muelle esperando a los solitarios. El Pishtaco del Puerto, segun la leyenda, toma la grasa de sus victimas para engrasar las redes y los botes. Quien lo ve de frente debe correr sin mirar atras.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llorona.jpg" alt="La Dama del Malecon" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-2-content">
          <span class="myth-card__eyebrow">Aparicion costera</span>
          <span class="myth-card__title">La Dama Blanca del Malecon</span>
        </button>
        <div class="myth-card__content" id="myth-2-content" aria-hidden="true">
          <p>En las noches de niebla, una mujer vestida de blanco camina descalza por el malecon de Barranca. Dicen que es el alma de una joven que espero a su esposo pescador durante años hasta envejecer. Quien le habla recibe un auguro del mar: buena pesca si el corazon es honesto, tormenta si no lo es.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llama.jpg" alt="El Tesoro del Virrey" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-3-content">
          <span class="myth-card__eyebrow">Riqueza colonial</span>
          <span class="myth-card__title">El Tesoro Enterrado del Virrey</span>
        </button>
        <div class="myth-card__content" id="myth-3-content" aria-hidden="true">
          <p>Cuenta la historia local que un virrey colonial enterro un baul con monedas de oro bajo la Plaza de Armas antes de ser removido de su cargo. Cada cierto tiempo aparecen excavaciones no autorizadas en el parque central, pero nadie ha encontrado nada. O si lo hicieron, nunca lo contaron.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/ahogado.jpg" alt="El Barco Fantasma" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-4-content">
          <span class="myth-card__eyebrow">Mar adentro</span>
          <span class="myth-card__title">El Barco Fantasma</span>
        </button>
        <div class="myth-card__content" id="myth-4-content" aria-hidden="true">
          <p>Los pescadores de la caleta barranquina juran haber visto, en las noches sin luna, las luces de un barco antiguo que navega lentamente frente a la costa. Al acercarse, desaparece. Los mas viejos dicen que es el barco de los esclavos coloniales que naufragaron y cuyas almas aun buscan la orilla.</p>
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
      <p class="services-subtitle">Encuentra hoteles, restaurantes y negocios locales para vivir Barranca al maximo.</p>
    </header>
    <div class="services-tabs" role="tablist" aria-label="Categorias de servicios">
      <button class="service-tab" role="tab" data-tab="hoteles" aria-selected="false">Hoteles</button>
      <button class="service-tab" role="tab" data-tab="restaurantes" aria-selected="false">Restaurantes</button>
      <button class="service-tab" role="tab" data-tab="bar" aria-selected="false">Bar</button>
      <button class="service-tab" role="tab" data-tab="negocios" aria-selected="false">Negocios</button>
    </div>
    <div class="service-panel" data-panel="hoteles" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hotel Costa Azul</h3><span class="service-card__tag">Familiar</span><p>Hotel frente al malecon con vistas al Pacifico. Habitaciones climatizadas, piscina y desayuno incluido. El mas comodo de Barranca.</p><div class="service-card__meta"><span>📍 Malecon Bolognesi</span><span>💰 Desde S/80 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hostal El Centro</h3><span class="service-card__tag">Economico</span><p>En el corazon del centro historico. Habitaciones simples y limpias, ideal para el viajero independiente que quiere explorar Barranca sin gastar de mas.</p><div class="service-card__meta"><span>📍 Jr. Lima</span><span>💰 Desde S/45 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Residencial Las Flores</h3><span class="service-card__tag">Tranquilo</span><p>Residencial familiar en zona residencial con jardin y cocina compartida. Ideal para estadias largas con atmosfera hogareña a pasos del malecon.</p><div class="service-card__meta"><span>📍 Av. Comercio</span><span>💰 Desde S/55 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏕️</span><h3>Camping Playa Chorrillos</h3><span class="service-card__tag">Aventura</span><p>Area de camping autorizada en la playa de Chorrillos. Duchas, servicios y fogones. El mejor spot para sentir la noche barranquina bajo las estrellas.</p><div class="service-card__meta"><span>📍 Playa Chorrillos</span><span>💰 Desde S/20/persona</span></div></article>
    </div>
    <div class="service-panel" data-panel="restaurantes" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Restaurant El Malecon</h3><span class="service-card__tag">Marino</span><p>Especialidad en ceviche, sudado y arroz con mariscos frente al Pacifico. El pescado llega cada manana directamente de la caleta barranquina.</p><div class="service-card__meta"><span>📍 Malecon Bolognesi</span><span>🕐 8am - 6pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>La Cevicheria Popular</h3><span class="service-card__tag">Criolla</span><p>El favorito de los locales. Ceviche, chicharron y parihuela a precio justo en ambiente familiar. Las porciones son generosas y el trato caloroso.</p><div class="service-card__meta"><span>📍 Mercado Central</span><span>🕐 9am - 4pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Cachangueria La Abuela</h3><span class="service-card__tag">Dulce</span><p>El mejor puesto de cachanga de Barranca. Masa frita al instante con diferentes coberturas: azucar, miel y canela. Cola desde el mediodia en temporada alta.</p><div class="service-card__meta"><span>📍 Malecon Bolognesi</span><span>🕐 12pm - 9pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>El Rincon Criollo</h3><span class="service-card__tag">Tradicional</span><p>Cocina criolla de temporada con lomo saltado, arroz con leche y causa barranquina. Ambiente familiar y musica criolla los domingos por la tarde.</p><div class="service-card__meta"><span>📍 Jr. Comercio</span><span>🕐 10am - 7pm</span></div></article>
    </div>
    <div class="service-panel" data-panel="bar" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍻</span><h3>Bar La Ola</h3><span class="service-card__tag">Cocteles</span><p>Cocteles tropicales y pisco sour en el malecon. El punto de encuentro nocturno de Barranca con DJ los viernes y sabados.</p><div class="service-card__meta"><span>📍 Malecon</span><span>🕐 6pm - 1am</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌊</span><h3>Chiringuito El Puerto</h3><span class="service-card__tag">Vista al mar</span><p>Mesas en terraza frente al Pacifico. Piqueos de mariscos, cervezas artesanales y los mejores atardeceres de la costa barranquina.</p><div class="service-card__meta"><span>📍 Av. Costanera</span><span>🕐 12pm - 11pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🎵</span><h3>El Candil</h3><span class="service-card__tag">Criolla</span><p>Bar con musica criolla en vivo los jueves y viernes. Pisco sour, chicha morada con macerado y piqueos criollos. El alma de la noche barranquina.</p><div class="service-card__meta"><span>📍 Jr. Arequipa</span><span>🕐 7pm - 12am</span></div></article>
    </div>
    <div class="service-panel" data-panel="negocios" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏪</span><h3>Mercado Central</h3><span class="service-card__tag">Mercado</span><p>El mayor mercado de la provincia. Frutas, verduras, pescado fresco, artesanias y productos locales desde las 5am. Imperdible para conocer el pulso real de Barranca.</p><div class="service-card__meta"><span>📍 Centro</span><span>🕐 5am - 3pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🚌</span><h3>Tours Barranca</h3><span class="service-card__tag">Turismo</span><p>Agencia local de excursiones a Caral, Paramonga, Pativilca y circuitos por los cinco distritos. Tours personalizados para grupos y familias.</p><div class="service-card__meta"><span>📍 Plaza de Armas</span><span>🕐 7am - 6pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏥</span><h3>Farmacia San Jose</h3><span class="service-card__tag">Salud</span><p>Farmacia completa con medicamentos de primera necesidad, protector solar y articulos de higiene para el viajero que recorre la costa barranquina.</p><div class="service-card__meta"><span>📍 Jr. Lima</span><span>🕐 8am - 10pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">📷</span><h3>Artesanias del Malecon</h3><span class="service-card__tag">Souvenirs</span><p>Tienda de artesanias locales: pulseras, cuadros del malecon y ceramicas pintadas a mano por artesanos barranquinos. El recuerdo perfecto de tu visita.</p><div class="service-card__meta"><span>📍 Malecon</span><span>🕐 9am - 8pm</span></div></article>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GALERIA ═══ -->
<section class="gallery section" id="galeria" aria-labelledby="galleryTitle">
  <div class="container">
    <header class="section-header">
      <span class="section-tag">Visual</span>
      <h2 id="galleryTitle">Galeria</h2>
    </header>
  </div>
  <div class="gallery-stage" aria-label="Galeria 3D interactiva">
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
        <div class="contact-info-item">
          <div class="contact-info-item__icon">📍</div>
          <div class="contact-info-item__text"><strong>Ubicacion</strong><span>Capital de la Provincia de Barranca, Lima – Peru</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚗</div>
          <div class="contact-info-item__text"><strong>Desde Lima</strong><span>191 km por la Panamericana Norte. Aprox. 2h 45min en auto.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚌</div>
          <div class="contact-info-item__text"><strong>En bus</strong><span>Buses interprovinciales desde el Terminal Norte de Lima hacia Barranca, luego colectivo o combi hasta Barranca.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">☀️</div>
          <div class="contact-info-item__text"><strong>Mejor epoca</strong><span>Todo el año para el malecon. Carnaval en febrero, Semana Santa en marzo.</span></div>
        </div>
      </div>
      <div id="map" role="application" aria-label="Mapa de Barranca, Peru"></div>
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
