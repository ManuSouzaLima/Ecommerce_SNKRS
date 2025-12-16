<?php

$DATABASE = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE_NAME = "concluse";


$CONN = new mysqli($DATABASE,$USER,$PASSWORD,$DATABASE_NAME);


//if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
//    echo 'We don\'t have mysqli!!!';
//} else {
//    echo 'Phew we have it!';
//}

//if($CONN->connect_error){
//    die("Falha:" . $CONN->connect_error);
//}
//else{
   // echo "Deu certo";
//}

?>