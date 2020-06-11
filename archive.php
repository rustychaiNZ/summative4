<!-- Gets special header for blog -->
<?php get_header('blog'); ?>

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
					<?php get_template_part('includes/section','archive'); ?>
				</div>
			</div>
		</div>
		<div class="row pl-3">
			<?php previous_posts_link();  ?>
	   		<?php next_posts_link();  ?>
		</div>
	</div>

<?php get_footer(); ?>