<?php get_header(); ?>

	<section id="main" class="section section-main">
		<div class="section-main__main-text">
			<h2 class="section-main__copy yellowtail"><?php the_field('main_copy1'); ?></h2>
			<p><?php the_field('main_copy2'); ?></p>
		</div>
		<div class="section-main__main-images">
			<div class="section-main__slider">
				<?php 

				$images = get_field('main_images');

				if( $images ): ?>
					<ul>
						<?php foreach( $images as $image ): ?>
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

	<section id="works" class="section section-works">
		<div class="section-works__front-content">
			<div class="section-works__text">
				<h2 class="yellowtail">Works</h2>	
				<p>
					長年さまざまなイメージパースを製作しており、<br class="br-change">
					要望通りのものをご提案させていただきます。<br class="br-change">
					手書きとCGどちらでも製作いたします。
				</p>					
				<a class="btn-more" href="<?php echo esc_url( home_url('/works') ); ?>">詳しく見る</a>
			</div>
			<?php echo do_shortcode('[smartslider3 slider=1]'); ?>
		</div>
		<div class="section-works__bg-images">
			<img class="section-works__decoration-1" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works1.jpg" alt="bg-decoration-image1">
			<img class="section-works__decoration-2" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works2.jpg" alt="bg-decoration-image2">
		</div>
	</section>

	<section id="blog" class="section section-blog">
		<div class="section-blog__front-content">
			<div class="section-blog__text">
				<h2 class="yellowtail">Blog</h2>	
				<p>
					仕事とは別で、<br class="br-change">
					日々周りにある風景などを絵にしています。<br class="br-change">
					あくまでブログなので気の向くままの内容です。
				</p>
				<a class="btn-more" href="<?php echo esc_url( home_url('/blog') ); ?>">詳しく見る</a>				
			</div>
			<?php echo do_shortcode('[smartslider3 slider=3]'); ?>				
		</div>
		<div class="section-blog__bg-images">
			<img class="bg-decoration-image3" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-blog1.png" alt="bg-decoration-image3">
		</div>					
	</section>

<?php get_footer(); ?>
