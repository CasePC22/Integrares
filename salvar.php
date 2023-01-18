<?php
    include_once ('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $result_msg_contato = "INSERT INTO usuarios(nome, email, senha, dat) VALUES ('$nome', '$email', '$senha', NOW())";
	$resultado_msg_contato = mysqli_query($conn, $result_msg_contato)
?>