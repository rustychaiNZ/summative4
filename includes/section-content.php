<?php 
// This will post the content of each section
	if (have_posts()) : 
		while (have_posts()) : 
			// Finds the post and adds it to relevant page
			the_post();
			// Finds the content and adds it
			the_content();
		endwhile;
	else :
	endif;
?>