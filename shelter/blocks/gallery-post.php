<?php
        $category = get_field('category');
        $caption = get_field('caption');
        $img = get_field('image');
        $medium = $img['sizes'][ 'large' ];
        $width = $img['sizes'][ 'large' . '-width' ];
        $height = $img['sizes'][ 'large' . '-height' ];        
?>

<figure id="post-<?php the_ID(); ?>" <?php post_class($category) ?> >
    <a href="<?php echo $img['url']; ?>"  data-size="<?php echo $width. 'x'. $height ?>"  >
        <img src="<?php echo $medium; ?>" alt="<?php echo $img['alt']; ?>">
    </a>
    <figcaption>
    <?php
        the_title();
        if($caption) {
            echo '<br>'. $caption;
        }
    ?>
    </figcaption>
</figure>