﻿<?php
    include_once ('conexao.php');
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $result_msg_contato = "INSERT INTO usuarios(nome, email, senha, dat) VALUES ('$nome', '$email', '$senha', NOW())";
	$resultado_msg_contato = mysqli_query($conn, $result_msg_contato)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body style="height: 1500px;"> 

    <title>Espaço IntegrarES</title>
    
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #d3ebf3">
      
        <a class="navbar-brand" href="index.php">
          <img src="C:\Users\CARLOS\Desktop\html\Logo.png" alt="" style="width:70px;height:70px;"> <!-- Alterar o caminho da pasta IMAGENS -->
        </a>
     
      
                               
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="quemsomos.html">Quem somos <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="especialidades.html">Especialidades <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="convenios.html">Convênios <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="trabalheconosco.html">Trabalhe conosco <span class="sr-only">(página atual)</span></a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="contato.html">Contato <span class="sr-only">(página atual)</span></a>
                </li>
              </ul>

              <form class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Usuário
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Entrar</a>
                  <a class="dropdown-item" href="#">Cadastrar</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Sair</a>
                </div>
              </form>

            </div>
      
          </div>
          </nav>
   





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>