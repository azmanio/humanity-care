<?php
/**
 * Title: More Post
 * Slug: charity-blocks/more-post
 * Categories: charity-blocks, more-post
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--80)"><!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center"><?php esc_html_e('More Articles &amp; Posts','charity-blocks'); ?></h3>
<!-- /wp:heading -->

<!-- wp:query {"queryId":10,"query":{"perPage":"3","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"related-post","fontSize":"small","layout":{"type":"grid","columnCount":"3"}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"10px","top":{"color":"var:preset|color|primary","width":"4px"},"right":{"color":"var:preset|color|border-color","width":"1px"},"bottom":{"color":"var:preset|color|primary","width":"4px"},"left":{"color":"var:preset|color|border-color","width":"1px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group has-section-bg-background-color has-background" style="border-radius:10px;border-top-color:var(--wp--preset--color--primary);border-top-width:4px;border-right-color:var(--wp--preset--color--border-color);border-right-width:1px;border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:4px;border-left-color:var(--wp--preset--color--border-color);border-left-width:1px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:post-featured-image {"style":{"border":{"radius":"10px"}}} /-->

<!-- wp:post-title {"textAlign":"left","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} /-->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"","excerptLength":10} /-->

<!-- wp:group {"className":"archieve-readmore","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group archieve-readmore"><!-- wp:separator {"backgroundColor":"primary"} -->
<hr class="wp-block-separator has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:read-more {"content":"Read More","style":{"typography":{"textDecoration":"none"},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->