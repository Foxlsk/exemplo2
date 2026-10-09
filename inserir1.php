<?php
    $Email = $_POST["Email"];
    $Nome = $_POST["Nome"];
    $Password = $_POST["Password"];
    if (! $Email) {
    echo "Email em falta.
    Volte atrás e preencha o Email"; exit;}
    echo "Email: ".$Email. "</br>";
    echo "Nome: ".$Nome. "</br>";
    echo "Password: ".$Password. "</br>";

    $conexao = new mysqli("localhost", "root", "", "usuario");
    if ($conexao->connect_error) {
    echo "Falha na ligação: " . $conexao->connect_error; exit;}
    mysqli_select_db($conexao,"usuario");
    $insere = "INSERT INTO registos (Email, Nome, Password) VALUES ('$Email', '$Nome', '$Password')";
    if ($conexao->query($insere) === TRUE) {
    echo "Registo inserido com sucesso";}
    else {
    echo "Erro: " . $insere . "<br>" . $conexao->error;}
    $conexao->close();