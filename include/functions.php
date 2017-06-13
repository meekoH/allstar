<?php

define(SITE_NAME, "All Star");

$con = false;

function db_connect() {
    $con = mysql_connect('localhost', 'admin_allstar', 'star$$00') or die('Could not connect to server.');
    // Database Name
    mysql_select_db('admin_allstar', $con) or die('Could not select database.');
}

//function conecDB(){
//	global $con;
//	if( $con )
//		return $con;
//	$con = mysql_connect( 'localhost', 'streetme', 'street') or die('Could not connect to server.' );
//	mysql_select_db('streetme_unoapp', $con) or die('Could not select database.');
//        
////        $con = mysql_connect('dmbdemo.com', 'dmbdemo', 'demo$$99') or die('Could not connect to server.');
////    mysql_select_db('dmbdemo_unoapp', $con) or die('Could not select database.');
//	
//	return $con;
//}
function closeDB() {
    global $con;
    if ($con != false)
        mysql_close($con);
    $con = false;
}

function getDateTime() {
    return date("Y-m-d H:i:s");
}

function get_contact_id() {
    if (isset($_SESSION['contact_id'])) {
        return $_SESSION['contact_id'];
    } else {
        return 0;
    }
}

function mysql_insert_array($table, $data, $password_field = "") {
    foreach ($data as $field => $value) {
        $fields[] = '`' . $field . '`';

        if ($field == $password_field) {
            $values[] = "PASSWORD('" . mysql_real_escape_string($value) . "')";
        } else {
            $values[] = "'" . mysql_real_escape_string($value) . "'";
        }
    }
    $field_list = join(',', $fields);
    $value_list = join(', ', $values);

    $query = "INSERT INTO `" . $table . "` (" . $field_list . ") VALUES (" . $value_list . ")";

    return $query;
}

function create_state_list($countryfield, $def_disp_name = "Select") {
    $country_query = mysql_query("select distinct z_countryid_pk,country_name from state_mst inner join country_mst on (state_mst.z_countryid_fk=country_mst.z_countryid_pk) order by z_countryid_pk") or die(mysql_error());
    $num_country = 1;
    $output_string = '';
    while ($countries = mysql_fetch_array($country_query)) {
        if ($num_country == 1) {
            $output_string .= '  if (' . $countryfield . ' == "' . $countries['country_name'] . '") {' . "\n";
        } else {
            $output_string .= '  } else if (' . $countryfield . ' == "' . $countries['country_name'] . '") {' . "\n";
        }

        $state_query = mysql_query("select z_stateid_pk,state_name from state_mst where z_countryid_fk = '" . $countries['z_countryid_pk'] . "' order by state_name");
        $num_state = 1;
        while ($states = mysql_fetch_array($state_query)) {
            if ($num_state == '1')
                $output_string .= 'document.getElementById("state").options[0] = new Option("' . $def_disp_name . '", "");' . "\n";
            $output_string .= 'document.getElementById("state").options[' . $num_state . '] = new Option("' . $states['state_name'] . '", "' . $states['state_name'] . '");' . "\n";
            $num_state++;
        }
        $num_country++;
    }
    $output_string .= '  } else {' . "\n" .
            '    document.getElementById("state").options[0] = new Option("' . $def_disp_name . '", "");' . "\n" .
            '  }' . "\n";

    return $output_string;
}

function getIP() {

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

?>