<?php

define("REQUEST_EMAIL", "allinclub@allstarwingsandribs.com,info@allstarwingsandribs.com,");


include('include/functions.php');
date_default_timezone_set('US/Eastern');
db_connect();

extract($_POST);

$data['firstname'] = $First_Name;
$data['lastname'] = $Last_Name;
$data['email'] = $Email;
$data['city'] = $City;
$data['dob'] = $DOB;
$data['optIn'] = ($optIn != '') ? $optIn : "No";
$data['created_on'] = getDateTime();
$data['created_by'] =0; // get_contact_id()
$data['modified_on'] = getDateTime();
$data['modified_by']=0; // get_contact_id()

unset($data["$First_Name"]);
unset($data["$Last_Name"]);
unset($data["$Phone"]);
unset($data["$Email"]);
unset($data["$Postal_Code"]);
unset($data["$Comments"]);

$sql = mysql_insert_array("newsletter_mst", $data);
$res = mysql_query($sql) or die(mysql_error());
$insertedId = mysql_insert_id();

if ($insertedId > 0) {
    $body_str = '';
    foreach ($data as $key => $val) {
        if ($val != '') {
            $body_str .= "<p> " . ucfirst($key) . ": <b> $val </b></p>";
        }
    }

    $subject = "AllStar New Newsletter Sign-Up";
    $mailbody = "";
    $mailbody = $mailbody . "<html><title>" . $subject . "</title><body>";
    $mailbody = $mailbody . "<p>Hello ,</p>
                            <p>New Newsletter request is received from website. The details of request is as below.</p>";
    $mailbody = $mailbody . $body_str;
    $mailbody = $mailbody . "<p>The request is submitted on <b>" . date("Y-m-d H:i:s") . "</b></p>";
    $mailbody = $mailbody . "<p>Thanks,</p>" .
            "<p>Digital Menubox</p>";
    $mailbody = $mailbody . "<p>*This is auto generated email. Don't reply to this email.*</p>";
    $mailbody = $mailbody . "</body></html>";

    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $headers .= "From: UNOapp <support@unoapp.com>" . "\r\n";

    $mailsent = mail(REQUEST_EMAIL, $subject, $mailbody, $headers);
    echo $mailsent;
} else {
    echo FALSE;
}
?>