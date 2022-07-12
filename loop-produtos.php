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
							<?php elseif(is_page()): ?>
								<div class="box-resumo">
									<p>
										<?php the_content(); ?>
									</p>
								</div>

							<?php endif; ?>
						</div>
					</a>

				</div>		

			<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
				<h2 style="float:left;text-align: center;width: 100%;"><?php _e( 'Preencha o formulário abaixo que entraremos em contato!', 'html5blank' ); ?></h2>

			<article style="margin: auto; max-width: 600px;">
				<div style="margin:20px;">
					<?php echo do_shortcode('[contact-form-7 title="Formulário de contato 1"]');?>
				</div>
			</article>
			<!-- /article -->

		<?php endif; ?>





		</div>