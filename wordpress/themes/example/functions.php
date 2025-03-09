<?php

add_action('init', 'action_init');
function action_init()
{
  init_post_type();
}
function init_post_type()
{
  $supports = [
    'title',
    'editor', // 本文
    'excerpt',
    'thumbnail',
    'author',
    'revisions',
  ];
  register_post_type(
    'announces', // カスタム投稿ID
    [
      'label' => 'お知らせ',
      'public' => true, // 一般公開の有効可否
      'has_archive' => true, // 一覧表示の有効可否
      'menu_position' => 5, // 管理画面サイドメニューの位置 (5は投稿の下)
      'supports' => $supports,
    ]
  );
}

add_action('after_setup_theme', 'action_after');
function action_after()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効
}

add_action('pre_get_posts', 'action_pre_get_posts');
function action_pre_get_posts($query)
{
  $query->set('posts_per_page', 1); // 1ページ毎の表示件数
}

// カスタムフィールド
add_action('add_meta_boxes', 'add_foo_fields');
function add_foo_fields()
{
  add_meta_box(
    'foo', // 表示される入力ボックスのHTMLのID
    'Foo', // ラベル
    'insert_foo_fields', // 表示する内容を作成する関数名
    'page', // , 投稿タイプ (post | page)
    'normal' // 位置 (normal | side | advanced)
  );
}
function insert_foo_fields()
{
  global $post;

  echo 'Foo: <input type="text" name="foo" value="' .
    get_post_meta($post->ID, 'foo', true) .
    '" size="50" /><br>';
}

add_action('save_post', 'save_foo_fields');
function save_foo_fields($post_id)
{
  // 自動保存を除外
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }

  if (!empty($_POST['foo'])) {
    update_post_meta($post_id, 'foo', $_POST['foo']);
  } else {
    delete_post_meta($post_id, 'foo');
  }
}
