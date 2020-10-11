<?php
///WordPress標準機能///
function my_setup() {
  add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
  add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
  add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
  add_theme_support( 'html5', array( /* HTML5のタグで出力 */
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ) );
}
add_action( 'after_setup_theme', 'my_setup' );

 ///CSSとJavaScriptの読み込み////
function my_script_init() {
  wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
  wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'my_script_init' );

///メニューの登録///
function my_menu_init() {
  register_nav_menus( [
    'home'  => 'home',
    'portfolio' => 'portfolio',
   ] );
}
add_action( 'init', 'my_menu_init' );
// wp_nav_menu( array(
//   'theme_location' => 'global',
// ) );
///ウィジェットの登録///
function my_widget_init() {
  register_sidebar( array(
    'name'          => 'サイドバー',
    'id'            => 'sidebar',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<div class="widget-title">',
    'after_title'   => '</div>',
  ) );
}
add_action( 'widgets_init', 'my_widget_init' );

if ( is_active_sidebar( 'sidebar' ) ) {
  dynamic_sidebar( 'sidebar' );
}
add_image_size( 'my_thumbnail', 420, 300, true );
the_post_thumbnail( 'my_thumbnail' );

///カスタムタクソノミー///
function my_taxonomy_init() {
  register_taxonomy( 'item_category', 'page', [
    'labels' => [
      'name'          => '商品カテゴリー',
    ],
      'hierarchical'  => 'true',
      ]);
}
add_action( 'init', 'my_taxonomy_init' );
