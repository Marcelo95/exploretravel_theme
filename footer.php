			<footer class="footer">
				<a class="botao-footer btn scrollTop">^</a>
				<?php
				$footer = get_page_by_path('footer'); 
				$content = apply_filters( 'the_content', $footer->post_content ); 
				echo $content;

				?>
				<script>
					if (jQuery('input[name="your-destino"]')) {
						jQuery('input[name="your-destino"]').val("<?php echo str_replace("&#8217;", "'", get_the_title());?>");
					}
				</script>


				<?php wp_footer(); ?>

			</footer>

		</body>
		</html>
