<?php global $header_option; ?>

<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pilomaterialy
 */

?>
<div class="wrapper">
	<section class="section_delivery" id="delivery_section">
			<h2 class="delivery_title"><?php echo $header_option['delivery-text-title']; ?></h2>
			<div class="delivery_text_cont">
				<p class="delivery_text"><?php echo $header_option['delivery-text-subTitle']; ?></p>
				<ul class="delivery_list">
					<?php echo $header_option['delivery-text-productTitle']; ?>
				</ul>
				
				<p class="delivery_text">
					<?php echo $header_option['delivery-text2']; ?>
				</p>
			</div>
			<div class="delivery_text_cont">
				<p class="delivery_text">
					<?php echo $header_option['delivery-text3']; ?>
				</p>
			</div>
			<div class="delivery_text_cont">
				<h3 class="delivery_supTitle"><?php echo $header_option['delivery-name']; ?></h3>
				<div class="delivery_text_cont">
					<p class="delivery_text"><?php echo $header_option['delivery-info']; ?></p>
				</div>	

				<div class="delivery_text_cont">
					<p class="delivery_text"><?php echo $header_option['delivery-life']; ?></p>
			</div>
	</section>
	<footer >
		<div  id="contact">
			<div class="p-footerLeft" >
				<h3>Контакты</h3>
				<ul>
					<li><?php echo $header_option['footer_text']; ?></li>
					<li>Адрес: <?php echo $header_option['footer_infoAdress']; ?></li>
					<li>
						<ul class="footPhoneNumber">
							<li><a href="tel:+38<?php echo $header_option['header-number1']; ?>"> <?php echo $header_option['header-number1']; ?></a></li>
						
							<li><a href="tel:+38<?php echo $header_option['header-number3']; ?>"> <?php echo $header_option['header-number3']; ?></a></li>
						</ul>
					<li>
					<li>
						<ul class="f-social">
							<li>Мы в соц. сетях</li>
							<li><a href="https://www.instagram.com/<?php echo $header_option['footer_infoSocial1']; ?>">Инстаграм</a></li>
						</ul>
					</li>
					<li>
						<ul class="p-phoneMail f-phoneMail">
							<li><a href="mailto:<?php echo $header_option['footer_email']; ?>"><?php echo $header_option['footer_email']; ?></a></li>
						</ul>
					</li>
				</ul>
				<div class="p-footer-text">
					<h4><?php echo $header_option['footer_descTitle']; ?></h4>
					<p>
						
					</p>


				</div>
			</div>
			<div class="p-footer-right">
				<div class="f-mapContainer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1075.7256367599998!2d36.10758317496114!3d50.1139690550535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1630328636810!5m2!1sru!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>			
				</div>

			</div>
	</footer>
</div>
<div class="wrapper">
<div class="copy">© А. С. Домарацкий, 2022</div>
</div>

<?php wp_footer(); ?>

</body>
</html>
