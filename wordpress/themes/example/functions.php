<?php

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

function action_init()
{
  init_post_type();
}

function action_after()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像を有効
}

function action_pre_get_posts($query)
{
  $query->set('posts_per_page', 1); // 1ページ毎の表示件数
}

add_action('init', 'action_init');
add_action('after_setup_theme', 'action_after');
add_action('pre_get_posts', 'action_pre_get_posts');
