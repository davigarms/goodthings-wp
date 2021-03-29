<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <title>Good Things Foundation</title>

  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div class="topbar">
      <div class="container">
        <div class="search">
          <form>
            <input type="text" placeholder="Search" name="search">
          </form>
        </div>
        <div class="buttons">
          <button class="underlined secondary">
            <a href="">
              Learn
            </a>
          </button>
          <button class="contained primary">
            <a href="">
              Donate
            </a>
          </button>
        </div>
      </div>
    </div>

    <div class="navbar">
      <div class="container">
        <div class="logo"></div>
          <?php
            wp_nav_menu( array( 
                'theme_location' => 'goodthings-menu', 
                'container_class' => 'menu' ) ); 
          ?>
      </div>
    </div>
  </header>