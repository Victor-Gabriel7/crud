<?php

    $servidor = "localhost";
    $user = "root";
    $senha = "123";
    $banco = "teste";

    $pdo = new PDO("mysql:host=$servidor;dbname=$banco",$user,$senha);

?>
