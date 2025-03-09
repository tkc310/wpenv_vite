<?php get_header(); ?>

<?php if (get_post_type() == 'announces'): ?>
  お知らせページ<br />
<?php endif; ?>

<?php the_post_thumbnail(); ?>

<h2 class="font-bold text-xl">
  <?php the_title(); ?>
</h2>

<p>
  <?php the_content(); ?>
</p>

<?php get_footer(); ?>
