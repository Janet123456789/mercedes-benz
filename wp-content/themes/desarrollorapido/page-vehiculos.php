<?php
  if(have_posts()) :
    while(have_posts()) : the_post();
 ?>
 <?php get_header()?>
  <h2><?php the_title(); ?></h2>
  <p><?php the_content(); ?></p>
<?php endwhile;
else :
  echo "<p>no hay contenido que mostrar</p>";
endif;
 ?>



