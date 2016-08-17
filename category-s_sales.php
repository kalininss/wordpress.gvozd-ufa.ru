<?php get_header(); ?>


<main>

	<section class="section__sales">
		<div class="container">
			<h2 class="sales__title"><?php single_term_title(); ?></h2>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row sales-list_full">
						<?php if ( have_posts() ) :
						while ( have_posts() ) : the_post();?>
						<div class="sale-item col-lg-4 col-sm-6">
							<?php the_post_thumbnail( 'full', array( 'class' => 'sale-item__img' ) ); ?>
							<h3 class="sale-item__title"><?php the_title(); ?></h3>
							<div class="sale-item__text"><?php the_content(); ?></div>
							<a href="<?php echo get_template_directory_uri(); ?>/popup.html" class="fancybox fancybox.iframe sale-item__button">Забронировать столик</a>
						</div>
						<?php
						endwhile;
						endif;?>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>


<?php get_footer(); ?>