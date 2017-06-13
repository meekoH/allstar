<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <script>
            function send_contactus() {
                var cases = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

                if ($("#First_Name").val() == "")
                {
                    alert("Required : First Name");
                    $("#First_Name").focus();
                    return;
                }
                if ($("#Last_Name").val() == "")
                {
                    alert("Required : Last Name");
                    $("#Last_Name").focus();
                    return;
                }
                if ($("#Phone").val() == "")
                {
                    alert("Required : Phone");
                    $("#Phone").focus();
                    return;
                }
                if ($("#Email").val() == "")
                {
                    alert("Required : Email");
                    $("#Email").focus();
                    return;
                }
                else if (!cases.test($("#Email").val())) {
                    alert("Not Valid : Email");
                    $("#Email").focus();
                    return;
                }

                if ($("#Postal_Code").val() == "")
                {
                    alert("Required : Postal Code");
                    $("#Postal_Code").focus();
                    return;
                }
                if ($("#Comments").val() == "")
                {
                    alert("Required : Comments");
                    $("#Comments").focus();
                    return;
                }


                $data = $("#contactus_form").serialize();
                $.post('contactus_ops.php', $data, function(result) {
                    if (result) {
                        $("#form_part").slideUp(200, function() {
                        });
                        $("#thanks").slideDown(200, function() {
                        });
                        $("#contactus_form input,#contactus_form textarea").each(function() {
                            $(this).val("");
                        });
                    } else {
                        alert("Error in Database Connection");
                    }

                });
            }

        </script>
    </head>
    <body>
        <div class="wrapper">
            <?php require_once('components/social-media.html'); ?>
            <div class="main-container">
                <?php require_once('components/header.html'); ?>

                <div class="content">
                    <div class="content-banner">
                        <img src="img/franchise-banner.png" style="position:relative;top:10px;">
                    </div>
                    <?php require_once('components/left-navigation-franchise.html'); ?>
                    <div class="menu-content">
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Interested in your own AllStar Franchise?</span></p>

                        <p>Thank you for your interest in the AllStar Wings and Ribs® franchise program.  For years the AllStar team have worked hard to establish and maintain a solid business model in the foodservice industry.  Our concept is simple.  Quality food served in casual, comfortable, fun surroundings, and great service from friendly staff!  Our restaurants are extremely successful.  We are known for our wings, our ribs and our fun atmosphere.</p>

                        <p>Our franchising program has proven to be highly successful, We continue to seek strategic partners as franchisees to open and expand in markets across Canada. These franchisees will be like-minded individuals wishing to own and operate their own restaurant business and succeed by following our proven operating system and business practices.  This is what franchising is all about. Together we can continue to grow and succeed to be the best in the foodservice business.</p>

                        <div id="form_part" class="left-side" style="width:68%;">
                            <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Inquiry Form</span> - All Fields Required</p>

                            <form class="catering-form" name='contactus_form' id='contactus_form' method='post' action='javascript:void(0)' onsubmit="return send_contactus()">
                                <div class="form-section">
                                    <label for="First_Name">First Name</label>
                                    <input type="text" id="First_Name" name="First_Name">
                                </div>
                                <div class="form-section">
                                    <label for="Last_Name">Last Name</label>
                                    <input type="text" id="Last_Name" name="Last_Name">
                                </div>
                                <div class="form-section">
                                    <label for="Phone">Phone #</label>
                                    <input type="text" id="Phone" name="Phone">
                                </div>
                                <div class="form-section">
                                    <label for="Email">Email Address</label>
                                    <input type="text" id="Email" name="Email">
                                </div>
                                <div class="form-section">
                                    <label for="Postal_Code">Postal Code</label>
                                    <input type="text" id="Postal_Code" name="Postal_Code" style="width:32%;">
                                </div>
                                <div class="form-section">
                                    <label for="Comments">Comments</label><br>
                                    <textarea id="Comments" name="Comments"></textarea>
                                </div>
                                <div class="form-section">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                        <div style="display: none;" id="thanks">
                            <p>Thank you for your inquiry. We will contact you shortly.</p>
                        </div>
                        <div class="right-side" style="width:28%;">
                            <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Area Representative Opportunity PDF</span></p>
                            <a href="pdf/Franchise-Info.pdf" target="_blank">
                                <img src="img/representative-opportunity.jpg" style="width:100%;margin-bottom:10px;">
                            </a>
                            <a href="pdf/Franchise-Info.pdf" target="_blank">
                                <div class="contact-btn" style="display:block;text-align:center;">
                                    Download Now
                                </div>
                            </a>
                        </div>
                        <div style="clear:both;height:25px;"></div>
                        <img src="img/events/AllStar-Rising.jpg" style="display:block;width:100%;border:1px solid #00447C;">
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.franchise').addClass('selected');
        $('.contact-us').addClass('selected');
    </script>
</html>