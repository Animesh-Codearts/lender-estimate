<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage lender

 */

// This theme requires WordPress 5.3 or later.
if ( version_compare( $GLOBALS['wp_version'], '5.3', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
}

if ( ! function_exists( 'lender_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	
	 *
	 * @return void
	 */
	function lender_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on lender, use a find and replace
		 * to change 'lender' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lender', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'lender' ),
				'footer'  => esc_html__( 'Secondary menu', 'lender' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );
		$background_color = get_theme_mod( 'background_color', 'D1E4DD' );
		if ( 127 > lender_Custom_Colors::get_relative_luminance_from_hex( $background_color ) ) {
			add_theme_support( 'dark-editor-style' );
		}

		$editor_stylesheet_path = './assets/css/style-editor.css';

		// Note, the is_IE global variable is defined by WordPress and is used
		// to detect if the current browser is internet explorer.
		global $is_IE;
		if ( $is_IE ) {
			$editor_stylesheet_path = './assets/css/ie-editor.css';
		}

		// Enqueue editor styles.
		add_editor_style( $editor_stylesheet_path );

		// Add custom editor font sizes.
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => esc_html__( 'Extra small', 'lender' ),
					'shortName' => esc_html_x( 'XS', 'Font size', 'lender' ),
					'size'      => 16,
					'slug'      => 'extra-small',
				),
				array(
					'name'      => esc_html__( 'Small', 'lender' ),
					'shortName' => esc_html_x( 'S', 'Font size', 'lender' ),
					'size'      => 18,
					'slug'      => 'small',
				),
				array(
					'name'      => esc_html__( 'Normal', 'lender' ),
					'shortName' => esc_html_x( 'M', 'Font size', 'lender' ),
					'size'      => 20,
					'slug'      => 'normal',
				),
				array(
					'name'      => esc_html__( 'Large', 'lender' ),
					'shortName' => esc_html_x( 'L', 'Font size', 'lender' ),
					'size'      => 24,
					'slug'      => 'large',
				),
				array(
					'name'      => esc_html__( 'Extra large', 'lender' ),
					'shortName' => esc_html_x( 'XL', 'Font size', 'lender' ),
					'size'      => 40,
					'slug'      => 'extra-large',
				),
				array(
					'name'      => esc_html__( 'Huge', 'lender' ),
					'shortName' => esc_html_x( 'XXL', 'Font size', 'lender' ),
					'size'      => 96,
					'slug'      => 'huge',
				),
				array(
					'name'      => esc_html__( 'Gigantic', 'lender' ),
					'shortName' => esc_html_x( 'XXXL', 'Font size', 'lender' ),
					'size'      => 144,
					'slug'      => 'gigantic',
				),
			)
		);

		// Custom background color.
		add_theme_support(
			'custom-background',
			array(
				'default-color' => 'd1e4dd',
			)
		);

		// Editor color palette.
		$black     = '#000000';
		$dark_gray = '#28303D';
		$gray      = '#39414D';
		$green     = '#D1E4DD';
		$blue      = '#D1DFE4';
		$purple    = '#D1D1E4';
		$red       = '#E4D1D1';
		$orange    = '#E4DAD1';
		$yellow    = '#EEEADD';
		$white     = '#FFFFFF';

		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => esc_html__( 'Black', 'lender' ),
					'slug'  => 'black',
					'color' => $black,
				),
				array(
					'name'  => esc_html__( 'Dark gray', 'lender' ),
					'slug'  => 'dark-gray',
					'color' => $dark_gray,
				),
				array(
					'name'  => esc_html__( 'Gray', 'lender' ),
					'slug'  => 'gray',
					'color' => $gray,
				),
				array(
					'name'  => esc_html__( 'Green', 'lender' ),
					'slug'  => 'green',
					'color' => $green,
				),
				array(
					'name'  => esc_html__( 'Blue', 'lender' ),
					'slug'  => 'blue',
					'color' => $blue,
				),
				array(
					'name'  => esc_html__( 'Purple', 'lender' ),
					'slug'  => 'purple',
					'color' => $purple,
				),
				array(
					'name'  => esc_html__( 'Red', 'lender' ),
					'slug'  => 'red',
					'color' => $red,
				),
				array(
					'name'  => esc_html__( 'Orange', 'lender' ),
					'slug'  => 'orange',
					'color' => $orange,
				),
				array(
					'name'  => esc_html__( 'Yellow', 'lender' ),
					'slug'  => 'yellow',
					'color' => $yellow,
				),
				array(
					'name'  => esc_html__( 'White', 'lender' ),
					'slug'  => 'white',
					'color' => $white,
				),
			)
		);

		add_theme_support(
			'editor-gradient-presets',
			array(
				array(
					'name'     => esc_html__( 'Purple to yellow', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'purple-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to purple', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'yellow-to-purple',
				),
				array(
					'name'     => esc_html__( 'Green to yellow', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'green-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to green', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
					'slug'     => 'yellow-to-green',
				),
				array(
					'name'     => esc_html__( 'Red to yellow', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
					'slug'     => 'red-to-yellow',
				),
				array(
					'name'     => esc_html__( 'Yellow to red', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'yellow-to-red',
				),
				array(
					'name'     => esc_html__( 'Purple to red', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
					'slug'     => 'purple-to-red',
				),
				array(
					'name'     => esc_html__( 'Red to purple', 'lender' ),
					'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
					'slug'     => 'red-to-purple',
				),
			)
		);

		/*
		* Adds starter content to highlight the theme on fresh sites.
		* This is done conditionally to avoid loading the starter content on every
		* page load, as it is a one-off operation only needed once in the customizer.
		*/
		if ( is_customize_preview() ) {
			require get_template_directory() . '/inc/starter-content.php';
			add_theme_support( 'starter-content', lender_get_starter_content() );
		}

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

		// Remove feed icon link from legacy RSS widget.
		add_filter( 'rss_widget_feed_link', '__return_false' );
	}
}
add_action( 'after_setup_theme', 'lender_setup' );

/**
 * Register widget area.
 *

 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 *
 * @return void
 */
function lender_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'lender' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'lender' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Usefull Links', 'lender' ),
			'id'            => 'sidebar-usefull-links',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'lender' ),
			'before_widget' => '<ul class="footer-text" role="list">',
			'after_widget'  => '</ul>',
			'before_title'  => '<li>',
			'after_title'   => '</li>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Our Services', 'lender' ),
			'id'            => 'sidebar-our-services',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'lender' ),
			'before_widget' => '<ul class="footer-text" role="list">',
			'after_widget'  => '</ul>',
			'before_title'  => '<li>',
			'after_title'   => '</li>',
		)
	);
}
add_action( 'widgets_init', 'lender_widgets_init' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *

 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function lender_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'lender_content_width', 750 );
}
add_action( 'after_setup_theme', 'lender_content_width', 0 );

