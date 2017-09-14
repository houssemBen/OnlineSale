<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Site_de_Vente
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="entry-content">
	
		<div class="container">
			<div class="row">
				<div class="col-md-4">
						<?php
							the_content( sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'site-de-vente' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							) );

							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'site-de-vente' ),
								'after'  => '</div>',
							) );
						?>
				</div>
				<div class="col-md-4" style="padding:20px;">
					<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?> <br>
					<hr>
					<button class="Ajouter_au_panier_button" >AJOUTER AU PANIER</button>
				</div>
			</div>
		</div><!-- row -->
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
