<?php get_header(); ?>

<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
	<?php while(have_posts()) {
		the_post();
		get_template_part('components/content');

		the_post_navigation(array(
			'prev_text' => '&laquo; Previous Post',
			'next_text' => 'Next Post &raquo;'
		));

		if(comments_open() || get_comments_number()) {
			comments_template();
		}
	} ?>
</div>

<?php get_footer(); ?>
