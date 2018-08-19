<?php
/*

@package sheltertheme

    ============================
        AJAX FUNCTIONS
    ============================

*/

add_action('wp_ajax_nopriv_gallery_load_more', 'gallery_load_more');
add_action('wp_ajax_gallery_load_more', 'gallery_load_more');


function gallery_load_more() {

    $paged = $_POST["page"]+1;

    $query = new WP_Query( array(
        'post_type' => 'works_gallery',
        'post_status' => 'publish',
        'orderby' => 'date', //ID順に並び替え
        'order' => 'DESC',
        'paged' => $paged
        // 'posts_per_page' => 3,
    ));



    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    
            get_template_part( 'blocks/gallery-post', get_post_format() );
        
        endwhile;
    endif;

    wp_reset_postdata();


    die();
}


add_action('wp_ajax_nopriv_gallery_load_more_blog', 'gallery_load_more_blog');
add_action('wp_ajax_gallery_load_more_blog', 'gallery_load_more_blog');

function gallery_load_more_blog() {

    $paged = $_POST["page"]+1;

    $query = new WP_Query( array(
        'post_type' => 'blog_gallery',
        'post_status' => 'publish',
        'orderby' => 'date', //ID順に並び替え
        'order' => 'DESC',
        'paged' => $paged
        // 'posts_per_page' => 3,
    ));



    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
    
            get_template_part( 'blocks/gallery-post', get_post_format() );
        
        endwhile;
    endif;

    wp_reset_postdata();


    die();
}

