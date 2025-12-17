<?php

require_once("../config/config.php");
$REQ = $_REQUEST["requisicao"];
$RETURN = array();

// Rota para listar os usuarios

if (($_SERVER["REQUEST_METHOD"] === "GET") && ($REQ === "listar_usuarios")) {
    $QUERY = "SELECT user_name, email FROM users";

    $CONSULT = $CONN->prepare($QUERY);
    $CONSULT->execute();
    $RESULT = $CONSULT->get_result();

    while ($DATA = $RESULT->fetch_assoc()) {
        $RETURN[] = array(
            "name" => $DATA["user_name"],
            "email" => $DATA["email"]
        );
    }
    die(json_encode($RETURN));
}

// Rota para conferir se o Usuario existe
if (($_SERVER["REQUEST_METHOD"] === "GET") && ($REQ === "conferir_usuario")) {

    $QUERY = "SELECT * FROM users
              WHERE users.email = 'ldoc@gmail.com' AND users.user_key = '665';";

    $CONSULT = $CONN->prepare($QUERY);
    $CONSULT->execute();
    $RESULT = $CONSULT->get_result();
    $RESPONSE_CODE = http_response_code();
    
    if (mysqli_num_rows($RESULT) === 0 ) {
        $RETURN[] = array(
            "response" => $RESPONSE_CODE,
            "user"     => "false"
        );

    }
    elseif (mysqli_num_rows($RESULT) === 1){
        $RETURN[] = array(
            "response" => $RESPONSE_CODE,
            "user"     => "true"
        );
    }
 die(json_encode($RETURN));

}


//Rota para Inserir usuarios 
if (($_SERVER["REQUEST_METHOD"] === "POST") && ($REQ === "inserir_usuario")) {

    $QUERY = "INSERT INTO users (user_name,email,user_key)
              VALUES('Evandro','ev@gmail.com','23232');";

    $CONSULT = $CONN->prepare($QUERY);
    $CONSULT->execute();
    $RESULT = $CONSULT->get_result();
    $RESPONSE_CODE = http_response_code();
    if ($RESPONSE_CODE === 200) {
        die("Response: {$RESPONSE_CODE}\nUsuario incluido com sucesso");
    }
}
