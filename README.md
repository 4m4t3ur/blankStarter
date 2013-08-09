blankStarter
============

A blank WordPress theme for kickstarting a kickass design.
It's good if You like to start your themes from scratch.
It's also good if it's a long term project = you have to come back to the files over and over.

Features:
1. HTML5 header.
2. minimum amount of files.
3. minimum amount of markup in the themes.
4. Eric Meyers CSS reset.
5. enables ( enques ) jQuery
6. adds html5shiv for IE HTML5 support
7. blank header, footer, page, post, post listing and custom template files.
8. child / parent theme structure 

/* Included */
/blankStarter folder - main files for parent folder.
/childTheme - main files for a child theme.
/martinee - example theme made with blankStarer. Check it out @ www.martin.ee

/* Installation */
Install as any other Wordpress theme:
1) Place the folders ( "blankStarter", "childTheme" and "martinee" ) to wp-content/themes.
2) enable childTheme theme in admin.

Rename theme name at childTheme/style.css

All new files in childTheme folder override the files in TabulaRasa folder**.
As an example footer.php is added to childTheme.

Child theme / parent theme structure is used for updating purposes.
___
** Except for functions.php - these get merged and used from both themes.





