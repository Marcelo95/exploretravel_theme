<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="center text-center">
					<header class="bt_bb_headline title-page bt_bb_dash_none bt_bb_size_inherit bt_bb_superheadline bt_bb_align_center"><h2><span class="bt_bb_headline_superheadline"><?php the_title(); ?></span></h2></header>
					<?php the_content(); ?>
					<br><br>
				</div>
				

				<?php

				if (is_child(get_page_by_path('destinos')->ID) || is_child(get_page_by_path('ski')->ID)) {
					
					$args =  array(
						'post_type'=> 'page',
						'post_parent'=> get_the_ID(),
    					//'category_name'  => 'documentacao',
						'orderby' => 'date',
						'order' => 'ASC',
						'posts_per_page' => -1
					);

					$pages = query_posts( $args );

					if (count( $pages )) {
						get_template_part('loop-pages');
					}

					else{

						wp_reset_query();

						$args["post_type"] = "produtos";
					$args["category_name"] = get_post_field( 'post_name', get_post()); // slug page
					unset( $args["post_parent"] );

					query_posts( $args );
					get_template_part('loop-produtos');

					wp_reset_query();

				}

			}



			?>






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
