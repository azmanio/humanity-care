<?php
/**
 * Charity Blocks: Customizer
 *
 * @subpackage Charity Blocks
 * @since 1.0
 */

function charity_blocks_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('charity_blocks_pro', array(
        'title'    => __('CHARITY BLOCKS PREMIUM', 'charity-blocks'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('charity_blocks_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Charity_Blocks_Pro_Control($wp_customize, 'charity_blocks_pro', array(
        'label'    => __('CHARITY BLOCKS PREMIUM', 'charity-blocks'),
        'section'  => 'charity_blocks_pro',
        'settings' => 'charity_blocks_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'charity_blocks_customize_register' );


define('CHARITY_BLOCKS_PRO_LINK',__('https://www.ovationthemes.com/products/ngo-charity-wordpress-theme','charity-blocks'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Charity_Blocks_Pro_Control')):
    class Charity_Blocks_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CHARITY_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CHARITY BLOCKS PREMIUM','charity-blocks');?> </a>
	        </div>
            <div class="col-md">
                <img class="charity_blocks_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
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
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CHARITY_BLOCKS_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CHARITY BLOCKS PREMIUM','charity-blocks');?> </a>
            </div>
        </label>
    <?php } }
endif;