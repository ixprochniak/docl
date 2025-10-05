<?php
/**
 * @package Urv
 * @since 1.10
 */

add_action( 'after_setup_theme', function() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
} );

add_action( 'wp_enqueue_scripts', function() {
    wp_register_style( 'urv', false );
    wp_enqueue_style( 'urv' );

    wp_add_inline_style( 'urv',
    '*,*::before,*::after' .
    '{ box-sizing: border-box; }' .

    'html,body,div,span,applet,object,iframe,' .
    'h1,h2,h3,h4,h5,h6,p,blockquote,pre,' .
    'a,abbr,acronym,address,big,cite,code,' .
    'del,dfn,em,img,ins,kbd,q,s,samp,' .
    'small,strike,strong,sub,sup,tt,var,' .
    'b,u,i,center,' .
    'dl,dt,dd,ol,ul,li,' .
    'fieldset,form,label,legend,' .
    'table,caption,tbody,tfoot,thead,tr,th,td,' .
    'article,aside,canvas,details,embed,' .
    'figure,figcaption,footer,header,hgroup,' .
    'menu,nav,output,ruby,section,summary,' .
    'time,mark,audio,video' .
    '{ margin: 0; padding: 0; border: 0; }' .

    'article,aside,details,figcaption,figure,' .
    'footer,header,hgroup,menu,nav,section' .
    '{ display: block; }' .

    'ul,ol' .
    '{ list-style-type: none; }' .

    'body' .
    '{ -webkit-font-smoothing: antialiased; -moz-osx-font-smoothing: grayscale; }'
    );
}, 0 );

add_action( 'wp_enqueue_scripts', function() {
    wp_dequeue_style( 'wp-block-library' );
    wp_deregister_style( 'wp-block-library' );

    wp_dequeue_style( 'classic-theme-styles' );
    wp_deregister_style( 'classic-theme-styles' );

    wp_dequeue_style( 'global-styles' );
    wp_deregister_style( 'global-styles' );
}, 100 );
