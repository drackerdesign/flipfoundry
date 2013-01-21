	<div id="sidebar">
		<ul>
			<?php
				/* Widgetized sidebar if active */
				if (!function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : 
				endif; 
			?>
		</ul>	
	</div>