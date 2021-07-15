<?php 
	$metasoft_blog_hs				= get_theme_mod('blog_hs','1');	
	$metasoft_blog_title			= get_theme_mod('blog_title');
	$metasoft_blog_description		= get_theme_mod('blog_description');
	$metasoft_blog_display_num		= get_theme_mod('blog_display_num','3');
if(!empty($metasoft_blog_hs)){
?>	
<!-- Latest News Start -->
<section id="latestnews-wrapper" class="latestnews-wrapper bs-py-default home-blog">
	<div class="container">
		<?php if ( ! empty( $metasoft_blog_title ) || ! empty( $metasoft_blog_description )) : ?>
			<div class="row">
				<div class="col-lg-7 col-12 mx-lg-auto mb-5 text-center">
					<div class="heading-seprator wow fadeInUp">
						<?php if ( ! empty( $metasoft_blog_title ) ) : ?>
							<h1><?php echo wp_kses_post($metasoft_blog_title); ?></h1>
						<?php endif; ?>
						
						<?php if ( ! empty( $metasoft_blog_description ) ) : ?>
							<p><?php echo esc_html($metasoft_blog_description); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
		<div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
			<?php 	
				$metasoft_blog_args = array( 'post_type' => 'post', 'posts_per_page' => $metasoft_blog_display_num,'post__not_in'=>get_option("sticky_posts")) ; 	
				$metasoft_wp_query = new WP_Query($metasoft_blog_args);
				if($metasoft_wp_query)
				{	
				while($metasoft_wp_query->have_posts()):$metasoft_wp_query->the_post(); ?>
				<div class="col">
					<?php get_template_part('template-parts/content/content','page'); ?>
				</div>
			<?php 
				endwhile; 
				}wp_reset_postdata();
			?>
		</div>
	</div>
</section>
<?php } ?>
<!-- Latest News End -->	