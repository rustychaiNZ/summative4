<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<div class="container pt-3">
		<?php if(has_post_thumbnail()): ?>
			<img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid m-auto d-block pb-3">
		<?php endif; ?>
		<?php get_template_part('includes/section','content');?>
	
	</div>

<?php get_footer(); ?>