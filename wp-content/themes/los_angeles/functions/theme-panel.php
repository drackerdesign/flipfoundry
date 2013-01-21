<?php

$themename = "Los Angeles";
$shortname = "theme";

$categories = get_categories('hide_empty=0&orderby=name');
$wp_cats = array();
foreach ($categories as $category_list ) {
       $wp_cats[$category_list->cat_ID] = $category_list->cat_name;
}

		$yesno = array("Yes","No");
		$sliderpick = array("Cu3er","EasySlider", "None");
		$color = array("Classic","Dark", "Blue", "Red" );
		
		global $wpdb;
		$pages = $wpdb->get_results('select * from '. $wpdb->prefix .'posts where post_type="page" and post_status="publish"');
		$page_listing = array();
		
		foreach($pages as $page_list) {
			$page_listing[$page_list->post_title] = $page_list->post_title;
		}
		
array_unshift($wp_cats, "Choose a category"); 



/* ----------------------
		Options
	------------------------ */

	$options = array (
			

			array(	"name" => "Design Settings",
					"type" => "section"),
			array( "type" => "open"),  
					
			array( 	"name" => "Theme Color",
					"desc" => "Classic White, Dark, Blue, and Red. The choice is yours!",
					"id" => $shortname."_color",
					"std" => "Theme Color:",
					"type" => "select",
					"options" => $color),
					
			array( 	"name" => "Logo URL",
					"desc" => "Enter the URL of your logo",
					"id" => $shortname."_logo",
					"std" => "",
					"type" => "text"),

			array( 	"name" => "Favicon URL",
					"desc" => "Enter the URL of your image that you'd like to use for the Browser Icon (16px x 16px)",
					"id" => $shortname."_favicon",
					"std" => "",
					"type" => "text"),				
						
					
			array( 	"name" => "Custom CSS",
					"desc" => "You can enter custom style rules into this box if you'd like. IE: <i>a{color: red !important;}</i><br />
					This is an advanced option! This is not recommended for users not fluent in CSS.
			",
					"id" => $shortname."_customcss",
					"std" => "",
					"type" => "textarea"),
			
					
			array( "type" => "close"),  			 
			array(	"name" => "Homepage Content Options",
					"type" => "section"),
			array( "type" => "open"), 
			
			array( 	"name" => "Homepage Slider",
					"desc" => "Two to pick from for now. Cu3er or EasySlider. The choice is yours (read the instructions for more info).",
					"id" => $shortname."_cu3er_on",
					"std" => "Cu3er",
					"type" => "select",
					"options" => $sliderpick),
					
			array( 	"name" => "Homepage Blurbs",
					"desc" => "Select Yes if you want to show the 4 blurbs on the homepage. The content of these blurbs is below.",
					"id" => $shortname."_home_blurbs",
					"std" => "Yes",
					"type" => "select",
					"options" => $yesno),
			
			array( 	"name" => "Home Twitter Bar",
					"desc" => "Select Yes if you want to show the Twitter-sidebar on the homepage. The content is editable through the Widgets Panel. Both the Twitter Widget and a Text Widget will work.",
					"id" => $shortname."_home_twitter",
					"std" => "Yes",
					"type" => "select",
					"options" => $yesno),	
					
			array( 	"name" => "Homepage Content-Header Text",
					"desc" => "Enter the text that you'd like to show up above the homepage content section (probably blog entries unless you've selected a Static Page from the Settings>Reading panel). If left empty, this won't show up at all.",
					"id" => $shortname."_content_header",
					"std" => "",
					"type" => "text"),
			
			array( 	"name" => "Homepage Posts",
					"desc" => "Enter the Number of posts you want displayed on the homepage. Note: if you select to make the homepage a static page, this won't do anything.",
					"id" => $shortname."_home_posts",
					"std" => "",
					"type" => "text"),
			
			array( 	"name" => "Blog Page ID",
					"desc" => "This will be the destination of the Next Posts button at the bottom of the homepage blog posts :)",
					"id" => $shortname."_blog_page",
					"std" => "",
					"type" => "select",
					"options" => $page_listing),
					
			array( 	"name" => "Post Thumbnail Placeholder",
					"desc" => "Enter the URL to the image that you'd like to use for posts that don't have thumbnails assigned yet (196px by 196px is the default).",
					"id" => $shortname."_post_blankthumb",
					"std" => "",
					"type" => "text"),	
						
					
			array( "type" => "close"),  
			array(	"name" => "Homepage Blurb #1",
					"type" => "section"),
			array( "type" => "open"), 
					
			array( 	"name" => "Homepage Blurb #1 Title",
					"desc" => "Enter the text that you'd like to show up as the title for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_1_title",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #1 Desination URL",
					"desc" => "Enter the URL that you'd like to send visitors to when they click the title (you can also leave this empty).",
					"id" => $shortname."_blurb_1_link",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #1 Description",
					"desc" => "Enter the text that you'd like to show up as the description for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_1_desc",
					"std" => "",
					"type" => "textarea"),
			array( 	"name" => "Homepage Blurb #1 Icon URL",
					"desc" => "Enter the image URL of the icon that you'd like to use. (It should be about 30x30 in size).",
					"id" => $shortname."_blurb_1_icon",
					"std" => "",
					"type" => "text"),
					
			
			array( "type" => "close"),  
			array(	"name" => "Homepage Blurb #2",
					"type" => "section"),
			array( "type" => "open"), 
					
			array( 	"name" => "Homepage Blurb #2 Title",
					"desc" => "Enter the text that you'd like to show up as the title for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_2_title",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #2 Desination URL",
					"desc" => "Enter the URL that you'd like to send visitors to when they click the title (you can also leave this empty).",
					"id" => $shortname."_blurb_2_link",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #2 Description",
					"desc" => "Enter the text that you'd like to show up as the description for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_2_desc",
					"std" => "",
					"type" => "textarea"),
			array( 	"name" => "Homepage Blurb #2 Icon URL",
					"desc" => "Enter the image URL of the icon that you'd like to use. (It should be about 30x30 in size).",
					"id" => $shortname."_blurb_2_icon",
					"std" => "",
					"type" => "text"),
					
					
			array( "type" => "close"),  
			array(	"name" => "Homepage Blurb #3",
					"type" => "section"),
			array( "type" => "open"), 
					
			array( 	"name" => "Homepage Blurb #3 Title",
					"desc" => "Enter the text that you'd like to show up as the title for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_3_title",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #3 Desination URL",
					"desc" => "Enter the URL that you'd like to send visitors to when they click the title (you can also leave this empty).",
					"id" => $shortname."_blurb_3_link",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #3 Description",
					"desc" => "Enter the text that you'd like to show up as the description for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_3_desc",
					"std" => "",
					"type" => "textarea"),
			array( 	"name" => "Homepage Blurb #3 Icon URL",
					"desc" => "Enter the image URL of the icon that you'd like to use. (It should be about 30x30 in size).",
					"id" => $shortname."_blurb_3_icon",
					"std" => "",
					"type" => "text"),
					
					
			array( "type" => "close"),  
			array(	"name" => "Homepage Blurb #4",
					"type" => "section"),
			array( "type" => "open"), 
							
			array( 	"name" => "Homepage Blurb #4 Title",
					"desc" => "Enter the text that you'd like to show up as the title for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_4_title",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #4 Desination URL",
					"desc" => "Enter the URL that you'd like to send visitors to when they click the title (you can also leave this empty).",
					"id" => $shortname."_blurb_4_link",
					"std" => "",
					"type" => "text"),
			array( 	"name" => "Homepage Blurb #4 Description",
					"desc" => "Enter the text that you'd like to show up as the description for the Blurb #1 Section (just under the big image slider).",
					"id" => $shortname."_blurb_4_desc",
					"std" => "",
					"type" => "textarea"),
			array( 	"name" => "Homepage Blurb #4 Icon URL",
					"desc" => "Enter the image URL of the icon that you'd like to use. (It should be about 30x30 in size).",
					"id" => $shortname."_blurb_4_icon",
					"std" => "",
					"type" => "text"),
					
												
			
					
									

			
			array( "type" => "close"),  
			array(	"name" => "Footer",
					"type" => "section"),
			array( "type" => "open"), 
					
			array( 	"name" => "Footer Logo URL",
					"desc" => "Enter the URL of your logo for the footer (this should be white more or less).",
					"id" => $shortname."_footerlogo",
					"std" => "",
					"type" => "text"),
					
					
			array( 	"name" => "Footer Copyright Text",
					"desc" => "Footer copyright text",
					"id" => $shortname."_footer",
					"std" => "",
					"type" => "text"),			
							
			array( 	"name" => "Show Footer Advertising?",
					"desc" => "Do you want the row of advertisements/images to show up in the footer?",
					"id" => $shortname."_footerads_yesno",
					"std" => "",
					"type" => "select",
					"options" => $yesno),
										
			array( 	"name" => "Banner Image URL",
					"desc" => "The URL of your banner image at the footer. ie: http://yourwebsite.com/images/yourimage.jpg",
					"id" => $shortname."_banner_image",
					"std" => "",
					"type" => "text"),
			
			array( 	"name" => "Banner URL",
					"desc" => "The URL that you want your banner image to LINK to. ie: http://yourwebsite.com/yourdestination.html",
					"id" => $shortname."_banner_url",
					"std" => "",
					"type" => "text"),
					
			array( 	"name" => "Mini #1 Image URL",
					"desc" => "The URL of your mini-image #1 at the footer. ie: http://yourwebsite.com/images/yourimage.jpg",
					"id" => $shortname."_mini1_image",
					"std" => "",
					"type" => "text"),
					
			array( 	"name" => "Mini #1 URL",
					"desc" => "The URL that you want your mini-image #1 to LINK to. ie: http://yourwebsite.com/yourdestination.html",
					"id" => $shortname."_mini1_url",
					"std" => "",
					"type" => "text"),
					
			array( 	"name" => "Mini #2 Image URL",
					"desc" => "The URL of your mini-image #2 at the footer. ie: http://yourwebsite.com/images/yourimage.jpg",
					"id" => $shortname."_mini2_image",
					"std" => "",
					"type" => "text"),
					
			array( 	"name" => "Mini #2 URL",
					"desc" => "The URL that you want your mini-image #2 to LINK to. ie: http://yourwebsite.com/yourdestination.html",
					"id" => $shortname."_mini2_url",
					"std" => "",
					"type" => "text"),				
					
			
			
			array( "type" => "close"),  
			array(	"name" => "Footer Menu",
					"type" => "section"),
			array( "type" => "open"), 	
			
			array( 	"name" => "Footer Menu",
					"desc" => "Select your footer pages.",
					"id" => $shortname."_footer_menu",
					"std" => "",
					"type" => "multi-select",
					"options" => $page_listing),	
			
			array( "type" => "close"),  
				
	  );






