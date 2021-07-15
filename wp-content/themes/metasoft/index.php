<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
					<?php 
						$metasoft_paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
						$args = array( 'post_type' => 'post','paged'=>$metasoft_paged );	
					?>
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
				<!-- Pagination -->
				<div class="row">
					<div class="col-12 text-center mt-5">
						<?php								
							// Previous/next page navigation.
							the_posts_pagination( array(
							'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
							'next_text'          => '<i class="fa fa-angle-double-right"></i>',
							) ); 
						?>
					</div>
				</div>
				<!-- Pagination -->                    
			</div>
			<?php get_sidebar();  ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
