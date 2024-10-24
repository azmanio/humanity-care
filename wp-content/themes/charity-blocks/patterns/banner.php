<?php
/**
 * Title: Banner
 * Slug: charity-blocks/banner
 * Categories: charity-blocks, banner
 */
?>

<!-- wp:group {"className":"bannerimage","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group bannerimage" style="margin-top:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":33,"isUserOverlayColor":true,"minHeight":700,"minHeightUnit":"px","gradient":"banner-overlay","align":"wide","className":"banner-image-cover","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-cover alignwide banner-image-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient has-banner-overlay-gradient-background"></span><img class="wp-block-cover__image-background wp-image-33" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"40%","className":"banner-content-block wow pulse"} -->
<div class="wp-block-column is-vertically-aligned-center banner-content-block wow pulse" style="flex-basis:40%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","letterSpacing":"2px"}},"fontSize":"large","fontFamily":"inter"} -->
<h6 class="wp-block-heading has-text-align-left has-inter-font-family has-large-font-size" style="font-style:normal;font-weight:700;letter-spacing:2px;text-transform:uppercase"><?php esc_html_e('give a hand to make','charity-blocks'); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"className":"wp-block-heading has-text-align-left has-inter-font-family","style":{"typography":{"textTransform":"capitalize","fontSize":"45px","fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontFamily":"inter"} -->
<h2 class="wp-block-heading has-text-align-left has-inter-font-family has-heading-color has-text-color has-link-color" style="font-size:45px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('Help the children. make big changes and help the world','charity-blocks'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
<p class="has-body-text-color has-text-color has-link-color"><?php esc_html_e('every day we bring hope to millions of children in the worlds ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->