<?php
/**
 * Template Name: Distrito - Supe Puerto
 */
get_header();
$base_img = get_template_directory_uri() . '/assets/supe-puerto/images';
?>

<main>

<!-- ═══════════════════════════════════════ INICIO ═══ -->
<section class="hero" id="inicio" aria-label="Presentación de Supe Puerto" style="background-image: url('<?php echo esc_url( $base_img ); ?>/hero/hero1.jpg');">
  <div class="swiper heroSwiper" aria-hidden="true">
    <div class="swiper-wrapper">
      <div class="swiper-slide hero-slide slide1 hero-slide--1" role="img" aria-label="Vista panorámica de Supe Puerto" style="background-image: url('<?php echo esc_url( $base_img ); ?>/hero/hero1.jpg');">
        <img class="hero-slide__image" src="<?php echo esc_url( $base_img ); ?>/hero/hero1.jpg" alt="" decoding="async" fetchpriority="high">
      </div>
      <div class="swiper-slide hero-slide slide2 hero-slide--2" role="img" aria-label="Paisaje principal de Supe Puerto" style="background-image: url('<?php echo esc_url( $base_img ); ?>/hero/hero2.jpg');">
        <img class="hero-slide__image" src="<?php echo esc_url( $base_img ); ?>/hero/hero2.jpg" alt="" decoding="async">
      </div>
      <div class="swiper-slide hero-slide slide3 hero-slide--3" role="img" aria-label="Atardecer costero de Supe Puerto" style="background-image: url('<?php echo esc_url( $base_img ); ?>/hero/hero3.jpg');">
        <img class="hero-slide__image" src="<?php echo esc_url( $base_img ); ?>/hero/hero3.jpg" alt="" decoding="async">
      </div>
    </div>
  </div>

  <div class="hero-overlay" aria-hidden="true"></div>

  <div class="hero-content container">
    <h1>Supe Puerto</h1>
    <p>Donde el océano, la tradición y la cultura peruana crean una experiencia inolvidable.</p>
    <a href="#historia" class="btn-primary">Explorar destino</a>
  </div>
</section>

<!-- ═══════════════════════════════════════ HISTORIA ═══ -->
<section class="history section" id="historia" aria-labelledby="historyTitleSection">
  <div class="container">
    <header class="history-header">
      <span class="section-tag">Nuestra historia</span>
      <h2 id="historyTitleSection">Un viaje a través de 5000 años</h2>
      <p class="history-subtext">Desde la cuna de la civilización andina hasta el puerto pesquero vivo que late hoy con orgullo peruano.</p>
    </header>

    <div class="timeline-buttons" role="group" aria-label="Capítulos históricos">
      <button class="timeline-btn active" type="button" data-period="caral" aria-pressed="true">3700 a.C.</button>
      <button class="timeline-btn" type="button" data-period="japones" aria-pressed="false">1905 d.C.</button>
      <button class="timeline-btn" type="button" data-period="fundacion" aria-pressed="false">1940 d.C.</button>
      <button class="timeline-btn" type="button" data-period="turismo" aria-pressed="false">1994 d.C.</button>
      <button class="timeline-btn" type="button" data-period="hoy" aria-pressed="false">Hoy</button>
    </div>

    <div class="history-grid" id="historyDynamic" aria-live="polite">
      <figure class="history-image">
        <img id="historyImg" src="<?php echo esc_url( $base_img ); ?>/historia/aspero.jpg" alt="Los Orígenes de Áspero" loading="lazy">
      </figure>
      <article class="history-content">
        <span class="section-tag">Capítulo histórico</span>
        <h2 id="historyTitle">Los Orígenes de Áspero</h2>
        <div class="line" aria-hidden="true"></div>
        <p id="historyDesc">Supe Puerto es reconocido como la puerta de entrada a Áspero, importante ciudad pesquera vinculada a la Civilización Caral, considerada una de las culturas más antiguas de América con más de 5000 años de historia. Desde este puerto ancestral se desarrollaron actividades de pesca, intercambio comercial y organización social que contribuyeron al crecimiento de una civilización avanzada en agricultura, astronomía y arquitectura monumental en la costa central del Perú.</p>
        <p class="history-chapter"><span id="chapterCounter">1</span> de 5 capítulos históricos</p>
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
      <p class="tourism-subtitle">Desde playas doradas hasta ruinas milenarias. Cada rincón de Supe Puerto guarda una historia que espera ser descubierta.</p>
    </header>

    <div class="filter-buttons" role="group" aria-label="Filtrar lugares turísticos">
      <button class="filter-btn active" type="button" data-filter="todos" aria-pressed="true">Todos</button>
      <button class="filter-btn" type="button" data-filter="caral" aria-pressed="false">Caral</button>
      <button class="filter-btn" type="button" data-filter="museo" aria-pressed="false">Museo</button>
      <button class="filter-btn" type="button" data-filter="fortaleza" aria-pressed="false">Fortaleza</button>
      <button class="filter-btn" type="button" data-filter="playas" aria-pressed="false">Playas</button>
    </div>

    <div id="places-grid" class="places-grid" aria-live="polite"></div>
  </div>
