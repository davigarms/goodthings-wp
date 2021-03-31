<?php /* Template Name: What Boxes */ ?>
<?php get_header(); ?>
<?php 
$args = array( 'post_type' => 'what-boxes', 'orderby' => 'name', 'order'   => 'ASC');
$the_query = new WP_Query( $args ); 
?>

<section class="what">
  <div class="container">
    <h2>
      What do we do?
    </h2>
    <p>
      You might not have heard of us, but we're people behind the following impactful programmes.
    </p>
    <div class="content">
      <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="box">
        <h3>
          <?php the_title(); ?>
        </h3>
        <p>
          <?php the_content(); ?>
        </p>
        <button class="outlined rounded primary">
          
          <a href="<?php echo get_post_meta($post->ID, 'link', true); ?>">
            Read more
          </a>
        </button>
      </div>
      <?php endwhile;
        wp_reset_postdata(); ?>
        <?php else:  ?>
        <p><?php _e( '' ); ?></p>
        <?php endif; ?>

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