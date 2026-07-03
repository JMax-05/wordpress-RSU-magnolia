<?php
/**
 * Template Name: Distrito - Paramonga
 */
get_header();
$base_img = get_template_directory_uri() . '/assets/paramonga/images';
?>

<main>

<!-- ═══════════════════════════════════════ INICIO ═══ -->
<section class="hero" id="inicio" aria-label="Presentacion de Paramonga" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg');">
  <div class="swiper heroSwiper" aria-hidden="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide slide1 hero-slide--1" role="img" aria-label="Fortaleza de Paramonga" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg" alt="" decoding="async" fetchpriority="high">
      </div>
      <div class="swiper-slide hero-slide slide2 hero-slide--2" role="img" aria-label="Vista de la Fortaleza Chimu" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/8/8d/La_Fortaleza_de_Paramonga_Barranca_Lima_Per%C3%BA.jpg" alt="" decoding="async">
      </div>
      <div class="swiper-slide hero-slide slide3 hero-slide--3" role="img" aria-label="Costa de Paramonga" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg" alt="" decoding="async">
      </div>
    </div>
  </div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content container">
    <h1>Paramonga</h1>
    <p>Guardiana del valle. La imponente Fortaleza Chimu, la devocion a San Jeronimo y la dulzura de la cana de azucar definen su identidad unica.</p>
    <a href="#historia" class="btn-primary">Explorar destino</a>
  </div>
</section>

<!-- ═══════════════════════════════════════ HISTORIA ═══ -->
<section class="history section" id="historia" aria-labelledby="historyTitleSection">
  <div class="container">
    <header class="history-header">
      <span class="section-tag">Nuestra historia</span>
      <h2 id="historyTitleSection">Un viaje a traves del tiempo</h2>
      <p class="history-subtext">Desde los origenes hasta el presente. Cinco capitulos que narran la identidad de Paramonga.</p>
    </header>
    <div class="timeline-buttons" role="group" aria-label="Capitulos historicos">
      <button class="timeline-btn active" type="button" data-period="chimu" aria-pressed="true">Origen</button>
      <button class="timeline-btn" type="button" data-period="conquista" aria-pressed="false">S. XVIII-XIX</button>
      <button class="timeline-btn" type="button" data-period="hacienda" aria-pressed="false">S. XIX-XX</button>
      <button class="timeline-btn" type="button" data-period="industria" aria-pressed="false">S. XX</button>
      <button class="timeline-btn" type="button" data-period="hoy" aria-pressed="false">Hoy</button>
    </div>
    <div class="history-grid" id="historyDynamic" aria-live="polite">
      <figure class="history-image">
        <img id="historyImg" src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg" alt="La Fortaleza Chimu" loading="lazy">
      </figure>
      <article class="history-content">
        <span class="section-tag">Capitulo historico</span>
        <h2 id="historyTitle">La Fortaleza Chimu</h2>
        <div class="line" aria-hidden="true"></div>
        <p id="historyDesc">Entre los siglos XIII y XV, el pueblo Chimu construyo la imponente fortaleza que hoy lleva el nombre de Paramonga.</p>
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
      <p class="tourism-subtitle">La Fortaleza Chimu, el valle cañero y las playas de la costa norte. Paramonga es historia y naturaleza en un solo destino.</p>
    </header>
    <div class="filter-buttons" role="group" aria-label="Filtrar lugares turisticos">
      <button class="filter-btn active" type="button" data-filter="todos" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-filter="fortaleza" aria-pressed="false">Fortaleza</button>
      <button class="filter-btn" type="button" data-filter="museo" aria-pressed="false">Museos</button>
      <button class="filter-btn" type="button" data-filter="playas" aria-pressed="false">Playas</button>
      <button class="filter-btn" type="button" data-filter="naturaleza" aria-pressed="false">Naturaleza</button>
    </div>
    <div id="places-grid" class="places-grid" aria-live="polite"></div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GASTRONOMIA ═══ -->
