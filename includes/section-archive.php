<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="col-12">
		<div class="card primary-color mb-3 rounded portfolio-card shadow-sm">
			<div class="row no-gutters d-flex align-items-center card-hover">
			<!-- Image of Card -->
			<?php if(has_post_thumbnail()): ?>
				<div class="col-md-6">
					<img src="<?php the_post_thumbnail_url('smallest'); ?>" class="img-fluid m-auto d-block p-2">
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<!-- Heading of the blog entry -->
						<h3><?php the_title(); ?></h3>
						<!-- Excerpt from the blog entry -->
						<?php the_excerpt();?>
						<!-- link to the blog entry -->
						<a href="<?php the_permalink(); ?>" class="btn btn-success accent-color">Read More</a>
					</div>
				</div>	
			<?php endif; ?>
			<?php if(!has_post_thumbnail()): ?>
				<div class="col-md-6">
					<div class="card-body">
						<!-- Heading of the blog entry -->
						<h3><?php the_title(); ?></h3>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card-body">
						<!-- Excerpt from the blog entry -->
						<?php the_excerpt();?>
						<!-- link to the blog entry -->
						<a href="<?php the_permalink(); ?>" class="btn btn-success accent-color">Read More</a>
					</div>
				</div>
			<?php endif ?>
			</div>
		</div>
	</div>
<?php
	endwhile;
else:
	endif;
?>