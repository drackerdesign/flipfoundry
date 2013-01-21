<?php
/*
 * Template Name: Archives
*/

get_header();
?>
<div id="content">

<div id="page">
	
	  <?php if (have_posts()) : ?>

 	  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

 	  <?php /* If this is a category archive */ if (is_category()) { ?>
		<div class="title nomargin"><p>Posts from the &#8216;<?php single_cat_title(); ?>&#8217; Category</p></div>

 	  <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		<div class="title nomargin"><p>Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</p></div>

 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<div class="title nomargin"><p>Archive for <?php the_time('F jS, Y'); ?></p></div>

 	  <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<div class="title nomargin"><p>Archive for <?php the_time('F, Y'); ?></p></div>

 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<div class="title nomargin"><p>Archive for <?php the_time('Y'); ?></p></div>

	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<div class="title nomargin"><p>Author Archive</p></div>

 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<div class="title nomargin"><p>Blog Archives</p></div>
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
				<a class="img_link" title="<?php the_title(); ?>" href="<?php the_permalink() ?>"> <img class="wp-post-image" src="<?php echo get_option('theme_post_blankthumb',true); ?>" alt="<?php the_title(); ?>" /></a>   					        
				<?php } ?>
				
				<div class="entry">

					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<small><?php the_time('F jS, Y') ?>  <span>|</span>  <?php the_category(', ') ?>  <span>|</span>  <?php the_author() ?>  <span>|</span>  <?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?></small>
					
					<p><?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="more">Read More</a></p>
				</div>
			</li>
			
<?php endwhile; ?>

<ul id="prev-next">
			<li id="prev"><?php posts_nav_link('','','&laquo; Previous Entries') ?></li>
			<li id="next"><?php posts_nav_link('','Next Entries &raquo;','') ?></li>
</ul>

<?php else : ?>

<?php include (TEMPLATEPATH . '/404.php'); ?>

<?php endif; ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>