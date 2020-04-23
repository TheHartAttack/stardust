<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body>
        
        <?php if (!is_home()){ ?><header>
            <a href="<?php echo site_url(); ?>"><?php
            /*include 'svg/bolt.php';*/
            include 'svg/stardust.php';
            /*include 'svg/bolt.php';*/
            ?></a>
        </header> <?php } ?>

        <header>
            <?php
            $date = strtotime("July 22, 2020 00:00");
            $remaining = $date - time();
            ?>

            <span id="countdown"><span><?php echo round($remaining/86400); ?></span><br>days</span>

            <div class="menu-button">
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
            </div>
        </header>

        