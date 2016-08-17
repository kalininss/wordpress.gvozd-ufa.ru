<?php get_header(); ?>

<main>


	<section class="section-anounce p-anounce">
		<div class="container">
			<h2 class="kirpich-title"><?php single_term_title(); ?></h2>
			<div class="owl-anounce row">
<?php
global $query_string;
query_posts( $query_string . "&order=ASC" );
?>
				<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();?>
				<!--  href="<?php the_permalink(); ?>" -->
				<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe item col-md-6">
					<img class="item__light" src="<?php echo get_template_directory_uri(); ?>/img/slider-anounce/bg-light.png" alt="">
					<div class="item__main">
						<?php the_post_thumbnail( 'full', array( 'class' => 'slider-girl' ) ); ?>
						<img class="slider-brush" src="<?php echo get_template_directory_uri(); ?>/img/slider-anounce/brush-<?php echo get_post_meta( $post->ID, 'brushNumber', true ) ?>.png" alt="">
						<?php echo get_post_meta( $post->ID, 'slideText', true ) ?>
					</div>
					<div class="item__date"><?php the_title(); ?></div>
				</a>
					<?php
				endwhile;
				endif;?>
			</div>
		</div>
	</section>

</main>

<?php get_footer(); ?>
