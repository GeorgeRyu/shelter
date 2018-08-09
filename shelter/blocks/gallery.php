
<section class="section gallery">
    <div class="gallery__wrap-content">
        <?php if($category):?>
            <select class="gallery__sort" name="category">
                <?php foreach( $category as $item) {
                    echo '<option value="'. $item['value']. '">'. $item['label']. '</option>';
                } ?>
            </select>
            <?php get_template_part('archive', 'works_gallery');?>
        <?php else:
            get_template_part('archive', 'blog_list');
        endif;
        ?>
    </div>
</section>