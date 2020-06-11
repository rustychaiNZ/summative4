<?php get_header('product'); ?>

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
					<h1><?php the_title(); ?></h1>
					<?php get_template_part('includes/section','content'); ?>
				</div>
			</div>
		<?php endif; ?>
	</div>

<?php get_footer(); ?>