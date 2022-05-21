<?php 

/*
	Template name:Pilomaterialy Tamplate Cart 
*/

get_header(); ?>

		<div class="wrapper">
			<div class="my-breadcrumb"><?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {
					woocommerce_breadcrumb();
				}
			?>
			 	
			 </div>
			
			<?php
			while ( have_posts() ) :
				the_post();

				the_content();
		
			endwhile; // End of the loop.
			?>

		</div>

<?php get_footer(); ?>