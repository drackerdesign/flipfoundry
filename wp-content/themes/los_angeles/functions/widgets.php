<?php
if (function_exists('register_sidebar'))
    register_sidebar(array(
		'name' => 'Sidebar',
        'before_widget' => '<div id="%1$s" class="box %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<div class="title">',
        'after_title' => '</div>',
    ));
    
       register_sidebar(array(
       	'name' => 'Twitter Bar',
       	'before_widget' => '<div id="twitter_bar">',
       	'after_widget' => '</div>',
		'before_title' => '<div style="display: none;">',
		'after_title' => '</div>',
    ));
?>