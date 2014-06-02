<?php get_header(); ?>

<?php get_sidebar(); ?>

<div class="span-18 last" id="main">
	
	<div class="span-8">
		
		<div class="main-left">
			
		<h2>FEATURED NECKLACE</h2>
		
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=Necklace&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
			<?php the_post_thumbnail('large', array('class' => 'feature-pic')); ?>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; ?>
		
		</div>
		
	</div>
	
	<div class="span-8 prepend-1 last">
			
		<h2>FEATURED BROOCH</h2>
		
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=Brooch&showposts=1'); ?>
		<?php while (have_posts()) : the_post(); ?>	
			<?php the_post_thumbnail('large', array('class' => 'feature-pic')); ?>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			<p><?php the_excerpt(); ?></p>

		<?php endwhile; ?>

		
		
	</div>
	
	<div class="span-18 last" id="home-blog">
		<div class="main-left">
		<h3>FROM THE BLOG</h3>
		<?php
		echo SimplePieWP('http://blog.so-charmed.com/', array(
			'items' => 1,
			'cache_duration' => 1800,
			'date_format' => 'j M Y, g:i a'
		));
		?>
		</div>
	</div>

 <div class="span-18 last" id-"home-bottom">
	<div class="span-8">
		<div class="main-left" id="home-about">
		<h2>ABOUT THE DESIGNER</h2>
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae. <a href="">more</a></p>
		</div>
	</div>
	
	<div class="span-8 prepend-1 last">
		<div id="sign-up">
		<h3>eNEWSLETTER SIGN UP</h3>
		<p>{ridiculously infrequent}</p>
		<form action="">
		<p><label for="email">email</label> <input type="text" name="email" value=""><input type="submit" value="sign up"></p>
		</form>
		</div>
	</div>
</div>
	
</div>




	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title();?></h1>
		<?php the_content();?>
	<?php endwhile; ?>


<?php get_footer(); ?>
