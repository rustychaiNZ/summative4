<!-- Gets special header for blog -->
<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<?php if(is_active_sidebar('blog-sidebar')) :?>
			<div class="row">
				<div class="col-md-3">
					<div class="widget">
						<?php dynamic_sidebar('blog-sidebar'); ?>
					</div>
				</div>
				<div class="col-md-8">
					<?php get_template_part('includes/section','archive'); ?>
					<p>Hello world</p>
				</div>
			</div>
		<?php endif; ?>
		<div class="row pl-3">
			<?php previous_posts_link();  ?>
	   		<?php next_posts_link();  ?>
		</div>
	</div>

<?php get_footer(); ?>