<?php
/**
 * Titan Notice Handler
 */

defined( 'ABSPATH' ) || exit;

define('TRAVEL_BLOGGING_FREE_URL',__('https://www.titanthemes.net/products/free-travel-wordpress-theme','travel-blogging'));
define('TRAVEL_BLOGGING_SUPPORT',__('https://wordpress.org/support/theme/travel-blogging/','travel-blogging'));
define('TRAVEL_BLOGGING_REVIEW',__('https://wordpress.org/support/theme/travel-blogging/reviews/#new-post','travel-blogging'));
define('TRAVEL_BLOGGING_BUY_NOW',__('https://www.titanthemes.net/products/coaching-center-wordpress-theme','travel-blogging'));
define('TRAVEL_BLOGGING_DOC_URL',__('https://preview.titanthemes.net/documentation/travel-blogging/','travel-blogging'));
define('TRAVEL_BLOGGING_LIVE_DEMO',__('https://preview.titanthemes.net/travel-blogging','travel-blogging'));
define('TRAVEL_BLOGGING_BUNDLE',__('https://www.titanthemes.net/products/wordpress-theme-bundle','travel-blogging'));

/**
 * Admin Hook
 */
function travel_blogging_admin_menu_page() {
    $travel_blogging_theme = wp_get_theme( get_template() );

    add_theme_page(
        $travel_blogging_theme->display( 'Name' ),
        $travel_blogging_theme->display( 'Name' ),
        'manage_options',
        'travel-blogging',
        'travel_blogging_do_admin_page'
    );
}
add_action( 'admin_menu', 'travel_blogging_admin_menu_page' );

/**
 * Enqueue getting started styles and scripts
 */
function titan_widgets_backend_enqueue() {
    wp_enqueue_style(
        'titan-getting-started',
        get_template_directory_uri() . '/about-theme/about-theme.css'
    );

    // Enqueue your admin notice JS
    wp_enqueue_script(
        'titan-admin-notice',
        get_template_directory_uri() . '/about-theme/admin-notice-script.js',
        array('jquery'), // dependencies
        '1.0',
        true
    );

    // Pass PHP data to JS
    wp_localize_script(
        'titan-admin-notice',
        'travel_blogging',
        array(
            'ajax_url' => admin_url('admin-ajax.php'),
            'nonce'    => wp_create_nonce('travel_blogging_nonce'),
        )
    );
}
add_action( 'admin_enqueue_scripts', 'titan_widgets_backend_enqueue' );


/**
 * Class Titan_Notice_Handler
 */
class Titan_Notice_Handler {

    public static $nonce;

    /**
     * Empty Constructor
     */
    public function __construct() {
        // Activation notice
        add_action( 'switch_theme', array( $this, 'flush_dismiss_status' ) );
        add_action( 'admin_init', array( $this, 'getting_started_notice_dismissed' ) );
        add_action( 'admin_notices', array( $this, 'titan_theme_info_welcome_admin_notice' ), 3 );
        add_action( 'wp_ajax_travel_blogging_dismissable_notice', array( $this, 'ajax_dismiss_notice' ) );
        add_action( 'wp_ajax_titan_getting_started', array( $this, 'titan_getting_started' ) );
    }

