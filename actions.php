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
    
    if (mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = 'Chamado criado com sucesso!';
        header('Location: chamados.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Chamado não foi criado';
        header("Location: chamados.php");
        exit;
    }
}

if (isset($_POST['update_chamado'])){
    $chamado_id = mysqli_real_escape_string($conexao, $_POST['chamado_id']);

    $nome = mysqli_real_escape_string($conexao, trim($_POST['nome']));	
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));	
    $setor = mysqli_real_escape_string($conexao, trim($_POST['setor']));	
    $data_incidente = mysqli_real_escape_string($conexao, trim($_POST['data_incidente']));	
    $descricao = mysqli_real_escape_string($conexao, trim($_POST['descricao']));

    $sql = "UPDATE chamados SET nome='$nome', email='$email', setor='$setor', data_incidente='$data_incidente', descricao='$descricao' WHERE id='$chamado_id'";

    mysqli_query($conexao, $sql);
    
    if (mysqli_affected_rows($conexao) > 0){
        $_SESSION['mensagem'] = 'Chamado atualizado com sucesso!';
        header('Location: chamados.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Chamado não foi atualizado';
        header("Location: chamados.php");
        exit;
    }
}

if (isset($_POST['delete_chamado'])){
    $chamado_id = mysqli_real_escape_string($conexao, $_POST['delete_chamado']);
    
    $sql = "DELETE FROM chamados WHERE id = '$chamado_id'";

    mysqli_query($conexao, $sql);

    if (mysqli_affected_rows($conexao) > 0) {
        $_SESSION['mensagem'] = 'Chamado deletado com sucesso';
        header('Location: chamados.php');
        exit;
    } else {
        $_SESSION['mensagem'] = 'Chamado não foi deletado';
        header('Location: chamados.php');
        exit;
    }
}	
?>