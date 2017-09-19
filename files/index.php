<?php get_header(); ?>

<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
	<?php while(have_posts()) {
		the_post();
		get_template_part('components/content');
	} ?>
	<nav>
		<?php next_posts_link('&laquo; Older Entries'); ?>
		|
		<?php previous_posts_link('Newer Entries &raquo;'); ?>
	</nav>
</div>

<?php get_footer(); ?>
