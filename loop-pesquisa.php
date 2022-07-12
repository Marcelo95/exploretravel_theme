		<article>

			<ul>
				
			<?php if (have_posts()): while (have_posts()) : the_post(); ?>


				<li id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>


				</li>


			<?php endwhile; ?>

			<?php else: ?>


				<li><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></li>


			<?php endif; ?>

			</ul>
		</article>