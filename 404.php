<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<!-- article -->
		<article id="post-404">

			<h1 class="text-center"><?php _e( 'Page not found', 'html5blank' ); ?></h1>

			<h2 class="text-center"><?php _e( 'Preencha o formulário abaixo que entraremos em contato!', 'html5blank' ); ?></h2>

			<div style="margin: auto; max-width: 600px;">
				<div style="margin:20px;">
					<?php echo do_shortcode('[contact-form-7 title="Formulário de contato 1"]');?>
				</div>
			</div>


			<h2 class="text-center">
				<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
			</h2>

		</article>
		<!-- /article -->

	</section>
	<!-- /section -->
</main>


<?php get_footer(); ?>
