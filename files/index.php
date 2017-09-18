<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php get_header(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="container">
			<div class="row">
				<div id="left-sidebar-pane" class="col-sm-4 col-md-3 col-lg-3">
					<?php get_sidebar(); ?>
				</div>

				<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
					<?php while(have_posts()) {
						the_post();
						get_template_part("content");
					} ?>
					<nav>
						<div><?php next_posts_link("Older Entries"); ?></div>
						<div><?php previous_posts_link("Newer Entries"); ?></div>
					</nav>
				</div>
			</div>

			<div class="row">
				<footer>
					<?php get_footer(); ?>
				</footer>
			</div>
		</div>
	</body>
</html>
