## What

wordpressの開発環境構築ツール[wp-env](https://github.com/WordPress/gutenberg)で作った環境にviteを入れてtypescript,scssを利用できるようにしたサンプル

[wp-env doc](https://ja.wordpress.org/team/handbook/block-editor/reference-guides/packages/packages-env/)

## Usage

```
# wordpress起動 (事前にdockerを起動)
$ npm run wp:start

# viteのdev server起動
$ npm run dev

# wordpress停止
$ npm run wp:stop

# データベースリセット、投稿・ページ・メディアなどが削除される
$ npm run wp:clean

# dockerコンテナの削除
$ npm run wp:destroy
```

- 起動後に管理画面 `Appearance > Themes` から `example` を有効にする  
  http://localhost:8888/wp-admin/themes.php
- トップページに `wordpress/themes/example` のテーマが反映されて `src/` 配下のjs,cssが読み込まれる (HMRで更新される)
- なお、vite起動中はphpの変更時にlive reloadが実行される

```
user: admin
password: password
```

### Optional

- 管理画面 `Setting > General > Language` を日本語にする
- 管理画面 `Setting > General > Timezone` を `+9:00` にする
- `Adminer & MailHog` の起動 (DBクライアントはドライバが必要なのでローカルはwebツールを利用)

```
$ docker compose up -d
```

### Port

| service       | url                   |
| ------------- | --------------------- |
| wordpress     | http://localhost:8888 |
| vite (assets) | http://localhost:3000 |
| Adminer       | http://localhost:8080 |
| MailHog       | http://localhost:8025 |
