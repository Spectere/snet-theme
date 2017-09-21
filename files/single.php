<?php get_header(); ?>

<div id="content-pane" class="col-sm-8 col-md-9 col-lg-9">
	<?php while(have_posts()) {
		the_post();
		get_template_part('components/content'); ?>

		<nav class="post-navigation row">
			<?php
			$older_link = get_previous_post_link();
			$newer_link = get_next_post_link();
			?>

			<div class="col-xs-6 text-left">
				<?php echo $older_link; ?>
			</div>

			<div class="col-xs-6 text-right">
				<?php echo $newer_link; ?>
			</div>
		</nav>

		<?php if(comments_open() || get_comments_number()) {
			comments_template();
		}
	} ?>
</div>

<?php get_footer(); ?>
