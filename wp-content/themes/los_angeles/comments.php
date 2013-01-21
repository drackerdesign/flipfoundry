<?php // DO NOT TOUCH THESE LINES
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if (!empty($post->post_password)) { // if there's a password
		if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
			?>

			<p>This post is password protected. Enter the password to view comments.</p>

			<?php
			return;
		}
	}

	/* This variable is for alternating comment background, if you want to.*/
	$oddcomment = 'alt';
?>
<!-- YOU MAY TOUCH THESE LINES IF YOU WISH-->

			<?php
			global $wp_query;
			$urlTemp = get_bloginfo('template_url');
			?>

			<div id="comment-list">
				<?php if ($comments) : ?>
					<div class="commenttitle">
						<h2><?php comments_number('No Responses', 'One Response', '% Responses' );?> and Counting...</h2>
					</div>
										
					
					<ul>
							<?php foreach ($comments as $comment) : ?>
							<li class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">
								<?php //Necessary for special styling for author's comments
								$isByAuthor = false;
								if($comment->comment_author_email == get_the_author_email()) {
								$isByAuthor = true;
								}
								?>
								<div class="avatar">
									<?php echo get_avatar($comment, 80, $default = $urlTemp . '/assets/img/gravatar.jpg' ); ?>
									<a href="<?php comment_author_url(); ?>" target="_blank"><?php comment_author(); ?></a>
									<small><?php the_date('m.d.Y') ?> <br /> <?php edit_comment_link(__('Edit')) ?></small>
								</div>
																
								<div class="comment">
									<p><?php comment_text() ?></p>
								</div>
							</li>
							<?php endforeach; /* end for each comment */ ?>
					</ul>
										

						<?php else : // IF THERE ARE NO COMMENTS. ?>

						<?php if ('open' == $post->comment_status) : ?>
						<!-- IF THERE ARE NO COMMENTS. -->

						<?php else : // IF COMMENTS ARE CLOSED ?>
						<!-- If comments are closed. -->
						<p>Comments are closed.</p>

						<?php endif; ?>
						
					<?php endif; ?>
			</div></div>
			
			<?php if ('open' == $post->comment_status) : ?>			
						
			<div id="reply">
					    <h2><?php comment_form_title('Leave a Reply'); ?></h2>
						<img src="http://www.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=106" />
												
							<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
							
							<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
							
							<?php else : ?>
							<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
							
								<?php if ( is_user_logged_in() ) : ?>
								<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
								<?php else : ?>
								
								<input type="text" name="author" id="author" value="Name" onblur = "if(this.value == '') { this.value='Name'}" onfocus = "if (this.value == 'Name') {this.value=''}"/>
								<input type="text" name="email" id="email" value="Email" onblur = "if(this.value == '') { this.value='Email'}" onfocus = "if (this.value == 'Email') {this.value=''}"/>
								<input type="text" name="url" id="url" value="Website" onblur = "if(this.value == '') { this.value='Website'}" onfocus = "if (this.value == 'Website') {this.value=''}"/>
								
								<?php endif; ?>
								
								<textarea name="comment" id="comment" rows="10" cols="" tabindex="4" onblur = "if(this.value == '') { this.value='Message'}" onfocus = "if (this.value == 'Message') {this.value=''}"></textarea>
								<p class = "required">* Name, Email, and Comment are Required</p>
								<input name="submit" type="submit" class = "button" id="submit" tabindex="5" value="Submit Comment" />
								
								<div style="visibility: hidden; height: 1px;"><?php comment_id_fields(); ?>
									
								<?php do_action('comment_form', $post->ID); ?></div>
								
							</form>
																
			</div><!--end "comments"-->

			<?php endif; // If registration required and not logged in ?>
			<?php endif; // if you delete this the sky will fall on your head ?>
			