<?php
/**
 * Title: Header
 * Slug: charity-blocks/header
 * Categories: charity-blocks, header
 */
?>

<!-- wp:group {"className":"upper-header  wow fadeInDown delay-1000","style":{"border":{"bottom":{"color":"#f6f6f6","width":"2px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group upper-header wow fadeInDown delay-1000" style="border-bottom-color:#f6f6f6;border-bottom-width:2px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":41,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-41"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"contact-text","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"14px"}}} -->
<p class="contact-text" style="font-size:14px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Call us for enquiry','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('(+91-1800-1234-1234)','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"className":"contact-info","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group contact-info"><!-- wp:image {"id":43,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/mail.png'); ?>" alt="" class="wp-image-43"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"contact-text","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"14px"}}} -->
<p class="contact-text" style="font-size:14px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e('Mail us for enquiry','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"extra-small"} -->
<p class="has-extra-small-font-size"><?php esc_html_e('support@example.com','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:social-links {"iconColor":"body-text","iconColorValue":"#63646d","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"right"}} -->
<ul class="wp-block-social-links has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header wow fadeInUp delay-1000","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group menu-header wow fadeInUp delay-1000" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:columns {"verticalAlignment":"center","className":"inner-menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center inner-menu-header"><!-- wp:column {"verticalAlignment":"center","width":"30%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:30%"><!-- wp:group {"className":"logodiv","textColor":"primary","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group logodiv has-primary-color has-text-color"><!-- wp:site-logo {"width":43,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize"}},"textColor":"heading","fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","className":"nav-block","style":{"spacing":{"padding":{"left":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center nav-block" style="padding-left:var(--wp--preset--spacing--40);flex-basis:50%"><!-- wp:navigation {"textColor":"heading","overlayBackgroundColor":"background","overlayTextColor":"heading","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"layout":{"type":"flex","justifyContent":"right"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Pages","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Our Causes","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Buy Now","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/ngo-charity-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"8%","className":"bell-block"} -->
<div class="wp-block-column is-vertically-aligned-center bell-block" style="flex-basis:8%"><!-- wp:image {"id":70,"sizeSlug":"full","linkDestination":"custom","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/bell.png'); ?>" alt="" class="wp-image-70"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"12%","className":"button-block"} -->
<div class="wp-block-column is-vertically-aligned-center button-block" style="flex-basis:12%"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->