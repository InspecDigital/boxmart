<?php get_header(); ?>
  <div class="container">
    <div id="main" class="row col-md-8 col-md-offset-2 clearfix bg-color-secondary" role="main">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
        <?php the_content(); ?>
      <?php endwhile; ?>
      <?php else : ?>
      <article id="post-not-found">
          <header>
            <h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
          </header>
          <section class="post_content">
            <p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
          </section>
          <footer>
          </footer>
      </article>
      <?php endif; ?>
    </div> <!-- end #main -->
  </div>
<?php get_footer(); ?>