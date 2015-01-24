<?php get_header(); ?>
	<div class="container">
		<div id="content single" class="clearfix row">
			<div id="main" class="col-sm-8 clearfix bg-color-secondary" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php the_post_thumbnail( 'wpbs-featured' ); ?>

				<h1 itemprop="headline"><?php the_title(); ?></h1>

				<p class="meta"><?php _e("Posted", "wpbootstrap"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php echo get_the_date('F jS, Y', '','', FALSE); ?></time> <?php _e("by", "wpbootstrap"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "wpbootstrap"); ?> <?php the_category(', '); ?>.</p>

				<?php the_content(); ?>

				<?php wp_link_pages(); ?>

					<footer>

						<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>

						<?php
						// only show edit button if user has permission to edit posts
						if( $user_level > 0 ) {
						?>
						<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
						<?php } ?>

					</footer> <!-- end article footer -->

				</article> <!-- end article -->

				<?php comments_template('',true); ?>

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

			<?php get_sidebar(); // sidebar 1 ?>

		</div> <!-- end #content -->
	</div>
<?php get_footer(); ?>