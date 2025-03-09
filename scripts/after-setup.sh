#!bin/bash

# タイムゾーン変更
npx wp-env run cli -- wp option update timezone_string 'Asia/Tokyo'
