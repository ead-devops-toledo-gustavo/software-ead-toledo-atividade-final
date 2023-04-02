<?php /* 1 */

if(!isset($_SESSION)){
  session_start();
}

if(!isset($_SESSION['nome_usuario'])){
  $_SESSION['nome_usuario'] = "";
}

if(!isset($_SESSION['email_usuario'])){
  $_SESSION['email_usuario'] = "";
}

if(!isset($_SESSION['senha_usuario'])){
  $_SESSION['senha_usuario'] = "";
}

if(!isset($_SESSION['conf_senha_usuario'])){
  $_SESSION['conf_senha_usuario'] = "";
}


$snome = $_SESSION['nome_usuario'];
$semail = $_SESSION['email_usuario'];
$ssenha = $_SESSION['senha_usuario'];
$sconfsenha = $_SESSION['conf_senha_usuario'];

$auxnome1 = "";
$auxemail1 = "";
$auxsenha1 = "";
$auxconfsenha1 = "";

if(isset($_GET["msg1"])){
  echo "Usuário cadastrado com sucesso!";
}

if(isset($_GET["vnome"])){
  $auxnome = $_SESSION['nome_usuario'];
  if ($auxnome == ""){
    echo "O campo NOME não pode estar vazio.<BR>";
    $auxnome1 = "";
  }
  else{
    $auxnome1 = $_SESSION['nome_usuario'];
}

}

if(isset($_GET["vemail"])){
  $auxemail = $_SESSION['email_usuario'];
  if ($auxemail ==""){
    echo "O campo E-MAIL não pode estar vazio.<BR>";
    $auxemail1 = "";
  }
  else{
    $auxemail1 = $_SESSION['email_usuario'];
}
}

if(isset($_GET["vsenha"])){
  $auxsenha = $_SESSION['senha_usuario'];
  if ($auxsenha ==""){
    $auxsenha1 = "";
    echo "O campo SENHA não pode estar vazio.<BR>";
  }
  else{
    $auxsenha1 = $_SESSION['senha_usuario'];
}
}

if(isset($_GET["vconfsenha"])){
  $auxconfsenha = $_SESSION['conf_senha_usuario'];
  if ($auxconfsenha ==""){
    $auxconfsenha1 = "";
    echo "O campo CONFIRMAÇÃO DE SENHA não pode estar vazio.<BR>";
  }
  else{
    $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}
}

if(isset($_GET["nometam"])){
  echo "O campo NOME deve conter entre 3 e 50 caracteres.<BR>";
  $auxnome1 = $_SESSION['nome_usuario'];
  $auxemail1 = $_SESSION['email_usuario'];
  $auxsenha1 = $_SESSION['senha_usuario'];
  $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}

if(isset($_GET["emailval"])){
  echo "O campo e-mail deve conter um e-mail válido.<BR>";
  $auxnome1 = $_SESSION['nome_usuario'];
  $auxemail1 = $_SESSION['email_usuario'];
  $auxsenha1 = $_SESSION['senha_usuario'];
  $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}

if(isset($_GET["senhaval"])){
  echo "O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.<BR>";
  $auxnome1 = $_SESSION['nome_usuario'];
  $auxemail1 = $_SESSION['email_usuario'];
  $auxsenha1 = $_SESSION['senha_usuario'];
  $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}

if(isset($_GET["senhaval1"])){
  echo "O campo SENHA não é igual ao campo CONFIRMAÇÃO DE SENHA.<BR>";
  $auxnome1 = $_SESSION['nome_usuario'];
  $auxemail1 = $_SESSION['email_usuario'];
  $auxsenha1 = $_SESSION['senha_usuario'];
  $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}

