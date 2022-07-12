<?php get_header(); 
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args =  array(
	'post_type'=> 'produtos',
	's' => $_GET['s'],
	'orderby' => 'date',
	'order' => 'ASC',
	'posts_per_page' => 12,
	'paged' => $paged,
);

query_posts( $args );


?>

<main role="main" style="">
	<!-- section -->
	<section class="">

		<div style="padding: 0px 70px;">
			
			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo ' "'.get_search_query().'" '; ?></h1>
		</div>


		<?php get_template_part('loop-search'); ?>

		<div style="padding: 0px 70px;">
			
			<div class="pagination">
				<?php html5wp_pagination(); ?>
			</div>
		</div>

	</section>
	<!-- /section -->
</main>



<?php get_footer(); ?>
