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
                        <img src="img/contact-banner.png">
                    </div>
                    <div class="left-side">
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">AllStar Wings &amp; Ribs&#8482; - Corporate Office</span></p>

                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Address</span><br>
                            3130 Rutherford Rd.<br>
                            Vaughan, ON<br>
                            L4K 0B1</p>

                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Phone</span><br>
                            289-304-8814</p>
                        <a href="mailto:info@allstarwingsandribs.com">
                            <div class="contact-btn">
                                Click Here to Email Us
                            </div>
                        </a>
                        <p>For a full list of your local AllStar Wings &amp; Ribs&#8482; please see our <a href="locations.php">locations page</a>.</p>
                    </div>
                    <div class="right-side">
                        <iframe frameborder="0" scrolling="no" src="http://www.digitalmarketingbox.com/unoapp/showLocations.php?locationid=668" width="462" height="282" style="box-shadow:0 0 6px 1px rgba(0,0,0,.8);"></iframe>
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.contact').addClass('selected');
    </script>
</html>