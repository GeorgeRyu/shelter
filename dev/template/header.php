<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1">
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<title>スタジオシェルター | shelter.Inc</title>
	<?php wp_head(); ?>

</head>

<body data-gr-c-s-loaded="true">

	<header id="header" class="header">
		<a class="header__logo" href="<?php echo esc_url( home_url() ); ?>"></a>	
		<nav class="header__menu-contents">
			<ul>
				<li class="header__link-home">
					<a href="<?php echo esc_url( home_url() ); ?>">
						Home
						<span>ホーム</span>
					</a>
				</li>
				<li class="header__link-works">
					<a href="<?php echo esc_url( home_url('/works') ); ?>">
						Work
						<span>制作事例</span>
					</a>
				</li>
				<li class="header__link-blog">
					<a href="<?php echo esc_url( home_url('/blog') ); ?>">
						Blog
						<span>ブログ</span>
					</a>
				</li>
				<li class="header__link-contact">
					<a class="header__btn-contact" href="<?php echo esc_url( home_url() ); ?>#contact">
						Contact
						<span>お問い合わせ</span>
					</a>
				</li>
			</ul>
		</nav>
		<div class="header__btn-menu">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</header>