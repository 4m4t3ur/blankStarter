<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ericMeyerReset.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  <!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
  <![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="main">
  <p>
		<?php wp_list_pages('title_li='); ?>
	</p>