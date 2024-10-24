<?php
/**
 * Title: Our Causes
 * Slug: charity-blocks/our-causes
 * Categories: charity-blocks, our-causes
 */
?>

<!-- wp:group {"className":"our-causes","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group our-causes" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"49px"} -->
<div style="height:49px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","textTransform":"capitalize"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:28px;font-style:normal;font-weight:700;line-height:1.1;text-transform:capitalize"><?php esc_html_e('our causes','charity-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:separator {"className":"is-style-default","style":{"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"gradient":"ternary-to-primary"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-ternary-to-primary-gradient-background has-background is-style-default" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20)"/>
<!-- /wp:separator -->

<!-- wp:separator {"className":"is-style-default-2","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"gradient":"ternary-to-primary"} -->
<hr class="wp-block-separator has-alpha-channel-opacity has-ternary-to-primary-gradient-background has-background is-style-default-2" style="margin-top:0;margin-bottom:0"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"40%"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","className":"heading-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} -->
<p class="has-text-align-center heading-text has-body-text-color has-text-color has-link-color"><?php esc_html_e('every day we bring hope to millions of children in the worlds ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"28px"} -->
<div style="height:28px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause1.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause2.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-top:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause3.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-top:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"verticalAlignment":"top"} -->
<div class="wp-block-columns are-vertically-aligned-top"><!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause4.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"blockGap":"0","padding":{"left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause5.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-top:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","className":"service-box wow zoomIn","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"backgroundColor":"background"} -->
<div class="wp-block-column is-vertically-aligned-top service-box wow zoomIn has-background-background-color has-background" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"service-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group service-image-box"><!-- wp:image {"id":152,"scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"causes-img","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full has-custom-border causes-img"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/cause1.png'); ?>" alt="" class="wp-image-152" style="border-top-left-radius:10px;border-top-right-radius:10px;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:columns {"verticalAlignment":"center","className":"amount-box","style":{"border":{"radius":"30px"},"spacing":{"blockGap":{"left":"6px"}}},"backgroundColor":"background"} -->
<div class="wp-block-columns are-vertically-aligned-center amount-box has-background-background-color has-background" style="border-radius:30px"><!-- wp:column {"verticalAlignment":"center","width":"","style":{"border":{"right":{"color":"#e3e1f0","width":"2px"}},"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="border-right-color:#e3e1f0;border-right-width:2px;padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Goal :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-text-align-left ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$50,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:group {"className":"inner-amount-box","style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group inner-amount-box"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Raised :','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"ammount","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"medium"} -->
<p class="ammount has-medium-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('$30,000','charity-blocks'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60);font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e('hospiece of madina life treasures thrift shop storage needed','charity-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"service-box-text","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
<p class="service-box-text has-small-font-size" style="padding-right:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.','charity-blocks'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"className":"service-box-button","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group service-box-button" style="padding-top:0;padding-bottom:0;padding-left:var(--wp--preset--spacing--60)"><!-- wp:buttons {"className":"service-box-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons service-box-btn"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('Donate Now','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"14px"} -->
<div style="height:14px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"gradient":"ternary-to-primary","className":"has-source-sans-3-font-family","style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"}},"fontSize":"extra-small","fontFamily":"inter"} -->
<div class="wp-block-button has-custom-font-size has-source-sans-3-font-family has-inter-font-family has-extra-small-font-size" style="font-style:normal;font-weight:700;text-transform:uppercase"><a class="wp-block-button__link has-ternary-to-primary-gradient-background has-background wp-element-button"><?php esc_html_e('View more','charity-blocks'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:spacer {"height":"49px"} -->
<div style="height:49px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->