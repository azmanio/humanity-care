<?php
/**
 * Charity Blocks: Block Patterns
 *
 * @since Charity Blocks 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Charity Blocks 1.0
 *
 * @return void
 */
function charity_blocks_register_block_patterns() {
	$block_pattern_categories = array(
		'charity-blocks'    => array( 'label' => __( 'Charity Blocks', 'charity-blocks' ) ),
	);

	$block_pattern_categories = apply_filters( 'charity_blocks_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'charity_blocks_register_block_patterns', 9 );
