
<div class="gallery__wrap-items my-gallery" itemscope>

<?php
$args = array(
    'post_type' => 'works_gallery',
    'post_per_page' => '18',
);
$the_query = new WP_Query( $args );
if( $the_query->have_posts() ) :
    while( $the_query->have_posts() ): $the_query->the_post();
        $category = get_field('category');
        $caption = get_field('caption');
        $img = get_field('image');
?>

    <figure class="<?php echo $category; ?>" itemprop="associatedMedia" itemscope>
        <a href="<?php echo $img['url']; ?>" itemprop="contentUrl" >
            <img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
        </a>
        <figcaption itemprop="caption description">
        <?php
            the_title();
            if($caption) {
                echo '<br>'. $caption;
            }
        ?>
        </figcaption>
    </figure>


<?php
    endwhile;
endif;
?>

<?php if( function_exists( 'wp_pagenavi')) { wp_pagenavi(); } ?>

</div>


