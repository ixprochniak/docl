<?php
/**
 * @package Urv
 * @since 1.10
 */

get_header();

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
else :
    echo '<p>' . esc_html__( 'Sorry, the criteria were not met.', 'urv' ) . '</p>';
endif;

get_footer();
