<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="row">
		<div class="col">
			<?php the_content(); ?>
		</div>
	</div>

<?php
	endwhile;
else:
	endif;
?>