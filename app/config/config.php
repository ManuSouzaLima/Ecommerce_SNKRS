<?php

$DATABASE = "localhost";
$USER = "root";
$PASSWORD = "";
$DATABASE_NAME = "concluse";

$CONN = new mysqli($DATABASE,$USER,$PASSWORD,$DATABASE_NAME,);

if($CONN->connect_error){
   die("Falha:" . $CONN->connect_error);
}

?>