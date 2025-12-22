<?php

session_start();

header("Content-Type: application/json");

$email = $_GET["email"] ?? null;
$pass  = $_GET["password"] ?? null;

if (!$email || !$pass) {
    echo json_encode([
        "sucess"  => false,
        "message" => "email ou senha vazios"
    ]);
} else {
    $url = "http://localhost/Ecommerce_SNKRS/app/routes/user.php";

    $data = [
        "request"  => "search_users",
        "email"    => $email,
        "password" => $pass
    ];

    $queryString = http_build_query($data);
    $getUrl = $url . "?" . $queryString;

    $ch = curl_init($getUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPGET, true);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    http_response_code($httpCode);

    echo $response;
}



//session_start();

//$_SESSION["email"]    = $_POST["email"];
//$_SESSION["password"] = $_POST["password"];
