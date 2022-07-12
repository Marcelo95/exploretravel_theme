<div class="lista-produtos">

	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>


		<div class="item-produto">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php if ( function_exists('get_field') && get_field('imagem')) : ?>
				<img  src='<?php echo get_field('imagem'); ?>'>

				<?php else: ?>
					<img  src="<?php echo get_template_directory_uri(); ?>/img/480x550.png">
				<?php endif; ?>



				<div class="mask-produto"></div>
				<div class="box-text">
					<h3><?php the_title(); ?></h3>

					<?php if ( has_excerpt()) : ?>
						<div class="box-resumo">
							<p>
								<?php the_excerpt(); ?>
							</p>
						</div>
						<?php elseif( get_the_content() ): ?>
							<div class="box-resumo">
								<?php the_content(); ?>
							</div>

						<?php endif; ?>
					</div>
				</a>

			</div>		


		<?php endwhile; wp_reset_query();?>

		<?php else: ?>

			<!-- article -->
			<article>
				<h2><?php _e( 'Nenhum resultado por aqui...', 'html5blank' ); ?></h2>
			</article>
			<!-- /article -->

		<?php endif; ?>


	</div>