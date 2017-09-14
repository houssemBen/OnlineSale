<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Site_de_Vente
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	 <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body  style="background-image:url(<?php echo wp_get_attachment_url(get_theme_mod('sv_background')) ?>)" <?php body_class(); ?> >
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'site-de-vente' ); ?></a>

	<header id="masthead" class="site-header container-fluid " style="background-color:#141414;" >
			<div class="site-branding  col-md-2 offset-md-5" style="padding-top:60px;">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo();?></a>
			</div><!-- .site-branding -->
	
		<div id="site-navigation" class="main-navigation row">
			<div class="col-md-10 offset-2">
		
		<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'depth' => 4,
					'container' => 'nav',
					'menu_class' => 'nav navbar',
				));
			?>
		</div>
		</div><!-- #site-navigation -->
		
		<div class="container-fluid" style="display:none" id="primary_menu2">
			<div class="row test">
				<div class="col-md-3 logo_navbar_first_part">
					<a style="text-decoration: none;color:white;" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img style="height: 25px;width: 180px;" src="/OnlineSale/wp-content/themes/site-de-vente/images/logo.png" alt="logo"></a>
				</div>
				<div class="primary-menu2  col-md-9 content_navbar_second_part">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id' => 'primary-menu2',
							'container' => false,
							'menu_class' => 'nav navbar',
						));
					?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<script>
		jQuery.noConflict();
		jQuery(document).ready(function() {
			
			//icone font awesome pour panier
			jQuery('.menu-item-23 a').html('MON PANIER <i class="fa fa-shopping-cart"></i>');
			
			
			//show the dropdown menu 
			jQuery('#menu-item-63').addClass('dropdown');
			jQuery('#menu-item-21').addClass('dropdown');
			jQuery('.sub-menu').addClass('dropdown-menu');
			
			//change the nav color for the first navbar 
			 var url = window.location;
        jQuery('#primary-menu2 li a[href="'+ url +'"]').addClass('active');
        jQuery('#primary-menu2 li a').filter(function() {
             return this.href == url;
        }).addClass('active');
			
			
			//change the nav color for the fixed top navbar 
			 var url = window.location;
        jQuery('#menu-menu-1 li a[href="'+ url +'"]').addClass('active');
        jQuery('#menu-menu-1 li a').filter(function() {
             return this.href == url;
        }).addClass('active');
			
			
			//nav fixed to the top
		jQuery(window).bind('scroll', function () {
   		 if (jQuery(window).scrollTop() > 380) {
			  jQuery('#primary_menu2').css({"display":"block"});
       		  jQuery('#primary_menu2').addClass('fixed-top fixed-nav');
			 
			 // for the slide animation for the fixed navbar 
			 if (jQuery(window).scrollTop() > 381) {
						jQuery('.test').addClass('animation_de_la_classe_test_fixed_navbar');
				 		jQuery('.content_navbar_second_part').addClass('animation_de_content_navbar_second_part');
					    jQuery('.logo_navbar_first_part').addClass('animation_de_logo_first_part');
			 		} else {
				 		jQuery('.test').removeClass('animation_de_la_classe_test_fixed_navbar');
				 		jQuery('.content_navbar_second_part').removeClass('animation_de_content_navbar_second_part');
						jQuery('.logo_navbar_first_part').removeClass('animation_de_logo_first_part');
					}
		 } else {
			 jQuery('#primary_menu2').css({"display":"none"});
      	 	 jQuery('#primary_menu2').removeClass('fixed-top fixed-nav ');
    	}
			
}); 
			});
		</script>
	
	<div id="content" class="site-content" >
		
		
		
