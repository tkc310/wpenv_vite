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
