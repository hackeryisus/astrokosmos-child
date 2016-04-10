<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */
?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

				<div class="row">
					<div class="footer-newsletter col-xs-12 col-sm-6 col-lg-4">
						<h3>Astrokosmos Ofertas</h3>
						<p>¿Quieres recibir informacion acerca de nuestras ofertas, nuevos productos, y promociones?</p>
						<input type="text" name="name" value="Introduce tu email">
						<button type="button" name="send">Enviar</button>
					</div>
					<div id="footer-findus" class=" col-xs-12 col-sm-6 col-lg-4 center-xs">
						<h3>Encuentranos en:</h3>
						<ul class="contactbar row around-xs">
							<li class="contactbar-item"><a href="#" target="_blank"><i class="fa fa-facebook-official"></i></a></li>
							<li class="contactbar-item"><a href="#" target="_blank"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div id="footer-direcction" class="col-xs-12 col-lg-4 center-xs start-md">
						<p>Calle Margaritas 817-E Colonia Bugambilias 72440 Puebla, Puebla, Mexico</p>
						<p>Lun - Vier 9-8 / Sab 10-6</p>
						<p>contacto@astrokosmos.com</p>
					</div>
				</div>


		</div><!-- .col-full -->
		<div id="footer-copyright" class="row around-xs">
			<p class="">©2016 Astrokosmos. Todos los derechos reservados.</p>
			<p>Este sitio, los elementos de diseño, contenido, son propiedad de Astrokosmos y no deben de ser usados para ningun proposito sin el consentimienot previo por escrito de Astrokosmos</p>
			<p>Desarrollado con <i class="fa fa-heart"></i> por: <a href="#">Monitosdigitales.com</a></p>
		</div>
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
