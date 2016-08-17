<?php get_header(); ?>

<main>

	<section class="page_jobs">
		<div class="container">
			<h2><?php single_term_title(); ?></h2>
			<div class="row">
			<?php if ( have_posts() ) :
				while ( have_posts() ) : the_post();?>
				<div class="col-md-3 col-sm-6 job-col">
					<div class="job-images">
						<img class="job-images__brush" src="<?php echo get_template_directory_uri(); ?>/img/slider-anounce/brush-1.png" alt="">
						<?php the_post_thumbnail( 'full', array( 'class' => 'slider-girl' ) ); ?>
					</div>
					<div class="job-titles">
						<h3 class="job-title"><?php the_title(); ?></h3>
						<h4 class="job-subtitle"><?php echo get_post_meta( $post->ID, 'jobComment', true ); ?></h4>
					</div>
					<div class="job-text">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
			endwhile;
		endif;?>
			</div>
			<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe button_middle job-button">Отправить вакансию</a>
		</div>
	</section>

</main>

<?php get_footer(); ?>