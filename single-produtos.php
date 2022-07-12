<?php get_header(); ?>

<main role="main" class="">

	<div class="center">

		<?php get_template_part('loop'); ?>

		


	</div>

	<script type="text/javascript">
		let hash = window.location.hash;

		if (hash.includes("#")) {
			setTimeout(function () {

				let abas = jQuery('.bt_bb_tabs_header > li')

				for (var i = 0; i < abas.length; i++) {

					let textAba = abas.eq(i).text().toLowerCase();

					if (textAba.includes("promoções") && hash == "#promocoes") {
						abas.eq(i).click();
					}
					if (textAba.includes("hotéis") && hash == "#hoteis") {
						abas.eq(i).click();
					}
					if (textAba.includes("roteiro sugerido") && hash == "#roteiro-sugerido") {
						abas.eq(i).click();
					}
					if (textAba.includes("o destino") && hash == "#o-destino") {
						abas.eq(i).click();
					}
				}
			}, 800)

		}

		if (window.innerWidth > 980) {

			let elemTop = 0;


			jQuery(window).scroll(function(event){

				let windowTop = jQuery(window).scrollTop();
				let areaForm = jQuery(".aba-formulario");
				let form = jQuery(".aba-formulario form");
				let windowBottom = form.offset().top + form.height();


				let calc = windowTop -  form.height() - 320 



				if( windowTop < areaForm.offset().top) {
					elemTop = 0
				}

				else if ( windowTop - areaForm.height() <= 300  ) {
					elemTop = calc
				}

				form.stop().animate({
					"top" : elemTop+"px"
				}, "fast")


			});

		}

	</script>

</main>



<?php get_footer(); ?>