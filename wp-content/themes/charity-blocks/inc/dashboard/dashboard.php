<?php

add_action( 'admin_menu', 'charity_blocks_gettingstarted' );
function charity_blocks_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'charity-blocks'), esc_html__('Begin Installation', 'charity-blocks'), 'edit_theme_options', 'charity-blocks-guide-page', 'charity_blocks_guide');
}

function charity_blocks_admin_theme_style() {
   wp_enqueue_style('charity-blocks-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'charity_blocks_admin_theme_style');

if ( ! defined( 'CHARITY_BLOCKS_SUPPORT' ) ) {
define('CHARITY_BLOCKS_SUPPORT',__('https://wordpress.org/support/theme/charity-blocks/','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_REVIEW' ) ) {
define('CHARITY_BLOCKS_REVIEW',__('https://wordpress.org/support/theme/charity-blocks/reviews/','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_LIVE_DEMO' ) ) {
define('CHARITY_BLOCKS_LIVE_DEMO',__('https://trial.ovationthemes.com/ngo-charity-donation/','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_BUY_PRO' ) ) {
define('CHARITY_BLOCKS_BUY_PRO',__('https://www.ovationthemes.com/products/ngo-charity-wordpress-theme','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_PRO_DOC' ) ) {
define('CHARITY_BLOCKS_PRO_DOC',__('https://trial.ovationthemes.com/docs/ot-ngo-charity-pro-doc/','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_FREE_DOC' ) ) {
define('CHARITY_BLOCKS_FREE_DOC',__('https://trial.ovationthemes.com/docs/ot-ngo-charity-donation-free-doc/','charity-blocks'));
}
if ( ! defined( 'CHARITY_BLOCKS_THEME_NAME' ) ) {
define('CHARITY_BLOCKS_THEME_NAME',__('Premium Charity Blocks Theme','charity-blocks'));
}

/**
 * Theme Info Page
 */
function charity_blocks_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'charity-blocks'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CHARITY_BLOCKS_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'charity-blocks'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CHARITY_BLOCKS_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'charity-blocks'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','charity-blocks'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','charity-blocks'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','charity-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','charity-blocks'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','charity-blocks'); ?></h4>
					<p><?php esc_html_e('To check your website click here','charity-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','charity-blocks'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','charity-blocks'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','charity-blocks'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CHARITY_BLOCKS_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','charity-blocks'); ?></a>
				</div>
       	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(CHARITY_BLOCKS_THEME_NAME); ?></h3>
				<img class="charity_blocks_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( CHARITY_BLOCKS_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'charity-blocks'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( CHARITY_BLOCKS_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'charity-blocks'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( CHARITY_BLOCKS_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'charity-blocks'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'charity-blocks');?> </li>                 
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'charity-blocks');?> </li>
					<li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'charity-blocks');?> </li>
               <li class="upsell-charity_blocks"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'charity-blocks');?> </li>
            </ul>
        	</div>
		</div>
	</div>

<?php }?>