if(isset($_GET["emailcadastrado"])){
  echo "Este e-mail (usuário) já esta cadastrado no sistema.<BR>";
  $auxnome1 = $_SESSION['nome_usuario'];
  $auxemail1 = $_SESSION['email_usuario'];
  $auxsenha1 = $_SESSION['senha_usuario'];
  $auxconfsenha1 = $_SESSION['conf_senha_usuario'];
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="home">Formulário de Contato</title>
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
        <h1>ATIVIDADE FINAL "CADASTRO"</h1>
        </div>
      </div>

    </div>
  </header>

  <aside id="conteudo">

    <article>
      <div id="contatos">
        <h2>Formulário de Cadastro</h2>
        <form id="formulario" name="formulario" class="needs-validation" novalidate action="recebe_dados.php" method="POST">
         
          
          <div class="form-group row">
            <label id="labelnome" class="col-sm-2 col-form-label" for="inputnome">Nome*</label>
            <div class="col-sm-10">
              <input type="text" minlength="3" maxlength="50" class="form-control" name="inputnome" id="inputnome" aria-label="inputnome" value="<?php echo $auxnome1?>" placeholder="Digite seu nome" required autofocus>
              <div class="invalid-feedback">
               O campo nome deve conter entre 3 e 50 caracteres.
              </div>
            </div>
          </div>
          
          <div class="form-group row">
            <label id="labelemail" class="col-sm-2 col-form-label" for="inputemail">Email*</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="inputemail" id="inputemail" aria-label="inputemail" placeholder="Digite seu email" value="<?php echo $auxemail1 ?>" required>
              <div class="invalid-feedback">
                Verifique o preenchimento do campo e-mail.
              </div>
            </div>
          </div>
  
          <div class="form-group row">
            <label id="labelsenha" class="col-sm-2 col-form-label" for="inputsenha">Senha*</label>
            <div class="col-sm-10">
              <input type="password" minlength="8" class="form-control" name="inputsenha" id="inputsenha" aria-label="inputsenha" placeholder="Digite sua senha" value="<?php echo $auxsenha1 ?>" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{8,50}$).*$" required>
              <div class="invalid-feedback">
                O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label id="labelconfsenha" class="col-sm-2 col-form-label" for="inputconfsenha">Confirmação Senha*</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="inputconfsenha" id="inputconfsenha" aria-label="inputconfsenha" placeholder="Confirme sua senha" value="<?php echo $auxconfsenha1 ?>" data-match="#inputsenha" data-match-error="Atenção! As senhas não estão iguais." required>
              <div class="invalid-feedback">
                Campo confirmação de senha e o campo senha não conferem.
              <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
              <input class="btn btn-primary my-1" type="submit" value="Enviar" aria-label="Enviar" />
              <p>* Campos obrigatórios</p>
              <a href="login.php">Voltar página de login</a>.
            </div>
          </div>
        </form>

        <script>        
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              var forms = document.getElementsByClassName('needs-validation');
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          
          var password = document.getElementById("inputsenha"), confirm_password = document.getElementById("inputconfsenha");
          function validatePassword(){
          if(password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Senhas diferentesss!");
          } else {confirm_password.setCustomValidity('');
          }
          }
          password.onchange = validatePassword;
          confirm_password.onkeyup = validatePassword;

        </script>        
      </div>
    </article>
  </aside>

  <footer id="rodape" class="row">
    <div class="col-12">
      <p>Copyright © 2022</p>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <noscript>Atualize seu navegador</noscript>
  </body>

<?php
require("conecta.php");

if(isset($_GET["msg1"])){
  $nome = $_SESSION['nome_usuario'];
  $email = $_SESSION['email_usuario'];
  $senha = $_SESSION['senha_usuario'];
    
  echo nl2br("<b>\n\n Os dados abaixo foram recebidos com sucesso! </b>\n\n");
  echo nl2br("Nome: $nome \n");
  echo nl2br("E-mail: $email \n");
  echo nl2br("Senha: $senha \n\n");

  echo nl2br("<b>Relação de usuários cadastrados na base </b> \n\n");    

  try {    
    $stmt = $conn->prepare("SELECT * FROM `usuarios`");
    $stmt->execute();
    $res = $stmt->fetchAll();
    
    foreach ($res as $row) {
      $nome1 = $row['nome'];
      $email1 = $row['email'];
      $senha1 = $row['senha'];
      $hashsenha = $row['hashsenha'];
      echo nl2br("Nome: $nome1 \n E-mail: $email1 \n Senha: $senha1 \n Senha Hash: $hashsenha \n\n");
    }
    
    } catch(PDOException $e) {
      $e->getMessage();
    }
  
  }

?>      
</html>