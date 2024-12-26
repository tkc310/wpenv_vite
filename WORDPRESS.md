## Refs

- WordPressのテーマを作る羽目になったWebエンジニアへ  
  https://zenn.dev/antez/articles/8e576daf822a84
- テストデータ
  https://zenn.dev/antez/articles/8e576daf822a84#%E3%83%86%E3%82%B9%E3%83%88%E3%83%87%E3%83%BC%E3%82%BF%E3%81%AE%E3%82%A4%E3%83%B3%E3%83%9D%E3%83%BC%E3%83%88

## 構成

themes/

- style.css
- screenshot.png: themeのサムネ
- index.php
- header.php
- footer.php
- sidebar.php
- functions.php
  すべてのファイルから参照されるため、関数定義やライフサイクルのカスタマイズなどはこのファイルで宣言する。  
  ビルトインのテンプレート関数についてもこちらから振る舞いを変更できる。  
  https://zenn.dev/antez/articles/8e576daf822a84#functions.php

## テンプレート関数

https://webgaku.net/jp/wordpress/template-tag/

### よく使う関数

- have_posts: 記事の存在判定
- the_post: 記事データの呼び出し
- the_permalink: 記事リンク
- the_post_thumbnail: 記事画像 (imgタグ付き)
- the_title
- the_excerpt
- the_content
