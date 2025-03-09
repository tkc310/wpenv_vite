#!bin/bash

# タイムゾーン
npx wp-env run cli -- wp option update timezone_string 'Asia/Tokyo';

# パーマリンク
npx wp-env run cli -- wp rewrite structure '/%postname%';
