<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MetaSoft
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
	<div class="post-thumbnail">
		<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		<a href="<?php esc_url(the_permalink()); ?>" class="post-overlay"><i class="fa fa-link"></i></a>
		<div class="post-thumb"><div class="meta-date"><?php echo esc_html(get_the_date('j M, Y')); ?></div></div>
	</div>
	<div class="post-content">
		<ul class="meta-info">
			<li class="posted-by"><a href="<?php echo esc_url(get_author_posts_url( get_the_author_meta( 'ID' ) ));?>"><i class="fa fa-user"></i><?php esc_html(the_author()); ?></a></li>
			<?php if(has_tag()){ ?>
				<li class="tags"><a href="<?php esc_url(the_permalink()); ?>"><i class="fa fa-tags"></i><?php the_tags(''); ?></a></li>
			<?php } ?>	
			<li class="comments"><a href="<?php echo esc_url(get_comments_link( $post->ID )); ?>"><i class="fa fa-commenting"></i><?php echo esc_html(get_comments_number($post->ID)); ?></a></li>
		</ul>
		<div class="post-content-inner">
			<?php     
				if ( is_single() ) :
				
				the_title('<h3 class="post-title">', '</h3>' );
				
				else:
				
				the_title( sprintf( '<h3 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
				
				endif; 
				
				the_content( 
						sprintf( 
							__( 'Read More', 'metasoft' ), 
							'<span class="screen-reader-text">  '.esc_html(get_the_title()).'</span>' 
						) 
					);
			?> 
		</div>
	</div>
</article>