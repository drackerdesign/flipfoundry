<?php 
/*
 * Template Name: Full Width
*/
get_header(); ?>
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!-- BEGIN HOMEPAGE OPTIONS --> 
	<?php if (is_front_page()) { ?>
		

	<!-- Cu3er -->
		<div id="cu3er">
			<div id="cu3er-container">
    				<a href="http://www.adobe.com/go/getflashplayer"><img src="<?php bloginfo('url') ?>/assets/img/cu3er/slide_1.jpg" alt="" /></a>
			</div>
		</div>
		<!-- </Cu3er -->



		<!-- 1,2,3,4 Quick Links -->
		<ul class="quick_links">
				<li>
					<h3><img src="http://makedesignnotwar.com/themes/losangeles/html/assets/img/quick_links/guide.jpg" alt=""/> Official Guide</h3>
					<p>"Los Angeles" includes easy to follow installation instructions as well as other helpful tips, no extra cost. <a class="more" href="#">More</a></p>
				</li>
				
				<li>
					<h3><img src="http://makedesignnotwar.com/themes/losangeles/html/assets/img/quick_links/guide.jpg" alt=""/> Media Ready</h3>

					<p>Want to play videos or music? Have an image gallery or portfolio that needs to be displayed? L.A. supports that! <a class="more" href="#">More</a></p>
				</li>
				
				<li>
					<h3><img src="http://makedesignnotwar.com/themes/losangeles/html/assets/img/quick_links/guide.jpg" alt=""/> Save Your Money</h3>
					<p>Buying pre-built themes saves you time and money, even if you want to have another designer customize it! <a class="more" href="#">More</a></p>
				</li>

				
				<li>
					<h3><img src="http://makedesignnotwar.com/themes/losangeles/html/assets/img/quick_links/guide.jpg" alt=""/> Get Support</h3>
					<p>Still can't find what ya need? Send a message through the ThemeForest form &amp; I'll get back to you shortly. <a class="more" href="#">More</a></p>
				</li>
			</ul>
		<!-- </Quick Links -->


		<!-- Twitter Bar -->
			<div id="twitter_bar">
				<p>Tweet tweet! This optional bar can be used for your twitter account, show your slogan, or to simply rotate quotes, news, &amp; events.  <a class="follow" href="#">Follow Me</a></p>
			</div>
		<!-- </Twitter Bar -->						
		
	
		
	<?php } ?>		
	<!-- END HOMEPAGE OPTIONS -->
	
	
	

<!-- BEGIN PAGE CONTENT-->
<div id="page" class="full">
			
		<?php if(get_custom_field('intro')) { ?>
		<div class="title nomargin">
			<p><?php echo get_custom_field('intro',true); ?></p>
		</div>
		<?php } else { ?>
		<div class="title nomargin">
			<?php the_title(); ?>
		</div>
		<?php } ?>
			
			
			<ul id="entries">
				<li>
					<div class="entry single">
						<?php the_content(); ?>
					</div>
					
					<div class="tags">
						<?php the_time('F jS, Y') ?>  <span>|</span> <?php the_author() ?>  <span>|</span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
					</div>
				</li>
			</ul>
			
			
			<div class="author">
				<h2>About The Author</h2>
				<div class="pic"><?php echo get_avatar( get_the_author_email(), '78' ); ?></div>
				<div class="info">
					<h3><?php the_author_firstname(); ?><?php the_author_lastname(); ?></h3>
					<p><?php the_author_meta('description'); ?></p>
				</div>	
			</div>
			

<?php endwhile; else: ?>

<?php include (TEMPLATEPATH . '/404.php'); ?>    

<?php endif; ?>	

</div>
<!-- /END PAGE CONTENT -->


<?php get_footer(); ?>