<?php /* 8 */
require('autentica.php');
/*
$nome = $_GET["nome"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$hashsenha = $_GET["hashsenha"];
$status = $_GET["status"];
*/

//require("autentica.php");

if(!isset($_SESSION)){
  session_start();
}

$id = $_SESSION['id_usuario'];
$nome = $_SESSION['nome_usuario'];
$email= $_SESSION['email_usuario'];
$senha = $_SESSION['senha_usuario'];
$hashsenha = $_SESSION['hashsenha_usuario'];

/*
echo "$id <br>";
echo "$nome <br>";
echo "$email <br>";
echo "$senha <br>";
echo "$hashsenha <br>";
echo "$status <br>";
echo "LOGADO";
*/


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="home">Página Principal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<style>
    .logotipo {
      max-width: 100px;
    }
    
    a:focus,a:hover {
      border: 1px solid #F00;
    }
  </style>

</head>

<body class="container mx-auto bg-light mt-1 w-90">
  <header id="topo">
    <div>

      <div class="row">
        <div class="col-sm-3">
          <img src="imagens/logo.png" alt="Logotipo da empresa" class="logotipo">
        </div>
        <div class="col-sm-9 titulo">
          <h1>ATIVIDADE FINAL "PERFIL"</h1>
        </div>
      </div>

    </div>
  </header>
  <article>
    <div id="contatos">
      <h2>Bem vindo(a): <?php print "$nome <br><br>"; ?></h2>
      <h3>Dados Cadastrais:<br></h3>
        <?php
         echo "Nome: $nome <br>"; 
         echo "E-mail: $email <br>"; 
         echo "Senha: $senha <br>"; 
         echo "Hash Senha: $hashsenha <br>"; 
        ?>
      </p>

      <h4><br>Funções:<br></h4>
      <a href="alterar.php">Alterar Dados (Nome e Senha)</a><br>
      <a href="excluir.php">Excluir Cadastro</a><br>
      <a href="sair.php">Sair</a><br>
            
  <footer id="rodape" class="row">
    <div class="col-12">
      <p><br><br>Copyright © 2022</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <noscript>Atualize seu navegador</noscript>
  </body>
</html>