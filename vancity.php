<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <style>
            .menu-content img {
                width: 49%;
            }
            .menu-content img:first-child {
                float: left;
            }
            .menu-content img:last-child {
                float: right;
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
                        <h1>Vancity Happy Hour</h1>
                        <img src="img/menu-vancity-intro.jpg">
                        <img src="img/menu-vancity.jpg" style="float:right;">

                        <div style="clear:both;"></div>

                        <h1 style="margin-top:15px;">Vancity Lunch Line-Up</h1>
                        <img src="img/menu-vancity-lunch.jpg">
                        <img src="img/menu-vancity-lunch2.jpg">
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.menus').addClass('selected');
        $('.vancity').addClass('selected');
    </script>
</html>