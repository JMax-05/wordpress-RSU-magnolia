<?php
$barranca_district = barranca_current_district();
$barranca_name = $barranca_district ? $barranca_district['name'] : get_bloginfo( 'name' );
$barranca_footer_desc = $barranca_district ? $barranca_district['footer_desc'] : get_bloginfo( 'description' );
?>
<footer class="footer">
  <div class="container footer-grid">
    <section>
      <h3><?php echo esc_html( $barranca_name ); ?></h3>
      <p><?php echo esc_html( $barranca_footer_desc ); ?></p>
    </section>
    <nav aria-label="Pie de pagina">
      <h4>Secciones</h4>
      <ul>
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
    </nav>
    <section>
      <h4>Contacto</h4>
      <p>Peru - Barranca</p>
      <p><?php echo esc_html( $barranca_name ); ?></p>
    </section>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
