<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>" />
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i|Mukta:400,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<meta charset="<?php bloginfo("charset"); ?>">
		<?php if(is_singular() && get_option('thread_comments')) wp_enqueue_script('comment-reply'); ?>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="title-pane">
			<div id="title-container">
				<div id="title-text-block">
					<a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
				</div>
				<div id="subtitle-text-block">
					<?php bloginfo('description'); ?>
				</div>
			</div>
		</div>

		<div id="container">
			<div class="row">
				<?php get_sidebar(); ?>
