<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$celular = $_POST['celular'];

$host = "localhost";
$db = "aulaphp";
$admin = "root";
$password = "";

$conexao = new PDO("mysql:host=$host:3307;dbname=$db", $admin, $password);

$sql = "INSERT INTO contatos (nome,email,celular) VALUES (:nome,:email,:celular)" ;

$stmt = $conexao->prepare($sql);

$stmt->bindValue(':nome',$nome);
$stmt->bindValue(':email',$email);
$stmt->bindValue(':celular',$celular);

$stmt->execute();

header("Location: sucesso.html");
exit;
?>
