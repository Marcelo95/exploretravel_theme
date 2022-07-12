<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' -'; } ?> <?php bloginfo('name'); ?></title>
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>

	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="shortcut icon">
	<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">



	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-142675561-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!-- End Google Analytics -->
	



</head>
<body <?php body_class(); ?>>

	<!-- header -->
	<header class="header clear" role="banner">

		<!--Header builder BEGIN-->
		<?php do_action('stm_hb', array('header' => 'stm_hb_settings')); ?>
		<!--Header builder END-->

	</header>
	<!-- /header -->


	<section class="banner-topo">
		
		<?php if (!is_home() && !is_front_page()  ) { ?>

			<?php


			if ( has_post_thumbnail() && !is_post_type_archive('catalogos') && !is_search()) {
				?>

				<?php the_post_thumbnail();?>


				<?php 

			}

			elseif( is_post_type_archive('catalogos') ) {

				echo "<img  src='".get_template_directory_uri()."/img/catalogos.jpg'>";
			}
			else {

				echo "<img  src='".get_template_directory_uri()."/img/destinos.jpg'>";
			}

			?>
			<ol class="breadcrumb">
				<li>
					<a href="<?php echo home_url(); ?>">Home</a>
				</li>
				<?php get_links_breadcrumbs(); ?>
				<li class="active">
					<?php if(is_post_type_archive('produtos') ){ ?>
						<b><?php _e('Produtos','html5blank')?></b>
					<?php } elseif(is_post_type_archive('catalogos')) { ?>
						<b><?php _e('Catálogos','html5blank');?></b>
					<?php } elseif(is_search()) { ?>
						<b><?php _e('Pesquisa','html5blank');?></b>
					<?php } else { ?>
						<b><?php the_title();?></b>
					<?php } ?>
				</li>
			</ol>
			<?php


		}		

		?>
	</section>
