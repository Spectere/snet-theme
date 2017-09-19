<?php get_header(); ?>

<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
	<?php while(have_posts()) {
		the_post();
		get_template_part("components/content"); ?>

		<nav>
			<?php previous_post_link('%link', '&laquo; Previous Post'); ?>
			|
			<?php next_post_link('%link', 'Next Post &raquo;'); ?>
		</nav>

		<?php if(comments_open() || get_comments_number()) {
			comments_template();
		}
	} ?>
</div>

<?php get_footer(); ?>
