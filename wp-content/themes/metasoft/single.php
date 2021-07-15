<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MetaSoft
 */

get_header();
?>
<section class="blog-content bs-py-default">
	<div class="container">
		<!-- Blog Posts -->
		<div class="row row-cols-1 row-cols-md-3 g-5 wow fadeInUp">
				<div id="ms-primary-content" class="<?php esc_attr(metasoft_post_layout()); ?>">
				<div class="row row-cols-1 gy-5">
					<div class="col">
						<?php if( have_posts() ): ?>
							<?php while( have_posts() ): the_post(); ?>
								<?php get_template_part('template-parts/content/content','page'); ?> 
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
					<div class="col">
						<?php comments_template( '', true ); // show comments  ?>
					</div>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
	
<?php get_footer(); ?>
