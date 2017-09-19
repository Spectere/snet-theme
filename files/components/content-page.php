<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"
			   title="Permanent link to <?php the_title_attribute(); ?>">
			   	<?php the_title(); ?>
			</a>
		</h1>
		<div class="post-date">
			<?php the_date(); ?> at <?php the_time(); ?>
		</div>
	</header>
	<div class="post-content">
		<?php the_post_thumbnail();
		the_content();
		edit_post_link(); ?>
	</div>
	<?php if(!is_single()) { ?>
		<footer>
			<div>
				<?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments', 'btn btn-default', 'Comments Disabled'); ?>
			</div>
		</footer>
	<?php }

	$tags = get_the_tags();
	if(count($tags) > 0 && $tags != NULL) { ?>
		<div class="tag-block">
			<strong>Tags:</strong>
			<?php foreach($tags as $tag) {
				$tag_link = get_tag_link($tag->term_id); ?>
				<a class="tag" href="<?php echo $tag_link ?>"><?php echo $tag->name; ?></a><?php

				if(end($tags) !== $tag) {
					echo ',';
				}
			} ?>
		</div>
	<?php } ?>
</article>