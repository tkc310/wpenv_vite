<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Title</title>
  <?php if (IS_DEVELOP) {
    $root = 'http://localhost:3000';
    $css_ext = 'scss';
    $js_ext = 'ts';
    echo '<script type="module" src="http://localhost:3000/@vite/client"></script>';
  } else {
    $root = get_template_directory_uri();
    $css_ext = 'css';
    $js_ext = 'js';
  } ?>
  <link rel="stylesheet" href="<?php echo $root; ?>/styles/main.<?php echo $css_ext; ?>">
  <script src="<?php echo $root; ?>/scripts/main.<?php echo $js_ext; ?>" type="module"></script>
</head>

<header class="header">
  <ul class="h-full flex justify-stretch items-center">
    <li class="mr-auto text-lg font-bold">example</li>
    <li>
      <?php get_search_form(); ?>
    </li>
  </ul>
</header>
<body>
