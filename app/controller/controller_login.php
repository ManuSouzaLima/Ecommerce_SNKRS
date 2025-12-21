<?php

session_start();

$EMAIL = $_POST["email"];
$PASS  =  $_POST["password"];

$URL = "http://localhost/Ecommerce_SNKRS/app/routes/user.php";
$DATA = array(
    "request"  => "search_users",
    "email"    => $EMAIL,
    "password" => $PASS
);
$QUERY_STRING = http_build_query($DATA);
$GET_URL = $URL . "?" . $QUERY_STRING;

$CH = curl_init(($GET_URL));
curl_setopt($CH, CURLOPT_RETURNTRANSFER,true);
curl_setopt($CH, CURLOPT_HTTPGET,true);
$SERVER_OUTPUT = curl_exec($CH);
echo $SERVER_OUTPUT;

if ($SERVER_OUTPUT === '200'){
    header("http://localhost/Ecommerce_SNKRS/");
}


//session_start();

//$_SESSION["email"]    = $_POST["email"];
//$_SESSION["password"] = $_POST["password"];




?>