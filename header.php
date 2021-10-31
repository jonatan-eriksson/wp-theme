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
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="/"><?php echo get_bloginfo('name') ?></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navigation" class="collapse navbar-collapse">

          <?php
          wp_nav_menu(
            array(
              'menu' => 'header',
              'menu_class' => 'navbar-nav',
            )
          );
          ?>
        </div>
      </div>
    </nav>
  </header>
