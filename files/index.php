<?php get_header(); ?>

<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
	<?php while(have_posts()) {
		the_post();
		get_template_part("components/content");
	} ?>
	<nav>
		<div><?php next_posts_link("Older Entries"); ?></div>
		<div><?php previous_posts_link("Newer Entries"); ?></div>
	</nav>
</div>

<?php get_footer(); ?>
