<?php
$barranca_district = barranca_current_district();
$barranca_name = $barranca_district ? $barranca_district['name'] : get_bloginfo( 'name' );
$barranca_desc = $barranca_district ? $barranca_district['description'] : get_bloginfo( 'description' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo esc_attr( $barranca_desc ); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#inicio">Saltar al contenido</a>

<header class="header" id="siteHeader">
  <nav class="navbar container" aria-label="Navegacion principal">
    <a class="logo" href="#inicio"><?php echo esc_html( $barranca_name ); ?></a>
    <ul class="nav-links" id="primaryNavigation">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">&#8592; Provincia</a></li>
      <li><a href="#inicio">Inicio</a></li>
      <li><a href="#historia">Historia</a></li>
      <li><a href="#turismo">Turismo</a></li>
      <li><a href="#gastronomia">Gastronomia</a></li>
      <li><a href="#tradiciones">Tradiciones</a></li>
      <li><a href="#mitos">Mitos</a></li>
      <li><a href="#servicios">Servicios</a></li>
      <li><a href="#galeria">Galeria</a></li>
      <li><a href="#contacto">Contacto</a></li>
    </ul>
    <button class="hamburger" type="button" aria-label="Abrir menu" aria-controls="primaryNavigation" aria-expanded="false">
      <span aria-hidden="true"></span><span aria-hidden="true"></span><span aria-hidden="true"></span>
    </button>
  </nav>
</header>
