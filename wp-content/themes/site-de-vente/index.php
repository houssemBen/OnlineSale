<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Site_de_Vente
 */

get_header(); ?>

	<div id="primary" class="content-area"  >
		<main id="main" class="site-main" >
			
			<div class="container" style="margin-bottom:20px;">
				
				<center>
					<h3 class="Title">Bijoux Broderie de Perles DIADANA</h3>
				</center>
				
				<center>
					<div class="description">

						<?php
							$description = get_page_by_title( 'Description');
							echo  $description-> post_content;
						?>
					</div>
				</center>

				<div class="row Collection" style="margin-top:20px;">
					<div class="col-md-7">
						<div class="row collection-image-1">
							<img style="width:100%" src="<?php echo get_the_post_thumbnail_url(33);?>"> 
							<div class="Collection-image-description">
								<a href="<?php echo get_page_link(33); ?>">
									<h2>ELEGANCE</h2>
								</a>
								<span>____</span><br>
								<span>Collection</span>
							</div>	
						</div>
						<div class="row collection-image-2" style="margin-top:15px;">
							<img style="width:100%" src="<?php echo get_the_post_thumbnail_url(37);?>">
							<div class="Collection-image-description">
								<a href="<?php echo get_page_link(37); ?>">
									<h2>COLORFUL</h2>
								</a>
								<span>____</span><br>
								<span>Collection</span>
							</div>	

						</div>
					</div>
					<div class="col-md-5 collection-image-3">
						<img style="width:100%;height:100%;" src="<?php echo get_the_post_thumbnail_url(35);?>">
							<div class="Collection-image-description">
								<a href="<?php echo get_page_link(35); ?>">
									<h2>KAZAKH</h2>
								</a>	
								<span>____</span><br>
								<span>Collection</span>
							</div>	
					</div>
</div>

				<div class="row Histoire_DIADANA" style="margin-top:15px;">
					<div class="col-md-12" style="margin:0;padding:0">
						<img style="width:1125px!important;height:400px;" src="<?php echo get_the_post_thumbnail_url(50);?>">
							<div class="Histoire-DIADANA-image-description">
								<a href="<?php echo get_page_link(50); ?>">
									<h2>L'HISTOIRE DE DIADANA</h2>
								</a>	
								<span>_____________</span><br><br>
								<span>Découvrez l'histoire de DIADANA</span>
							</div>
					</div>	
				</div>
				
				<div class="row Bijoux">
					<div class="col-md-12">
						<center>
							<h3 style="font-size: 1.17em;font-weight: bold;margin-top:15px;">
								Notre Collection Bijoux Broderie de Perles
							</h3>
						</center>
							
								
						
					</div>
				</div>
				
			</div>
			
		 </main><!-- #main -->
			
				<script> 
		// Carousel Auto-Cycle
  jQuery(document).ready(function() {
    jQuery('.carousel').carousel({
      interval: 6000
    })
  });
				</script>
		
	</div><!-- #primary -->
	
<?php

get_footer();
?>