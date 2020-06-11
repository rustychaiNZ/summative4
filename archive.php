<!-- Gets special header for blog -->
<?php get_header('blog'); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<div class="row">
			<div class="col-md-3 widget">
				<?php if(is_active_sidebar('blog-sidebar')) :?>
				<?php dynamic_sidebar('blog-sidebar'); ?>
				<?php endif; ?>
			</div>
			<div class="col-md-8">
				<?php get_template_part('includes/section','archive'); ?>
			</div>
		</div>
		<div class="row pl-3">
			<?php previous_posts_link();  ?>
	   		<?php next_posts_link();  ?>
		</div>
	</div>

<?php get_footer(); ?>