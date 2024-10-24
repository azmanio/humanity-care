<?php
/**
 * Title: Latest News
 * Slug: charity-blocks/latest-news
 * Categories: charity-blocks, latest-news
 */
?>

<!-- wp:group {"className":"blog-section","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"75%"}} -->
<div class="wp-block-group blog-section has-secondary-background-color has-background" style="margin-top:0px;margin-bottom:0px"><!-- wp:spacer {"height":"49px"} -->
<div style="height:49px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"28px","fontStyle":"normal","fontWeight":"700","lineHeight":"1.1","textTransform":"capitalize"}}} -->
<h3 class="wp-block-heading has-text-align-center" style="font-size:28px;font-style:normal;font-weight:700;line-height:1.1;text-transform:capitalize"><?php esc_html_e('Latest News','charity-blocks'); ?></h3>
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

<!-- wp:query {"queryId":36,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"blog-box","style":{"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-box has-background-background-color has-background" style="border-radius:10px"><!-- wp:group {"className":"blog-image-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group blog-image-box"><!-- wp:post-featured-image {"isLink":true,"align":"center","style":{"border":{"radius":{"topLeft":"10px","topRight":"10px"}}}} /-->

<!-- wp:group {"className":"post-date","style":{"border":{"radius":"30px"}},"gradient":"ternary-to-primary","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group post-date has-ternary-to-primary-gradient-background has-background" style="border-radius:30px"><!-- wp:post-date {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"uppercase"}},"textColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} /-->

<!-- wp:post-excerpt {"excerptLength":15,"className":"blog-excerpt","style":{"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} /-->

<!-- wp:post-author {"avatarSize":24,"className":"post-author","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|30","bottom":"0"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p class="has-text-align-center"><?php esc_html_e('There is no post found','charity-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"49px"} -->
<div style="height:49px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->