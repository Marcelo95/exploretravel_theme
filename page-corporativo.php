<?php get_header(); ?>

<main role="main estilo-page-1">
	<!-- section -->
	<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class=" text-center">
				<header class="bt_bb_headline title-page bt_bb_dash_none bt_bb_size_inherit bt_bb_superheadline bt_bb_align_center"><h2><span class="bt_bb_headline_superheadline"><?php the_title(); ?></span></h2></header>
				<?php the_content(); ?>
				<br><br>
			</div>
			

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>



<?php get_footer(); ?>
