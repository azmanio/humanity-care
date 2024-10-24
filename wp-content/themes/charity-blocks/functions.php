<?php
/**
 * Charity Blocks functions and definitions
 *
 * @package Charity Blocks
 */

if ( ! function_exists( 'charity_blocks_setup' ) ) :
function charity_blocks_setup() {
	
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

    load_theme_textdomain( 'charity-blocks', get_template_directory() . '/languages' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
			
	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );

	// Enqueue editor styles.
	add_editor_style( array( 'assets/css/editor-style.css' ) );
}
endif; // charity_blocks_setup
add_action( 'after_setup_theme', 'charity_blocks_setup' );

function charity_blocks_scripts() {
	wp_enqueue_style( 'charity-blocks-basic-style', get_stylesheet_uri() );

	$charity_blocks_enable_animations = get_option( 'charity_blocks_enable_animations', true );

    if ( $charity_blocks_enable_animations ) {
        //animation
		wp_enqueue_script( 'wow-js', get_theme_file_uri( '/assets/js/wow.js' ), array( 'jquery' ), true );

		wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.css' );
    }

	//font-awesome
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/all.css', array(), '5.15.3' );

	// script.js
	wp_enqueue_script('charity-blocks-main-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'charity_blocks_scripts' );

// Get start function

function charity_blocks_enqueue_admin_script($hook) {
    // Admin JS
    wp_enqueue_script('charity-blocks-admin-js', get_theme_file_uri('/inc/dashboard/admin.js'), array('jquery'), true);
    wp_localize_script(
        'charity-blocks-admin-js',
        'charity_blocks',
        array(
            'admin_ajax'    =>  admin_url('admin-ajax.php'),
            'wpnonce'           =>  wp_create_nonce('charity_blocks_dismissed_notice_nonce')
        )
    );
    wp_enqueue_script('charity-blocks-admin-js');

    wp_localize_script( 'charity-blocks-admin-js', 'charity_blocks_scripts_localize',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action('admin_enqueue_scripts', 'charity_blocks_enqueue_admin_script');

//dismiss function 
add_action( 'wp_ajax_charity_blocks_dismissed_notice_handler', 'charity_blocks_ajax_notice_dismiss_fuction' );

function charity_blocks_ajax_notice_dismiss_fuction() {
    if (!wp_verify_nonce($_POST['wpnonce'], 'charity_blocks_dismissed_notice_nonce')) {
        exit;
    }
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

//get start box
function charity_blocks_custom_admin_notice() {
    // Check if the notice is dismissed
    if ( ! get_option('dismissed-get_started_notice', FALSE ) )  {
        // Check if not on the theme documentation page
        $charity_blocks_current_screen = get_current_screen();
        if ($charity_blocks_current_screen && $charity_blocks_current_screen->id !== 'appearance_page_charity-blocks-guide-page') {
            $charity_blocks_theme = wp_get_theme();
            ?>
            <div class="notice notice-info is-dismissible" data-notice="get_started_notice">
                <div class="notice-div">
                    <div>
                        <p class="theme-name"><?php _e('Charity Blocks', 'charity-blocks'); ?></p>
                        <p><?php _e('For information and detailed instructions, check out our theme documentation.', 'charity-blocks'); ?></p>
                    </div>
                    <div class="notice-buttons-box">
                        <a class="button-primary livedemo" href="<?php echo esc_url( CHARITY_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'charity-blocks'); ?></a>
                        <a class="button-primary buynow" href="<?php echo esc_url( CHARITY_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'charity-blocks'); ?></a>
                        <a class="button-primary theme-install" href="themes.php?page=charity-blocks-guide-page"><?php _e('Begin Installation', 'charity-blocks'); ?></a> 
                    </div>
                </div>
            </div>
        <?php
        }
    }
}
add_action('admin_notices', 'charity_blocks_custom_admin_notice');

//after switch theme
add_action('after_switch_theme', 'charity_blocks_after_switch_theme');
function charity_blocks_after_switch_theme () {
    update_option('dismissed-get_started_notice', FALSE );
}
//get-start-function-end//

// Block Patterns.
require get_template_directory() . '/block-patterns.php';

require get_parent_theme_file_path( '/inc/dashboard/dashboard.php' );

require get_template_directory() . '/custom-setting.php';

require get_parent_theme_file_path( '/inc/customizer/customizer.php' );