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
					<div class="col">
						<p><b>Publication Date: </b>
						<?php echo get_the_date() . '</p>'?>
						<?php if(has_post_thumbnail()): ?>
							<img src="<?php the_post_thumbnail_url('largest'); ?>" class="img-fluid m-auto d-block pb-3">
						<?php endif; ?>
						<?php get_template_part('includes/section','blogcontent');?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h5>Categories: </h5>
						<?php $categories = get_the_category(); ?>
						<?php 
							echo ' ';
							foreach($categories as $cat):
						?>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<a href="<?php echo get_category_link($cat->term_id); ?>">
							<?php echo $cat->name;?>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
				<div class="row">
					<div class="col">
						<h5>Author:</h5>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<?php echo get_the_author(); ?>
					</div>
					
				</div>
			</div>
		</div>	
	</div>

<?php get_footer(); ?>