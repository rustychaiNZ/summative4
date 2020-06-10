<!-- Gets special header for blog -->
<?php get_header(); ?>

<div class="page-container">
	<div class="page-border page-top-left accent-color"></div>
	<!-- Basic page layout for all future created pages -->
	<div class="container">
		<h1 class="py-2"><?php single_cat_title(); ?></h1>
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
	<div class="page-border page-bottom-right accent-color"></div>

<?php get_footer(); ?>