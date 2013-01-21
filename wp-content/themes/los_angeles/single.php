<?php get_header(); ?>
<div id="content">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	

<!-- BEGIN PAGE CONTENT-->
<div id="page">
			
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
						<br />
					</div>
					
					<div class="tags">
						<?php the_time('F jS, Y') ?>  <span>|</span> <?php the_author() ?>  <span>|</span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?> | <?php the_tags(); ?>
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
			
			
			<div id="comments">
			<?php comments_template() ?>
			</div>
			<!-- php display_comments(); -->

<?php endwhile; else: ?>

<?php include (TEMPLATEPATH . '/404.php'); ?>    

<?php endif; ?>	




<?php get_sidebar(); ?>
</div>
<!-- /END PAGE CONTENT -->
<?php get_footer(); ?>