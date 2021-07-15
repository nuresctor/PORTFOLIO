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
		<div class="row g-5">
			<!-- Blog Posts -->
			<div id="ms-primary-content" class="<?php esc_attr(metasoft_post_layout()); ?>">
				<div class="row row-cols-1 gy-5">
					<?php if( have_posts() ): ?>
						<?php while( have_posts() ) : the_post(); ?>
							<div class="col">
								<?php get_template_part('template-parts/content/content','page'); ?>
							</div>
					<?php 
						endwhile;
						else: 
							get_template_part('template-parts/content/content','none'); 
					 endif; ?>
				</div>                   
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
</section>
<?php get_footer(); ?>
