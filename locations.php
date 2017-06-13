<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <style>
            .clear { clear:both; }
        </style>
    </head>
    <body>
    	<div class="wrapper">
            <?php require_once('components/social-media.html'); ?>
    		<div class="main-container">
    			<?php require_once('components/header.html'); ?>

                <div class="content">
                    <div class="content-banner">
                        <img src="img/location-banner.png">
                    </div>
                    <iframe frameborder="0" scrolling="no" src="http://www.digitalmarketingbox.com/unoapp/showLocations.php?locationid=661"  width="944" height="400" style="display:inherit;margin:15px auto;box-shadow:0 0 6px 1px rgba(0,0,0,.8);"></iframe>
                    <div class="holiday-hours" style="padding-top:15px;">
                        <h1>Hours of Operation <span class="heading-star"><img src="img/star.png"></span></h1>
                        
                        <div class="left-side">
                            <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Pickering</p>
                                <p style="font-weight:700;margin:0;">Hours of Operation</p>
                                <p style="margin:0 0 15px;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 12:00am<br>
                                    <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 1:00am</p>

                            <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Vaughan | Scarborough</p>
                            <p style="font-weight:700;margin:0;">Hours of Operation</p>
                            <p style="margin:0 0 15px;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 1:00am<br>
                                <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 2:00am</p>

                            <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Meadowvale | Square One</p>
                            <p style="font-weight:700;margin:0;">Hours of Operation (Meadowvale)</p>
                            <p style="margin:0;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 11:30pm<br>
                                <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 1:30am</p>

                            <p style="font-weight:700;margin:0;">Hours of Operation (Square One)</p>
                            <p style="margin:0 0 15px;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 12:00am<br>
                                <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 1:30am</p>
                        </div>

                        <!-- <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Kitchener</p>
                        <p style="font-weight:700;margin:0;">Hours of Operation</p>
                        <p style="margin:0 0 15px;"><span style="color:#00447C;">Monday - Thursday</span> 11:30am - 12:00am<br>
                            <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 1:00am<br>
                            <span style="color:#00447C;">Sunday</span> 11:30am - 11:00pm</p> -->
                        
                        <div class="right-side">
                            <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Danforth</p>
                            <p style="font-weight:700;margin:0;">Hours of Operation</p>
                            <p style="margin:0 0 15px;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 12:00am<br>
                                <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 1:00am</p>

                            <p style="margin:15px 0 0;text-transform:uppercase;font-weight:700;color:#00447C;">Richmond Hill | Markham</p>
                            <p style="font-weight:700;margin:0;">Hours of Operation</p>
                            <p style="margin:0 0 15px;"><span style="color:#00447C;">Sunday - Thursday</span> 11:30am - 11:00pm<br>
                                <span style="color:#00447C;">Friday &amp; Saturday</span> 11:30am - 12:00am</p>
                        </div>
                        <div class="clear"></div>
                        <p style="margin:0;">Please check with individual restaurants and confirm hours by calling ahead, as store hours may change without written notice.</p>
                    </div>
                </div>
    		</div>
    	</div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.locations').addClass('selected');
    </script>
</html>