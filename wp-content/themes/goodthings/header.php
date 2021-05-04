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
    <div class="topbar border-bottom-1">
      <div class="container">
        <div class="search inline-block">
          <form>
            <input
              class="no-border"
              type="text"
              placeholder="Search"
              name="search"
            />
          </form>
        </div>
        <div class="buttons float-right">
          <button class="float-left border-left underlined secondary">
            <a href="">
              Learn
            </a>
          </button>
          <button class="float-left contained primary">
            <a href="">
              Donate
            </a>
          </button>
        </div>
      </div>
    </div>

    <div class="navbar">
      <div class="container">
        <div class="logo inline-block"></div>
        <?php
          wp_nav_menu( array( 
              'theme_location' => 'goodthings-menu', 
              'container' => '',
              'menu_class' => 'float-right flex align-items-center' ) ); 
        ?>
      </div>
    </div>
  </header>