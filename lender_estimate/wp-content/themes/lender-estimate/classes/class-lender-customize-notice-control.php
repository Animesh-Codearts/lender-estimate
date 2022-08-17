<?php
/**
 * Customize API: lender_Customize_Notice_Control class
 *
 * @package WordPress
 * @subpackage lender

 */

/**
 * Customize Notice Control class.
 *

 *
 * @see WP_Customize_Control
 */
class lender_Customize_Notice_Control extends WP_Customize_Control {
	/**
	 * The control type.
	 *
	
	 *
	 * @var string
	 */
	public $type = 'lender-notice';

	/**
	 * Renders the control content.
	 *
	 * This simply prints the notice we need.
	 *
	
	 *
	 * @return void
	 */
	public function render_content() {
		?>
		<div class="notice notice-warning">
			<p><?php esc_html_e( 'To access the Dark Mode settings, select a light background color.', 'lender' ); ?></p>
			<p><a href="<?php echo esc_url( __( 'https://wordpress.org/support/article/lender/#dark-mode-support', 'lender' ) ); ?>">
				<?php esc_html_e( 'Learn more about Dark Mode.', 'lender' ); ?>
			</a></p>
		</div>
		<?php
	}
}
