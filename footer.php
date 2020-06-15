	<footer class="primary-color-background container-fluid">
		<div class="row d-flex align-items-center justify-content-center">
			<!-- Contains social media icons with links -->
			<div class="col text-center">
				<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'social-menu',
							'container' => 'div',
							'container_class' => 'social-list',
						)
					);
				?>
			</div>
		</div>
		<div class="row">
			<!-- Contains copyright info -->
			<div class="col-md">
				<p class="text-light text-center"><?php echo get_theme_mod('footer_copyrightContainer'); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<p class="text-light text-center">Powered by <a href="https://wordpress.org/" target="_blank">WordPress</a> <br> Template created by <a href="https://www.russelljohnson.co.nz" target="_blank">Russell Johnson</a></p>
			</div>
		</div>
	</footer>
</div>
	<script src="https://use.fontawesome.com/4767738c46.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>