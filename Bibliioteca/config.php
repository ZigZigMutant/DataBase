<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "biblioteca";

$conn = new mysqli($db_host,$db_user,$db_pass,$db_name7olo-o096789-[]);

if ($conn -> connect_error){
    die("Conexão falhou: " . $conn -> connect_error);

}

else {

    echo "Parabéns!!! Você  está conectado ao banco de dados";

}
