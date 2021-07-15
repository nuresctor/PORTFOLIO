<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package MetaSoft
 */

get_header();
?>
<section id="page-404" class="page-404 bs-py-default">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="page-404-text">
					<h1 class="text-404"><?php esc_html_e('404','metasoft'); ?></h1>
					<h2><?php esc_html_e('Well this is awkward…','metasoft'); ?></h2>
					<h3><?php esc_html_e('The page you’re looking for doesn’t exist.','metasoft'); ?></h3>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-secondary btn-like-icon"><span class="bticn"><i class="fa fa-paper-plane"></i></span> <span><?php esc_html_e('Go To Home','metasoft'); ?></span></a>
				</div>
			</div>
		</div>
	</div>
</section>	
<?php get_footer(); ?>
