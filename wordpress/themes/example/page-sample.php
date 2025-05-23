<?php
/* Template Name: sample */
?>

<?php get_header(); ?>

<h2 class="font-bold text-xl"><?php the_title(); ?></h2>
<div class="foo">
  <?php
  $foo = get_post_meta(get_the_ID(), 'foo', true);
  if (!empty($foo)): ?>
    <h3><?php echo esc_html($foo); ?></h3>
  <?php endif;
  ?>

  <p class="bar"><?php the_content(); ?></p>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos exercitationem nam, aliquam saepe perferendis eligendi facilis provident eaque doloribus dolor! Autem quos repudiandae incidunt exercitationem nihil aliquid vero, nobis velit!</p>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos exercitationem nam, aliquam saepe perferendis eligendi facilis provident eaque doloribus dolor! Autem quos repudiandae incidunt exercitationem nihil aliquid vero, nobis velit!</p>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos exercitationem nam, aliquam saepe perferendis eligendi facilis provident eaque doloribus dolor! Autem quos repudiandae incidunt exercitationem nihil aliquid vero, nobis velit!</p>
</div>

<?php get_footer(); ?>
