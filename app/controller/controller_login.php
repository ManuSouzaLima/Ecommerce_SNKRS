<?php

session_start();

$EMAIL = $_POST["email"];
$PASS  =  $_POST["password"];

$URL = "http://localhost/Ecommerce_SNKRS/app/routes/user.php";
$DATA = array(
    "request"  => "insert_user",
    "email"    => $EMAIL,
    "password" => $PASS
);

$CH = curl_init(($URL));
curl_setopt($CH, CURLOPT_POST,true);
curl_setopt($CH, CURLOPT_POSTFIELDS, http_build_query($DATA));

$SERVER_OUTPUT = curl_exec($CH);

if ($SERVER_OUTPUT === '200'){
    header("http://localhost/Ecommerce_SNKRS/");
}


//session_start();

//$_SESSION["email"]    = $_POST["email"];
//$_SESSION["password"] = $_POST["password"];




?>