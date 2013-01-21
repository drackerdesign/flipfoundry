<?php get_header() ?>
<div id="content">
	
<div id="page">
	
	<?php if (have_posts()) : ?>			
		

		<?php if(get_custom_field('intro')) { ?>
		<div class="title nomargin">
			<p><?php echo get_custom_field('intro',true); ?></p>
		</div>
		<?php } else { ?>
		<div class="title nomargin">
			<p>Search Results for "<?php the_search_query() ?>"</p>
		</div>
		<?php } ?>


		<ul id="entries">
		<?php while (have_posts()) : the_post(); ?>

			<li>
				
                <?php $customField = get_post_custom_values("post-thumb");
            	if (isset($customField[0])) { ?>
				<img src="<?php get_custom_field('post-thumb',true); ?>" class="avatar" alt="<?php the_title(); ?>" />
				<?php } elseif ( has_post_thumbnail() ) { ?>						
				<a class="img_link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>														
				<?php } else { ?>				
				<a class="img_link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>"><img class="wp-post-image" src="<?php echo get_option('theme_post_blankthumb',true); ?>" alt="<?php the_title(); ?>" /></a>   					        
				<?php } ?>
				
				<div class="entry">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
					<small><?php the_time('F jS, Y') ?>  <span>|</span>  <?php the_category(', ') ?>  <span>|</span>  <?php the_author() ?>  <span>|</span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small>
					
					<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="more">Read More</a></p>
				</div>
			</li>

		<?php endwhile; ?>
		
		
		<div class="browse_entries">
			<div class="p"><?php previous_posts_link('NEXT POSTS'); ?></div>
			<div class="m"><?php next_posts_link('PREVIOUS POSTS'); ?></div>
		</div>
			
			<?php if(get_option('subscribe')) { ?><div class="subs_b"><a href="<?php echo get_option('subscribe'); ?>"></a></div><?php } ?>
		</ul>

	<?php else : ?>

		<?php include (TEMPLATEPATH . '/404.php'); ?>

	<?php endif; ?>
	
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