function mytheme_add_admin() {
 
global $themename, $shortname, $options;
 
if ( $_GET['page'] == basename(__FILE__) ) {
 
	if ( 'save' == $_REQUEST['action'] ) {
							
		foreach ($options as $value) {
		update_option( $value['id'], $_REQUEST[ $value['id'] ] ); }		
				 
		foreach ($options as $value) {
		if( isset( $_REQUEST[ $value['id'] ] ) ) { update_option( $value['id'], $_REQUEST[ $value['id'] ]  ); } else { delete_option( $value['id'] ); } }
		
		if(is_array($_POST['omit_pages']) && count($_POST['omit_pages']) >0){
						$page = join(',', $_POST['omit_pages']);
					}
		update_option('theme_footer_menu', $page);

		
	header("Location: admin.php?page=theme-panel.php&saved=true");
	

					
die;
 
} 
else if( 'reset' == $_REQUEST['action'] ) {
 
	foreach ($options as $value) {
		delete_option( $value['id'] ); }
 
	header("Location: admin.php?page=theme-panel.php&saved=true");
die;
 
}
}
 
add_menu_page($themename, $themename, 'administrator', basename(__FILE__), 'mytheme_admin');
}

function mytheme_add_init() {

$file_dir=get_bloginfo('template_directory');
wp_enqueue_style("functions", $file_dir."/functions/functions.css", false, "1.0", "all");
wp_enqueue_script("bj_script", $file_dir."/functions/admin_script.js", false, "1.0");

}
function mytheme_admin() {
 
global $themename, $shortname, $options;
$i=0;
 
if ( $_REQUEST['saved'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings saved.</strong></p></div>';
if ( $_REQUEST['reset'] ) echo '<div id="message" class="updated fade"><p><strong>'.$themename.' settings reset.</strong></p></div>';
 
?>
<div class="wrap bj_wrap">
<h2 style="margin-bottom: 10px;"><img src="<?php bloginfo('template_directory'); ?>/functions/images/adminpanel_header.jpg" /></h2>
 
<div class="bj_opts">
<form method="post">
	
<?php foreach ($options as $value) {
switch ( $value['type'] ) {
 
case "open":
?>
 
<?php break;
 
case "close":
?>
 
</div>
</div>
<br />

 
<?php break;
 
case "title":
?>
<p>To easily use the <?php echo $themename;?> theme, you can use the menu below.</p>

 
<?php break;
 
case 'text':
?>

<div class="bj_input bj_text">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<input name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" value="<?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id'])  ); } else { echo $value['std']; } ?>" />
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
<?php
break;
 
case 'textarea':
?>

<div class="bj_input bj_textarea">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
 	<textarea name="<?php echo $value['id']; ?>" type="<?php echo $value['type']; ?>" cols="" rows=""><?php if ( get_settings( $value['id'] ) != "") { echo stripslashes(get_settings( $value['id']) ); } else { echo $value['std']; } ?></textarea>
 <small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 
 </div>
  
<?php
break;
 
case 'select':
?>

<div class="bj_input bj_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>">
<?php foreach ($value['options'] as $option) { ?>
		<option <?php if (get_settings( $value['id'] ) == $option) { echo 'selected="selected"'; } ?>><?php echo $option; ?></option><?php } ?>
</select>

	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>
<?php
break;

case 'multi-select':
?>

<div class="bj_input bj_select">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<select style="height:auto;width:480px" name="omit_pages[]" id="<?php echo $value['id']; ?>" multiple="multiple">
	
	<option value=""><strong>None</strong></option>
											<?php
											$omits = explode(',', get_option('theme_footer_menu'));
											global $wpdb;
											add_option('theme_footer_menu', '');
											$pages = $wpdb->get_results('select * from '. $wpdb->prefix .'posts where post_type="page" and post_status="publish"');
											
											foreach($pages as $page) {
												if(in_array($page->ID, $omits)){
													echo '<option selected value="'. $page->ID .'">'. $page->post_title .'</option>';
												}else{
													echo '<option value="'. $page->ID .'">'. $page->post_title .'</option>';
												}
											}
											?>
</select>


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
</div>

<?php
break;
 
case "checkbox":
?>

<div class="bj_input bj_checkbox">
	<label for="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></label>
	
<?php if(get_option($value['id'])){ $checked = "checked=\"checked\""; }else{ $checked = "";} ?>
<input type="checkbox" name="<?php echo $value['id']; ?>" id="<?php echo $value['id']; ?>" value="true" <?php echo $checked; ?> />


	<small><?php echo $value['desc']; ?></small><div class="clearfix"></div>
 </div>
<?php break; 
case "section":

$i++;

?>

<div class="bj_section">
<div class="bj_title"><h3><img src="<?php bloginfo('template_directory')?>/functions/images/trans.gif" class="inactive" alt=""><?php echo $value['name']; ?></h3><span class="submit"><input name="save<?php echo $i; ?>" type="submit" value="Save changes" />
</span><div class="clearfix"></div></div>
<div class="bj_options">
 
<?php break; } } ?>
 
<input type="hidden" name="action" value="save" />
</form>
<form method="post">
<p class="submit">

<input type="hidden" name="action" value="reset" />
</p>
</form>

</div> 
</div>

<div style="font-size:9px; margin-top: 20px; margin-bottom:10px;">Admin Panel Script based on Tutorials from: <a href="http://literalbarrage.org/blog/archives/2007/05/03/a-theme-tip-for-wordpress-theme-authors/">LiteralBarrage.org</a> and <a href="http://net.tutsplus.com/tutorials/wordpress/how-to-create-a-better-wordpress-options-panel?r=8549&i=l0">Rohan Mehta from net.tutsplus.com</a> and modified by <a href="http://makedesignnotwar.com">Brandon Jones (epicera at ThemeForest)</a></div>


<?php } ?><?php add_action('admin_init', 'mytheme_add_init');
add_action('admin_menu', 'mytheme_add_admin');
?>