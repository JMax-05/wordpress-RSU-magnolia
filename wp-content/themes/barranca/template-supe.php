<?php
/**
 * Template Name: Distrito - Supe
 */
get_header();
$base_img = get_template_directory_uri() . '/assets/supe/images';
?>

<main>

<!-- ═══════════════════════════════════════ INICIO ═══ -->
<section class="hero" id="inicio" aria-label="Presentacion de Supe" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg');">
  <div class="swiper heroSwiper" aria-hidden="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide slide1 hero-slide--1" role="img" aria-label="Piramide Mayor y plaza circular de Caral" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg" alt="" decoding="async" fetchpriority="high">
      </div>
      <div class="swiper-slide hero-slide slide2 hero-slide--2" role="img" aria-label="Ciudad Sagrada de Caral" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/5/55/Caral-Supe_in_Peru.jpg" alt="" decoding="async">
      </div>
      <div class="swiper-slide hero-slide slide3 hero-slide--3" role="img" aria-label="Anfiteatro de Caral" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/3/37/Anfiteatro_de_Caral.jpg');">
        <img class="hero-slide__image" src="https://upload.wikimedia.org/wikipedia/commons/3/37/Anfiteatro_de_Caral.jpg" alt="" decoding="async">
      </div>
    </div>
  </div>
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content container">
    <h1>Supe</h1>
    <p>Cuna de la civilizacion mas antigua de America. El Valle de Supe guarda 5000 años de historia entre sus piramides, sus campos y su gente.</p>
    <a href="#historia" class="btn-primary">Explorar destino</a>
  </div>
</section>

