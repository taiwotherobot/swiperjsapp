<?php

/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

if (function_exists('acf_add_local_field_group')) :

	acf_add_local_field_group(array(
		'key' => 'group_620935bdb0d99',
		'title' => 'mountainous',
		'fields' => array(
			array(
				'key' => 'field_620935c0dcfc0',
				'label' => 'slider',
				'name' => 'slider',
				'type' => 'photo_gallery',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'fields[slider' => array(
					'edit_modal' => 'Default',
					'images_limit' => '5',
					'remove_edit_button' => 'Yes',
					'remove_delete_button' => 'Yes',
				),
				'edit_modal' => 'Default',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
		'show_in_rest' => 0,
	));

endif;


if (!function_exists('twentytwentytwo_support')) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support()
	{

		// Add support for block styles.
		add_theme_support('wp-block-styles');

		// Enqueue editor styles.
		add_editor_style('style.css');
	}

endif;

add_action('after_setup_theme', 'twentytwentytwo_support');

if (!function_exists('twentytwentytwo_styles')) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles()
	{
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get('Version');

		$version_string = is_string($theme_version) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style('twentytwentytwo-style', twentytwentytwo_get_font_face_styles());

		// Enqueue theme stylesheet.
		wp_enqueue_style('twentytwentytwo-style');
	}

endif;

add_action('wp_enqueue_scripts', 'twentytwentytwo_styles');

if (!function_exists('twentytwentytwo_editor_styles')) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_editor_styles()
	{

		// Add styles inline.
		wp_add_inline_style('wp-block-library', twentytwentytwo_get_font_face_styles());
	}

endif;

add_action('admin_init', 'twentytwentytwo_editor_styles');


if (!function_exists('twentytwentytwo_get_font_face_styles')) :

	/**
	 * Get font face styles.
	 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function twentytwentytwo_get_font_face_styles()
	{

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri('assets/fonts/SourceSerif4Variable-Roman.ttf.woff2') . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri('assets/fonts/SourceSerif4Variable-Italic.ttf.woff2') . "') format('woff2');
		}
		";
	}

endif;

if (!function_exists('twentytwentytwo_preload_webfonts')) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_preload_webfonts()
	{
?>
		<link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/SourceSerif4Variable-Roman.ttf.woff2')); ?>" as="font" type="font/woff2" crossorigin>
<?php
	}

endif;

add_action('wp_head', 'twentytwentytwo_preload_webfonts');

add_action('wp_enqueue_scripts', 'ls_scripts_styles', 20);
/**
 * SwiperJS Scripts
 */
function ls_scripts_styles()
{
	wp_enqueue_style('swipercssbundle', get_stylesheet_directory_uri() . '/css/swiper-bundle.min.css', array(), '6.4.11', 'all');
	wp_enqueue_script('swiperjsbundle', get_stylesheet_directory_uri() . '/js/swiper-bundle.min.js', array(), '6.4.11', true);
	wp_enqueue_script('swiperinit', get_stylesheet_directory_uri() . '/js/swiper-bundle-init.js', array('swiperjsbundle'), '1.0.0', true);
}

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
