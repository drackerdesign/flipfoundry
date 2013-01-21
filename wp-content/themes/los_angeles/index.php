<?php get_header(); ?>
<div id="content">


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



		<!-- BEGIN HOMEPAGE CONTENT QUERY - WORKS FOR BLOG ENTRIES OR A STATIC PAGE -->
		<div id="page">
		<?php if (have_posts()) : ?>
		
					<!-- BEGIN HOMEPAGE CONTENT HEADER - BLACK BAR -->
					<?php $customField1 = get_option("theme_content_header");
					        if (isset($customField1[0])) { ?>	
					        	
							<div class="title">
								<p><?php echo get_option('theme_content_header',true); ?></p>
							</div>
							
					<?php } else { ?> <br /> <br /> <?php } ?>
					<!-- END HOMEPAGE CONTENT HEADER - BLACK BAR -->
					
					
		<!-- <entries -->
		<ul id="entries">

			<?php			
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args=array(
			   'posts_per_page' => get_option('theme_home_posts'),
			   'cat'=>'-'.get_cat_id(get_option('theme_featured')),
			   'paged'=>$paged,
			   );
			query_posts($args);
			while (have_posts()) : the_post(); ?>

			<li>								
				
                <?php $customField = get_post_custom_values("post-thumb");                
            	if (isset($customField[0])) { ?>
				<img src="<?php get_custom_field('post-thumb',true); ?>" class="avatar" alt="<?php the_title(); ?>" />				
				<?php } elseif ( has_post_thumbnail() ) { ?>						
					<a class="img_link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>														
				<?php } else { ?>									
					<a class="img_link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>"> <img class="wp-post-image" src="<?php echo get_option('theme_post_blankthumb',true); ?>" alt="<?php the_title(); ?>" /></a>   					        
				<?php } ?>																		
				
				<div class="entry">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_time('F jS, Y') ?>  <span>|</span>  <?php the_category(', ') ?>  <span>|</span>  <?php the_author() ?>  <span>|</span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small>
					
					<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="more">Read More</a></p>
				</div>
			</li>
			
			
			<?php endwhile; ?>

		</ul>
		<!-- </entries -->

		
		<!-- Previous / More Entries -->
		<div class="browse_entries">
				<a class="p" href="<?php echo strtolower(get_option('theme_blog_page')); ?>">MORE AT THE BLOG</a>
		</div>
		<!-- </Previous / More Entries -->

		

		<?php else : ?>	
		<?php include (TEMPLATEPATH . '/404.php'); ?>
		<?php endif; ?>
		<!-- END HOMEPAGE CONTENT QUERY -->
	
		
	</div>
	<!-- </Page -->
	

<?php get_sidebar(); ?>
<?php get_footer(); ?>
