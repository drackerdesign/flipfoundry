<?php
/*
 * Template Name: Image Gallery
*/

get_header();
?>
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				
<!-- BEGIN HOMEPAGE OPTIONS --> 
	<?php if (is_front_page()) { ?>
		
		

	<!-- BEGIN SLIDER SECTION -->
		<?php if (get_option('theme_cu3er_on') == 'Cu3er') { ?>
			
			<!-- Cu3er -->
			<div id="cu3er">
				<div id="cu3er-container">
	    				<a href="http://www.adobe.com/go/getflashplayer"><img src="<?php bloginfo('template_url'); ?>/assets/img/global/noflash.jpg" alt="" /></a>
				</div>
			</div>
			<!-- </Cu3er -->
			
		<?php } elseif (get_option('theme_cu3er_on') == 'EasySlider')  { ?>
		
			<!-- EasySlider -->
			<div id="slider">
			<ul>
			<?php $slider = get_page_by_title('EasySlider'); echo apply_filters('the_content', $slider->post_content); ?>
			</ul>
			</div>
			<br /><br />
			<!-- </EasySlider -->
			
		<?php } else {} ?>
		<!-- END SLIDER SECTION -->



		<!-- 1,2,3,4 Quick Links -->
		<?php if (get_option('theme_home_blurbs') == 'No') { } else { ?>
		<ul class="quick_links">
				<li>					
					<h3><img src="<?php echo get_option('theme_blurb_1_icon',true); ?>" alt="icon" />
						<?php echo get_option('theme_blurb_1_title',true); ?></h3>
					<p><?php echo stripslashes(get_option('theme_blurb_1_desc',true));  $customField13 = get_option("theme_blurb_1_link"); if (isset($customField13[0])) { ?><a class="more" href="<?php echo get_option('theme_blurb_1_link',true); ?>">More</a><?php } else { } ?></p>
				</li>
				
				<li>					
					<h3><img src="<?php echo get_option('theme_blurb_2_icon',true); ?>" alt="icon" />
						<?php echo get_option('theme_blurb_2_title',true); ?></h3>
					<p><?php echo stripslashes(get_option('theme_blurb_2_desc',true));  $customField23 = get_option("theme_blurb_2_link"); if (isset($customField23[0])) { ?><a class="more" href="<?php echo get_option('theme_blurb_2_link',true); ?>">More</a><?php } else { } ?></p>
				</li>
				
				<li>					
					<h3><img src="<?php echo get_option('theme_blurb_3_icon',true); ?>" alt="icon" />
						<?php echo get_option('theme_blurb_3_title',true); ?></h3>
					<p><?php echo stripslashes(get_option('theme_blurb_3_desc',true)); $customField33 = get_option("theme_blurb_3_link"); if (isset($customField33[0])) { ?><a class="more" href="<?php echo get_option('theme_blurb_3_link',true); ?>">More</a><?php } else { } ?></p>
				</li>
				
				<li>					
					<h3><img src="<?php echo get_option('theme_blurb_4_icon',true); ?>" alt="icon" />
						<?php echo get_option('theme_blurb_4_title',true); ?></h3>
					<p><?php echo stripslashes(get_option('theme_blurb_4_desc',true));  $customField43 = get_option("theme_blurb_4_link"); if (isset($customField43[0])) { ?><a class="more" href="<?php echo get_option('theme_blurb_4_link',true); ?>">More</a><?php } else { } ?></p>
				</li>
		</ul>
		<?php } ?>
		<!-- </Quick Links -->


		<!-- Twitter Bar -->
		<?php if (get_option('theme_home_twitter') == 'No') { } else { ?>
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Twitter Bar') ) : ?><?php endif; ?>
		<?php } ?>
		<!-- </Twitter Bar -->				
		
	
		
	<?php } ?>		
	<!-- END HOMEPAGE OPTIONS -->
	
	
	

<!-- BEGIN PAGE CONTENT-->
<div id="page">
		<?php if(get_custom_field('intro')) { ?>
		<div class="title nomargin">
			<p><?php echo get_custom_field('intro',true); ?></p>
		</div>
		<?php } else { ?>
		<div class="title"><?php the_title(); ?></div>
		<?php } ?>
			
			
			
			<ul id="entries">
				<li>
					<div class="entry single">
					
						<!-- Gallery -->
						<ul class="gallery ceebox"><li>
						<?php the_content(); ?>
						</li></ul>
					</div>
					
					
				</li>
			</ul>
			
			
			<div class="author">
				<h2>About The Author</h2>
				<div class="pic"><?php echo get_avatar( get_the_author_email(), '78' ); ?></div>
				<div class="info">
					<h3><?php the_author_firstname(); ?> <?php the_author_lastname(); ?></h3>
					<p><?php the_author_meta('description'); ?></p>
				</div>	
			</div>
			

<?php endwhile; else: ?>

<?php include (TEMPLATEPATH . '/404.php'); ?>    

<?php endif; ?>	

</div>
<!-- /END PAGE CONTENT -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>