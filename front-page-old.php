<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="span-18 last" id="main">
	
	<div class="span-8">
		
		<div class="main-left">
			
		<h2>FEATURED NECKLACE</h2>
		<div class="home-featured">
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=Featured Necklaces&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('medium', array('class' => 'feature-pic')); ?></a>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; ?>
		</div>
		</div>
		
	</div>
	
	<div class="span-8 prepend-1 last">
			
		<h2>FEATURED BROOCH</h2>
		<div class="home-featured">
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=Featured Brooches&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('medium', array('class' => 'feature-pic')); ?></a>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; ?>
		</div>
		
		
	</div>
	
	<div class="span-18 last" id="home-blog">
		<div class="main-left">
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=My So Charmed Life&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
		<div class="span-8">
			<div id="home-blog-image"><a href="<?php the_field('post_url'); ?>"><?php the_post_thumbnail('medium', array('class' => 'feature-pic')); ?></a></div>
		</div>
		<div class="span-8 prepend-1 last" id="home-blog-content">
			<h3>FROM THE BLOG</h3>
			<h4><a href="<?php the_field('post_url'); ?>"><?php the_title(); ?></a></h4>
			<p><?php the_content(); ?></p>
		</div>
		<?php endwhile; ?>
		</div>
	</div>

 <div class="span-18 last" id-"home-bottom">
	<div class="span-8">
		<div class="main-left" id="home-about">
			<?php
				/* about homepage widget area
				 */
				if ( ! dynamic_sidebar( 'homepage-widget-area' ) ) : ?>
					<?php endif; // end primary widget area ?>
		</div>
	</div>
	
	<div class="span-8 prepend-1 last">
		<div id="sign-up">
			<?php
				/* email sign up homepage widget area
				 */
				if ( ! dynamic_sidebar( 'homepage-widget-area-2' ) ) : ?>
					<?php endif; // end primary widget area ?>
		</form>
		</div>
	</div>
</div>
	
</div>


<?php get_footer(); ?>