/**
 * Enqueue scripts and styles.
 *

 *
 * @return void
 */
// function lender_scripts() {
// 	// Note, the is_IE global variable is defined by WordPress and is used
// 	// to detect if the current browser is internet explorer.
// 	global $is_IE, $wp_scripts;
// 	if ( $is_IE ) {
// 		// If IE 11 or below, use a flattened stylesheet with static values replacing CSS Variables.
// 		wp_enqueue_style( 'lender-style', get_template_directory_uri() . '/assets/css/ie.css', array(), wp_get_theme()->get( 'Version' ) );
// 	} else {
// 		// If not IE, use the standard stylesheet.
// 		wp_enqueue_style( 'lender-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
// 	}

// 	// RTL styles.
// 	wp_style_add_data( 'lender-style', 'rtl', 'replace' );

// 	// Print styles.
// 	wp_enqueue_style( 'lender-print-style', get_template_directory_uri() . '/assets/css/print.css', array(), wp_get_theme()->get( 'Version' ), 'print' );

// 	// Threaded comment reply styles.
// 	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
// 		wp_enqueue_script( 'comment-reply' );
// 	}

// 	// Register the IE11 polyfill file.
// 	wp_register_script(
// 		'lender-ie11-polyfills-asset',
// 		get_template_directory_uri() . '/assets/js/polyfills.js',
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);

// 	// Register the IE11 polyfill loader.
// 	wp_register_script(
// 		'lender-ie11-polyfills',
// 		null,
// 		array(),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// 	wp_add_inline_script(
// 		'lender-ie11-polyfills',
// 		wp_get_script_polyfill(
// 			$wp_scripts,
// 			array(
// 				'Element.prototype.matches && Element.prototype.closest && window.NodeList && NodeList.prototype.forEach' => 'lender-ie11-polyfills-asset',
// 			)
// 		)
// 	);

// 	// Main navigation scripts.
// 	if ( has_nav_menu( 'primary' ) ) {
// 		wp_enqueue_script(
// 			'lender-primary-navigation-script',
// 			get_template_directory_uri() . '/assets/js/primary-navigation.js',
// 			array( 'lender-ie11-polyfills' ),
// 			wp_get_theme()->get( 'Version' ),
// 			true
// 		);
// 	}

// 	// Responsive embeds script.
// 	wp_enqueue_script(
// 		'lender-responsive-embeds-script',
// 		get_template_directory_uri() . '/assets/js/responsive-embeds.js',
// 		array( 'lender-ie11-polyfills' ),
// 		wp_get_theme()->get( 'Version' ),
// 		true
// 	);
// }
// add_action( 'wp_enqueue_scripts', 'lender_scripts' );

