<?php /* Template Name: Gallery Page Template */ get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if( have_rows('gallery') ): ?>

	<div class="image-series">

	<?php while( have_rows('gallery') ): the_row();

		// vars
		$title = get_sub_field('series_title');
		$gallery = get_sub_field('images');

		if( $gallery ): ?>
		<h2><?php echo $title; ?></h2>
				<div class="gallery">

						<?php foreach( $gallery as $image ): ?>

								<figure>
									<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
								</figure>

						<?php endforeach; ?>
				</div>
		<?php endif; ?>


	<?php endwhile; ?>

</div>

<?php endif; ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