<section class="gastronomy section-dark" id="gastronomia" aria-labelledby="gastronomyTitle">
  <div class="container">
    <header class="gastronomy-header">
      <span class="section-tag">Sabores de Paramonga</span>
      <h2 id="gastronomyTitle">Gastronomia Paramongana</h2>
      <p class="gastronomy-subtitle">Dulces de cana, mariscos del Pacifico y recetas ancestrales que narran siglos de fusion cultural en el valle de Paramonga.</p>
    </header>
    <div class="dish-grid-4x4">
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/jalea.jpg" alt="Picarones" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Dulce Tradicional</span>
            <h3>Picarones</h3>
            <p>Rosquillas de camote y zapallo fritas, bañadas en miel de chancaca aromatizada con anis y naranja. Elaborados con la cana y el camote del propio valle de Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ 20 min</span><span>🍩 Dulce paramongano</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/picante.jpg" alt="Carapulcra" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Ancestral</span>
            <h3>Carapulcra</h3>
            <p>Guiso de papa seca con cerdo o pollo, ají panca y especias. Receta que mezcla la tradicion andina con el sabor criollo costero, infaltable en las mesas de Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ 45 min</span><span>🥘 Fusion andino-criolla</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/ceviche.jpg" alt="Ceviche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Marino</span>
            <h3>Ceviche</h3>
            <p>Pescado fresco de la playa de Paramonga marinado en limon con aji limo y cebolla. Preparado con el pescado que llega directamente de la caleta cada manana.</p>
            <div class="dish-meta-grid"><span>⏱️ 15 min</span><span>🐟 Del mar al plato</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/arroz.jpg" alt="Arroz con leche de cana" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Especial</span>
            <h3>Arroz con Leche de Cana</h3>
            <p>Version local del clasico peruano, endulzado con melaza de cana de azucar en lugar de azucar refinada. Un sabor profundo y caramelizado que solo se encuentra en Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ 30 min</span><span>🍬 Dulce de cana</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chilcano.jpg" alt="Chicha de jora" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Bebida Ancestral</span>
            <h3>Chicha de Jora</h3>
            <p>Bebida fermentada de maiz jora con tradicion milenaria en los valles costeros. Ofrecida en las festividades religiosas y en los puestos del mercado de Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ Fermentacion 3 dias</span><span>🌽 Maiz ancestral</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/sudado.jpg" alt="Tamales Verdes" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Sabado Tradicional</span>
            <h3>Tamales Verdes</h3>
            <p>Masa de maiz con culantro, rellena de pollo o cerdo, envuelta en hojas de platano y cocida al vapor. Tipicos de los sabados en los mercados del valle de Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ 60 min</span><span>🫙 Sabado de mercado</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/reventado.jpg" alt="Mazamorra Morada" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre</span>
            <h3>Mazamorra Morada</h3>
            <p>Pudin espeso de maiz morado con trozos de frutas y especias. Postre tipico de las fiestas y celebraciones de Paramonga, servido tibio en cucharones de barro.</p>
            <div class="dish-meta-grid"><span>⏱️ 35 min</span><span>🍇 Sabor morado</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/parihuela.jpg" alt="Aguardiente de cana" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Artesanal</span>
            <h3>Aguardiente de Cana</h3>
            <p>Destilado artesanal elaborado con la cana de azucar del propio valle. De graduacion suave y sabor dulzado, es el brindis de las fiestas patronales y aniversarios de Paramonga.</p>
            <div class="dish-meta-grid"><span>⏱️ Artesanal</span><span>🍹 Del valle a la copa</span></div>
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
      <p class="traditions-subtitle">El alma de Paramonga, tejida entre la devocion a San Jeronimo, la cana de azucar y la herencia de la Fortaleza.</p>
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
            <h3>Carnaval Paramongano</h3>
            <div class="line"></div>
            <p>Tres dias de festejo popular con comparsas, globos de papel y el tradicional juego con agua. Las familias preparan picarones y chicha de jora, y el parque central se llena de musica y baile hasta el amanecer.</p>
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
            <p>La procesion del Señor de los Milagros recorre las calles de Paramonga en Semana Santa. Las familias elaboran carapulcra y picarones como platos de vigilia. Un momento de fe, reflexion y comunidad en todo el distrito.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Septiembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/san_pedro.jpg" alt="San Jeronimo" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Fiestas de San Jeronimo</h3>
            <div class="line"></div>
            <p>La festividad mas importante del distrito. El patron San Jeronimo es llevado en procesion multitudinaria por las calles empedradas. Danzas, bandas de musica, feria de artesanias y la famosa corrida de toros completan las celebraciones.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/bendicion.jpg" alt="Cosecha de cana" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Cosecha de Cana</h3>
            <div class="line"></div>
            <p>El ciclo de la cana de azucar marca el ritmo de vida en Paramonga. La cosecha es una festividad laboral donde familias enteras trabajan juntas. Al terminar el dia, se comparte aguardiente de cana artesanal como ritual de agradecimiento.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/artesania.jpg" alt="Artesania en totora" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Artesania en Totora</h3>
            <div class="line"></div>
            <p>Mujeres artesanas de Paramonga elaboran cestos, sombreros y figuras decorativas con la totora de los humedales del valle. Tradicion transmitida de madres a hijas que genera economia circular y preserva una tecnica milenaria.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Noviembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/aniversario.jpg" alt="Aniversario Paramonga" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Aniversario del Distrito</h3>
            <div class="line"></div>
            <p>Celebracion civica con desfile escolar, presentaciones de danzas tipicas y la feria gastronomica donde los mejores picarones, tamales y platos criollos del distrito compiten por el reconocimiento de la comunidad.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Mensual</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/cruz_motupe.jpg" alt="Visita la Fortaleza" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Visitas a la Fortaleza</h3>
            <div class="line"></div>
            <p>El primer domingo de cada mes, la Fortaleza de Paramonga abre sus puertas con entrada gratuita y guias voluntarios locales. La comunidad se apropia del monumento y lo convierte en aula viva de historia y cultura Chimu.</p>
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
      <p class="myths-subtitle">La Fortaleza Chimu y los campos de cana guardan secretos que el tiempo no ha borrado en Paramonga.</p>
    </header>
  </div>
  <div class="myths-accordion-wrap">
    <ul class="myths-accordion" aria-label="Mitos y leyendas de Paramonga">
      <li class="myth-card is-active">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/caballero.jpg" alt="El Inca de la Fortaleza" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="true" aria-controls="myth-1-content">
          <span class="myth-card__eyebrow">Centinela eterno</span>
          <span class="myth-card__title">El Inca de la Fortaleza</span>
        </button>
        <div class="myth-card__content" id="myth-1-content" aria-hidden="false">
          <p>Los guardas nocturnos de la Fortaleza de Paramonga aseguran escuchar pasos sobre los terraplenes de adobe al caer la noche. Dicen que es el espiritu de un guerrero Chimu que nunca abandono su puesto. Quien se atreva a subir solo al amanecer puede ver su silueta frente al mar.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llorona.jpg" alt="La Princesa Chimu" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-2-content">
          <span class="myth-card__eyebrow">Amor eterno</span>
          <span class="myth-card__title">La Princesa Chimu</span>
        </button>
        <div class="myth-card__content" id="myth-2-content" aria-hidden="true">
          <p>Cuentan que una princesa Chimu fue enterrada con sus joyas de oro dentro de la fortaleza para protegerla de los conquistadores. Su alma vaga entre los muros en las noches de luna llena. Quien la vea debe depositar una flor en la base de la fortaleza o sera perseguido por sombras hasta el amanecer.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llama.jpg" alt="El Tesoro de las Piramides" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-3-content">
          <span class="myth-card__eyebrow">Oro oculto</span>
          <span class="myth-card__title">El Tesoro de las Piramides</span>
        </button>
        <div class="myth-card__content" id="myth-3-content" aria-hidden="true">
          <p>Generaciones de paramonganos han buscado el tesoro que supuestamente los Chimu escondieron en las terrazas mas profundas de la fortaleza antes de la conquista Inca. Los arqueologos han excavado sin encontrarlo, pero los lugareños insisten: el oro esta ahi, protegido por una maldicion que afecta a los codiciosos.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/ahogado.jpg" alt="El Guardian de Piedra" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-4-content">
          <span class="myth-card__eyebrow">Guardia nocturna</span>
          <span class="myth-card__title">El Guardian de Piedra</span>
        </button>
        <div class="myth-card__content" id="myth-4-content" aria-hidden="true">
          <p>Una roca con forma vagamente humana en la ladera de la fortaleza es conocida como El Guardian. Los agricultores del valle creen que se mueve levemente de lugar dependiendo del tiempo: cuando se acerca al borde, viene lluvia; cuando se aleja, viene sequia. Muchos lo consideran un oraculo agricola.</p>
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
      <p class="services-subtitle">Servicios, restaurantes y negocios locales para disfrutar Paramonga al maximo.</p>
    </header>
    <div class="services-tabs" role="tablist" aria-label="Categorias de servicios">
      <button class="service-tab" role="tab" data-tab="hoteles" aria-selected="false">Hoteles</button>
      <button class="service-tab" role="tab" data-tab="restaurantes" aria-selected="false">Restaurantes</button>
      <button class="service-tab" role="tab" data-tab="bar" aria-selected="false">Bar</button>
      <button class="service-tab" role="tab" data-tab="negocios" aria-selected="false">Negocios</button>
    </div>
    <div class="service-panel" data-panel="hoteles" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hostal La Fortaleza</h3><span class="service-card__tag">Turístico</span><p>Hostal familiar a pocos metros de la Fortaleza Chimu. Habitaciones limpias con vistas al valle. Desayuno incluido con productos del mercado local de Paramonga.</p><div class="service-card__meta"><span>📍 Av. Principal</span><span>💰 Desde S/55 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hotel Valle Verde</h3><span class="service-card__tag">Confortable</span><p>Hotel de categoria media con piscina y salon de eventos. Ideal para grupos que vienen a visitar la Fortaleza y recorrer el valle de Paramonga por varios dias.</p><div class="service-card__meta"><span>📍 Jr. San Jeronimo</span><span>💰 Desde S/70 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏕️</span><h3>Camping El Canaveralp</h3><span class="service-card__tag">Aventura</span><p>Area de camping en las afueras del pueblo, rodeada de canaverales. Fogones, servicios basicos y el sonido del viento entre la cana como unica musica nocturna.</p><div class="service-card__meta"><span>📍 Sector Rural</span><span>💰 Desde S/15/persona</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Residencial Chimu</h3><span class="service-card__tag">Económico</span><p>Alojamiento sencillo y economico en el centro de Paramonga. Habitaciones individuales y dobles con baño privado. Cerca del mercado y la iglesia de San Jeronimo.</p><div class="service-card__meta"><span>📍 Plaza Central</span><span>💰 Desde S/40 la noche</span></div></article>
    </div>
    <div class="service-panel" data-panel="restaurantes" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Restaurant La Fortaleza</h3><span class="service-card__tag">Criolla</span><p>El mas conocido de Paramonga. Carapulcra, picarones y ceviche de la caleta local. Terraza con vistas al cerro de la Fortaleza desde el comedor principal.</p><div class="service-card__meta"><span>📍 Av. Lima</span><span>🕐 9am - 6pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Picanteria Don Jeronimo</h3><span class="service-card__tag">Tradicional</span><p>Recetas de la abuela paramongana: tamales verdes, chicha de jora y arroz con leche de caña. El lugar preferido de las familias locales para el almuerzo dominical.</p><div class="service-card__meta"><span>📍 Mercado Municipal</span><span>🕐 7am - 3pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Restaurant El Valle</h3><span class="service-card__tag">Marino</span><p>Pescados y mariscos frescos de la playa de Paramonga. Ceviche, sudado y chicharron de pescado con yuca fresca. Atendido por la misma familia desde 1978.</p><div class="service-card__meta"><span>📍 Jr. Comercio</span><span>🕐 8am - 5pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Dulceria Las Picarones</h3><span class="service-card__tag">Dulces</span><p>El mejor puesto de picarones de Paramonga. Masa de camote y zapallo frita al momento, banada en miel de chancaca con anis. Imperdible al atardecer en la plaza.</p><div class="service-card__meta"><span>📍 Plaza Central</span><span>🕐 3pm - 9pm</span></div></article>
    </div>
    <div class="service-panel" data-panel="bar" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍻</span><h3>Bar El Canaveralp</h3><span class="service-card__tag">Local</span><p>Bar con ambiente paramongano genuino. Aguardiente de cana artesanal, chicha de jora y cervezas frias. Musica de acordeon los fines de semana.</p><div class="service-card__meta"><span>📍 Sector cañas</span><span>🕐 5pm - 12am</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌾</span><h3>El Molino</h3><span class="service-card__tag">Tradicional</span><p>Bar-restaurante junto al antiguo molino colonial. Piqueos de la casa con mariscos y frituras, acompanados del aguardiente de cana mas famoso del valle.</p><div class="service-card__meta"><span>📍 Sector Molino</span><span>🕐 4pm - 11pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🎶</span><h3>La Taberna Chimu</h3><span class="service-card__tag">Cultural</span><p>Bar cultural con presentaciones de musica andina y criolla en vivo. Tragos locales y piqueos mientras escuchas los ritmos que acompañaron la construccion de la Fortaleza.</p><div class="service-card__meta"><span>📍 Jr. Fortaleza</span><span>🕐 6pm - 1am</span></div></article>
    </div>
    <div class="service-panel" data-panel="negocios" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏪</span><h3>Mercado de Paramonga</h3><span class="service-card__tag">Mercado</span><p>El mercado semanal de Paramonga es el mejor lugar para comprar cana de azucar, frutas del valle, chicha artesanal y los famosos picarones caseros de la zona.</p><div class="service-card__meta"><span>📍 Centro</span><span>🕐 6am - 2pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🚌</span><h3>Tours Chimu</h3><span class="service-card__tag">Turismo</span><p>Guias locales especializados en la historia de la Fortaleza de Paramonga. Recorridos a pie, en bicicleta y rutas nocturnas para grupos pequenos y familias.</p><div class="service-card__meta"><span>📍 Plaza Central</span><span>🕐 7am - 5pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍬</span><h3>Dulces del Valle</h3><span class="service-card__tag">Artesanal</span><p>Tienda de dulces artesanales de cana: melcochas, alfajores y chancaca. Elaborados con azucar sin refinar del propio ingenio del valle. Souvenirs dulces de Paramonga.</p><div class="service-card__meta"><span>📍 Av. Principal</span><span>🕐 9am - 7pm</span></div></article>
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
          <div class="contact-info-item__text"><strong>Ubicacion</strong><span>Paramonga, Barranca, Lima – Perú</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚗</div>
          <div class="contact-info-item__text"><strong>Desde Lima</strong><span>209 km por la Panamericana Norte. Aprox. 3h 10min en auto.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚌</div>
          <div class="contact-info-item__text"><strong>En bus</strong><span>Buses interprovinciales desde el Terminal Norte de Lima hacia Barranca, luego colectivo o combi hasta Paramonga.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">☀️</div>
          <div class="contact-info-item__text"><strong>Mejor epoca</strong><span>Abril–octubre para la Fortaleza. Fiestas de San Jerónimo en septiembre.</span></div>
        </div>
      </div>
      <div id="map" role="application" aria-label="Mapa de Paramonga, Peru"></div>
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
