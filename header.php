<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name') . " - ";
          the_title(); ?></title>
  <?php wp_head() ?>
</head>

<body>
  <header id="header">
    <h2><?php echo get_bloginfo('name') ?></h2>
  </header>
