<?php

/* ------------------------------------------------------------------------- *
 *  Depreciated since Logo and Favicon uploader are now available in the 
 *  Theme Options menu.
/* ------------------------------------------------------------------------- */

/* ------------------------------------------------------------------------- *
 *  This file contains the functions for the Theme Customizer.
 *
 *  The functions in this file are called when the user clicks on the 
 *  'customize' option provided with every theme.
 *
 *  The theme customizer can be used to upload logo, favicon to the theme's 
 *  header as well as to add custom background images and making the front
 *  page of the theme static or selecting 'latest posts'.
/* ------------------------------------------------------------------------- */



if ( ! function_exists( 'magnificient_customizer_functions' ) ) {
    function magnificient_customizer_functions( $wp_customize ) {
        
        /*sections*/
        /*logo*/
        $wp_customize->add_section( 'magnificient_logo_section' , array(
            'title'       => __( 'Logo', 'magnificient' ),
            'priority'    => 30,
            'description' => 'Upload a logo to replace the default site name and description in the header',
        ) );
        
        /*favicon*/
        $wp_customize->add_section( 'magnificient_favicon_section' , array(
            'title'       => __( 'Favicon', 'magnificient' ),
            'priority'    => 30,
            'description' => 'Upload a favicon for your website',
        ) );
        
        /*settings*/
        /*logo*/
        $wp_customize->add_setting( 'magnificient_logo',
        array(
            'sanitize_callback' => 'esc_url_raw'
        ));
        
        /*favicon*/
        $wp_customize->add_setting( 'magnificient_favicon',
        array(
            'sanitize_callback' => 'esc_url_raw'
        ));
        
        
        /*control*/
        /*logo*/
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'magnificient_logo', array(
            'label'        => __( 'Logo', 'magnificient' ),
            'section'    => 'magnificient_logo_section',
            'settings'   => 'magnificient_logo',
        ) ) );

        /*favicon*/
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'magnificient_favicon', array(
            'label'        => __( 'Favicon', 'magnificient' ),
            'section'    => 'magnificient_favicon_section',
            'settings'   => 'magnificient_favicon',
        ) ) );

    }
}

add_action('customize_register', 'magnificient_customizer_functions');



?>