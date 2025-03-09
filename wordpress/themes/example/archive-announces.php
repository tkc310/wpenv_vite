<?php get_header(); ?>

<h2 class="font-bold text-xl">お知らせ</h2>
<div class="foo">
  <p class="bar">hoge</p>

  <?php
  $post_type = ['post_type' => 'announces'];
  $post_args = array_merge(
    [
      'numberposts' => 1,
    ],
    $post_type
  );
  ?>
  <?php if (have_posts($post_type)): ?>
    <ul>
    <?php while (have_posts($post_type)):
      the_post($post_args); ?>
      <?php include 'components/post_item.php'; ?>
    <?php
    endwhile; ?>
  </ul>

  <?php
  the_posts_pagination(
    array_merge(
      [
        'type' => 'list',
      ],
      $post_type
    )
  );
  wp_reset_postdata();
  ?>

  <?php else: ?>
    <div>記事がありません</div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
