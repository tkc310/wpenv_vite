<form role="search" id="search" class="search" method="get" action="<?php echo esc_url(
  home_url('/')
); ?>">
  <input type="text" value="<?php echo get_search_query(); ?>" name="s" placeholder="検索する文字を入力"/>
  <button type="submit">検索する</button>

  <!-- 投稿タイプを限定 -->
  <!-- <input type="hidden" name="post_type" value="post"> -->
</form>
