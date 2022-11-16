<?php get_header(); ?>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  <?php endwhile; else: ?>
    <p><?php _e('Descupe, nenhum post com seu(s) critério(s) encontrado(s)!') ?></p>
  <?php endif;  ?>

<?php get_footer() ?>