    /**
     * Display an admin notice linking to the about page
     */
    public function titan_theme_info_welcome_admin_notice() {
        $current_screen = get_current_screen();
        $travel_blogging_theme = wp_get_theme();

        if ( is_admin() && ! get_user_meta( get_current_user_id(), 'gs_notice_dismissed' ) && $current_screen->base !== 'appearance_page_travel-blogging' ) {
            echo '<div class="updated notice notice-success is-dismissible notice-get-started-class admin-notice" data-notice="getting_started_notice">';
            echo '<div class="admin-notice-content">';
            echo '<p><strong>' . sprintf( esc_html__( 'Welcome! Thank you for choosing %1$s.', 'travel-blogging' ), esc_html( $travel_blogging_theme->get( 'Name' ) ) ) . '</strong></p>';
            echo '<p class="plugin-notice">' . esc_html__( 'Thank you for choosing this theme. Use the Get Started guide to quickly set up and personalize your website.', 'travel-blogging' ) . '</p>';
            echo '<div class="titan-buttons">';
            echo '<p><a href="' . esc_url( admin_url( 'themes.php?page=travel-blogging' ) ) . '" class="titan-install-plugins button button-primary">' . sprintf( esc_html__( 'Get started with %s', 'travel-blogging' ), esc_html( $travel_blogging_theme->get( 'Name' ) ) ) . '</a></p>';
            echo '<p><a href="' . esc_url( TRAVEL_BLOGGING_BUY_NOW ) . '" class="button button-secondary" target="_blank">' . esc_html__( 'GO FOR PREMIUM', 'travel-blogging' ) . '</a></p>';
            echo '<p><a href="' . esc_url( TRAVEL_BLOGGING_BUNDLE ) . '" class="button button-bundle" target="_blank">' . esc_html__( 'GET BUNDLE', 'travel-blogging' ) . '</a></p>';
            echo '</div>';
            echo '</div>';
            echo '<div class="admin-notice-image">';
            echo '<img class="notice_img" width="100%" src="' . esc_url( get_template_directory_uri() . '/assets/images/notice.png' ) . '">';
            echo '</div>';
            echo '<a href="#" class="getting-started-notice-dismiss">Dismiss</a>';
            echo '</div>';
        }
    }

