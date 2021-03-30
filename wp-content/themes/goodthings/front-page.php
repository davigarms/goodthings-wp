<?php get_header(); ?>
<?php
  $image = get_cfc_field('banner_panel', 'banner_image');
  $title = get_cfc_field('banner_panel', 'banner_title');
  $description = get_cfc_field('banner_panel', 'banner_description');
  $link = get_cfc_field('banner_panel', 'banner_link');
  $link_text = get_cfc_field('banner_panel', 'banner_link_text');
  if (empty($link_text)) $link_text = 'Learn more';
?>

<section class="banner">
  <div class="img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="container">
    <h2><?php echo $title; ?></h2>
    <?php if (!empty($description)) { ?>
      <p>
        <?php echo $description; ?>
      </p>
    <?php } ?>
    <?php if (!empty($link)) { ?>
      <button class="contained rounded secondary">
        <a href="<?php echo $link; ?>">
          <?php echo $link_text; ?>
        </a>
      </button>
    <?php } ?>
  </div>
</section>

<?php
  $image = get_cfc_field('about', 'about_image');
  $title = get_cfc_field('about', 'about_title');
  $description = get_cfc_field('about', 'about_description');
  $link = get_cfc_field('about', 'about_link');
  $link_text = get_cfc_field('about', 'about_link_text');
  if (empty($link_text)) $link_text = 'Learn more';
?>
<section class="about">
  <div class="img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="content">
    <h2>
      <?php echo $title; ?>
    </h2>
    <p>
      <?php echo $description; ?>
    </p>
    <?php if (!empty($link)) { ?>
      <button class="outlined rounded secondary">
        <a href="<?php echo $link; ?>">
        <?php echo $link_text; ?>
        </a>
      </button>
    <?php } ?>
  </div>
</section>

<section class="how">
  <div class="container">
    <h2>
      How can we help you?
    </h2>
    <p>
      Let us know who you are and what you're looking for, and we'll help get you to the right place.
    </p>
    <form id="howform" class="howform">
      <label for="user">I am</label>
      <select name="user" id="name" form="howform">
        <option value="individual">an Individual</option>
      </select>
      <label for="target">and I want to</label>
      <select name="target" id="target" form="howform">
        <option value="learn">learn</option>
      </select>
      <button class="contained rounded primary">
        <a href="">
          Start now
        </a>
      </button>
    </form>
  </div>
</section>

<section class="what">
  <div class="container">
    <h2>
      What do we do?
    </h2>
    <p>
      You might not have heard of us, but we're people behind the following impactful programmes.
    </p>
    <div class="content">
      <?php foreach( get_cfc_meta( 'what' ) as $key => $value ){ ?>
        <div class="box">
          <h3>
            <?php the_cfc_field( 'what','what_title', false, $key ); ?>
          </h3>
          <p>
            <?php the_cfc_field( 'what','what_description', false, $key ); ?>
          </p>
          <button class="outlined rounded primary">
            <a href="<?php the_cfc_field( 'what','what_link', false, $key ); ?>">
              Read more
            </a>
          </button>
        </div>
      <?php }  ?>
    </div>

    <div class="call">
      <button class="contained rounded secondary">
        <a href="/more-about-us">
          More about what we do
        </a>
      </button>
    </div>
  </div>
</section>

<?php get_footer(); ?>