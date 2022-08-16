<?php
    $servername = "localhost"; // nome da conexão
    $username = "root"; // nome do usuario da conexão
    $passoword = ""; // senha do banco de dados caso exista
    $dbname = "banco2903"; // nome do seu banco

    // create connection
    $conn = new mysqli ($servername, $username, $passoword, $dbname);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }


?>