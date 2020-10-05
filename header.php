<?php header('HTTP/1.1 200 OK'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php get_the_title();?></title>
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <header>
        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="social-media-icons col-xs-9 col-sm-7 col-6">sociais</div>
                    <div class="serach col-xs-3 col-sm-5 col-6 text-right">Pesquisa</div>
                </div>
            </div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row align-middle">
                    <section class="logo col-md-2 col-12 text-conter align-middle">logo</section>
                    <nav class="main-menu col-md-10 text-right align-middle"><?php wp_nav_menu(array('theme_location' => 'my_man_menu'));?></nav>
                </div>
            </div>
        </section>
    </header>