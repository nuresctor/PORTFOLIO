<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>
<?php endif;  ?>
    <!-- Header Start -->
    <header id="header-section" class="main-header">
		<?php do_action('metasoft_above_header'); ?>
 <!-- Main Navigation Start -->
        <div class="navigation-wrapper">
            <!-- Start Desktop Menu -->
            <div class="main-navigation-area d-none d-lg-block">
                <div class="main-navigation">
                    <div class="container <?php echo esc_attr(metasoft_sticky_menu()); ?>">
                        <div class="row">
                            <div class="col-3 my-auto">
                                <div class="logo">
                                    <?php
										if(has_custom_logo())
										{	
											the_custom_logo();
										}
										else { 
										?>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
											<h4 class="site-title">
												<?php 
													echo esc_html(get_bloginfo('name'));
												?>
											</h4>
										</a>	
									<?php 						
										}
									?>
									<?php
										$metasoft_description = get_bloginfo( 'description');
										if ($metasoft_description) : ?>
											<p class="site-description"><?php echo esc_html($metasoft_description); ?></p>
									<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-9 my-auto">
                                <nav class="navbar-area">
                                    <div class="main-navbar">
										<?php 
											wp_nav_menu( 
												array(  
													'theme_location' => 'primary_menu',
													'container'  => '',
													'menu_class' => 'main-menu',
													'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
													'walker' => new WP_Bootstrap_Navwalker()
													 ) 
												);
										?>   
                                    </div>
                                    <div class="main-menu-right">
                                        <ul class="menu-right-list">
											<?php $metasoft_hs_search = get_theme_mod( 'hide_show_search','1'); ?>
											<?php if($metasoft_hs_search == '1') { ?>
                                            <li class="search-button">
                                                <button type="button" id="header-search-toggle" class="header-search-toggle" aria-expanded="false" aria-label="<?php esc_attr_e( 'Search Popup', 'metasoft' ); ?>"><i class="fa fa-search"></i></button>
                                            </li>
											<?php }
												$metasoft_hs_nav_btn 	= get_theme_mod( 'hide_show_nav_btn','1'); 
												$metasoft_nav_btn_lbl 		= get_theme_mod( 'nav_btn_lbl');
												$metasoft_nav_btn_link 		= get_theme_mod( 'nav_btn_link');
												$metasoft_nav_btn_icon 		= get_theme_mod( 'nav_btn_icon');
											?>
											<?php if($metasoft_hs_nav_btn == '1' && !empty($metasoft_nav_btn_lbl)) { ?>
                                            <li class="header-btn d-none d-lg-inline-block">
                                                <a href="<?php echo esc_url($metasoft_nav_btn_link);?>" class="btn btn-border-primary btn-like-icon"><?php echo esc_html($metasoft_nav_btn_lbl);?> <span class="bticn"><i class="fa <?php echo esc_attr($metasoft_nav_btn_icon);?>"></i></span></a>
                                            </li>
											<?php } ?>	
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Desktop Menu -->
            <!-- Start Mobile Menu -->
           <div class="main-mobile-nav <?php echo esc_attr(metasoft_sticky_menu()); ?>"> 
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="main-mobile-menu">
                                <div class="mobile-logo">
                                    <div class="logo">
										 <?php
											if(has_custom_logo())
											{	
												the_custom_logo();
											}
											else { 
											?>
											<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
												<h4 class="site-title">
													<?php 
														echo esc_html(get_bloginfo('name'));
													?>
												</h4>
											</a>	
										<?php 						
											}
										?>
										<?php
											$metasoft_description = get_bloginfo( 'description');
											if ($metasoft_description) : ?>
												<p class="site-description"><?php echo esc_html($metasoft_description); ?></p>
										<?php endif; ?>
                                    </div>
                                </div>
                                <div class="menu-collapse-wrap">
                                    <div class="hamburger-menu">
                                        <button type="button" class="menu-collapsed" aria-label="<?php esc_attr_e( 'Menu Collapsed', 'metasoft' ); ?>">
                                            <div class="one"></div>
                                            <div class="two"></div>
                                            <div class="three"></div>
                                        </button>
                                    </div>
                                </div>
                                <div class="main-mobile-wrapper">
                                    <div id="mobile-menu-build" class="main-mobile-build">
                                        <button type="button" class="header-close-menu close-style" aria-label="<?php esc_attr_e( 'Header Close Menu', 'metasoft' ); ?>"></button>
                                    </div>
                                    <div class="main-mobile-overlay" tabindex="-1"></div>
                                </div>
								<?php if ( function_exists( 'cleverfox_activate' ) ) { ?>
									<div class="header-above-btn">
										<button type="button" class="header-above-collapse header-above-collapse-icon" aria-label="<?php esc_attr_e( 'Header Above Collapse', 'metasoft' ); ?>"><i class="fa fa-angle-down"></i></button>
									</div>
									<div class="header-above-wrapper">
										<div id="header-above-bar" class="header-above-bar"></div>
									</div>
								<?php } ?>	
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
            <!-- End Mobile Menu -->
        </div>
        <!-- Main Navigation End -->
        <!--===// Start: Header Search PopUp
        =================================-->
        <div class="header-search-popup">
            <div class="header-search-flex">
                <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'Site Search', 'metasoft' ); ?>">
                    <input type="search" class="form-control header-search-field" placeholder="<?php esc_attr_e( 'Type To Search', 'metasoft' ); ?>" name="s" id="search">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                </form>
                <button type="button" id="header-search-close" class="close-style header-search-close" aria-label="<?php esc_attr_e( 'Search Popup Close', 'metasoft' ); ?>"></button>
            </div>
        </div>
        <!--===// End: Header Search PopUp
        =================================-->
    </header>
    <!-- Header End -->
<?php
if ( !is_page_template( 'templates/template-homepage.php' ) ) {
metasoft_breadcrumbs_style();  
}	
?>