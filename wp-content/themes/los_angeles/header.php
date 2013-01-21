<?php html_or_xhtml(); ?>
<html <?php language_attributes(); xhtml_attributes(); ?>>
<head>

	<title><?php page_title(); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="robots" content="noodp" />
	<meta name="google-site-verification" content="4rV-6rwSG2qln1R7AqfMRDiiLGOKYZr21Lf6b2y8Kpw" />

 
	<!-- Styles -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection,tv" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" type="text/css" media="print" />
	<link href="<?php bloginfo('template_url'); ?>/assets/css/custom/<?php echo strtolower(get_option('theme_color')); ?>/quick-styles.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo strtolower(get_option('theme_favicon')); ?>" rel="shortcut icon" type="image/gif" />

	<!--[if lte IE 6]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/fixes/css_iehacks.css" />
	<![endif]-->
	<!--[if IE 7]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/fixes/css_iehacks.css" />
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/fixes/css_iehacks.css" />
	<![endif]-->
	
	<!-- RSS & Pingback -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />


	<!-- WP Head -->
	<?php wp_head(); ?>

	
	<!-- Javascript (jQuery) + Superfish Scripts -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/superfish.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/hoverIntent.js"></script>

	<!-- Lightbox (CEE Box) -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/jquery.ceebox-min.js"></script>
	
	<!-- Cufon Load Fonts -->
	<script src="<?php bloginfo('template_url'); ?>/assets/js/cufon-yui.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/OFL_Sorts_Mill_Goudy_italic_500.font.js" type="text/javascript"></script>
	<script src="<?php bloginfo('template_url'); ?>/assets/js/League_Gothic_400.font.js" type="text/javascript"></script>

	
	<!-- SWFObject -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/swfobject/swfobject.js"></script>
	
	<!-- Core Javascript -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/losangeles.js"></script>


 	<style type="text/css">
 	<?php echo get_option('theme_customcss'); ?>
 	</style>

<?php if (get_option('theme_cu3er_on') == 'Cu3er') { ?>
<script type="text/javascript">
/* Cu3er */
var flashvars = {};
flashvars.xml = "<?php bloginfo('template_url'); ?>/assets/flash/config.xml";
flashvars.font = "";
var attributes = {};
attributes.wmode = "transparent";
attributes.id = "slider";
swfobject.embedSWF("<?php bloginfo('template_url'); ?>/assets/flash/cu3er.swf", "cu3er-container", "960", "305", "9", "assets/flash/expressInstall.swf", flashvars, attributes);
</script>
<?php } elseif (get_option('theme_cu3er_on') == 'EasySlider') { ?>
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/assets/js/easyslider1.7/js/easySlider1.7.js"></script>
<?php } else {} ?>

</head>

<?php
if(is_front_page() ) $bodyclass="home";
else $bodyclass="subpage";
?>
<body class="<?php echo $bodyclass;?>">

	<div id="container">

	<!-- BEGIN HEADER -->
	<div id="header">

		<!-- BEGIN LOGO -->
		<div class="logo">		
		<?php $customField1 = get_option("theme_logo");
		        if (isset($customField1[0])) { ?>	
		        	
				<a href="<?php bloginfo('url') ?>"><img src="<?php echo get_option('theme_logo',true); ?>" alt="Logo" /></a>
				
		<?php } else { ?> <a href="<?php bloginfo('url') ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.jpg" alt="Los Angeles" /></a> <?php } ?>
		</div>
		<!-- END LOGO -->
			
					
		<!-- NAVIGATION & SEARCH AREA -->
		<div id="navigation">
						
			<?php mytheme_nav(); ?>									
										
			<div class="search">
				<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
					<input type="text" name="s" value="Search" onfocus="if(this.value=='Search') {this.value=''}" onblur="if(this.value=='') {this.value='Search'}" />
				</form>
			</div>
			
		</div>
		<!-- /END NAVIGATION & SEARCH AREA -->
		
		
	</div>
	<!-- /END HEADER -->