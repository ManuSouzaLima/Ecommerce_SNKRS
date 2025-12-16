<?php

require_once("../config/config.php");
$REQ = $_REQUEST["requisicao"];
$RETURN = array();

if ($REQ === "listar_usuarios"){
    $QUERY = "SELECT user_name, email FROM users";

    $CONSULT = $CONN->prepare($QUERY);
    $CONSULT->execute();
    $RESULT = $CONSULT->get_result();

        while($DATA = $RESULT->fetch_assoc()){
            $RETURN[] = array(
                "name" => $DATA["user_name"],
                "email" => $DATA["email"]
            );
        }
}

die (json_encode($RETURN));

?>