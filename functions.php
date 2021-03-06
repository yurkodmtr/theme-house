<?php
/**
 * theme-house functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package theme-house
 */

if ( ! function_exists( 'theme_house_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function theme_house_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on theme-house, use a find and replace
	 * to change 'theme-house' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'theme-house', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'theme-house' ),
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
	add_theme_support( 'custom-background', apply_filters( 'theme_house_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'theme_house_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function theme_house_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'theme_house_content_width', 640 );
}
add_action( 'after_setup_theme', 'theme_house_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function theme_house_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'theme-house' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'theme-house' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'theme_house_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function theme_house_scripts() {
	wp_enqueue_style( 'theme-house-style', get_stylesheet_uri() );

	wp_enqueue_script( 'theme-house-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'theme-house-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_house_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * TGM Plugin Activation
 */
{
	require_once dirname( __FILE__ ) . '/TGM-Plugin-Activation/class-tgm-plugin-activation.php';

	/** @internal */
	function _action_theme_register_required_plugins() {
		tgmpa( array(
			array(
				'name'      => 'Unyson',
				'slug'      => 'unyson',
				'required'  => true,
			),
		) );

	}
	add_action( 'tgmpa_register', '_action_theme_register_required_plugins' );
}


function theme_name_scripts() {
	wp_enqueue_style( 'theme-house-stylee', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_script( 'theme-house-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );




/* add phone field */
class Add_Settings_Field__phone {
	public function __construct() {
		add_action( 'admin_init' , array( $this , 'register_fields' ) );
	}
	public function register_fields() {
		register_setting( 'general', 'admin_phone', 'esc_attr' );
		add_settings_field(
			'admin_phone_id',
			'<label for="admin_phone_id">' . __( 'Phone number' , 'admin_phone' ) . '</label>',
			array( $this, 'fields_html' ),
			'general'
		);
	}
	public function fields_html() {
		$value = get_option( 'admin_phone', '' );
		echo '<input type="text" id="admin_phone_id" name="admin_phone" value="' . esc_attr( $value ) . '" />';
	}
}
new Add_Settings_Field__phone();
function admin_phone_sc_func() {  
	$str = get_option( 'admin_phone', '' );
	return $str;
} 
add_shortcode( 'admin_phone_sc', 'admin_phone_sc_func');  



function admin_email_sc_func() {  
	$str = get_bloginfo('admin_email');
	return $str;
} 
add_shortcode( 'admin_email_sc', 'admin_email_sc_func'); 

/* add worktime field */
class Add_Settings_Field__worktime {
	public function __construct() {
		add_action( 'admin_init' , array( $this , 'register_fields' ) );
	}
	public function register_fields() {
		register_setting( 'general', 'admin_worktime', 'esc_attr' );
		add_settings_field(
			'admin_worktime_id',
			'<label for="admin_worktime_id">' . __( 'Work time' , 'admin_worktime' ) . '</label>',
			array( $this, 'fields_html' ),
			'general'
		);
	}
	public function fields_html() {
		$value = get_option( 'admin_worktime', '' );
		echo '<input type="text" id="admin_worktime_id" name="admin_worktime" value="' . esc_attr( $value ) . '" />';
	}
}
new Add_Settings_Field__worktime();
function admin_worktime_sc_func() {  
	$str = get_option('admin_worktime');
	return $str;
} 
add_shortcode( 'admin_worktime_sc', 'admin_worktime_sc_func'); 

/* add address field */
class Add_Settings_Field__address {
	public function __construct() {
		add_action( 'admin_init' , array( $this , 'register_fields' ) );
	}
	public function register_fields() {
		register_setting( 'general', 'admin_address', 'esc_attr' );
		add_settings_field(
			'admin_address_id',
			'<label for="admin_address_id">' . __( 'Address' , 'admin_address' ) . '</label>',
			array( $this, 'fields_html' ),
			'general'
		);
	}
	public function fields_html() {
		$value = get_option( 'admin_address', '' );
		echo '<input type="text" id="admin_address_id" name="admin_address" value="' . esc_attr( $value ) . '" />';
	}
}
new Add_Settings_Field__address();
function admin_address_sc_func() {  
	$str = get_option('admin_address');
	return $str;
} 
add_shortcode( 'admin_address_sc', 'admin_address_sc_func'); 



/* add mapiframe field */
class Add_Settings_Field__mapiframe {
	public function __construct() {
		add_action( 'admin_init' , array( $this , 'register_fields' ) );
	}
	public function register_fields() {
		register_setting( 'general', 'admin_mapiframe', 'esc_attr' );
		add_settings_field(
			'admin_mapiframe_id',
			'<label for="admin_mapiframe_id">' . __( 'Google Map Iframe Src' , 'admin_mapiframe' ) . '</label>',
			array( $this, 'fields_html' ),
			'general'
		);
	}
	public function fields_html() {
		$value = get_option( 'admin_mapiframe', '' );
		echo '<input type="text" id="admin_mapiframe_id" name="admin_mapiframe" value="' . esc_attr( $value ) . '" />';
	}
}
new Add_Settings_Field__mapiframe();
function admin_mapiframe_sc_func() {  
	$str = get_option('admin_mapiframe');
	return $str;
} 
add_shortcode( 'admin_mapiframe_sc', 'admin_mapiframe_sc_func');


/* pagenator */
function contentPagination() {
	global $wp_query, $post;

	// Don't print empty markup on single pages if there's nowhere to navigate.
	if ( is_single() ) {
		$previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
		$next     = get_adjacent_post( false, '', false );

		if ( ! $next && ! $previous ) {
			return;
		}
	}

	// Don't print empty markup in archives if there's only one page.
	if ( $wp_query->max_num_pages < 2 && ( is_home() || is_archive() || is_search() ) ) {
		return;
	}
	
	?>
	<ul role="navigation"  class="paging-navigation pagination">
		<?php
		$big = 999999999;

		$listButtonPagination = paginate_links( array(
			'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format'    => '?paged=%#%',
			'current'   => max( 1, get_query_var( 'paged' ) ),
			'total'     => $wp_query->max_num_pages,
			'prev_next' => false,
			'type'      => 'array'
		) );

		foreach ( $listButtonPagination as $buttonPagination ) {
			$current = '';
			if ( strstr( $buttonPagination, 'current' ) ) {
				$current = ' class="current"';
			}
			echo '<li' . $current . '>' . $buttonPagination . '</li>';
		}
		?>
	</ul>
	<?php
}
