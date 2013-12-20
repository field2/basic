dsadsaa<?php get_header(); ?>			
		<div id="main">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="entry">
			<div class="date"><?php the_time('M jS\<\b\r\>Y') ?></div>
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_content(__('(more...)')); ?>
			<div class="comments">
			<?php wp_link_pages(); ?>
			<?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
			</div><!-- .comments -->
			</div><!-- .entry -->
			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
			<?php comments_template(); ?>
			<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
		</div><!-- .main -->
<?php get_footer(); ?>