<!-- ═══════════════════════════════════════ HISTORIA ═══ -->
<section class="history section" id="historia" aria-labelledby="historyTitleSection">
  <div class="container">
    <header class="history-header">
      <span class="section-tag">Nuestra historia</span>
      <h2 id="historyTitleSection">Un viaje a traves del tiempo</h2>
      <p class="history-subtext">Desde los origenes hasta el presente. Cinco capitulos que narran la identidad de Supe.</p>
    </header>
    <div class="timeline-buttons" role="group" aria-label="Capitulos historicos">
      <button class="timeline-btn active" type="button" data-period="caral" aria-pressed="true">Origen</button>
      <button class="timeline-btn" type="button" data-period="intermedio" aria-pressed="false">S. XVIII-XIX</button>
      <button class="timeline-btn" type="button" data-period="colonial" aria-pressed="false">S. XIX-XX</button>
      <button class="timeline-btn" type="button" data-period="moderno" aria-pressed="false">S. XX</button>
      <button class="timeline-btn" type="button" data-period="hoy" aria-pressed="false">Hoy</button>
    </div>
    <div class="history-grid" id="historyDynamic" aria-live="polite">
      <figure class="history-image">
        <img id="historyImg" src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg" alt="La Civilizacion Caral" loading="lazy">
      </figure>
      <article class="history-content">
        <span class="section-tag">Capitulo historico</span>
        <h2 id="historyTitle">La Civilizacion Caral</h2>
        <div class="line" aria-hidden="true"></div>
        <p id="historyDesc">El Valle de Supe alberga Caral, la civilizacion mas antigua de America, con mas de 5000 anos de historia.</p>
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
      <p class="tourism-subtitle">Caral y el Valle de Supe, donde la civilizacion mas antigua de America sigue revelando sus secretos. Un destino unico en el mundo.</p>
    </header>
    <div class="filter-buttons" role="group" aria-label="Filtrar lugares turisticos">
      <button class="filter-btn active" type="button" data-filter="todos" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-filter="caral" aria-pressed="false">Caral</button>
      <button class="filter-btn" type="button" data-filter="museo" aria-pressed="false">Museos</button>
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
      <span class="section-tag">Sabores del Valle de Supe</span>
      <h2 id="gastronomyTitle">Gastronomia Supeña</h2>
      <p class="gastronomy-subtitle">Recetas que unen el mar y el valle en un mismo plato. La gastronomia de Supe habla de 5000 anos de historia viva.</p>
    </header>
    <div class="dish-grid-4x4">
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/sudado.jpg" alt="Sopa Seca" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Emblema del Valle</span>
            <h3>Sopa Seca</h3>
            <p>Fideos cocidos y luego salteados con gallina, aji panca y especias hasta quedar secos y perfumados. Plato emblematico de los valles costeros, infaltable en las fiestas de Supe.</p>
            <div class="dish-meta-grid"><span>⏱️ 40 min</span><span>🍝 Gallina del valle</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/picante.jpg" alt="Carapulcra" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Ancestral</span>
            <h3>Carapulcra</h3>
            <p>Uno de los potajes mas antiguos del Peru. Papa seca con cerdo y aji panca, de sabor concentrado y color intenso. Plato que remite a las raices prehispanicas del valle de Supe.</p>
            <div class="dish-meta-grid"><span>⏱️ 50 min</span><span>🥘 Receta milenaria</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chicharron.jpg" alt="Chicharron" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Dominical</span>
            <h3>Chicharron</h3>
            <p>Panza de cerdo frita en su propia grasa hasta quedar dorada y crocante. Servida con camote morado, zarza criolla y pan chuta. El desayuno regio de los domingos en Supe.</p>
            <div class="dish-meta-grid"><span>⏱️ 45 min</span><span>🍖 Domingo sagrado</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/parihuela.jpg" alt="Patachi" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Unico</span>
            <h3>Patachi</h3>
            <p>Guiso espeso de trigo pelado con carne de res y menestras. De consistencia densa y sabor robusto, es el plato de fuerza de los agricultores del valle durante la epoca de cosecha.</p>
            <div class="dish-meta-grid"><span>⏱️ 60 min</span><span>💪 Plato de cosecha</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/arroz.jpg" alt="Tamales" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Sabado</span>
            <h3>Tamales</h3>
            <p>Masa de maiz rellena de pollo o cerdo, envuelta en hojas de platano. En Supe se preparan con aji amarillo del propio valle y se venden en el mercado cada sabado desde las 6am.</p>
            <div class="dish-meta-grid"><span>⏱️ 60 min</span><span>🫙 Sabado de mercado</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chilcano.jpg" alt="Chicha de jora" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Bebida Sagrada</span>
            <h3>Chicha de Jora</h3>
            <p>La bebida ritual que acompano los ceremoniales de Caral hace 5000 anos. En Supe se sigue elaborando artesanalmente con maiz jora, fermentado en tinajas de barro durante tres dias.</p>
            <div class="dish-meta-grid"><span>⏱️ 3 dias de fermentacion</span><span>🌽 Bebida de Caral</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/reventado.jpg" alt="Mazamorra Morada" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre</span>
            <h3>Mazamorra Morada</h3>
            <p>Pudin espeso de maiz morado con frutas y canela. El postre mas querido de las familias supeñas, servido en las ferias y celebrations del calendario anual del distrito.</p>
            <div class="dish-meta-grid"><span>⏱️ 35 min</span><span>🍇 Sabor de fiesta</span></div>
          </div>
        </div>
      </article>
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/jalea.jpg" alt="Arroz con leche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Postre Criollo</span>
            <h3>Arroz con Leche</h3>
            <p>El eterno postre criollo preparado con leche evaporada y aromatizado con canela y clavo. En Supe se sirve junto a mazamorra en el tradicional combinado que cierra cualquier buen almuerzo.</p>
            <div class="dish-meta-grid"><span>⏱️ 30 min</span><span>🍚 El combinado eterno</span></div>
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
      <p class="traditions-subtitle">El Valle de Supe celebra su herencia milenaria con fiestas que unen el presente con la civilizacion Caral.</p>
    </header>
    <div class="festivities-timeline">
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Junio</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/aniversario.jpg" alt="Semana de Caral" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Semana de Caral</h3>
            <div class="line"></div>
            <p>La celebracion mas importante de Supe. Durante una semana, el sitio arqueologico de Caral abre con entrada libre, hay conferencias de arqueologos, danzas ceremoniales inspiradas en la cultura Caral y feria gastronomica en el valle.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Agosto</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/bendicion.jpg" alt="Pago a la Tierra" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Pago a la Tierra</h3>
            <div class="line"></div>
            <p>Ritual ancestral de origen andino donde las familias agricultoras del valle ofrendan a la Pachamama. Flores, comida, chicha de jora y canto ceremonial en un acto que conecta el presente con 5000 anos de tradicion agricola.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Febrero</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/pesca.jpg" alt="Carnaval del Valle" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Carnaval del Valle de Supe</h3>
            <div class="line"></div>
            <p>El carnaval supeño mezcla tradicion costena y andina. Comparsas de agricultores, danzas de pareja, chicha de jora y la tradicional quema del acho al cierre de las festividades. Una fiesta que une a todos los barrios del distrito.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Agosto</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/artesania.jpg" alt="Festival del Maiz" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Festival del Maiz</h3>
            <div class="line"></div>
            <p>El maiz, base de la civilizacion Caral, es celebrado en agosto con una feria de variedades nativas, concurso de humitas, degustacion de chicha de jora y exhibicion de semillas ancestrales preservadas por agricultores del valle.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">28 de Julio</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/san_pedro.jpg" alt="Fiestas Patrias" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Fiestas Patrias</h3>
            <div class="line"></div>
            <p>Desfile civico escolar en la Plaza de Supe, presentaciones de danzas costenas y el gran almuerzo popular con sopa seca y carapulcra. Una fecha en que el orgullo peruano y el orgullo supeño se funden en una misma celebracion.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Diciembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/cruz_motupe.jpg" alt="Aniversario Supe" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Aniversario de Supe</h3>
            <div class="line"></div>
            <p>El aniversario del distrito se celebra con feria gastronomica, eleccion de reina y concierto en la plaza. El plato estrella es siempre la sopa seca con carapulcra, que se distribuye gratuitamente a todos los vecinos.</p>
          </div>
        </div>
      </article>
      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image"><img src="<?php echo esc_url( $base_img ); ?>/festividad/semana_santa.jpg" alt="Artesania en algodon" loading="lazy"></figure>
          <div class="timeline-event__body">
            <h3>Artesania en Algodon Nativo</h3>
            <div class="line"></div>
            <p>El algodon nativo peruano, uno de los mas antiguos del mundo, se cultiva aun en el Valle de Supe. Artesanas locales lo hilan y tiñen con tintes naturales para crear textiles unicos que continuan la tradicion de los primeros pobladores de Caral.</p>
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
      <p class="myths-subtitle">Las piramides de Caral y el Valle de Supe guardan secretos de 5000 años que la ciencia y la leyenda aun no terminan de revelar.</p>
    </header>
  </div>
  <div class="myths-accordion-wrap">
    <ul class="myths-accordion" aria-label="Mitos y leyendas de Supe">
      <li class="myth-card is-active">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/caballero.jpg" alt="El Señor de Caral" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="true" aria-controls="myth-1-content">
          <span class="myth-card__eyebrow">El primer sacerdote</span>
          <span class="myth-card__title">El Señor de Caral</span>
        </button>
        <div class="myth-card__content" id="myth-1-content" aria-hidden="false">
          <p>Las excavaciones de Caral encontraron un sacerdote enterrado con adornos de hueso y plumas. Los habitantes del valle creen que su espiritu aun cuida la ciudad. En las noches de luna llena, los arqueologos han reportado sentir una presencia en la piramide mayor que los observa pero nunca interfiere, como si aprobara el trabajo de descubrir su legado.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llama.jpg" alt="La Ciudad de Oro" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-2-content">
          <span class="myth-card__eyebrow">Eldorado andino</span>
          <span class="myth-card__title">La Ciudad de Oro Hundida</span>
        </button>
        <div class="myth-card__content" id="myth-2-content" aria-hidden="true">
          <p>Los agricultores del valle hablan de una ciudad de oro que habria existido mas alla de Caral, en el fondo de las lomas. Cuando las lomas florecen en invierno, dicen que el oro de esa ciudad hace brillar las plantas de una forma especial. Los buscadores de tesoros han excavado incontables veces sin exito, pero la leyenda persiste.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/ahogado.jpg" alt="El Viento Ancestral" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-3-content">
          <span class="myth-card__eyebrow">Mensaje del pasado</span>
          <span class="myth-card__title">El Viento Ancestral</span>
        </button>
        <div class="myth-card__content" id="myth-3-content" aria-hidden="true">
          <p>Los residentes del valle de Supe creen que cuando el viento sopla desde las piramides de Caral hacia el pueblo, los ancestros estan enviando un mensaje. Si viene calido, es señal de buena cosecha; si viene frio en verano, avisa de cambios que vendran. Las abuelitas supeñas aun consultan el viento antes de sembrar.</p>
        </div>
      </li>
      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llorona.jpg" alt="La Madre del Valle" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-4-content">
          <span class="myth-card__eyebrow">Divinidad femenina</span>
          <span class="myth-card__title">La Madre del Valle</span>
        </button>
        <div class="myth-card__content" id="myth-4-content" aria-hidden="true">
          <p>Una deidad femenina llamada la Madre del Valle habitaria las aguas del rio Supe. Se le aparece a los agricultores como una mujer que camina sobre el agua durante la temporada de siembra. Quien la ve debe plantar inmediatamente una semilla en la orilla del rio como ofrenda, y su cosecha sera abundante ese año.</p>
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
      <p class="services-subtitle">Hoteles, restaurantes y servicios locales para explorar Supe y el complejo arqueologico de Caral.</p>
    </header>
    <div class="services-tabs" role="tablist">
      <button class="service-tab" role="tab" data-tab="hoteles" aria-selected="false">Hoteles</button>
      <button class="service-tab" role="tab" data-tab="restaurantes" aria-selected="false">Restaurantes</button>
      <button class="service-tab" role="tab" data-tab="bar" aria-selected="false">Bar</button>
      <button class="service-tab" role="tab" data-tab="negocios" aria-selected="false">Negocios</button>
    </div>
    <div class="service-panel" data-panel="hoteles" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hotel Valle de Caral</h3><span class="service-card__tag">Arqueologico</span><p>El hotel mas cercano al sitio de Caral. Habitaciones con vistas al valle, guias especializados disponibles y servicio de transfer hasta las piramides cada mañana.</p><div class="service-card__meta"><span>📍 Camino a Caral</span><span>💰 Desde S/75 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏨</span><h3>Hostal El Caral</h3><span class="service-card__tag">Economico</span><p>Hostal sencillo y bien ubicado en el pueblo de Supe. Habitaciones limpias con ventilador y baño privado. La opcion economica para el viajero arqueologico del valle.</p><div class="service-card__meta"><span>📍 Plaza de Supe</span><span>💰 Desde S/40 la noche</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏕️</span><h3>Camping Arqueologico</h3><span class="service-card__tag">Aventura</span><p>Area de camping con permiso especial a 500m de Caral. La experiencia de dormir bajo las estrellas con las piramides al frente es unica en el mundo. Reserva con anticipacion.</p><div class="service-card__meta"><span>📍 Valle de Supe</span><span>💰 Desde S/30/persona</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌄</span><h3>Ecolodge Las Lomas</h3><span class="service-card__tag">Ecoturismo</span><p>Alojamiento rustico en las lomas del valle con vistas panoramicas. Construido con materiales del lugar, ofrece experiencias de ecoturismo, avistamiento de aves y senderismo.</p><div class="service-card__meta"><span>📍 Lomas de Supe</span><span>💰 Desde S/65 la noche</span></div></article>
    </div>
    <div class="service-panel" data-panel="restaurantes" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Restaurant El Arqueólogo</h3><span class="service-card__tag">Criolla</span><p>El favorito de los visitantes de Caral. Sopa seca, carapulcra y cuy al horno en un ambiente inspirado en la cultura Caral, con ceramicas y textiles ancestrales en las paredes.</p><div class="service-card__meta"><span>📍 Av. Caral</span><span>🕐 8am - 6pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>La Piramide</h3><span class="service-card__tag">Popular</span><p>Menu del dia con sopa supeña, sopa seca o carapulcra, refresco y postre. El almuerzo mas popular del pueblo, preferido por trabajadores, arqueologos y viajeros.</p><div class="service-card__meta"><span>📍 Plaza de Supe</span><span>🕐 12pm - 4pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🍽️</span><h3>Chicharroneria El Valle</h3><span class="service-card__tag">Dominical</span><p>Los mejores chicharrones del Valle de Supe. Solo los domingos, desde las 7am hasta agotar stock. Cola obligatoria, espera que vale la pena. Lleva tu propio contenedor.</p><div class="service-card__meta"><span>📍 Jr. Caral</span><span>🕐 7am - 11am (domingos)</span></div></article>
      <article class="service-card"><span class="service-card__icon">🫙</span><h3>Tamaleria Caral</h3><span class="service-card__tag">Sabado</span><p>Tamales con masa de maiz del propio valle, rellenos con pollo o cerdo. Los mejores del valle se venden cada sabado desde las 6am en el mercado de Supe. Infaltables.</p><div class="service-card__meta"><span>📍 Mercado de Supe</span><span>🕐 6am - 10am (sabados)</span></div></article>
    </div>
    <div class="service-panel" data-panel="bar" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🌽</span><h3>Chicha Bar Jora</h3><span class="service-card__tag">Ancestral</span><p>Bar especializado en chicha de jora artesanal elaborada con el maiz del propio Valle de Supe. La misma bebida ritual que se preparaba en Caral hace 5000 años, ahora en vaso de barro.</p><div class="service-card__meta"><span>📍 Centro de Supe</span><span>🕐 4pm - 10pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🏺</span><h3>El Anfiteatro</h3><span class="service-card__tag">Cultural</span><p>Bar cultural con pisco sour, chicha morada y exposicion de ceramicas Caral reproducidas por artesanos locales. Los jueves hay presentaciones de musica ancestral con antaras y litófonos.</p><div class="service-card__meta"><span>📍 Jr. Arqueologia</span><span>🕐 6pm - 12am</span></div></article>
      <article class="service-card"><span class="service-card__icon">🌙</span><h3>Bar Las Piramides</h3><span class="service-card__tag">Nocturno</span><p>El unico bar con vista nocturna a las piramides iluminadas de Caral. Terraza al aire libre, cocteles inspirados en la cultura del Valle de Supe y musica de fondo instrumental.</p><div class="service-card__meta"><span>📍 Camino a Caral</span><span>🕐 7pm - 1am</span></div></article>
    </div>
    <div class="service-panel" data-panel="negocios" role="tabpanel">
      <article class="service-card"><span class="service-card__icon">🏛️</span><h3>Centro de Visitantes Caral</h3><span class="service-card__tag">Turismo</span><p>Centro oficial de informacion del sitio arqueologico Caral. Mapas, guias certificados, tienda de publicaciones y la mejor introduccion antes de visitar las piramides del Valle de Supe.</p><div class="service-card__meta"><span>📍 Entrada a Caral</span><span>🕐 8am - 4pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🚌</span><h3>Tours Caral Express</h3><span class="service-card__tag">Transporte</span><p>Servicio de transporte desde Supe y Barranca hasta Caral. Salidas diarias a las 8am y 10am. Incluye guia y entrada al sitio arqueologico. Reserva en la plaza del pueblo.</p><div class="service-card__meta"><span>📍 Plaza de Supe</span><span>🕐 7:30am - 5pm</span></div></article>
      <article class="service-card"><span class="service-card__icon">🧵</span><h3>Textiles Caral</h3><span class="service-card__tag">Artesanal</span><p>Taller de artesania textil con algodon nativo del Valle de Supe. Tejidos a mano con tintes naturales usando tecnicas prehispanicas. Cada pieza es unica y certificada como artesania local.</p><div class="service-card__meta"><span>📍 Jr. Algodon</span><span>🕐 9am - 6pm</span></div></article>
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
          <div class="contact-info-item__text"><strong>Ubicacion</strong><span>Supe, Barranca, Lima – Peru</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚗</div>
          <div class="contact-info-item__text"><strong>Desde Lima</strong><span>188 km por la Panamericana Norte. Aprox. 2h 50min en auto.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚌</div>
          <div class="contact-info-item__text"><strong>En bus</strong><span>Buses interprovinciales desde el Terminal Norte de Lima hacia Barranca, luego colectivo o combi hasta Supe.</span></div>
        </div>
        <div class="contact-info-item">
          <div class="contact-info-item__icon">☀️</div>
          <div class="contact-info-item__text"><strong>Mejor epoca</strong><span>Mayo–octubre para Caral. Semana de Caral en junio.</span></div>
        </div>
      </div>
      <div id="map" role="application" aria-label="Mapa de Supe, Peru"></div>
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
