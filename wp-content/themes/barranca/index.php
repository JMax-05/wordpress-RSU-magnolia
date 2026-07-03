<?php get_header(); ?>
<main>
  <div class="container" style="padding: 120px 0; text-align: center;">
    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: clamp(42px,6vw,60px); color: #1a1400;">
      <?php bloginfo( 'name' ); ?>
    </h1>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div><?php the_content(); ?></div>
    <?php endwhile; endif; ?>
  </div>
</main>
<?php get_footer(); ?>
