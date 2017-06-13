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
                        <img src="img/merchandise-banner.png" style="position:relative;top:7px;">
                    </div>
                    <div class="content">
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Coming Soon</span></p>
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.merchandise').addClass('selected');
    </script>
</html>