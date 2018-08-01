	<section id="works" class="section section-works">
		<div class="section-works__front-content">
			<div class="section-works__text">
				<h2 class="yellowtail"><?php echo $titleWorks;?></h2>	
				<p><?php echo $descriptionWorks;?></p>					
				<a class="btn-more" href="<?php echo $linkWorks['url']; ?>" target="<?php echo $linkWorks['target']; ?>"><?php echo $linkWorks['title']; ?></a>
			</div>
			<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
		</div>
		<div class="section-works__bg-images">
			<img class="section-works__decoration-1" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works1.jpg" alt="bg-decoration-image1">
			<img class="section-works__decoration-2" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works2.jpg" alt="bg-decoration-image2">
		</div>
	</section>