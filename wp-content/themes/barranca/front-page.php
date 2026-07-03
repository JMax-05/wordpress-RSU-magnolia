<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre la Provincia de Barranca, Peru. Cultura milenaria, gastronomia, playas y tradicion andino-costera.">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header" id="siteHeader">
  <nav class="navbar container">
    <span class="logo">Provincia de Barranca</span>
    <ul class="nav-links">
      <li><a href="#distritos">Distritos</a></li>
      <li><a href="#sobre">La Provincia</a></li>
      <li><a href="#equipo">Equipo</a></li>
    </ul>
  </nav>
</header>

<!-- HERO -->
<section class="hero">
  <div class="hero__bg"></div>
  <div class="hero__overlay"></div>
  <div class="hero__content">
    <div class="hero__tag">Lima Region — Peru</div>
    <h1 class="hero__title">Provincia de<br><span>Barranca</span></h1>
    <p class="hero__subtitle">Cinco distritos, una sola identidad. Civilizaciones milenarias, playas del Pacifico y una gastronomia que cuenta la historia de su gente.</p>
    <div class="hero__scroll">
      <span class="hero__scroll-line"></span>
      Explorar distritos
      <span class="hero__scroll-line"></span>
    </div>
  </div>
</section>

<!-- DISTRICTS -->
<section class="districts" id="distritos">
  <div class="container">
    <div class="section-tag">Cinco destinos unicos</div>
    <h2 class="section-title">Elige tu destino</h2>
    <p class="section-sub">Cada distrito de Barranca guarda su propia identidad, historia y riqueza. Descubrelos todos.</p>

    <div class="districts-grid">

      <!-- Supe Puerto — FEATURED -->
      <a class="district-card district-card--featured" data-district="supepuerto" href="<?php echo esc_url( home_url( '/supe-puerto/' ) ); ?>">
        <div class="district-card__img">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/supe-puerto/images/hero/hero1.jpg' ); ?>" alt="Supe Puerto">
        </div>
        <div class="district-card__overlay"></div>
        <div class="district-card__accent"></div>
        <div class="district-card__body">
          <h3 class="district-card__name">Supe Puerto</h3>
          <p class="district-card__desc">Puerto pesquero de tradicion milenaria. Puerta de entrada a Aspero y la Civilizacion Caral. Playas, gastronomia y la festividad de San Pedro y San Pablo.</p>
          <span class="district-card__btn">
            Explorar
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </span>
        </div>
      </a>

      <!-- Barranca -->
      <a class="district-card" data-district="barranca" href="<?php echo esc_url( home_url( '/barranca/' ) ); ?>">
        <div class="district-card__img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/c/ca/Cristo_redentor_barranca.jpg" alt="Barranca">
        </div>
        <div class="district-card__overlay"></div>
        <div class="district-card__accent"></div>
        <div class="district-card__body">
          <h3 class="district-card__name">Barranca</h3>
          <p class="district-card__desc">Capital provincial. Playas, malecon y la famosa cachanga. Ciudad costera llena de vida y tradicion.</p>
          <span class="district-card__btn">
            Explorar
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </span>
        </div>
      </a>

      <!-- Paramonga -->
      <a class="district-card" data-district="paramonga" href="<?php echo esc_url( home_url( '/paramonga/' ) ); ?>">
        <div class="district-card__img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/0c/Paramonga_Fortress_%26_Observatory%2C_Peru.jpg" alt="Paramonga">
        </div>
        <div class="district-card__overlay"></div>
        <div class="district-card__accent"></div>
        <div class="district-card__body">
          <h3 class="district-card__name">Paramonga</h3>
          <p class="district-card__desc">Hogar de la imponente Fortaleza Chimu. Arquitectura preincaica, caña de azucar y devocion a San Jeronimo.</p>
          <span class="district-card__btn">
            Explorar
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </span>
        </div>
      </a>

      <!-- Pativilca -->
      <a class="district-card" data-district="pativilca" href="<?php echo esc_url( home_url( '/pativilca/' ) ); ?>">
        <div class="district-card__img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/Bolivarpativilca.jpg" alt="Pativilca">
        </div>
        <div class="district-card__overlay"></div>
        <div class="district-card__accent"></div>
        <div class="district-card__body">
          <h3 class="district-card__name">Pativilca</h3>
          <p class="district-card__desc">Donde Simon Bolivar escribio su celebre carta antes de la Batalla de Junin. Historia, rio y campiña verde.</p>
          <span class="district-card__btn">
            Explorar
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </span>
        </div>
      </a>

      <!-- Supe -->
      <a class="district-card" data-district="supe" href="<?php echo esc_url( home_url( '/supe/' ) ); ?>">
        <div class="district-card__img">
          <img src="https://upload.wikimedia.org/wikipedia/commons/4/4a/Mayor_Pyramid_and_circular_enclosure._Caral%2C_Peru.jpg" alt="Supe">
        </div>
        <div class="district-card__overlay"></div>
        <div class="district-card__accent"></div>
        <div class="district-card__body">
          <h3 class="district-card__name">Supe</h3>
          <p class="district-card__desc">Valle donde nacio Caral, la civilizacion mas antigua de America. Piramides de 5000 años en un valle vivo.</p>
          <span class="district-card__btn">
            Explorar
            <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 8h10M9 4l4 4-4 4"/></svg>
          </span>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="about" id="sobre">
  <div class="container">
    <div class="about-grid">
      <div class="about__img-wrap">
        <img src="https://upload.wikimedia.org/wikipedia/commons/b/ba/Pescadores_de_Pacifico.jpg" alt="Provincia de Barranca">
      </div>
      <div class="about__text">
        <div class="section-tag">Historia y geografia</div>
        <h2 class="section-title">Sobre la Provincia</h2>
        <p>La <strong>Provincia de Barranca</strong> se ubica en el norte de la region Lima, bañada por el oceano Pacifico y recorrida por el rio Pativilca. Su territorio abarca desde la costa hasta los primeros contrafuertes andinos.</p>
        <p>Su historia se extiende mas de <strong>5000 años</strong> hasta la Civilizacion Caral, una de las primeras del mundo. Hoy, sus cinco distritos combinan arqueologia, pesca artesanal, agro-industria y turismo de naturaleza.</p>
        <p>Cada distrito conserva tradiciones unicas: la festividad de <strong>San Pedro</strong> en Supe Puerto, la <strong>Fortaleza Chimu</strong> de Paramonga, la <strong>Carta de Bolivar</strong> en Pativilca y las piramides de <strong>Caral</strong> en el valle de Supe.</p>
        <div class="about__stats">
          <div class="stat"><div class="stat__num">5</div><div class="stat__label">Distritos</div></div>
          <div class="stat"><div class="stat__num">5000</div><div class="stat__label">Años de historia</div></div>
          <div class="stat"><div class="stat__num">185 km</div><div class="stat__label">Desde Lima</div></div>
          <div class="stat"><div class="stat__num">1 UNESCO</div><div class="stat__label">Patrimonio mundial</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="team" id="equipo">
  <div class="container">
    <div class="section-tag">Grupo de trabajo</div>
    <h2 class="section-title">Nuestro Equipo</h2>
    <p class="section-sub">Estudiantes que presentan la identidad cultural y turistica de la Provincia de Barranca.</p>
    <div class="team-grid">

      <div class="team-card">
        <div class="team-card__avatar">
          <img src="https://i.pravatar.cc/200?u=luisdiaz01" alt="Luis Diaz">
        </div>
        <div class="team-card__num">Integrante 01</div>
        <h3>Luis Diaz</h3>
        <p>Supe Puerto</p>
      </div>

      <div class="team-card">
        <div class="team-card__avatar">
          <img src="https://i.pravatar.cc/200?u=jaircauso02" alt="Jair Causo">
        </div>
        <div class="team-card__num">Integrante 02</div>
        <h3>Jair Causo</h3>
        <p>Barranca</p>
      </div>

      <div class="team-card">
        <div class="team-card__avatar">
          <img src="https://i.pravatar.cc/200?u=margaritareyes03" alt="Margarita Reyes">
        </div>
        <div class="team-card__num">Integrante 03</div>
        <h3>Margarita Reyes</h3>
        <p>Paramonga</p>
      </div>

      <div class="team-card">
        <div class="team-card__avatar">
          <img src="https://i.pravatar.cc/200?u=rudapena04" alt="Ruda Peña">
        </div>
        <div class="team-card__num">Integrante 04</div>
        <h3>Ruda Peña</h3>
        <p>Pativilca</p>
      </div>

      <div class="team-card">
        <div class="team-card__avatar">
          <img src="https://i.pravatar.cc/200?u=maxtrujillo05" alt="Max Trujillo">
        </div>
        <div class="team-card__num">Integrante 05</div>
        <h3>Max Trujillo</h3>
        <p>Supe</p>
      </div>

    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer__logo">Provincia de Barranca</div>
        <p class="footer__desc">Cinco distritos, una sola identidad costera y andina del norte de Lima, Peru.</p>
      </div>
      <div>
        <h4>Distritos</h4>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/supe-puerto/' ) ); ?>">Supe Puerto</a></li>
          <li><a href="<?php echo esc_url( home_url( '/barranca/' ) ); ?>">Barranca</a></li>
          <li><a href="<?php echo esc_url( home_url( '/paramonga/' ) ); ?>">Paramonga</a></li>
          <li><a href="<?php echo esc_url( home_url( '/pativilca/' ) ); ?>">Pativilca</a></li>
          <li><a href="<?php echo esc_url( home_url( '/supe/' ) ); ?>">Supe</a></li>
        </ul>
      </div>
      <div>
        <h4>Como llegar</h4>
        <ul>
          <li><a href="#">185 km de Lima</a></li>
          <li><a href="#">Panamericana Norte</a></li>
          <li><a href="#">Terminal Norte Lima</a></li>
        </ul>
      </div>
      <div>
        <h4>Proyecto</h4>
        <ul>
          <li><a href="#equipo">Nuestro Equipo</a></li>
          <li><a href="#sobre">Sobre la Provincia</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">© 2025 Provincia de Barranca — Peru. Todos los derechos reservados.</div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
