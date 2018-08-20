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
	</section>