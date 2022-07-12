	<?php

	$html = '<div class="center">';
	$html .= '<div class="init-slider-1">';
	$html .= '<div class="slider-1">';

	if ($query->have_posts()): while ($query->have_posts()) : $query->the_post(); 

		$html .= '<div>';
		$html .= '<a href="'.get_the_permalink().' " title="'.get_the_title().'">';

		if ( has_post_thumbnail()) : 
			$html .= '<img  src="'.get_the_post_thumbnail_url('full').'">';

		else: 
			$html .= '<img  src="'.get_template_directory_uri().'/img/320x230.png">';
		endif; 


		$html .= '<p class="title-promo">';
		$html .= '<b>'.get_the_title().'</b>';
		$html .= '</p>';
		$html .= '<p> '.get_the_content().' </p>';
		$html .= '</a>';
		$html .= '</div>';

	endwhile;  endif; 


	$html .= '</div>';
	$html .= '<div class="setas-lider slider-1-seta-esquerda"></div>';
	$html .= '<div class="setas-lider slider-1-seta-direita"></div>';
	$html .= '</div>';
	$html .= '</div>';