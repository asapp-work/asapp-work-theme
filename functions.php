<?php

// ショートコード使用
add_shortcode('url', 'shortcode_url');
function shortcode_url() {
return get_bloginfo('url');
}
add_shortcode('uri', 'tmp_dir');
function tmp_dir() {
return get_template_directory_uri();
}
add_shortcode('cdir', 'child_dir');
function child_dir() {
return get_stylesheet_directory_uri();
}

/**
 * 投稿にアーカイブ（投稿一覧）を持たせるように変更
 **/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['label'] = 'ニュース';
    $args['has_archive'] = 'news';
  }
  return $args;
}
add_filter('register_post_type_args','post_has_archive', 10, 2);


//本文文字数制限
function custom_excerpt_length( $length ) {
  return 20;	//表示したい文字数
}	
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );


// css js
function my_scripts() {
  wp_enqueue_style( 'style-name-1', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script-name-1', get_template_directory_uri() . '/js/header.js', array( 'jquery' ), '1.0.0', true );
  wp_enqueue_script( 'script-name-2', get_template_directory_uri() . '/js/animation.js', array( 'jquery' ), '1.0.0', true );
  // wp_enqueue_script( 'script-name-3', get_template_directory_uri() . '/assets/js/nav.js', array( 'jquery' ), '1.0.0', true );
  // wp_enqueue_script( 'script-name-4', get_template_directory_uri() . '/assets/js/wordpress.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


// ダッシュボード並び替え
function my_custom_menu_order($menu_order)
{
  if (!$menu_order) return true;
  return array(
    'index.php', //ダッシュボード
    'separator1', //セパレータ
    'edit.php', //お知らせ
    'edit.php?post_type=gallery', //カスタム投稿
    'upload.php', //メディア
    'separator2', //セパレータ
    'edit.php?post_type=page', //固定ページ
    'themes.php', //外観
    'plugins.php', //プラグイン
    'separator-last', //セパレータ
    'users.php', //ユーザー
    'tools.php', //ツール
    'edit-comments.php', //コメント
    'options-general.php', //設定
  );
}
add_filter('custom_menu_order', 'my_custom_menu_order');
add_filter('menu_order', 'my_custom_menu_order');


add_action( 'init', function() { 
	remove_post_type_support( 'gallery', 'editor' ); 
}, 99);

add_action( 'init', function() { 
	remove_post_type_support( 'post', 'editor' ); 
}, 99);






?>


