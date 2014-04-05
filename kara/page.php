<?php get_header();?>
  <section class="content"><?php

while(have_posts()) :
  the_post();

?>
    <article class="page">
      <h1><?php the_title(); ?></h1>
      <?php the_content('Read More'); ?>
    </article><?php

endwhile;

?>
  </section>
<?php get_footer(); ?>