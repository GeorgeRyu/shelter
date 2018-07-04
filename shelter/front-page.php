<?php get_header(); ?>

	<section id="main" class="section section-main">
		<div class="section-main__main-text">
			<h2 class="section-main__copy yellowtail">Best visual effect</h2>
			<p>
				より魅力的でコストパフォーマンスに優れた<br class="br-control">
				ビジュアルを提案いたします。
			</p>
		</div>
		<div class="section-main__main-images">
			<div class="section-main__slider">
				<ul>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_visual_1.jpg" alt="work-image01"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_visual_2.jpg" alt="work-image02"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_visual_3.jpg" alt="work-image03"></li>
					<li><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/main_visual_4.jpg" alt="work-image04"></li>
				</ul>
			</div>
		</div>
		<div class="section-main__main-spimages">
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
				<h2>
					<img id="titleworks" class="titleworks" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/title_works1.png" alt="制作事例">							
				</h2>	
				<p>
					長年さまざまなイメージパースを製作しており、<br class="br-change">
					要望通りのものをご提案させていただきます。<br class="br-change">
					手書きとCGどちらでも製作いたします。
				</p>					
			</div>

			<div class="section-works__slider">
				<ul>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-01.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-02.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-03.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-04.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-05.jpg" alt=""></a></li>
					<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/work-06.jpg" alt=""></a></li>
				</ul>
			</div>
			<a class="btn-more" href="<?php echo esc_url( home_url('/works') ); ?>">詳しく見る</a>
		</div>
		<div class="section-works__bg-images">
			<img class="section-works__decoration-1" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works1.jpg" alt="bg-decoration-image1">
			<img class="section-works__decoration-2" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-works2.jpg" alt="bg-decoration-image2">
		</div>
	</section>

	<section id="blog" class="section section-blog">
		<div class="section-content">
			<div class="front-content">
				<div class="text-blog">
					<h2>
						<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/title_blog.png" alt="ブログ" class="titleblog">
					</h2>
					<p>
						仕事とは別で、日々周りにある風景などを絵にしています。<br class="br-change">
						様々なタッチの絵に日々楽しみながら挑戦して仕事に生かそうと考えています。<br class="br-change">
						あくまでブログなので気の向くままの内容です。
					</p>
				</div>
				<div class="slider-blog">
					<ul>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-01.jpg" alt=""></a></li>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-02.jpg" alt=""></a></li>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-03.jpg" alt=""></a></li>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-04.jpg" alt=""></a></li>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-05.jpg" alt=""></a></li>
						<li><a href=""><img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/blog-06.jpg" alt=""></a></li>
					</ul>
				</div>
				<a class="btn-more" href="<?php echo esc_url( home_url('/blog') ); ?>">詳しく見る</a>				
			</div>
			<div class="bg-images">
				<img class="bg-decoration-image3" src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/bg-image-blog1.png" alt="bg-decoration-image3">
			</div>					
		</div>
	</section>

	<section id="contact" class="section section-contact">

		<div class="section-content">

			<div class="ad-contact">
				<div class="form">
					<div class="wrap-form">
						<h2>お問い合わせ</h2>
						<form action="">
							<input type="text" name="name" placeholder="お名前*">
							<input type="email" name="email" placeholder="メールアドレス*">
							<textarea name="comment" placeholder="コメント*"></textarea>
							<input type="submit" name="send" value="送信する">			
						</form>			
					</div>
				</div>
				<div class="address">
					<img src="<?php echo esc_url(get_template_directory_uri() ); ?>/images/logo-02.png" alt="logo">
					<p>
						スタジオシェルター　Shelter Inc<br>
						410-3611 静岡県賀茂郡松崎町松崎 208-2
					</p>
					<div class="large-text">
						<p class="tel">090-1558-1890
						</p>
						<p class="ad">shelterfly3@yahoo.co.jp</p>
					</div>					
				</div>
			</div>

<?php get_footer(); ?>
