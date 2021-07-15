<!-- Footer Area Start -->
<footer id="footer-section" class="footer-section main-footer footer-wrapper text-md-left text-center footer-1">
	<div class="container">
		<div class="footer-inner">
			<?php if ( is_active_sidebar( 'metasoft-footer-widget-area' ) ) { ?>		
			<div class="footer-matter footer-main">
				<div class="row g-4">     
					<?php  dynamic_sidebar( 'metasoft-footer-widget-area' ); ?>
				</div>                    
			</div>
			<?php } ?>
			<?php 
				$footer_first_custom 	= get_theme_mod('footer_first_custom','Copyright &copy; [current_year] [site_title] | Powered by [theme_author]');
			?>
			<?php  if ( ! empty( $footer_first_custom ) ){ ?>	
			<div class="footer-copyright">
				<div class="row">
					<div class="col-md-12 text-center">
						<?php 	
							$metasoft_copyright_allowed_tags = array(
								'[current_year]' => date_i18n('Y'),
								'[site_title]'   => get_bloginfo('name'),
								'[theme_author]' => sprintf(__('<a href="#">MetaSoft WordPress Theme</a>', 'metasoft')),
							);
						?>                      
						<div class="copyright-text">
							<?php
								echo apply_filters('metasoft_footer_copyright', wp_kses_post(metasoft_str_replace_assoc($metasoft_copyright_allowed_tags, $footer_first_custom)));
							?>
						</div>
					</div>	
				</div>
			</div>
		<?php } ?>
		</div>            
	</div>
</footer>
<!-- Footer Area End -->
	
	 <!-- ScrollUp -->
	 <?php 
		$hs_scroller 	= get_theme_mod('hs_scroller','1');	
		if($hs_scroller == '1') :
	?>
		 <button type="button" class="scrollingUp scrolling-btn" aria-label="<?php esc_attr_e( 'scrollingUp', 'metasoft' ); ?>">
			<i class="fa fa-arrow-up"></i>
		</button>
	<?php endif; ?>	
  <!-- / -->  
</div>
</div>
<?php 
wp_footer(); ?>
</body>
</html>
