<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<?php if(is_active_sidebar('blog-sidebar')) :?>
			<div class="row">
				<div class="col-md-3 widget">
					<?php dynamic_sidebar('blog-sidebar'); ?>
				</div>
				<div class="col-md-8">
					<?php get_template_part('includes/section','content'); ?>
				</div>
			</div>
		<?php endif; ?>
		<?php if(!is_active_sidebar('blog-sidebar')): ?>
			<div class="row">
				<div class="col-md-12">
					<?php get_template_part('includes/section','content'); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>