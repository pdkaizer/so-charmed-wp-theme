
<div class="span-6" id="sidebar">

<div class="sidebar-container nav">
	<?php
		// A first sidebar for widgets, just because.
		if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	<?php endif; // end primary widget area ?>
</div>

<div class="sidebar-container">
	<?php
		// A second sidebar for widgets, just because.
		if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	<?php endif; ?>
</div>

<div class="sidebar-container">
	<?php
		// A third sidebar for widgets, just because.
		if ( is_active_sidebar( 'third-widget-area' ) ) : ?>
		<?php dynamic_sidebar( 'third-widget-area' ); ?>
	<?php endif; ?>
</div>

<div class="sidebar-container-bottom">
	<ul>
		<li><a href="http://www.facebook.com/jodi.bloom1"><img src="<?php bloginfo('template_url');?>/images/facebook.png" alt="Follow Me on Facebook"> <span class="mid">facebook</span></a></li>
		<li><a href="http://www.flickr.com/photos/38187336@N05/"><img src="<?php bloginfo('template_url');?>/images/flickr.png" alt="Follow Me on Flickr"> flickr</a></li>
		<li><a href="http://pinterest.com/socharmed/"><img src="<?php bloginfo('template_url');?>/images/pinterest.png" alt="Follow Me on Pinterest" /> pinterest</a></li>
	</ul>
</div>
	
</div>



