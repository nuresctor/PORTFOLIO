<?php 
$metasoft_hs_breadcrumb			= get_theme_mod('hs_breadcrumb','1');
$metasoft_breadcrumb_bg_img		= get_theme_mod('breadcrumb_bg_img',esc_url(get_template_directory_uri() .'/assets/images/bg/breadcrumbg-bg.jpg'));
$metasoft_breadcrumb_back_attach= get_theme_mod('breadcrumb_back_attach','scroll');
if($metasoft_hs_breadcrumb == '1') {	
?>
<section id="breadcrumb-area" class="breadcrumb-area" style="background-image:url('<?php echo esc_url($metasoft_breadcrumb_bg_img); ?>');background-attachment:<?php echo esc_attr($metasoft_breadcrumb_back_attach); ?>">
        <div class="container">
            <div class="row">
                <div class="col-12">
					<h3>
						<?php 
							if ( is_home() || is_front_page()):
	
									single_post_title();
									
							elseif ( is_day() ) : 
							
								printf( __( 'Daily Archives: %s', 'metasoft' ), get_the_date() );
							
							elseif ( is_month() ) :
							
								printf( __( 'Monthly Archives: %s', 'metasoft' ), (get_the_date( 'F Y' ) ));
								
							elseif ( is_year() ) :
							
								printf( __( 'Yearly Archives: %s', 'metasoft' ), (get_the_date( 'Y' ) ) );
								
							elseif ( is_category() ) :
							
								printf( __( 'Category Archives: %s', 'metasoft' ), (single_cat_title( '', false ) ));

							elseif ( is_tag() ) :
							
								printf( __( 'Tag Archives: %s', 'metasoft' ), (single_tag_title( '', false ) ));
								
							elseif ( is_404() ) :

								printf( __( 'Error 404', 'metasoft' ));
								
							elseif ( is_author() ) :
							
								printf( __( 'Author: %s', 'metasoft' ), (get_the_author( '', false ) ));		
							
							else :
									the_title();
									
							endif;
							
						?>
					</h3>
					<ul class="breadcrumb-nav list-inline">
						<?php if (function_exists('metasoft_breadcrumbs')) metasoft_breadcrumbs();?>
					</ul>
                </div>
            </div>
        </div>
    </section>
<?php } ?>	