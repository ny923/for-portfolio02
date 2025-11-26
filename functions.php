<?php
add_theme_support('post-thumbnails');
add_filter('wp_calculate_image_srcset_meta', '__return_null');
//画像アップロード時サムネイルを作らない
function not_create_image($sizes)
{
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  unset($sizes['medium_large']);
  unset($sizes['large']);
  unset($sizes['post-thumbnail']); # 1200x800
  unset($sizes['1536x1536']);
  unset($sizes['twentytwenty-fullscreen']); # 1980x1320
  unset($sizes['2048x2048']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'not_create_image');


//タグごと一覧表示
global $tag_id_list;

// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'post'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//カスタム投稿タイプの検索
add_filter('template_include', 'custom_search_template');
function custom_search_template($template)
{
  if (is_search()) {
    $post_types = get_query_var('post_type');
    foreach ((array) $post_types as $post_type)
      $templates[] = "search-{$post_type}.php";
    $templates[] = 'search.php';
    $template = get_query_template('search', $templates);
  }
  return $template;
}

/**
 * @param string $page_title ページのtitle属性値
 * @param string $menu_title 管理画面のメニューに表示するタイトル
 * @param string $capability メニューを操作できる権限（manage_options とか）
 * @param string $menu_slug オプションページのスラッグ。ユニークな値にすること。
 * @param string|null $icon_url メニューに表示するアイコンの URL
 * @param int $position メニューの位置
 */
// 第三引数は権限のレベル 管理者：manage_options
SCF::add_options_page('スライダー', 'スライド画像', 'edit_pages', 'slider-options');
// SCF::add_options_page('youtube', 'youtube動画', 'edit_pages', 'youtube-options');
// SCF::add_options_page('POP', 'POP画像', 'edit_pages', 'pop-options');

// contact form7 p、brタグの自動挿入を停止
function custom_wpcf7_autop_false()
{
  return false;
}
add_filter('wpcf7_autop_or_not', 'custom_wpcf7_autop_false');


//投稿、固定ページ一覧にスラッグ表示
function add_columns_slug($columns)
{
  $columns['slug'] = "スラッグ";
  echo '<style>.fixed .column-slug {width: 10%;}</style>';
  return $columns;
}
function add_column_row_slug($column_name, $post_id)
{
  if ($column_name == 'slug') {
    $post = get_post($post_id);
    $slug = $post->post_name;
    echo esc_attr($slug);
  }
}
add_filter('manage_pages_columns', 'add_columns_slug');
add_action('manage_pages_custom_column', 'add_column_row_slug', 10, 2);
add_filter('manage_posts_columns', 'add_columns_slug');
add_action('manage_posts_custom_column', 'add_column_row_slug', 10, 2);


// 投稿・固定ページ一覧にアイキャッチカラムを追加
function add_columns_thumbnail($columns)
{
  $columns['thumbnail'] = "アイキャッチ";
  echo '<style>.fixed .column-thumbnail {width: 80px;}</style>';
  return $columns;
}

// アイキャッチカラムに画像を表示
function add_column_row_thumbnail($column_name, $post_id)
{
  if ($column_name == 'thumbnail') {
    if (has_post_thumbnail($post_id)) {
      echo get_the_post_thumbnail($post_id, array(60, 60)); // サムネイルサイズ
    } else {
      echo '―'; // アイキャッチ未設定の場合
    }
  }
}

// 投稿一覧用
add_filter('manage_posts_columns', 'add_columns_thumbnail');
add_action('manage_posts_custom_column', 'add_column_row_thumbnail', 10, 2);

// 固定ページ一覧用
add_filter('manage_pages_columns', 'add_columns_thumbnail');
add_action('manage_pages_custom_column', 'add_column_row_thumbnail', 10, 2);


// SP 投稿取得件数変動の為
function is_smartphone()
{
  $ua = $_SERVER['HTTP_USER_AGENT'];
  return (strpos($ua, 'iPhone') !== false ||
    (strpos($ua, 'Android') !== false && strpos($ua, 'Mobile') !== false));
}


// 修正に必要な時出す
// 投稿、固定ページ一覧にスラッグとカスタムフィールドを表示
// function add_columns_custom($columns)
// {
//   $columns['slug'] = "スラッグ";
//   $columns['order_cf'] = "display_order"; // 新しいカラム名

//   // スタイル設定（幅を調整）
//   echo '<style>.fixed .column-slug {width: 10%;}.fixed .column-order_cf {width: 15%;}</style>';

//   return $columns;
// }

// function add_column_row_custom($column_name, $post_id)
// {
//   // スラッグの表示
//   if ($column_name == 'slug') {
//     $post = get_post($post_id);
//     $slug = $post->post_name;
//     echo esc_attr($slug);
//   }

//   // SCFカスタムフィールド 'display_order' の表示
//   if ($column_name == 'order_cf') {
//     // get_post_metaで値を取得
//     $display_order_value = get_post_meta($post_id, 'display_order', true);

//     if (!empty($display_order_value)) {
//       echo esc_html($display_order_value);
//     } else {
//       echo '-';
//     }
//   }
// }

// // 投稿と固定ページに適用
// add_filter('manage_pages_columns', 'add_columns_custom');
// add_action('manage_pages_custom_column', 'add_column_row_custom', 10, 2);
// add_filter('manage_posts_columns', 'add_columns_custom');
// add_action('manage_posts_custom_column', 'add_column_row_custom', 10, 2);
