<?php get_header();?>
  <section class="content">
    <section class="posts">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <article>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <?php the_content('Read More'); ?>
        <a href="<?php comments_link(); ?>"><?php comments_number('', '1 Comment', '% Comments'); ?></a>
      </article>
<?php endwhile; else : ?>
      <article>
        <p>No posts found.</p>
      <article>
<?php endif; ?>
    </section>
    <aside>
      <?php get_sidebar(); ?>
    </aside>
    <nav id="posts-navigation">
      <div class="nav-previous"><?php next_posts_link( __( '← Older' ) ); ?></div>
      <div class="nav-next"><?php previous_posts_link( __( 'Newer →' ) ); ?></div>
    </nav>
  </section>
<?php get_footer(); ?>