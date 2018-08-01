<?php get_header(); ?>


<?php

// check if the flexible content field has rows of data
if( have_rows('blocks') ):

    // loop through the rows of data
    while ( have_rows('blocks') ) :
        the_row();

        if( get_row_layout() == 'main_view_area' ):
            $mainTitle1 = get_sub_field('main_copy1');
            $mainTitle2 = get_sub_field('main_copy2');
            $mainImages = get_sub_field('main_images');
            include 'blocks/main-view-area.php';

        elseif( get_row_layout() == 'works_area' ): 
            $titleWorks = get_sub_field('title_works');
            $descriptionWorks = get_sub_field('description_works');
            $linkWorks = get_sub_field('link_works');
            include 'blocks/works_area.php';

        elseif( get_row_layout() == 'blog_area' ):
            $titleBlog = get_sub_field('title_blog');
            $descriptionBlog = get_sub_field('description_blog');
            $linkBlog = get_sub_field('link_blog');
            include 'blocks/blog_area.php';
        endif;
    
    endwhile;

else :

    // no layouts found

endif;

?>


<?php get_footer(); ?>