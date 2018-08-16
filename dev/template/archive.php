
<div class="gallery__wrap-items my-gallery gallery-container" >

<?php

$args = array(
        'posts_per_page' => 15,
        'orderby' => 'date', //ID順に並び替え
        'order' => 'DESC',
        'paged' => get_query_var( 'paged' )
        );  

if(is_page( 'works' )) {
    $args['post_type'] = 'works_gallery'; 
} elseif(is_page( 'blog' )) {
    $args['post_type'] = 'blog_gallery'; 
} else {
    return;
}

$the_query = new WP_Query( $args );
if( $the_query->have_posts() ) :
    while( $the_query->have_posts() ): $the_query->the_post();

        get_template_part( 'blocks/gallery-post', get_post_format() );
    
    endwhile;
endif;
?>

</div>

<div class="gallery__wrap-more">
    <a class="gallery__mare-btn load-more"
    data-page="1"
    data-url="<?php echo admin_url('admin-ajax.php'); ?>"
    >
        Load More
    </a>
</div><!-- gallery__wrap-more -->