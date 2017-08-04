<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<?php get_header(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="container">
			<?php get_sidebar(); ?>

			<div id="content">
				<?php while(have_posts()) {
					the_post();
					get_template_part("content");
				} ?>
				<nav>
					<div><?php next_posts_link("Older Entries"); ?></div>
					<div><?php previous_posts_link("Newer Entries"); ?></div>
				</nav>
			</div>

			<footer>
				<?php get_footer(); ?>
			</footer>
		</div>
	</body>
</html>
