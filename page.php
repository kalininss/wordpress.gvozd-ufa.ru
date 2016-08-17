<?php get_header(); ?>

<main>

<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post();?>

		<section class="page_rules">
			<div class="container">
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>
		</section>

		<?php
	endwhile;
endif;?>

</main>

<?php get_footer(); ?>