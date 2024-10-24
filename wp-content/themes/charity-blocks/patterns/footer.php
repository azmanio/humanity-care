<?php
/**
 * Title: Footer
 * Slug: charity-blocks/footer
 * Categories: charity-blocks, footer
 */
?>

<!-- wp:group {"className":"footer-widgets","style":{"spacing":{"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"footer-bg","fontSize":"small","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group footer-widgets has-footer-bg-background-color has-background has-small-font-size" style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"className":"footer-donate-box wow fadeInDown","style":{"border":{"radius":"10px"}},"gradient":"ternary-to-primary","layout":{"type":"constrained"}} -->
<div class="wp-block-group footer-donate-box wow fadeInDown has-ternary-to-primary-gradient-background has-background" style="border-radius:10px"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","lineHeight":"1.3"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<h3 class="wp-block-heading has-text-align-center has-white-color-color has-text-color has-link-color" style="font-style:normal;font-weight:700;line-height:1.3;text-transform:capitalize"><?php esc_html_e('do your bit by donation to the mission : education to all','charity-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","backgroundColor":"foreground","textColor":"background","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"},"border":{"radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"fontSize":"small"} -->
<div class="wp-block-button has-custom-font-size has-small-font-size" style="font-style:normal;font-weight:600;text-transform:uppercase"><a class="wp-block-button__link has-background-color has-foreground-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="border-radius:10px"><?php esc_html_e('Make Donation','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--80)"><!-- wp:columns {"className":"widgets-inner","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns widgets-inner"><!-- wp:column {"className":"widget-1"} -->
<div class="wp-block-column widget-1"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontSize":"extra-large","fontFamily":"inter"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<p class="has-text-align-left has-white-color-color has-text-color has-link-color"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"white-color","iconColorValue":"#ffffff","size":"has-normal-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<ul class="wp-block-social-links has-normal-icon-size has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"twitter"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"widget-2"} -->
<div class="wp-block-column is-vertically-aligned-top widget-2"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color-color has-text-color has-link-color has-inter-font-family" style="font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('Our Causes','charity-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<ul class="wp-block-list has-white-color-color has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('All Causes','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Medical','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Food &amp; Water','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Electricity','charity-blocks'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"widget-3"} -->
<div class="wp-block-column is-vertically-aligned-top widget-3"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color-color has-text-color has-link-color has-inter-font-family" style="font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('Support Us','charity-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<ul class="wp-block-list has-white-color-color has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Become A Volunteer','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Rate our Organization','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Make A Donation','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Becone A Partner','charity-blocks'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"widget-4"} -->
<div class="wp-block-column is-vertically-aligned-top widget-4"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color-color has-text-color has-link-color has-inter-font-family" style="font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('Information','charity-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:list {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<ul class="wp-block-list has-white-color-color has-text-color has-link-color"><!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Latest News','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Upcoming Events','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Our Volunteers','charity-blocks'); ?></a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#"><?php esc_html_e('Litracy Program','charity-blocks'); ?></a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"widget-5"} -->
<div class="wp-block-column widget-5"><!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","letterSpacing":"1px"},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<h5 class="wp-block-heading has-white-color-color has-text-color has-link-color has-inter-font-family" style="font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('Contact Us','charity-blocks'); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":300,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/envelope.png'); ?>" alt="" class="wp-image-300"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<p class="has-white-color-color has-text-color has-link-color"><?php esc_html_e('support@example.com','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":302,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/telephone.png'); ?>" alt="" class="wp-image-302"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<p class="has-white-color-color has-text-color has-link-color has-inter-font-family"><?php esc_html_e('(+91-1800-1234-1234)','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<p class="has-white-color-color has-text-color has-link-color"><?php esc_html_e('** For any other donation contact our support desk','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}}},"backgroundColor":"footer-bg","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group has-footer-bg-background-color has-background" style="padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"copyright-text","style":{"spacing":{"padding":{"top":"20px"}},"border":{"top":{"color":"var:preset|color|secondary","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group copyright-text" style="border-top-color:var(--wp--preset--color--secondary);border-top-width:1px;padding-top:20px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color"} -->
<p class="has-white-color-color has-text-color has-link-color"><a rel="noreferrer noopener" href="https://www.ovationthemes.com/products/free-ngo-charity-wordpress-theme" target="_blank"><?php esc_html_e('Charity Blocks WordPress Theme','charity-blocks'); ?></a>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"layout":{"selfStretch":"fit","flexSize":null},"elements":{"link":{"color":{"text":"var:preset|color|white-color"}}}},"textColor":"white-color","fontFamily":"inter"} -->
<p class="has-white-color-color has-text-color has-link-color has-inter-font-family"><?php esc_html_e('Proudly powered by ','charity-blocks'); ?><a rel="noreferrer noopener" href="https://www.ovationthemes.com/" target="_blank"><?php esc_html_e('Ovation Themes','charity-blocks'); ?></a> <?php esc_html_e('and','charity-blocks'); ?> <a href="https://wordpress.org"><?php esc_html_e('WordPress','charity-blocks'); ?></a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"scroll-top"} -->
<p class="scroll-top"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->