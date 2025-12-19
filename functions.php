<?php
if(!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
if ( function_exists( 'register_block_style' ) ) {
    register_block_style(
        'core/group',
        array(
            'name'         => 'blocket-skill-box',
            'label'        => __( 'Blocket Skill Box'),
            'is_default'   => true,
            'inline_style' => '.is-style-blocket-skill-box  { box-shadow: #0000000d 0 0 0 1px,#d1d5db 0 0 0 1px inset!important; } .is-style-blocket-skill-box:hover{transform: translateY(-4px);   }',
        )
    );
}