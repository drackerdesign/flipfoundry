$(document).ready(function() { 
			
	/* Super Fish Navigation */
	jQuery('ul.sf-menu').superfish();
	
	/* Cufon Font Replacement */
	Cufon.replace('#navigation ul li, #page .title, #sidebar .box .title, .browse_entries a, #page .author h2, #page #comments h2, #page #reply h2', { fontFamily: 'League Gothic' });
	Cufon.replace('#entries h2, .quick_links h3, #entries .entry h3, #page .author h3', { fontFamily: 'OFL Sorts Mill Goudy' });

	$("#slider").easySlider({
				auto: true, 
				continuous: true,
				numeric: true,
				pause: 5000,
				speed: 500
			});

});

