<?php get_header(); ?>

<main>

  <section class="section_partners">
    <img src="<?php echo get_template_directory_uri(); ?>/img/bg-main.png" alt="" class="bg-video">
    <div class="container partner-list">
      <h2><?php single_term_title(); ?></h2>
      <?php if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
          <div class="partner-outer">
            <a href="<?php echo get_post_meta( $post->ID, 'partnerLink', true ) ?>">
              <?php the_post_thumbnail( 'full', array( 'class' => 'partner__img' ) ); ?>
            </a>
          </div>
          <?php
        endwhile;
      endif; ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
