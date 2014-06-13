<?php
/*
Template name: productos
*/
?>


<?php get_header(); ?>

<section id="contenido">

		<!-- CONTENIDO HEADER -->
		<?php include("cabezal.php"); ?>
		<!-- CONTENIDO HEADER -->

		<!-- NAV -->
		<?php include("menu.php"); ?>
		<!-- NAV -->

		<section class="contenidoCentral">

			<hgroup>
				<h2>PRODUCTOS</h2>
			</hgroup>

			<a href="http://www.arquinovacolor.com.ar/revestimientos/">
				<div class="revestimientos">
					<h2>REVESTIMIENTOS PLASTICOS TEXTURADOS</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="http://www.arquinovacolor.com.ar/pinturas/">
				<div class="revestimientos">
					<h2>PINTURAS</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="http://www.arquinovacolor.com.ar/accesorios/">
				<div class="revestimientos">
					<h2>ACCESORIOS</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="">
				<div class="revestimientos">
					<h2>BARNIZ</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="http://www.arquinovacolor.com.ar/enduidos/">
				<div class="revestimientos">
					<h2>ENDUIDOS</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="">
				<div class="revestimientos">
					<h2>ESMALTES</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="http://www.arquinovacolor.com.ar/impermiabilizantes/">
				<div class="revestimientos">
					<h2>IMPERMIABILIZANTES</h2>
				</div> <!-- End of revestimientos -->
			</a>

			<a href="http://www.arquinovacolor.com.ar/impregnante/">
				<div class="revestimientos">
					<h2>IMPREGNANTE</h2>
				</div> <!-- End of revestimientos -->
			</a>

		</section> <!-- End of contenidoCentral -->

		<section id="transparencia">
			<section class="comoLlegar">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.7964995799503!2d-58.44598975000005!3d-34.5840154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5edd9be171d%3A0x6700691aa6a216d5!2sAv+C%C3%B3rdoba+6074%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1390592632573" width="1200" height="300" frameborder="0" style="border:0"></iframe>
			</section> <!-- End of comoLlegar -->
		</section> <!-- End of transparencia -->

		<section class="contacto">

			<figure>
				<img src="<?php bloginfo('template_directory'); ?>/img/img-final.jpg" alt="En Arquinova Color encontras todas estas marcas">
			</figure>

		</section> <!-- End of contacto -->

<?php get_footer(); ?>