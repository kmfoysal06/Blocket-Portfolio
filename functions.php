<?php
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function blocket_all_block_styles() {
    register_block_style(
        'core/group',
        array(
            'name'         => 'hero-section-row',
            'label'        => __( 'Hero Section Row', 'blocket-portfolio' ),
            'inline_style' => '',
        )
    );
    register_block_style(
        'core/group',
        array(
            'name'         => 'default-row',
            'label'        => __( 'Default Row', 'blocket-portfolio' ),
            'inline_style' => '',
        )
    );
     register_block_style(
        'core/group',
        array(
            'name'         => 'blocket-skill-box',
            'label'        => __( 'Blocket Skill Box'),
            'is_default'   => true,
            'inline_style' => '.is-style-blocket-skill-box  { box-shadow: #0000000d 0 0 0 1px,#d1d5db 0 0 0 1px inset!important; } .is-style-blocket-skill-box:hover{transform: translateY(-4px);   }',
        )
    );
     register_block_style(
        'core/group',
        array(
            'name'         => 'blocket-centered-block',
            'label'        => __( 'Blocket Centered Block'),
            'is_default'   => true,
            'inline_style' => '.is-style-blocket-centered-block  { margin-inline: auto;!important} ',
        )
    );
     register_block_style(
        'core/group',
        array(
            'name'         => 'blocket-footer-row',
            'label'        => __( 'Blocket Footer Row'),
            'is_default'   => true,
            'inline_style' => '.is-style-blocket-footer-row {justify-content: space-around;} ',
        )
    );
}
add_action( 'init', 'blocket_all_block_styles' );

add_action( 'wp_enqueue_scripts', 'blocket_enqueue_assets' );
function blocket_enqueue_assets() {
    wp_register_style( 'blocket-portfolio-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
    wp_enqueue_style( 'blocket-portfolio-style' );
}