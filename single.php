<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<?php if(is_active_sidebar('blog-sidebar')) :?>
					<div class="widget">
						<?php dynamic_sidebar('blog-sidebar'); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<?php if(has_post_thumbnail()): ?>
						<img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid m-auto d-block pb-3">
					<?php endif; ?>
					<?php get_template_part('includes/section','content');?>
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>