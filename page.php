<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="span-18 last" id="main">
	<div id="main-content">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title();?></h1>
		<?php the_content();?>
	<?php endwhile; ?>
	</div>
</div>


<?php get_footer(); ?>
