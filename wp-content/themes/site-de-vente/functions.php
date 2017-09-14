<?php
/**
 * Site de Vente functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Site_de_Vente
 */

if ( ! function_exists( 'site_de_vente_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function site_de_vente_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Site de Vente, use a find and replace
		 * to change 'site-de-vente' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'site-de-vente', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'site-de-vente' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'site_de_vente_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'site_de_vente_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function site_de_vente_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'site_de_vente_content_width', 640 );
}
add_action( 'after_setup_theme', 'site_de_vente_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function site_de_vente_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'site-de-vente' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'site-de-vente' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'site_de_vente_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function site_de_vente_scripts() {
	
	wp_enqueue_style( 'site-de-vente-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'site-de-vente-bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	
	wp_enqueue_style(' font awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	
	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'site-de-vente-bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ),
					  '20170710', true);
	
	wp_enqueue_script( 'site-de-vente-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	
	wp_enqueue_script( 'site-de-vente-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'site_de_vente_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// change background image for the site 

function sv_background_image ($wp_customize){
	$wp_customize->add_section('sv_background_section', array(
	'title'=> 'Background Image'
	));
	
	$wp_customize->add_setting('sv_background');
	
	$wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize ,'sv_background_control',array(
	'label' => 'Background-image',
	'section'	=> 'sv_background_section',
	'settings' => 'sv_background',
	'width' => 9999,
	'height' => 9999
	))
								  );
}
add_action('customize_register','sv_background_image');

// add meta box to posts for additional informations


function sv_add_custom_metabox() {
	add_meta_box(
		'sv_meta',
		'Set Informations',
		'sv_meta_callback',
		'post',
		'normal'
	);

}

add_action( 'add_meta_boxes', 'sv_add_custom_metabox' );

function sv_meta_callback ( $post ) { 
	wp_nonce_field(basename(__FILE__),'sv_info_nonce');
	?>
	<div>
		<div class="meta-row">
			<div class="meta-th">
				<label for="Prix">Prix</label>
			</div>
			<div class="meta-td">
				<input type="text" name="Prix" id="Prix" value="0.0 $">
			</div>
		</div>
		<div class="meta-row">
			<div class="meta-th">
				<label for="Description">Description de produit</label>
			</div>
			<div class="meta-td">
				<input type="text" name="Description" id="Description" value="">
			</div>
		</div>
		
	</div>

<?php
}

// save meta boxes data when saves our posts

function sv_save_metaBox (){
		
}
add_action('save_post','sv_save_metaBox'); 