/**
 * Enqueue block editor script.
 *

 *
 * @return void
 */
function lender_block_editor_script() {

	wp_enqueue_script( 'lender-editor', get_theme_file_uri( '/assets/js/editor.js' ), array( 'wp-blocks', 'wp-dom' ), wp_get_theme()->get( 'Version' ), true );
}

add_action( 'enqueue_block_editor_assets', 'lender_block_editor_script' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *

 *
 * @link https://git.io/vWdr2
 */
function lender_skip_link_focus_fix() {

	// If SCRIPT_DEBUG is defined and true, print the unminified file.
	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		echo '<script>';
		include get_template_directory() . '/assets/js/skip-link-focus-fix.js';
		echo '</script>';
	} else {
		// The following is minified via `npx terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
		?>
		<script>
		/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",(function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())}),!1);
		</script>
		<?php
	}
}
add_action( 'wp_print_footer_scripts', 'lender_skip_link_focus_fix' );

/**
 * Enqueue non-latin language styles.
 *

 *
 * @return void
 */
function lender_non_latin_languages() {
	$custom_css = lender_get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'lender-style', $custom_css );
	}
}
add_action( 'wp_enqueue_scripts', 'lender_non_latin_languages' );

// SVG Icons class.
require get_template_directory() . '/classes/class-lender-svg-icons.php';

// Custom color classes.
require get_template_directory() . '/classes/class-lender-custom-colors.php';
new lender_Custom_Colors();

// Enhance the theme by hooking into WordPress.
require get_template_directory() . '/inc/template-functions.php';

// Menu functions and filters.
require get_template_directory() . '/inc/menu-functions.php';

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Customizer additions.
require get_template_directory() . '/classes/class-lender-customize.php';
new lender_Customize();

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

// Block Styles.
require get_template_directory() . '/inc/block-styles.php';

// Dark Mode.
require_once get_template_directory() . '/classes/class-lender-dark-mode.php';
new lender_Dark_Mode();

// Enqueue
require get_parent_theme_file_path( '/inc/enqueue.php' );

// Admin-options
require get_parent_theme_file_path( '/inc/admin-options.php' );

// Custom-post-types
require get_parent_theme_file_path( '/inc/custom-post-types.php' );

/**
 * Enqueue scripts for the customizer preview.
 *

 *
 * @return void
 */
function lender_customize_preview_init() {
	wp_enqueue_script(
		'lender-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_enqueue_script(
		'lender-customize-preview',
		get_theme_file_uri( '/assets/js/customize-preview.js' ),
		array( 'customize-preview', 'customize-selective-refresh', 'jquery', 'lender-customize-helpers' ),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_preview_init', 'lender_customize_preview_init' );

/**
 * Enqueue scripts for the customizer.
 *

 *
 * @return void
 */
function lender_customize_controls_enqueue_scripts() {

	wp_enqueue_script(
		'lender-customize-helpers',
		get_theme_file_uri( '/assets/js/customize-helpers.js' ),
		array(),
		wp_get_theme()->get( 'Version' ),
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'lender_customize_controls_enqueue_scripts' );

/**
 * Calculate classes for the main <html> element.
 *

 *
 * @return void
 */
function lender_the_html_classes() {
	/**
	 * Filters the classes for the main <html> element.
	 *
	
	 *
	 * @param string The list of classes. Default empty string.
	 */
	$classes = apply_filters( 'lender_html_classes', '' );
	if ( ! $classes ) {
		return;
	}
	echo 'class="' . esc_attr( $classes ) . '"';
}

/**
 * Add "is-IE" class to body if the user is on Internet Explorer.
 *

 *
 * @return void
 */
function lender_add_ie_class() {
	?>
	<script>
	if ( -1 !== navigator.userAgent.indexOf( 'MSIE' ) || -1 !== navigator.appVersion.indexOf( 'Trident/' ) ) {
		document.body.classList.add( 'is-IE' );
	}
	</script>
	<?php
}
add_action( 'wp_footer', 'lender_add_ie_class' );



// Custom functions

// Add custom class in each menu li item 
function add_classes_on_each_li($classes, $item, $args) {
  $classes[] = 'nav-item';
  return $classes;
}
add_filter('nav_menu_css_class','add_classes_on_each_li',1,3);


// Add custom class in each menu anchor tag item 
function add_classes_on_each_anchor( $atts, $item, $args ) {
    $class = 'nav-link';
    $atts['class'] = $class;
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_classes_on_each_anchor', 10, 3 );


// Add active class in current menu li item 
function add_active_class_on_li($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}
add_filter('nav_menu_css_class' , 'add_active_class_on_li' , 10 , 2);
