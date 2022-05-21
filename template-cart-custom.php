<?php 

/*
	Template name:Pilomaterialy Tamplate Cart Custom 
*/

get_header(); ?>

		<div class="wrapper">
			<?php
			while ( have_posts() ) :
				the_post();

				the_content();
		
			endwhile; // End of the loop.
			?>
		</div>

<?php get_footer(); ?>