    public function getting_started_notice_dismissed() {
        if ( isset( $_GET['gs-notice-dismissed'] ) ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
    }

    public function flush_dismiss_status() {
        delete_user_meta( get_current_user_id(), 'gs_notice_dismissed' );
    }

    public function ajax_dismiss_notice() {
        if ( isset( $_POST['type'] ) && $_POST['type'] === 'getting_started_notice' ) {
            add_user_meta( get_current_user_id(), 'gs_notice_dismissed', 'true' );
        }
        wp_die();
    }

}

new Titan_Notice_Handler();

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function travel_blogging_do_admin_page() { 
    $travel_blogging_theme = wp_get_theme(); ?>
    <div class="travel-blogging-themeinfo-page--wrapper">
        <div class="free&pro">
            <div id="travel-blogging-admin-about-page-1">
                <div class="theme-detail">
                   <div class="travel-blogging-admin-card-header-1">
                    <div class="travel-blogging-header-left">
                        <h2>
                            <?php echo esc_html( $travel_blogging_theme->Name ); ?> <span><?php echo esc_html($travel_blogging_theme['Version']);?></span>
                        </h2>
                        <p>
                            <?php
                            echo wp_kses_post( apply_filters( 'titan_theme_description', esc_html( $travel_blogging_theme->get( 'Description' ) ) ) );
                        ?>
                        </p>
                    </div>
                    <div class="travel-blogging-header-right">
                        <div class="travel-blogging-pro-button">
                            <a href="<?php echo esc_url( TRAVEL_BLOGGING_BUY_NOW ); ?>" class="travel-blogging-button button-primary" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'UPGRADE TO PREMIUM', 'travel-blogging' ); ?>
                            </a>
                        </div>
                    </div>
                </div>   
                </div>   
                <div class="travel-blogging-features">
                    <div class="travel-blogging-features-box">
                        <h3><?php esc_html_e( 'PREMIUM DEMONSTRATION', 'travel-blogging' ); ?></h3>
                        <p><?php esc_html_e( 'Effortlessly create and customize your website by arranging text, images, and other elements using the Gutenberg editor, making web design easy and accessible for all skill levels.', 'travel-blogging' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_BLOGGING_LIVE_DEMO ); ?>" class="travel-blogging-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DEMONSTRATION', 'travel-blogging' ); ?>
                            </a>
                    </div>
                    <div class="travel-blogging-features-box">
                        <h3><?php esc_html_e( 'REVIEWS', 'travel-blogging' ); ?></h3>
                        <p><?php esc_html_e( 'We would be happy to hear your thoughts and value your evaluation.', 'travel-blogging' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_BLOGGING_REVIEW ); ?>" class="travel-blogging-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'REVIEWS', 'travel-blogging' ); ?>
                            </a>
                    </div>
                    <div class="travel-blogging-features-box">
                        <h3><?php esc_html_e( '24/7 SUPPORT', 'travel-blogging' ); ?></h3>
                        <p><?php esc_html_e( 'Please do not hesitate to contact us at support if you need help installing our lite theme. We are prepared to assist you!', 'travel-blogging' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_BLOGGING_SUPPORT ); ?>" class="travel-blogging-button button-secondary-1" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'SUPPORT', 'travel-blogging' ); ?>
                        </a>
                    </div>
                    <div class="travel-blogging-features-box">
                        <h3><?php esc_html_e( 'THEME INSTRUCTION', 'travel-blogging' ); ?></h3>
                        <p><?php esc_html_e( 'If you need assistance configuring and setting up the theme, our tutorial is available. A fast and simple method for setting up the theme.', 'travel-blogging' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_BLOGGING_DOC_URL ); ?>" class="travel-blogging-button button-secondary-1" target="_blank" rel="noreferrer">
                                <?php esc_html_e( 'DOCUMENTATION', 'travel-blogging' ); ?>
                            </a>
                    </div>
                </div>   
            </div>
            <div id="travel-blogging-admin-about-page-2">
                <div class="travel-blogging-pro-button bundle">
                    <div class="bundle-content">
                        <h3 class="bundle-head"><?php esc_html_e( 'Get All Themes In Single Pack', 'travel-blogging' ); ?></h3>
                        <p class="bundle-para"><?php esc_html_e( 'From customization to optimization, this bundle gives you the flexibility to create stunning websites.', 'travel-blogging' ); ?></p>
                        <a href="<?php echo esc_url( TRAVEL_BLOGGING_BUNDLE ); ?>" class="travel-blogging-button bundle" target="_blank" rel="noreferrer">
                            <?php esc_html_e( 'BUY THEME BUNDLE', 'travel-blogging' ); ?>
                        </a>
                    </div>
                    <div class="bundle-image">
                        <img class="img_bundle" width="100%" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bundle.png' ); ?>" alt="<?php esc_attr_e('logo', 'travel-blogging'); ?>">
                    </div>
                </div> 
                <div class="theme-detail">
                   <div class="travel-blogging-admin-card-header-1">
                        <div class="travel-blogging-header-left-pro"> 
                            <h2><?php esc_html_e( 'The premium version of this theme will be available for you to enhance or unlock our premium features.', 'travel-blogging' ); ?></h2>
                        </div>
                        <div class="travel-blogging-header-right-2">
                            <div class="travel-blogging-pro-button">
                                <a href="<?php echo esc_url( TRAVEL_BLOGGING_BUY_NOW ); ?>" class="travel-blogging-button button-primary-1 buy-now" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'GO TO PREMIUM', 'travel-blogging' ); ?>
                                </a>
                            </div>
                            <div class="travel-blogging-pro-button">
                                <a href="<?php echo esc_url( TRAVEL_BLOGGING_LIVE_DEMO ); ?>" class="travel-blogging-button button-primary-1 pro-demo" target="_blank" rel="noreferrer">
                                    <?php esc_html_e( 'PREMIUM DEMO', 'travel-blogging' ); ?>
                                </a>
                            </div> 
                        </div>
                    </div>
                    <div class="travel-blogging-admin-card-header-2">
                        <img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $travel_blogging_theme->get_screenshot() ); ?>" />
                    </div> 
                </div>    
            </div>
        </div>
    </div>
<?php } ?>