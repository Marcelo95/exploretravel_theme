<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="center">
				<header class="bt_bb_headline title-page bt_bb_dash_none bt_bb_size_inherit bt_bb_superheadline bt_bb_align_center"><h2><span class="bt_bb_headline_superheadline"><?php _e('Produtos','html5blank'); ?></span></h2></header>
				<br><br>
			</div>

			<?php


			$args =  array(
				'post_type'=> 'produtos',
    					//'category_name'  => 'documentacao',
				'orderby' => 'date',
				'order' => 'ASC',
				//'posts_per_page' => -1
			);



			query_posts( $args );
			get_template_part('loop-produtos');


			?>

			<div style="padding: 0px 70px;display: flex;">

				<?php get_template_part('pagination'); wp_reset_query();?>
			</div>

		</article>

	</section>
	<!-- /section -->
</main>



<?php get_footer(); ?>
