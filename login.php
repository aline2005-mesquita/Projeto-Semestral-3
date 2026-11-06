<?php

require_once "conectar.php";

$pagamento = 'nao';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$cpf = $_POST['cpf'];
$telefone = $_POST['tel'];

$matricula = "INSERT INTO alunos (nome, idade, cpf, telefone, pagamento) VALUES ('$nome', '$idade', '$cpf', '$telefone', '$pagamento')";

mysqli_query($mysqli, $matricula);

mysqli_close($mysqli);
?>