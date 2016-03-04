<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title> <?php bloginfo('name'); ?> </title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
    <?php wp_head(); // This to insert /scripts/css/files ?>
</head>
<body>

    <header>
            <nav role="navigation" class="site-navigation main-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav>
    </header>

<!-- start the page containter -->
<div class="container">
