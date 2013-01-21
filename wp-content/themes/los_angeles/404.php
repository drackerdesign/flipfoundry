<?php @header("HTTP/1.1 404 Not found", TRUE, 404); ?>
<?php get_header() ?>
<div id="content">

<!-- BEGIN PAGE CONTENT-->
<div id="page">
			
			<div class="title nomargin">404 Error! Oh No! It looks like we can't find your file...</div>
						
			<ul id="entries">
				<li>
					<div class="entry single">
						<p>I&#8217;m sorry, but the page or file appears to be missing!</p>
						
						<h3>You may not be able to find the page or file because of:</h3>
						<ol>
							<li>An <strong>out-of-date bookmark/favorite.</strong></li>
							<li>A failed search from the searchbar (try another search query).</strong></li>
							<li>A search engine that has an <strong>out-of-date listing for this site.</strong></li>
							<li>A <strong>mis-typed address</strong>.</li>
						</ol>
					</div>			

				</li>
			</ul>
						
</div>
<!-- /END PAGE CONTENT -->

		

<?php get_sidebar(); ?>
<?php get_footer(); ?>