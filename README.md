## What

wordpressの開発環境構築ツール[wp-env](https://github.com/WordPress/gutenberg)で作った環境にviteを入れてtypescript,scssを利用できるようにしたサンプル

## Usage

```
# wordpress起動 (事前にdockerを起動)
$ npm run wp:start

# viteのdev server起動
$ npm run dev

# wordpress停止
$ npm run wp:stop
```

- 起動後に管理画面 `Appearance > Themes` から `example` を有効にする  
http://localhost:8888/wp-admin/themes.php  
- トップページに `wordpress/themes/example` のテーマが反映されて `src/` 配下のjs,cssが読み込まれる (HMRで更新される)
- なお、vite起動中はphpの変更時にlive reloadが実行される