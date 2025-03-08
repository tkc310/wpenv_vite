<?php
function webst8_setup()
{
  add_theme_support('post-thumbnails'); // アイキャッチ画像
}

// テーマ初期化時
add_action('after_setup_theme', 'webst8_setup');
