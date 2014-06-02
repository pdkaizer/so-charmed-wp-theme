<?php get_header(); ?>
<?php get_sidebar(); ?>
<div class="span-18 last" id="main">
	<div id="main-content">
	<h1>Search Results</h1>
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<p><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><br />
		<?php the_post_thumbnail('thumbnail', array('class' => 'feature-pic')); ?>	
		</a></p>

	<?php endwhile; ?>

	<?php else : ?>

		<p>No posts found. Try a different search?</p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	</div>
</div>

<?php get_footer(); ?>
