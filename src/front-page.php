<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>


      <?php

      $images = get_field('front_page_gallery');
      $size = 'full'; // (thumbnail, medium, large, full or custom size)

      if( $images ): ?>
          <div class="front_page_gallery unSlider">
            <ul>
              <?php foreach( $images as $image ): ?>
                <li>
                  <figure>
                  	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
                  </figure>
                </li>
              <?php endforeach; ?>
          </div>
      <?php endif; ?>

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

<?php get_footer(); ?>
