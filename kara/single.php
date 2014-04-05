<?php get_header();?>
  <section class="content"><?php

if(have_posts()) :
	while(have_posts()) :
    the_post();

?>
	  <article>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php the_content(); ?>
      <?php comments_template(); ?>
    </article><?php

  endwhile;
else :

?>
    <article>
      <p>No posts found.</p>
    <article><?php

endif;

?>
  </section>
  <aside>
    <?php get_sidebar(); ?>
  </aside>
<?php get_footer(); ?>