<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
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
                        <h1>Beverages</h1>

                        <div id="menu_widget_107488"></div>
                        <script src="http://www.digitalmarketingbox.com/unoapp/jwidget/js/menuwidget.js" type="text/javascript"></script>
                        <script type="text/javascript">
                        var unowidget_menu =  new UnoappMenuWidget({
                            appID:107488,
                            border:false,
                            width:"751",
                            key:"a428bc20ca44f5d446cee54837b4fd6f",
                            layoutid:"5198",
                                cid:106299,
                            widgetcontainer:"menu_widget_107488"
                        }); 
                        </script>
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.menus').addClass('selected');
        $('.beverages').addClass('selected');
    </script>
</html>