<?php
/**
 * Title: Header Image
 * Slug: charity-blocks/header-image
 * Categories: charity-blocks, header-image
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.png'); ?>","id":15,"dimRatio":50,"minHeight":300} -->
<div class="wp-block-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-15" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/inner-banner.png'); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->