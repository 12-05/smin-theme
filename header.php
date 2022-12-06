<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <body <?php body_class();?>>
        <header class="header" role="header">
            <a href="/" class="logo"><img src="<?php the_field('logo', 'option');?>" alt="Logo" /></a>
            <div class="toolbar">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'primary_menu',
                        'menu_id' => 'primary_menu'
                    ));?>
                    <nav class="header-buttons">
                        <?php $buttons = get_field('header_buttons', 'option');?>
                        <?php array_map(function($item) {
                            echo '<a href="'.$item['link'].'"><img src="'.$item['bild'].'"/></a>';
                        },$buttons);?>
                    </nav>
                </div>
            <button class="hamburger"></button>

        </header>
        <main>