</section>

<!-- ═══════════════════════════════════════ GASTRONOMIA ═══ -->
<section class="gastronomy section-dark" id="gastronomia" aria-labelledby="gastronomyTitle">
  <div class="container">
    <header class="gastronomy-header">
      <span class="section-tag">Sabores del Pacífico</span>
      <h2 id="gastronomyTitle">Gastronomía Porteña</h2>
      <p class="gastronomy-subtitle">El mar como ingrediente principal. Recetas transmitidas por generaciones de pescadores,<br> donde cada plato cuenta una historia de amor por el océano.</p>
    </header>

    <div class="dish-grid-4x4">
      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/ceviche.jpg" alt="Ceviche" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Clásico Marino</span>
            <h3>Ceviche</h3>
            <p>Pescado fresco del Pacífico marinado en limón con ají limo, cebolla morada y cilantro. Preparado al momento con pescado recién llegado del muelle.</p>
            <div class="dish-meta-grid"><span>⏱️ 15 min</span><span>🐟 Tradición pesquera local</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chicharron.jpg" alt="Chicharrón de pescado" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Tradición Local</span>
            <h3>Chicharrón de pescado</h3>
            <p>Trozos de pescado recién llegado del muelle, fritos hasta quedar dorados y crocantes. Acompañados de yuca y salsa criolla.</p>
            <div class="dish-meta-grid"><span>⏱️ 20 min</span><span>🔥 Crujiente y fresco</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/arroz.jpg" alt="Arroz con mariscos" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Especialidad</span>
            <h3>Arroz con mariscos</h3>
            <p>Arroz mezclado con calamares, conchas, camarones y pescado. Sabor intenso a mar con toques de ají amarillo y culantro.</p>
            <div class="dish-meta-grid"><span>⏱️ 25 min</span><span>🍚 Plato fuerte</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/parihuela.jpg" alt="Parihuela" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Sopa Marina</span>
            <h3>Parihuela</h3>
            <p>Potente sopa con pescado, camarones, calamares y cangrejo, aderezada con ají panca y hierbas aromáticas.</p>
            <div class="dish-meta-grid"><span>⏱️ 30 min</span><span>🍲 Caldo reconstituyente</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/sudado.jpg" alt="Sudado de pescado" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Aromático</span>
            <h3>Sudado de pescado</h3>
            <p>Pescado entero cocido al vapor en caldo de cebolla, tomate, ají panca y un toque de vino de pisco.</p>
            <div class="dish-meta-grid"><span>⏱️ 25 min</span><span>🌿 Aroma del mar</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/chilcano.jpg" alt="Chilcano" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Reconfortante</span>
            <h3>Chilcano</h3>
            <p>Sopa de pescado o cangrejo con un toque de jengibre, huevo y fideos finos. Ideal para recuperar energías.</p>
            <div class="dish-meta-grid"><span>⏱️ 20 min</span><span>🥣 Tradicional</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/reventado.jpg" alt="Reventado de cangrejo" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Marisco Puro</span>
            <h3>Reventado de Cangrejo</h3>
            <p>Cangrejos frescos abiertos y cocidos en una cremosa salsa de ají amarillo, cebolla y culantro.</p>
            <div class="dish-meta-grid"><span>⏱️ 35 min</span><span>🦀 Especialidad local</span></div>
          </div>
        </div>
      </article>

      <article class="card-animation-layer">
        <div class="dish-card-grid">
          <figure class="dish-img-grid"><img src="<?php echo esc_url( $base_img ); ?>/gastronomia/picante.jpg" alt="Picante de yuyo" loading="lazy"></figure>
          <div class="dish-info-grid">
            <span class="dish-badge">Preincaico</span>
            <h3>Picante de Yuyo</h3>
            <p>Alga marina fresca (yuyo) cocinada con ají, cebolla y papa. Un plato ancestral lleno de minerales.</p>
            <div class="dish-meta-grid"><span>⏱️ 15 min</span><span>🌱 Vegetariano ancestral</span></div>
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
      <span class="section-tag">Costumbres y tradiciones</span>
      <h2 id="traditionsTitle">Festividades</h2>
      <p class="traditions-subtitle">El calendario cultural de Supe Puerto, marcado por la fe, el mar y la identidad de su gente.</p>
    </header>

    <div class="festivities-timeline">

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Febrero<br>Inicio temporada</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/bendicion.jpg" alt="Bendición de embarcaciones" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>Bendición de embarcaciones</h3>
            <div class="line"></div>
            <p>Ritual ancestral donde los pescadores adornan sus botes y un sacerdote bendice las herramientas de trabajo. Se pide buena pesca y protección en el mar para la temporada que comienza.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Marzo<br>o Abril</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/semana_santa.jpg" alt="Semana Santa" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>Semana Santa</h3>
            <div class="line"></div>
            <p>Procesiones solemnes, alfombras de flores y la tradicional pesca del viernes santo. Las familias porteñas preparan platos de vigilia y recorren el malecón en reflexión y recogimiento.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">29–30<br>de Junio</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/san_pedro.jpg" alt="San Pedro y San Pablo" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>San Pedro y San Pablo</h3>
            <div class="line"></div>
            <p>La festividad más importante del puerto. Pescadores y familias celebran a los santos patronos con procesiones en el mar sobre balsas adornadas, misas en la playa, danzas tradicionales y la famosa comida de santo.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Agosto</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/cruz_motupe.jpg" alt="La Cruz de Motupe" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>La Cruz de Motupe</h3>
            <div class="line"></div>
            <p>Devoción religiosa que atrae a miles de fieles. Se venera la cruz hallada en el cerro de Motupe, con procesiones, danzas y promesas. En Supe Puerto se realiza una réplica de la romería costeña.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">5 de<br>Diciembre</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/aniversario.jpg" alt="Aniversario de Supe Puerto" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>Aniversario de Supe Puerto</h3>
            <div class="line"></div>
            <p>Celebración cívica con desfile, elección de reina, conciertos, ferias gastronómicas y deportes. Se conmemora la creación política del distrito, con gran participación vecinal y orgullo porteño.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo<br>el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/pesca.jpg" alt="Pesca artesanal" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>Pesca Artesanal</h3>
            <div class="line"></div>
            <p>El alma del puerto. Los pescadores salen al amanecer en pequeñas embarcaciones usando redes y anzuelos. Técnicas transmitidas por generaciones, con respeto al ciclo marino y la vida costera.</p>
          </div>
        </div>
      </article>

      <article class="timeline-event">
        <div class="timeline-event__marker">
          <div class="timeline-event__dot"></div>
          <div class="timeline-event__date">Todo<br>el año</div>
        </div>
        <div class="timeline-event__card">
          <figure class="timeline-event__image">
            <img src="<?php echo esc_url( $base_img ); ?>/festividad/artesania.jpg" alt="Artesanías marinas" loading="lazy">
          </figure>
          <div class="timeline-event__body">
            <h3>Artesanías Marinas</h3>
            <div class="line"></div>
            <p>Mujeres y jóvenes del puerto elaboran collares, pulseras, lámparas y figuras decorativas con conchas, caracolas y estrellas de mar. Una expresión de creatividad y economía circular local.</p>
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
      <p class="myths-subtitle">Relatos ancestrales que envuelven la noche de Supe Puerto entre el mar y la tradición.</p>
    </header>
  </div>

  <div class="myths-accordion-wrap">
    <ul class="myths-accordion" aria-label="Acordeón de mitos y leyendas de Supe Puerto">
      <li class="myth-card is-active">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llama.jpg" alt="Las 3 llamas de oro perdidas" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="true" aria-controls="myth-llamas-content">
          <span class="myth-card__eyebrow">Leyenda ancestral</span>
          <span class="myth-card__title">Las 3 llamas de oro perdidas</span>
        </button>
        <div class="myth-card__content" id="myth-llamas-content" aria-hidden="false">
          <p>Cuenta la leyenda que tres llamas de oro macizo fueron escondidas por los antiguos pescadores para protegerlas de los conquistadores. Quien logre encontrar las tres será bendecido con la fortuna del mar, pero deberá enfrentar las pruebas del viento y la marea.</p>
        </div>
      </li>

      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/llorona.jpg" alt="La llorona" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-llorona-content">
          <span class="myth-card__eyebrow">Relato nocturno</span>
          <span class="myth-card__title">La llorona</span>
        </button>
        <div class="myth-card__content" id="myth-llorona-content" aria-hidden="true">
          <p>En las noches de luna llena, los pescadores escuchan el lamento de una mujer que recorre el malecón. Dicen que es el alma de una madre que perdió a sus hijos en el mar y ahora busca consuelo entre las olas. Quien la vea deberá lanzar una flor al agua para calmar su pena.</p>
        </div>
      </li>

      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/ahogado.jpg" alt="Los ahogados" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-ahogados-content">
          <span class="myth-card__eyebrow">Misterio del mar</span>
          <span class="myth-card__title">Los ahogados</span>
        </button>
        <div class="myth-card__content" id="myth-ahogados-content" aria-hidden="true">
          <p>Se dice que las almas de los pescadores que murieron en naufragios regresan en las noches de tormenta. Se aparecen como sombras que caminan sobre el agua pidiendo una oración. Si un bote se acerca demasiado, pueden confundir a los vivos y arrastrarlos al fondo.</p>
        </div>
      </li>

      <li class="myth-card">
        <img class="myth-card__image" src="<?php echo esc_url( $base_img ); ?>/leyenda/caballero.jpg" alt="El Caballero de la Playa" loading="lazy">
        <button class="myth-card__trigger" type="button" aria-expanded="false" aria-controls="myth-caballero-content">
          <span class="myth-card__eyebrow">Aparición costera</span>
          <span class="myth-card__title">El Caballero de la Playa</span>
        </button>
        <div class="myth-card__content" id="myth-caballero-content" aria-hidden="true">
          <p>Una antigua leyenda habla de un jinete sin cabeza que recorre las playas desiertas en las madrugadas. Monta un corcel blanco y lleva una armadura brillante. Quien lo encuentre debe responder a su enigma o será condenado a vagar con él por la orilla eternamente.</p>
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
      <p class="services-subtitle">Encuentra hoteles, restaurantes, bares y negocios locales para vivir la experiencia completa de Supe Puerto.</p>
    </header>

    <div class="services-tabs" role="tablist" aria-label="Categorías de servicios">
      <button class="service-tab" role="tab" data-tab="hoteles" aria-selected="false">Hoteles</button>
      <button class="service-tab" role="tab" data-tab="restaurantes" aria-selected="false">Restaurantes</button>
      <button class="service-tab" role="tab" data-tab="bar" aria-selected="false">Bar</button>
      <button class="service-tab" role="tab" data-tab="negocios" aria-selected="false">Negocios</button>
    </div>

    <!-- HOTELES -->
    <div class="service-panel" data-panel="hoteles" role="tabpanel" aria-label="Hoteles">
      <article class="service-card">
        <span class="service-card__icon">🏨</span>
        <h3>Hospedaje Puerto Azul</h3>
        <span class="service-card__tag">Familiar</span>
        <p>Hospedaje familiar cerca al malecón con habitaciones limpias y cómodas. Desayuno incluido y atención personalizada.</p>
        <div class="service-card__meta">
          <span>📍 Malecón principal</span>
          <span>💰 Desde S/50 la noche</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🏨</span>
        <h3>Hostal El Muelle</h3>
        <span class="service-card__tag">Económico</span>
        <p>Opciones económicas para el viajero independiente. Habitaciones simples y dobles a pasos del puerto pesquero.</p>
        <div class="service-card__meta">
          <span>📍 Cerca al puerto</span>
          <span>💰 Desde S/40 la noche</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🏨</span>
        <h3>Residencial Las Playas</h3>
        <span class="service-card__tag">Vista al mar</span>
        <p>Residencial con vista panorámica a la bahía. Ideal para estadías largas. Cuenta con cocina compartida y terraza.</p>
        <div class="service-card__meta">
          <span>📍 Zona de playas</span>
          <span>💰 Desde S/60 la noche</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">⛺</span>
        <h3>Zona de Camping</h3>
        <span class="service-card__tag">Aventura</span>
        <p>Área de camping autorizada en zonas costeras designadas. Ideal para grupos y viajeros con carpas propias.</p>
        <div class="service-card__meta">
          <span>📍 Playa La Isla</span>
          <span>💰 Desde S/15 por persona</span>
        </div>
      </article>
    </div>

    <!-- RESTAURANTES -->
    <div class="service-panel" data-panel="restaurantes" role="tabpanel" aria-label="Restaurantes">
      <article class="service-card">
        <span class="service-card__icon">🍽️</span>
        <h3>Restaurant El Puerto</h3>
        <span class="service-card__tag">Mariscos</span>
        <p>Especialidad en ceviche y platos de mariscos frescos frente al mar. Pescado llegado directamente del muelle cada mañana.</p>
        <div class="service-card__meta">
          <span>📍 Malecón Turístico</span>
          <span>🕐 8am – 6pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🍽️</span>
        <h3>Cevichería La Marina</h3>
        <span class="service-card__tag">Popular</span>
        <p>El favorito de los locales. Ceviche, chicharrón y parihuela a precio popular. Ambiente familiar y porciones generosas.</p>
        <div class="service-card__meta">
          <span>📍 Plaza central</span>
          <span>🕐 9am – 5pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🍽️</span>
        <h3>Restaurant Áspero</h3>
        <span class="service-card__tag">Criolla</span>
        <p>Cocina criolla tradicional con platos del día. Sudado, arroz con mariscos y chilcano en un ambiente acogedor.</p>
        <div class="service-card__meta">
          <span>📍 Jr. San Pedro</span>
          <span>🕐 10am – 7pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🍽️</span>
        <h3>Picantería del Mar</h3>
        <span class="service-card__tag">Tradicional</span>
        <p>Recetas ancestrales como el picante de yuyo y el reventado de cangrejo. Sabores auténticos que no encontrarás en otro lado.</p>
        <div class="service-card__meta">
          <span>📍 Mercado municipal</span>
          <span>🕐 7am – 3pm</span>
        </div>
      </article>
    </div>

    <!-- BAR -->
    <div class="service-panel" data-panel="bar" role="tabpanel" aria-label="Bar">
      <article class="service-card">
        <span class="service-card__icon">🍻</span>
        <h3>Bar El Ancla</h3>
        <span class="service-card__tag">Cócteles</span>
        <p>Cócteles tropicales, pisco sour y bebidas nacionales. El punto de encuentro nocturno de Supe Puerto con música local en vivo los fines de semana.</p>
        <div class="service-card__meta">
          <span>📍 Malecón</span>
          <span>🕐 5pm – 1am</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🌊</span>
        <h3>Beach Bar La Ola</h3>
        <span class="service-card__tag">Vista al mar</span>
        <p>Bar frente al mar con mesas en la arena. Refrescantes bebidas, piqueos de mariscos y atardeceres únicos frente al Pacífico.</p>
        <div class="service-card__meta">
          <span>📍 Playa La Isla</span>
          <span>🕐 12pm – 10pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🦐</span>
        <h3>El Rincón del Pescador</h3>
        <span class="service-card__tag">Ambiente local</span>
        <p>Bar con ambiente porteño auténtico. Chicha de jora, cerveza artesanal y piqueos de la casa en un rincón lleno de historia.</p>
        <div class="service-card__meta">
          <span>📍 Puerto artesanal</span>
          <span>🕐 4pm – 11pm</span>
        </div>
      </article>
    </div>

    <!-- NEGOCIOS -->
    <div class="service-panel" data-panel="negocios" role="tabpanel" aria-label="Negocios">
      <article class="service-card">
        <span class="service-card__icon">🏪</span>
        <h3>Mercado Municipal</h3>
        <span class="service-card__tag">Mercado</span>
        <p>El corazón comercial del pueblo. Pescado fresco, frutas, verduras, artesanías y productos locales a precio de primera mano.</p>
        <div class="service-card__meta">
          <span>📍 Centro de Supe Puerto</span>
          <span>🕐 5am – 2pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🐚</span>
        <h3>Artesanías del Mar</h3>
        <span class="service-card__tag">Souvenirs</span>
        <p>Tienda de artesanías con conchas, caracolas, figuras y joyas elaboradas por artesanos locales. El mejor recuerdo de tu visita.</p>
        <div class="service-card__meta">
          <span>📍 Malecón Turístico</span>
          <span>🕐 9am – 7pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🚣</span>
        <h3>Tours Supe Puerto</h3>
        <span class="service-card__tag">Turismo</span>
        <p>Agencia local de tours a Áspero, paseos en bote con pescadores y rutas de avistamiento de aves en el Totoral.</p>
        <div class="service-card__meta">
          <span>📍 Plaza de la Bandera</span>
          <span>🕐 7am – 5pm</span>
        </div>
      </article>

      <article class="service-card">
        <span class="service-card__icon">🏥</span>
        <h3>Farmacia San Pedro</h3>
        <span class="service-card__tag">Salud</span>
        <p>Farmacia local con medicamentos de primera necesidad, protector solar y artículos de higiene para el viajero.</p>
        <div class="service-card__meta">
          <span>📍 Jr. Lima</span>
          <span>🕐 8am – 10pm</span>
        </div>
      </article>
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
      <span class="section-tag">Visítanos</span>
      <h2 id="contactTitle">Contacto</h2>
    </header>

    <div class="contact-grid">
      <div class="contact-info">
        <h3>¿Cómo llegar?</h3>

        <div class="contact-info-item">
          <div class="contact-info-item__icon">📍</div>
          <div class="contact-info-item__text">
            <strong>Ubicación</strong>
            <span>Supe Puerto, Barranca, Lima – Perú</span>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚗</div>
          <div class="contact-info-item__text">
            <strong>Desde Lima</strong>
            <span>185 km por la Panamericana Norte. Aprox. 3 horas en auto.</span>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-item__icon">🚌</div>
          <div class="contact-info-item__text">
            <strong>En bus</strong>
            <span>Buses interprovinciales desde el Terminal Norte de Lima hacia Barranca, luego combi a Supe Puerto.</span>
          </div>
        </div>

        <div class="contact-info-item">
          <div class="contact-info-item__icon">☀️</div>
          <div class="contact-info-item__text">
            <strong>Mejor época</strong>
            <span>Verano (dic–mar) para playa. Fiestas de San Pedro: última semana de junio.</span>
          </div>
        </div>
      </div>

      <div id="map" role="application" aria-label="Mapa de Supe Puerto, Perú"></div>
    </div>

    <div class="contact-form-wrap">
      <h3>Escríbenos</h3>
      <form class="contact-form" aria-label="Formulario de contacto" novalidate>
        <div class="form-field">
          <label for="contact-name">Nombre</label>
          <input type="text" id="contact-name" name="name" placeholder="Tu nombre" autocomplete="name">
        </div>

        <div class="form-field">
          <label for="contact-email">Correo electrónico</label>
          <input type="email" id="contact-email" name="email" placeholder="tu@correo.com" autocomplete="email">
        </div>

        <div class="form-field">
          <label for="contact-topic">Tema</label>
          <select id="contact-topic" name="topic">
            <option value="">Selecciona un tema</option>
            <option value="turismo">Turismo</option>
            <option value="gastronomia">Gastronomía</option>
            <option value="servicios">Servicios</option>
            <option value="otro">Otro</option>
          </select>
        </div>

        <div class="form-field">
          <label for="contact-phone">Teléfono (opcional)</label>
          <input type="tel" id="contact-phone" name="phone" placeholder="+51 999 999 999" autocomplete="tel">
        </div>

        <div class="form-field full">
          <label for="contact-message">Mensaje</label>
          <textarea id="contact-message" name="message" placeholder="¿En qué podemos ayudarte?"></textarea>
        </div>

        <button type="submit" class="btn-primary">Enviar mensaje</button>
      </form>
    </div>
  </div>
</section>

</main>

<?php get_footer(); ?>
