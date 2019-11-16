<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description')?>">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">
    <title><?php bloginfo('name')?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="jumbotron text-center">
        <img src="http://www.minnahannula.com/wp-content/uploads/2019/10/kuva.jpg" alt="profile" class="picture justify-content-center mb-4">
        <div class="icon justify-content-center">
            <ul>
                <li><a href="https://www.linkedin.com/in/minna-hannula-774798139"><i class="fa fa-linkedin fa-2x" aria-hidden="true"></i></a></li>
                <li><a href="https://github.com/MinnaAH"><i class="fa fa-github fa-2x" aria-hidden="true"></i></i></a></li>
            </ul>
        </div>
    </div>
    <div class="text-center mt-n5">
        <h5><?php bloginfo('name')?></h5>
        <?php 
            wp_nav_menu( array(
				'menu' => 'bootstrap_menu',
				'theme_location' => 'bootstrap_menu',
                'container' => 'div',
				'menu_class' => 'nav justify-content-center',
                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
				'walker' => new wp_bootstrap_navwalker()
            ));
        ?>
    </div>