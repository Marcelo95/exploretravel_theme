<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section>
			<!-- article -->
			<article class="center">

				<div class="">
					<header class="bt_bb_headline title-page bt_bb_dash_none bt_bb_size_inherit bt_bb_superheadline bt_bb_align_center"><h2><span class="bt_bb_headline_superheadline"><?php _e('Catálogos','html5blank'); ?></span></h2></header>
					<br><br>
				</div>

				<?php


				$args =  array(
					'post_type'=> 'catalogos',
    					//'category_name'  => 'documentacao',
					'orderby' => 'date',
					'order' => 'ASC',
					'posts_per_page' => -1
				);

				//$pages = query_posts( $args );


				query_posts( $args );
				get_template_part('loop-catalogos');

				?>



				<div style="padding: 0px 70px;display: flex;">

					<?php get_template_part('pagination'); ?>
				</div>


			</article>


	</section>
	<!-- /section -->
</main>



<?php get_footer(); ?>
