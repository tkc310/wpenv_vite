<?php get_header(); ?>

<h2 class="font-bold text-xl">テスト</h2>
<div class="foo">
  <p class="bar">hoge</p>

  <?php if (have_posts()): ?>
    <ul>
    <?php while (have_posts()):
      the_post(); ?>
      <li>
        <a href="<?php the_permalink(); ?>">
          <article class="flex items-center">
            <div class="mr-2">
              <img width="100px" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
            </div>
            <div>
              <h3 class="font-bold text-lg"><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </article>
        </a>
      </li>
    <?php
    endwhile; ?>
  </ul>

  <?php else: ?>
    <div>記事がありません</div>
  <?php endif; ?>
</div>

<?php get_footer(); ?>
