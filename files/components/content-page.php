<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"
			   title="Permanent link to <?php the_title_attribute(); ?>">
			   	<?php the_title(); ?>
			</a>
			
			<div class="pull-right">
				<?php edit_post_link('Edit Post', null, null, null, 'btn btn-danger'); ?>
				<?php if(comments_open() || get_comments_number()) {
					comments_popup_link('0', '1', '%', 'post-comments-link', '');
				} ?>
			</div>
		</h1>
		<div class="post-date">
			<?php the_date(); ?> at <?php the_time(); ?>
		</div>
	</header>
	<div class="post-content">
		<?php the_post_thumbnail();
		the_content(); ?>
	</div>

	<?php
		get_template_part('components/categories');
		get_template_part('components/tags');
	?>
</article>