<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
  <title>Good Things Foundation</title>

  <?php wp_head(); ?>
</head>

<body>
    <header>
      <div class="topbar border-bottom-1">
        <div class="container">
          <div class="inline-block">
            <form>
              <input
                class="topbar__input no-border"
                type="text"
                placeholder="Search"
                name="search"
              />
            </form>
          </div>
          <div class="float-right">
            <button
              class="topbar__button float-left border-left btn-underlined btn-secondary"
            >
              <a href="">
                Learn
              </a>
            </button>
            <button class="topbar__button float-left btn-primary">
              <a href="">
                Donate
              </a>
            </button>
          </div>
        </div>
      </div>

      <div class="navbar">
        <div class="container">
          <div class="navbar__logo inline-block">
            <a href="/" class="full-area"></a>
          </div>
        <?php
          wp_nav_menu( array( 
              'theme_location' => 'goodthings-menu', 
              'container' => '',
              'menu_class' => 'navbar__menu float-right flex align-items-center' ) ); 
        ?>
      </div>
    </div>
  </header>