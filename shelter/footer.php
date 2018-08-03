	<section id="contact" class="section section-bottom">

		<div class="section-bottom__wrap">

			<div class="section-bottom__ad-form">
				<div class="section-bottom__wrap-address">
					<div class="section-bottom__address">
						<?php
						$img = get_field('company_logo', 'option');
						if($img): ?>
							<img src="<?php echo $img['url']; ?>" alt="<?php echo $img['alt']; ?>">
						<?php endif;?>
						<p>
							<?php 
								$name = the_field('company_name', 'option');
								if($name) {
									$name;
								}
							?>
							<?php
								$add = get_field('company_ad', 'option');
								if($add) {
									echo '<br>'. $add;
								}
							?>
						</p>
						<div class="section-bottom__large-text">
							<?php
								$tel = get_field('phone_number', 'option');
								$phoneImg = get_field('phone_img', 'option');
								if($tel) {
									echo '<div><img src="'. $phoneImg['url']. '" alt="'. $phoneImg['alt']. '">';
									echo '<a class="tel" href="tel:'. $tel. '">'. $tel. '</a></div>';
								}
							?>
							<?php
								$ad = get_field('ad', 'option');
								$adImg = get_field('ad_img', 'option');
								if($ad) {
									echo '<div><img src="'. $adImg['url']. '" alt="'. $adImg['alt']. '">';
									echo '<a class="ad" href="mailto:'. $ad. '" target="_top">'. $ad. '</a></div>';
								}
							?>
						</div>					
					</div>
				</div>
				<div class="section-bottom__form">
					<div class="section-bottom__wrap-form">
						<h2 class="yellowtail">Contact</h2>
						<?php echo do_shortcode('[contact-form-7 id="49" title="コンタクトフォーム 1"]'); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section-bottom__footer">
			<p class="copyright">@ 2017 shelter.Inc</p>				
			<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg/bg_footer.png" alt="">
		</div>
	</section>
	<?php wp_footer(); ?>

</body>

</html>