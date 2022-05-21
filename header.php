<?php global $header_option; ?>
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pilomaterialy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>



<div class="wrapper">
<header class="header" id="home">
	
	<div class="p-header_left">
		<h1 class="p-title"><?php echo $header_option['header-title']; ?></h1>
		<div class="p-logo">
			<img src="<?php echo get_template_directory_uri() . '/assets/img/logo.svg' ?>" alt="Пиломатериалы Дергачи" alt='Пиломатериалы Дергачи' width='60px' height='auto'>
			<span><?php echo $header_option['text-logo']; ?></span>
		</div>
		

	</div>
	<div class="p-header_right">
		<ul class="p-timeWork">
			<li>Оформить заказ вы можете по телефону и на сайте круглосуточно</li>
			<li>Склад работает:<b><?php echo $header_option['header-workTime1']; ?></b></li>
			<li><b><?php echo $header_option['header-workTime2']; ?></b></li>	
		</ul>
		
		<ul class="p-phoneNumber">
			<li><a href="tel:+38<?php echo $header_option['header-number3']; ?>"><?php echo $header_option['header-number3']; ?></a></li>
			<li><a href="tel:+38<?php echo $header_option['header-number1']; ?>"><?php echo $header_option['header-number1']; ?></a></li>

		</ul>
	</div>
</header >
</div>
<nav id="header_nav" class="default">
	<div class="wrapper menu_wrapper">
		<div class="hamburger">
			<div class="burger1"></div>
			<div class="burger2"></div>
			<div class="burger3"></div>
			<div class="burger4"></div>
		</div>	
		
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container' => 'false',
				)
			);
		?>
		<div class="p-cart">
			<a href="http://localhost/cart/" class="basket" alt='Корзина' title="Корзина">Корзина</a>
		</div>
		<div class="header_searchForm">
			<?php echo do_shortcode('[fibosearch]'); ?>
		</div>	
	
	</div>
</nav>
