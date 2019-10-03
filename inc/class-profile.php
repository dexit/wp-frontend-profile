<?php

/**
 * User Profile handler class
 */
class WPFEP_Profile {

    private $login_errors = array();
    private $messages = array();

    private static $_instance;

    function __construct() {
        add_shortcode( 'wpfep-profile', array($this, 'user_profile') );
        add_action( 'wpfep_profile_pagination', array($this, 'get_profile_pagination'));
    }

    /**
     * Singleton object
     *
     * @return self
     */
    public static function init() {
        if ( !self::$_instance ) {
            self::$_instance = new self;
        }

        return self::$_instance;
    }


    /**
     * Shows the user profile
     *
     * @return string
     */
    function user_profile() {
        global $wp;
        
        $profile_page = wpfep_get_option( 'profile_page', 'wpfep_pages', false );

        ob_start();

        wpfep_load_template( 'profile.php', $profile_page );

        return ob_get_clean();
    }

    /**
     * Add Error message
     *
     * @since 1.0.0
     *
     * @param $message
     */
    public function add_error( $message ) {
        $this->login_errors[] = $message;
    }

    /**
     * Add info message
     *
     * @since 1.0.0
     *
     * @param $message
     */
    public function add_message( $message ) {
        $this->messages[] = $message;
    }
    /**
     * Show erros on the form
     *
     * @return void
     */
    function show_errors() {
        if ( $this->login_errors ) {
            foreach ($this->login_errors as $error) {
                echo '<div class="wpfep-error">';
                _e( $error,'wpptm' );
                echo '</div>';
            }
        }
    }

    /**
     * Show messages on the form
     *
     * @return void
     */
    function show_messages() {
        if ( $this->messages ) {
            foreach ($this->messages as $message) {
                printf( '<div class="wpfep-message">%s</div>', $message );
            }
        }
    }

    /**
     * Prints the tab content pagination section.
     *
     * @since       1.0.0
     * @package     userswp
     * @param       int         $total       Total items.
     * @return      void
     */
    public function get_profile_pagination($total) {
        ?>
        <div class="wpfep-pagination">
            <?php
            $big = 999999999; // need an unlikely integer
            $translated = __( 'Page', 'wpptm' ); // Supply translatable string

            echo paginate_links( array(
                'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                'format' => '?paged=%#%',
                'current' => max( 1, get_query_var('paged') ),
                'total' => $total,
                'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>',
                'type' => 'list'
            ) );
            ?>
        </div>
        <?php
    }

    /**
     * Get User Profile page url
     *
     * @return boolean|string
     */
    function get_profile_url() {
        $page_id = wpfep_get_option( 'profile_page', 'wpfep_pages', false );

        if ( !$page_id ) {
            return false;
        }

        $url = get_permalink( $page_id );

        return apply_filters( 'wpfep_profile_url', $url, $page_id );
    }
}
