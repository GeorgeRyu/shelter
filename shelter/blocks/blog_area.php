<section id="blog" class="section section-blog">
    <div class="section-blog__front-content">
        <div class="section-blog__text">
            <div class="section-blog__text-inside">
                <h2 class="yellowtail"><?php echo $titleBlog; ?></h2>	
                <p><?php echo $descriptionBlog; ?></p>
                <a class="btn-more" href="<?php echo $linkBlog['url']; ?>" target="<?php echo $linkBlog['target']; ?>"><?php echo $linkBlog['title']; ?></a>
            </div>
        </div>
        <?php echo do_shortcode('[smartslider3 slider=3]'); ?>				
    </div>
    <div class="section-blog__bg-images">
        <img class="bg-decoration-image3" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-blog1.png" alt="bg-decoration-image3">
    </div>					
</section>