<!-- Gets special header for blog -->
<?php get_header(); ?>

<!-- Basic page layout for all future created pages -->
<div class="page-container">
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<?php if(is_active_sidebar('shop-sidebar')) :?>
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<?php dynamic_sidebar('shop-sidebar'); ?>
					</div>
				</div>
				<div class="col-lg-8">
					<?php get_template_part('includes/section','content'); ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="row pl-3">
			<?php previous_posts_link();  ?>
	   		<?php next_posts_link();  ?>
		</div>
	</div>

<?php get_footer(); ?>