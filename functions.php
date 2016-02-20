<?php 

if(! function_exists( 'missdrepants_enqueue_styles' ) ) {

    function missdrepants_enqueue_styles() {

        // Don't load Simply Instagram tooltips scripts and styles
        wp_dequeue_script( 'jquery.tools.min-3.3.0.js' );
        wp_dequeue_style( 'tooltipster' );

        // Don't load parent theme's Google Maps script
        wp_dequeue_script( 'ebor-googlemapsapi' );
        wp_dequeue_script( 'ebor-googlemapsapi' );

        $parent_main_style = 'ebor-style';

        $parent_styles = array(
            $parent_main_style,
            'ebor-custom',
            'ebor-bootstrap',
            'ebor-owl',
            'ebor-fancybox',
            'ebor-fancybox-thumbs'
        );

        wp_enqueue_style( $parent_main_style, get_template_directory_uri() . '/style.css' );
        wp_enqueue_style( 'missdrepants-style',
            trailingslashit( get_stylesheet_directory_uri() ) . 'assets/styles/style.min.css', $parent_styles );
    }

    add_action( 'wp_enqueue_scripts', 'missdrepants_enqueue_styles' );

}

/**
 * Theme Helpers
 */
include_once trailingslashit( get_stylesheet_directory() ) . 'inc/theme-helpers.php';

?>