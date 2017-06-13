<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <style>
            .menu-content img {
                width: 100%;
            }
        </style>
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/social-media.html'); ?>
    		<div class="main-container">
    			<?php require_once('components/header.html'); ?>

                <div class="content">
                    <div class="content-banner">
                        <img src="img/menu-banner.png">
                    </div>
                    <?php require_once('components/left-navigation-menu.html'); ?>
                    <div class="menu-content">
                        <h1>Brunch Menu</h1>
                        
                        <p>Menu available only at our Danforth and Square One locations.</p>
                        <img src="img/menu-brunch.jpg" alt="Exclusive Brunch Menu">
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.menus').addClass('selected');
        $('.brunch').addClass('selected');
    </script>
</html>