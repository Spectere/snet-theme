<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"
			   title="Permanent link to <?php the_title_attribute(); ?>">
			   	<?php the_title(); ?>
			</a>

			<div class="pull-right">
				<?php edit_post_link('Edit Post', null, null, null, 'btn btn-danger'); ?>
			</div>
		</h1>
		<div class="post-date">
			<?php the_date(); ?> at <?php the_time(); ?>
		</div>
	</header>
	<div class="post-content">
		<?php the_post_thumbnail();

		if(is_single()) {
			the_content();
			wp_link_pages();
		} else {
			the_excerpt();
		} ?>
	</div>
	<?php if(!is_single()) { ?>
		<footer>
			<div>
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments', 'btn btn-default post-comment-button', 'Comments Disabled'); ?>
			</div>
		</footer>
	<?php }

	get_template_part('components/categories');
	get_template_part('components/tags'); ?>
</article>