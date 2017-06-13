<!DOCTYPE HTML>

<html>
    <head>
        <?php require_once('components/head.html'); ?>
        <script>
            function send_catering() {
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

                if ($("#Party_Size").val() == "")
                {
                    alert("Required : Party Size");
                    $("#Party_Size").focus();
                    return;
                }
                if ($("#Comments").val() == "")
                {
                    alert("Required : Comments");
                    $("#Comments").focus();
                    return;
                }


                $data = $("#catering_form").serialize();
                $.post('catering_ops.php', $data, function(result) {
                    if (result) {
                        $("#form_part").slideUp(200, function() {
                        });
                        $("#thanks").slideDown(200, function() {
                        });
                        $("#catering_form input,#catering_form textarea").each(function() {
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

                <div class="content" >
                    <div class="content-banner" style="margin-top:-20px;">
                        <img src="img/catering-banner.png" style="position:relative;top:20px;">
                    </div>
                    <div class="left-side">
                        <p><span style="text-transform:uppercase;font-weight:700;font-size:16px;color:#00447C;">Let AllStar Cater Your Next Event!</span></p>

                        <p>No matter what the size of your event, our reliable (and affordable) services, as well as our huge assortment of Wing and Rib Flavours (200+!) will make any occasion a memorable success.</p>
                    </div>
                    <div class="right-side" id="form_part">
                        <form class="catering-form" name='catering_form' id='catering_form' method='post' action='javascript:void(0)' onsubmit="return send_catering()">
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
                                <label for="Party_Size">Party Size</label>
                                <input type="text" id="Party_Size" name="Party_Size" style="width:32%;">
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
                </div>

            </div>
        </div>
    </body>
    <?php require_once('components/footer.html'); ?>
    <?php require_once('components/scripts.html'); ?>
    <script>
        $('.catering').addClass('selected');
    </script>
</html>