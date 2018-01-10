<?php

/*
Plugin Name: Internet BS API
Plugin URI: http://wvfitzgerald.com
Description: Check for available domain names and register them through internet.bs
Version: 0.1.0
Author: Bill Fitzgerald
Author URI: http://wvfitzgerald.com
Text Domain: internetbs
Domain Path: /languages
*/
/*---------Our admin settings page---------*/
require_once 'internetBS-settings.php';

    /*------Begin domain check-----*/
    function internet_bs_domain_page(){

    ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        jQuery( function() {
            jQuery( "#tabs" ).tabs();
        } );
    </script>
    <div class="wrap">
        <h1>InternetBS Domains</h1>
    </div>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Check Domain Availability</a></li>
            <li><a href="#tabs-2">Register A Domain</a></li>
            <li><a href="#tabs-3">Update A Domain</a></li>
        </ul>
        <div id="tabs-1">
            <div class="wrap">
                <?php require_once "forms/domain-check-form.php"; ?>
            </div>

        </div>
        <div id="tabs-2">

            <div class="wrap">
             <?php require_once "forms/domain-registration-form.php"; ?>
            </div>
        </div>

        <div id="tabs-3">
            <div class="wrap">
                <?php require_once "forms/domain-update-form.php"; ?>
            </div>
        </div>
<?php

//$data = array (
//    'ApiKey' =>  get_option('internet_bs_api_key'),
//    'Password' =>  get_option('internet_bs_password'),
//    'domain' => $_POST['internetbs_domain'],
//    'ResponseFormat' => 'JSON',
//    'Registrant_FirstName' => $_POST['Registrant_FirstName'],
//    'Registrant_Lastname' =>  $_POST['Registrant_Lastname'],
//    'registrant_email' => $_POST['registrant_email'],
//    'registrant_phonenumber' => $_POST['registrant_phonenumber'],
//    'registrant_street' => $_POST['registrant_street'],
//    'registrant_city' => $_POST['registrant_city'],
//    'registrant_countrycode' => $_POST['registrant_countrycode'],
//    'registrant_postalcode' => $_POST['registrant_postalcode'],
//    'registrant_state' => $_POST['registrant_state'],
//    'technical_FirstName' => $_POST['Registrant_FirstName'],
//    'technical_Lastname' =>  $_POST['Registrant_Lastname'],
//    'technical_email' => $_POST['registrant_email'],
//    'technical_phonenumber' => $_POST['registrant_phonenumber'],
//    'technical_street' => $_POST['registrant_street'],
//    'technical_city' => $_POST['registrant_city'],
//    'technical_countrycode' => $_POST['registrant_countrycode'],
//    'technical_postalcode' => $_POST['registrant_postalcode'],
//    'technical_state' => $_POST['registrant_state'],
//    'billing_FirstName' => $_POST['Registrant_FirstName'],
//    'billing_Lastname' =>  $_POST['Registrant_Lastname'],
//    'billing_email' => $_POST['registrant_email'],
//    'billing_phonenumber' => $_POST['registrant_phonenumber'],
//    'billing_street' => $_POST['registrant_street'],
//    'billing_city' => $_POST['registrant_city'],
//    'billing_countrycode' => $_POST['registrant_countrycode'],
//    'billing_postalcode' => $_POST['registrant_postalcode'],
//    'billing_state' => $_POST['registrant_state'],
//    'admin_FirstName' => $_POST['Registrant_FirstName'],
//    'admin_Lastname' =>  $_POST['Registrant_Lastname'],
//    'admin_email' => $_POST['registrant_email'],
//    'admin_phonenumber' => $_POST['registrant_phonenumber'],
//    'admin_street' => $_POST['registrant_street'],
//    'admin_city' => $_POST['registrant_city'],
//    'admin_countrycode' => $_POST['registrant_countrycode'],
//    'admin_postalcode' => $_POST['registrant_postalcode'],
//    'admin_state' => $_POST['registrant_state'],
//);
//
//require_once  "param-array.php";
//echo "Tst <br>";
////print_r($data);
//echo "<br>";
//echo "End Tst <br>";
//?>
<?php
//$curl = curl_init();
//curl_setopt($curl, CURLOPT_URL , "https://testapi.internet.bs/Domain/Create");
//curl_setopt($curl, CURLOPT_POST, true);
//curl_setopt($curl,CURLOPT_CUSTOMREQUEST ,  "POST");
//curl_setopt($curl, CURLOPT_POSTFIELDS, $data );
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//curl_exec($curl);
//$response = curl_exec($curl);
//$err = curl_error($curl);
//var_dump($response);
//curl_close($curl);
//if ($err) {
//    echo "cURL Error #:" . $err;
//} else {
//     echo $response;
//    echo "<br>";
//}
////$jason = json_decode($response, true);
//echo "<br>";
//$obj= json_decode($response , true );
//echo "New Test <br>";
//echo  $obj["product"][0]["message"] . " ,please try another domain.";
//echo "<br>";
//echo  $obj["product"][0]["status"] . "<br>";
//echo "VAR Dump <br>";
//        print_r($obj);
    }


?>