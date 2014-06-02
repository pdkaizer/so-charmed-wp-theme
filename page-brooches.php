<?php
/*
Template Name: Brooches
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="span-18 last" id="main">
	<div id="main-content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title();?></h2>
			<?php the_content();?>
		<?php endwhile; ?>
		
		<?php $temp_query = $wp_query; ?>
		<?php query_posts('category_name=Brooches'); ?>
		<?php while (have_posts()) : the_post(); ?>	
		<ul id="category-grid">
			<li>
			<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_post_thumbnail('medium', array('class' => 'feature-pic')); ?></a>
			<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3>
			</li>
		</ul>
		<?php endwhile; ?>
		
	</div>
</div>


<?php get_footer(); ?>
