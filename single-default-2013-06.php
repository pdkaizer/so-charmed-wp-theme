<?php get_header(); ?>
<?php get_sidebar(); ?>

<div class="span-18 last" id="main">
	<div id="main-content">
		
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h2><?php the_title();?></h2>
			<img src="<?php the_field('image_1'); ?>" class="feature-pic" alt="<?php the_title();?>" />
			
			<div class="span-12">
			<?php the_content();?>
			</div>
			
			<div class="span-4 prepend-1 last" id="pricing">
			<h4>$<?php the_field('price'); ?></h4>
			
			<?php the_field('add_to_cart'); ?>
			
			<a href="http://pinterest.com/pin/create/button/?url=<?php echo urlencode(get_permalink($post->ID)); ?>&media=<?php the_field('image_1'); ?>&description=<?php the_content();?>" class="pin-it-button" count-layout="none">Pin It</a>
			
			<script type="text/javascript" src="http://assets.pinterest.com/js/pinit.js"></script>
			
			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink($post->ID)); ?>&amp;layout=button_count&amp;show-faces=true&amp;width=150&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden; width:150px; height:21px"></iframe>
			</div>
			
			<div class="span-17 last">
			<ul id="product-grid">
				<li>
					<?php if(get_field('image_2')) { ?>
					    <?php the_field('image_2'); ?>
					<?php } ?>
				</li>
				<li>
					<?php if(get_field('image_3')) { ?>
					    <?php the_field('image_3'); ?>
					<?php } ?>
				</li>
				<li>
					<?php if(get_field('image_4')) { ?>
					    <?php the_field('image_4'); ?>
					<?php } ?>
				</li>
				<li>
					<?php if(get_field('image_5')) { ?>
					    <?php the_field('image_5'); ?>
					<?php } ?>
				</li>
				<li>
					<?php if(get_field('image_6')) { ?>
					    <?php the_field('image_6'); ?>
					<?php } ?>
				</li>
				<li>
					<?php if(get_field('image_7')) { ?>
					    <?php the_field('image_7'); ?>
					<?php } ?>
				</li>
			</ul>
			</div>
		<?php endwhile; ?>
		
	</div>
	
</div>


<?php get_footer(); ?>
