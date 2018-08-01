<section id="main" class="section section-main">
		<div class="section-main__main-text">
			<h2 class="section-main__copy yellowtail"><?php echo $mainTitle1; ?></h2>
			<p><?php the_sub_field('main_copy2'); ?></p>
		</div>
		<div class="section-main__main-images">
			<div class="section-main__slider">
				<?php 

                $mainImages = get_sub_field('main_images');

				if( $mainImages ): ?>
					<ul>
						<?php foreach( $mainImages as $image ): ?>
							<li>
								<img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
							</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		<div class="section-main__main-sp-images">
			<div class="section-main__sp-slider">
				<ul>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_sp-visual_1.jpg" alt="work-image01"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_sp-visual_2.jpg" alt="work-image02"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_sp-visual_3.jpg" alt="work-image03"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_sp-visual_4.jpg" alt="work-image04"></li>
				</ul>
			</div>
		</div>
	</section>