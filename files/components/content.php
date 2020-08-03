<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"
			   title="Permanent link to <?php the_title_attribute(); ?>">
			   	<?php the_title(); ?>
			</a>

			<div class="pull-right">
				<?php edit_post_link('Edit Post', null, null, null, 'btn btn-danger');

				if(post_password_required()) {
					?><span class="glyphicon glyphicon-lock post-lock-icon">&nbsp;</span><?php
				} elseif(comments_open() || get_comments_number()) {
					comments_popup_link('0', '1', '%', 'post-comments-link', '');
				} ?>
			</div>
		</h1>
		<div class="post-date">
			<?php if(!get_the_title()) { ?>
				<a href="<?php the_permalink(); ?>" rel="bookmark" class="date-permalink"
				   title="Permanent link to <?php the_title_attribute(); ?>">
			<?php } ?>
			
			<?php the_time(get_option('date_format')); ?> at <?php the_time(); ?>

			<?php if(!get_the_title()) echo '</a>'; ?>
		</div>
	</header>
	<div class="post-content">
		<?php the_post_thumbnail();

		if(is_single()) {
			the_content();

			wp_link_pages(array(
				'before'		=> '<div class="post-pagination">',
				'after'			=> '</div>',
				'link_before'	=> '<span class="post-pagination-text">',
				'link_after'	=> '</span>',
				'separator'		=> '&middot;'
			));
		} else {
			the_content('View Full Post', true); ?>
		<?php } ?>
	</div>

	<?php get_template_part('components/categories');
	get_template_part('components/tags'); ?>
</article>
