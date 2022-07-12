<div class="lista-catalogos">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="item-catalogo">
			<a href="<?php echo function_exists('get_field') ? get_field('link') : ''; ?>" title="<?php the_title(); ?>" target="_blank">

				<div class="box-text-catalogo">
					<h3><?php the_title(); ?></h3>

				</div>

				<div class="image-catalogo">
					<?php if ( has_post_thumbnail() ) : ?>

						<?php the_post_thumbnail('360x180'); ?>

						<?php else: ?>
							<img  src="<?php echo get_template_directory_uri(); ?>/img/360x180.png">
						<?php endif; ?>

					</div>

				</a>

			</div>		

		<?php endwhile; wp_reset_query();?>

		<?php else: ?>

			<article style="margin: auto; max-width: 600px;">
				<!-- article -->
				<h2 style="float:left;text-align: center;width: 100%;"><?php _e( 'Nada por aqui!', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>





	</div>