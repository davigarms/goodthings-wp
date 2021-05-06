<?php get_header(); ?>
<?php
  $image = get_cfc_field('banner_panel', 'banner_image');
  $title = get_cfc_field('banner_panel', 'banner_title');
  $description = get_cfc_field('banner_panel', 'banner_description');
  $link = get_cfc_field('banner_panel', 'banner_link');
  $link_text = get_cfc_field('banner_panel', 'banner_link_text');
  if (empty($link_text)) $link_text = 'Learn more';
?>

<section class="hero">
  <div class="hero__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="hero__text">
    <h3 class="hero__title txt-bold txt-xlg bgc-primary">
      <?php echo $title; ?>
    </h3>
    <?php if (!empty($description)) { ?>
      <h4 class="hero__description bgc-white fgc-highlight">
        <?php echo $description; ?>
    </h4>
    <?php } ?>
    <?php if (!empty($link)) { ?>
      <button class="rounded btn-secondary">
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
<section class="about flex wrap">
  <div class="about__img">
    <img src="<?php echo $image; ?>" alt="">
  </div>
  <div class="about__text bgc-secondary">
    <h2 class="about__title">
      <?php echo $title; ?>
    </h2>
    <p class="about__description">
      <?php echo $description; ?>
    </p>
    <?php if (!empty($link)) { ?>
      <button class="rounded btn-outlined btn-secondary">
        <a href="<?php echo $link; ?>">
        <?php echo $link_text; ?>
        </a>
      </button>
    <?php } ?>
  </div>
</section>

<section class="how">
  <div class="container">
    <h2 class="txt-lg">
      How can we help you?
    </h2>
    <p>
      Let us know who you are and what you're looking for, and we'll help get you to the right place.
    </p>
    <form id="how__form" class="how__form txt-md center">
      <label for="user">I am</label>
      <select class="how__select txt-md border-bottom-2 fgc-highlight" name="user" id="name" form="how__form">
        <option value="individual">an Individual</option>
      </select>
      <label for="target">and I want to</label>
      <select class="how__select txt-md border-bottom-2 fgc-highlight" name="target" id="target" form="how__form">
        <option value="learn">learn</option>
      </select>
      <button class="how__button rounded btn-primary">
        <a href="">
          Start now
        </a>
      </button>
    </form>
  </div>
</section>

<section class="what bgc-primary">
  <div class="container">
    <h2>
      What do we do?
    </h2>
    <h3 class="what__description txt-sm">
      You might not have heard of us, but we're people behind the following impactful programmes.
    </h3>
    <ul class="what__cards flex wrap space-between">
      <?php foreach( get_cfc_meta( 'what' ) as $key => $value ){ ?>
        <li class="what__card bgc-white center">
          <h4 class="what__card-title txt-bold">
            <?php the_cfc_field( 'what','what_title', false, $key ); ?>
          </h4>
          <p class="what__card-description">
            <?php the_cfc_field( 'what','what_description', false, $key ); ?>
          </p>
          <button class="rounded btn-outlined btn-primary">
            <a href="<?php the_cfc_field( 'what','what_link', false, $key ); ?>">
              Read more
            </a>
          </button>
      </li>
      <?php }  ?>
    </div>

    <div class="center">
      <button class="rounded btn-secondary">
        <a href="/more-about-us">
          More about what we do
        </a>
      </button>
    </div>
  </div>
</section>

<?php get_footer(); ?>