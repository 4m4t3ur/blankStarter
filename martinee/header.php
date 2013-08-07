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
  <meta property='fb:app_id' content='574012025974386' />  <!-- ADD YOUR OWN Facebook App ID here! -->
</head>
<body <?php body_class(); ?>>
    <a href="https://github.com/4m4t3ur/blankStarter"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>    

  <div id="main">
  	<div id="header">
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
			</a>
      <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
      <br>
      by <a href="http://twitter.com/martinsookael">@martinsookael</a>
  </div>

  <p>
  	<ul id="mainMenu">
      <li class="page_item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Posts</a></li>
			<?php wp_list_pages('title_li='); ?>
		</ul>
	</p>