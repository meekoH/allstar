<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <script>
            function send_newsletter() {
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

                if ($("#City").val() == "")
                {
                    alert("Required : City");
                    $("#City").focus();
                    return;
                }
                if ($("#DOB").val() == "")
                {
                    alert("Required : Date of Birth");
                    $("#DOB").focus();
                    return;
                }


                $data = $("#newsletter_form").serialize();
                $.post('newsletter_ops.php', $data, function(result) {
                    if (result) {
                        $("#form_part").slideUp(200, function() {
                        });
                        $("#thanks").slideDown(200, function() {
                        });
                        $("#newsletter_form input,#newsletter_form textarea").each(function() {
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
                        <img src="img/allin-banner.png" style="position:relative;top:2px;">
                    </div>
                    <div class="content" id="form_part" >
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Want to join the All In Club Newsletter?<br>
                                Just fill out the form below and sign up to receive the latest in upcoming news, events and promotions</span></p>

                        <div class="left-side" style="width:100%;">
                            <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Sign Up Form</span> - All Fields Required</p>

                            <form class="catering-form" name='newsletter_form' id='newsletter_form' method='post' action='javascript:void(0)' onsubmit="return send_newsletter()">
                                <div class="form-section">
                                    <label for="First_Name">First Name</label>
                                    <input type="text" id="First_Name" name="First_Name">
                                </div>
                                <div class="form-section">
                                    <label for="Last_Name">Last Name</label>
                                    <input type="text" id="Last_Name" name="Last_Name">
                                </div>
                                <div class="form-section">
                                    <label for="Email">Email Address</label>
                                    <input type="text" id="Email" name="Email">
                                </div>
                                <div class="form-section">
                                    <label for="City">City</label>
                                    <input type="text" id="City" name="City">
                                </div>
                                <div class="form-section">
                                    <label for="DOB">Date of Birth</label>
                                    <input type="text" id="DOB" name="DOB">
                                </div>
                                <div class="form-section" style="margin:14px 0 7px;">
                                    <label for="optIn">I would like to receive more information from AllStar Wings &amp; Ribs™</label>
                                    <input type="checkbox" name="optIn" id="optIn" value="Yes" style="position:relative;top:-4px;left:10px;">
                                </div>
                                <div class="form-section">
                                    <input type="submit" value="Submit">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="display: none;" id="thanks">
                        <p>Thank you for signing up for our All-In Club.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.employment').addClass('selected');
    </script>
</html>