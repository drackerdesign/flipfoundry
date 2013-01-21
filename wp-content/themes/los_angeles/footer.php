</div></div></div>
<!-- </Container -->
	
	<!-- Footer -->
	<div id="footer">
		
		<!-- BEGIN INNER FOOTER -->
		<div class="inner">
			
			
		<!-- BEGIN FOOTER ADVERTISEMENTS -->
		<?php if (get_option('theme_footerads_yesno') == 'Yes') { ?>
			
		<ul class="ads">
			<li><a href="<?php echo get_option('theme_banner_url'); ?>">
				<img src="<?php echo get_option('theme_banner_image'); ?>" alt="" />
			</a></li>
			
			<li><a href="<?php echo get_option('theme_mini1_url'); ?>">
				<img src="<?php echo get_option('theme_mini1_image'); ?>" alt="" />
			</a></li>
			
			<li><a href="<?php echo get_option('theme_mini2_url'); ?>">
				<img src="<?php echo get_option('theme_mini2_image'); ?>" alt="" />
			</a></li>
		</ul>
		<?php } else { ?><br /><br /><?php } ?>
		<!-- END FOOTER ADVERTISEMENTS -->
		
		
		<!-- BEGIN COPYRIGHT SECTION -->
		<div class="copyright">		
		<?php $customField1 = get_option("theme_footerlogo");
		        if (isset($customField1[0])) { ?>	
		        	
				<p><a href="<?php bloginfo('url') ?>"><img src="<?php echo get_option('theme_footerlogo',true); ?>" alt="logo"/></a><?php echo get_option('theme_footer'); ?></p>

		<?php } else { ?> <p><img src="<?php bloginfo('template_url'); ?>/assets/css/custom/<?php echo strtolower(get_option('theme_color')); ?>/img/footer_logo.png" alt="logo"/></a><?php echo get_option('theme_footer'); ?></p> <?php } ?>
		</div>
		<!-- END COPYRIGHT SECTION -->
		
				
		<!-- BEGIN FOOTER LINKS -->
		<ul class="quick_links">
				<?php site_menu('footer'); ?>
		</ul>
		<!-- END FOOTER LINKS -->
		
		
		</div>
		<!-- END INNER FOOTER -->
		
	</div>
	<!-- </Footer -->

<?php wp_footer(); ?>
<script type="text/javascript"> Cufon.now(); </script>

</body>
</html>