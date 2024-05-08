<?php
session_start();
require './conexao.php';

if (isset($_POST['criar_chamado'])){
    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));	
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));	
    $setor = mysqli_real_escape_string($conexao, trim($_POST['setor']));	
    $data_incidente = mysqli_real_escape_string($conexao, trim($_POST['data_incidente']));	
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

    $sql = "INSERT INTO chamados (nome, email, setor, data_incidente, descricao) VALUES ('$nome','$email', '$setor', '$data_incidente','$descricao')";

    mysqli_query($conexao, $sql);
}

?>