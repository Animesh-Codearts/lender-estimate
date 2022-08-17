<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage lender

 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	
	 *
	 * @return void
	 */
	function lender_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'lender-columns-overlap',
				'label' => esc_html__( 'Overlap', 'lender' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'lender-border',
				'label' => esc_html__( 'Borders', 'lender' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'lender-border',
				'label' => esc_html__( 'Borders', 'lender' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'lender-border',
				'label' => esc_html__( 'Borders', 'lender' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'lender-image-frame',
				'label' => esc_html__( 'Frame', 'lender' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'lender-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'lender' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'lender-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'lender' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'lender-border',
				'label' => esc_html__( 'Borders', 'lender' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'lender-separator-thick',
				'label' => esc_html__( 'Thick', 'lender' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'lender-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'lender' ),
			)
		);
	}
	add_action( 'init', 'lender_register_block_styles' );
}
