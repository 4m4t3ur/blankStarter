<?php

// adds scripts to page header
function addHeader() { ?>
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/style.css" />
  <link rel="stylesheet" type="text/css" href="<?php print get_bloginfo('stylesheet_directory'); ?>/css/style.css" />
  <script src="<?php print get_bloginfo('stylesheet_directory'); ?>/js/main.js" type="text/javascript"></script>    
<? } 
add_action( 'wp_head', 'addHeader' );

?>
