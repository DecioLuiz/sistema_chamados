<!-- Conexão com o Banco de dados.php -->
<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASSWORD', 'root1234');
define('DB', 'chamados');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die ('Não foi possível conectar');

?>