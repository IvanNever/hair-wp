<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); echo " | "; bloginfo('description');?></title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;300;500;700;900&family=Marmelad&display=swap" rel="stylesheet">
        <?php
            wp_head();
        ?>
    </head>
    <body>
        <header class="header" id="header">
            <div class="header__container">
                <nav class="header__nav">
                    <div class="header__logo">
                        <?php the_custom_logo(  ) ?>
                    </div>
                    <ul class="header__nav-list">
                        <li class="header__nav-item"><a href="#about" class="header__nav-link">Про меня</a></li>
                        <li class="header__nav-item"><a href="#price" class="header__nav-link">Стоимость</a></li>
                        <li class="header__nav-item"><a href="#gallery" class="header__nav-link">Галерея</a></li>
                        <li class="header__nav-item"><a href="#footer" class="header__nav-link">Контакты</a></li>
                    </ul>
                </nav>
                <h1 class="header__title"><?php bloginfo('name');?></h1>
                <h2 class="header__subtitle"><?php bloginfo('description');?></h2>
                <a href="#feedback" class="btn header__btn">Записаться</a>
            </div>
        </header>