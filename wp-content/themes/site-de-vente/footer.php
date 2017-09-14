<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Site_de_Vente
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" style="background-color:#141414;">
		<div class="row primary-footer">
			<div class="col-md-3 offset-md-1">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo();?></a>
			</div>
			<div class="col-md-3 informations">
				<h4>INFORMATIONS</h4>
				<hr>
				Mon compte <br>
				Mes commandes<br>
				Mes adresses<br>
				Livraison et retour
			</div>
			<div class="site-info col-md-3 contact">
			<h4>CONTACT</h4>
				<hr>
				+33 6 35 79 58 89
				contact@OnlineSale.com
			</div><!-- .site-info -->
    	</div><!-- .primary-footer -->
		<div class="row secondary-footer ">
			<div class="col-md-7 offset-4">
				© Copyright OnlineSale 2017 © - Tous droits réservés 
			</div>
		</div><!-- .secondary-footer -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
