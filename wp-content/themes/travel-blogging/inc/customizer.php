<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage travel-blogging
 * @since travel-blogging 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travel_blogging_customize_register( $wp_customize ) {
    // Check for existence of WP_Customize_Manager before proceeding
	if ( ! class_exists( 'WP_Customize_Manager' ) ) {
        return;
    }
    
    // Add the custom upsell section to the customizer
	$wp_customize->add_section( new Travel_Blogging_Upsell_Section( $wp_customize, 'upsell_section', array(
		'title'       => __( 'Travel Blogging', 'travel-blogging' ),
		'button_text' => __( 'GO TO PREMIUM', 'travel-blogging' ),
		'url'         => esc_url( TRAVEL_BLOGGING_BUY_NOW ),
		'priority'    => 0,
	)));
}
add_action( 'customize_register', 'travel_blogging_customize_register' );

if ( class_exists( 'WP_Customize_Section' ) ) {
	class Travel_Blogging_Upsell_Section extends WP_Customize_Section {
		public $type = 'travel-blogging-upsell';
		public $button_text = '';
		public $url = '';

		protected function render() {
			?>
			<li id="accordion-section-<?php echo esc_attr( $this->id ); ?>" class="travel_blogging_upsell_section accordion-section control-section control-section-<?php echo esc_attr( $this->id ); ?> cannot-expand">
				<h3 class="accordion-section-title">
					<?php echo esc_html( $this->title ); ?>
					<a href="<?php echo esc_url( $this->url ); ?>" class="button button-secondary alignright" target="_blank" style="margin-top: -4px;"><?php echo esc_html( $this->button_text ); ?></a>
				</h3>
			</li>
			<?php
		}
	}
}

/**
 * Enqueue script for custom customize control.
 */
function travel_blogging_custom_control_scripts() {
	wp_enqueue_script( 'travel-blogging-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );

    wp_enqueue_style( 'travel-blogging-customizer-css', get_template_directory_uri() . '/assets/css/customizer.css', array(), '1.0' );
}
add_action( 'customize_controls_enqueue_scripts', 'travel_blogging_custom_control_scripts' );