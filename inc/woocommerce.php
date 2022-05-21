<?php 

if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' )))) {


	// Woocommerce support Подключается для переписывания вукомерс файлов.
	function pilomaterialy_add_woocommerce_support() {
	    add_theme_support( 'woocommerce' );
	}

	add_action( 'after_setup_theme', 'pilomaterialy_add_woocommerce_support' );	
	// отключаем садбар
	remove_action('woocommerce_sidebar','woocommerce_get_sidebar', 10);


	// //  отключаем закрывающий a у товара на странице arhive product
	// remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_product_link_close', 5);
	// // Добавили закрывающий а  после названия товара
	// add_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_link_close', 15); 

 //    // отключаем и подключаем модифицированный title продукта

	remove_action('woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title', 10);

	function p_CustomTitle(){
		echo '<h3 class="f-product-title"><a href="'. get_the_permalink() .'">'. get_the_title() .'</a></h3>';
	}

	add_action('woocommerce_shop_loop_item_title','p_CustomTitle', 15);

	// // Single img

	add_action('after_setup_theme','ale_woocommerse_plugin_setup');

	function ale_woocommerse_plugin_setup() {

		// add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );
		// add_theme_support( 'wc-product-gallery-slider' );
	}


	remove_action ('woocommerce_single_product_summary','woocommerce_template_single_title',5);

	function my_custom_single_title() {
		echo '<h3 class="product_title entry-title f-singlProduct_title">'. get_the_title() .'</h3>';
	}

	add_action('woocommerce_single_product_summary','my_custom_single_title',5);



	remove_action ('woocommerce_single_variation','woocommerce_single_variation',10);

	add_action('woocommerce_before_variations_form','woocommerce_single_variation',11);




	
	

	add_action('woocommerce_before_single_product','woocommerce_breadcrumb',15);



	add_action('woocommerce_before_cart_table','woocommerce_breadcrumb',10);
	add_action('woocommerce_cart_is_empty','woocommerce_breadcrumb',10);


	
	add_action('woocommerce_before_single_product_custom','woocommerce_output_content_wrapper',10);

}


