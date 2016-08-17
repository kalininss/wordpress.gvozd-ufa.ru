<?php get_header(); ?>

<main>
	<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();?>
	<section class="page_anounce-one">
		<div class="container">
			<h2><?php the_title(); ?></h2>
			<div class="row">
				<div class="col-md-5">
					<?php the_content(); ?>
					<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe sale-item__button anounce-btn">Забронировать столик</a>
				</div>
			</div>
		</div>
	</section>

		<?php
	endwhile;
	endif;?>
</main>

<?php get_footer(); ?>
