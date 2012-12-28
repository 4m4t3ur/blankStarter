blankStarter
============

A blank WordPress theme for kickstarting a kickass design.
It's good if You like to start your themes from scratch.

Features:
1. HTML5 header.\n
2. minimum amount of files.\n
3. minimum amount of markup in the themes.\n
4. Eric Meyers CSS reset.\n
5. enables ( enques ) jQuery\n
6. adds html5shiv for IE HTML5 support\n
7. blank header, footer, page, post, post listing and custom template files.\n
8. child / parent theme structure \n

/* Installation */
Install as any other Wordpress theme:
1) Place both folders ( "blankStarter" and "childTheme" ) to wp-content/themes.
2) enable childTheme theme in admin.

Rename theme name at childTheme/style.css

All new files in childTheme folder override the files in TabulaRasa folder**.
As an example footer.php is added to childTheme.

Child theme / parent theme structure is used for updating purposes.
___
** Except for functions.php - these get merged and used from both themes.





