<?php
 
  // generatorを非表示にする
  remove_action('wp_head', 'wp_generator');
 
  // EditURIを非表示にする
  remove_action('wp_head', 'rsd_link');
 
  // wlwmanifestを非表示にする
  remove_action('wp_head', 'wlwmanifest_link');
 
  //タイトルタグ出力
  add_theme_support( 'title-tag' );
 
  //emoji無効化
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'wp_print_styles', 'print_emoji_styles', 10 );
 
  //body_classにスラッグを追加
  function pagename_class($classes = '') {
    if (is_page()) {
      $page = get_post(get_the_ID());
      $classes[] = 'page-' . $page->post_name;
      if ($page->post_parent) {
        $classes[] = 'page-' . get_page_uri($page->post_parent) . '-child';
      }
    }
    return $classes;
  }
  add_filter('body_class', 'pagename_class');
 
  //管理画面以外で使用する
  if (!is_admin()) {
 
    //CSSとJavaScriptの読み込み
    function my_scripts() {
 
    //テンプレートディレクトリのパス
    $dir = get_template_directory_uri();
 
    //CSS
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0', 'all');

    // add google fonts
    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css?family=Yellowtail', array(), '1.0.0', 'all');

    //JS
    wp_enqueue_script( 'script', $dir . '/app.js', array('jquery'), '1.0.0', true );
     
    }
    add_action( 'wp_enqueue_scripts', 'my_scripts' );
 
  }
 
  