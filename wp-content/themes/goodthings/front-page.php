<?php get_header(); ?>

<?php $banner = get_field('banner'); ?>

<section class="banner">
  <div class="img">
    <img src="<?php echo $banner['image']; ?>" alt="">
  </div>
  <div class="container">
    <h2><?php echo $banner['title']; ?></h2>
    <p>
      <?php echo $banner['description']; ?>
    </p>
    <button class="contained rounded secondary">
      <a href="<?php echo $banner['link']; ?>">
        <?php echo $banner['link_text']; ?>
      </a>
    </button>
  </div>
</section>

<section class="about">
  <div class="img">
    <img src="<?php bloginfo('template_directory');?>/img/woman.jpg" alt="">
  </div>
  <div class="content">
    <h2>
      We are a social change charity, helping people to improve their lives through digital.
    </h2>
    <p>
      We tackle the pressing issues of our time, working with partners in thousands of communities across the UK and
      further afield.
    </p>
    <button class="outlined rounded secondary">
      <a href="/more-about-us">
        Learn more about us
      </a>
    </button>
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
      <?php foreach( get_cfc_meta( 'what_do_we_do' ) as $key => $value ){ ?>
        <div class="box">
          <h3>
            <?php the_cfc_field( 'what_do_we_do','title', false, $key ); ?>
          </h3>
          <p>
            <?php the_cfc_field( 'what_do_we_do','description', false, $key ); ?>
          </p>
          <button class="outlined rounded primary">
            <a href="<?php the_cfc_field( 'what_do_we_do','link', false, $key ); ?>">
              <?php the_cfc_field( 'what_do_we_do','link_text', false, $key ); ?>
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