<?php /* 6 */

if(!isset($_SESSION)){
  session_start();
}

if(!isset($_COOKIE['email'])){
  $_COOKIE['email'] = "";
}

if(!isset($_COOKIE['senha'])){
  $_COOKIE['senha'] = "";
}

//$_COOKIE['email'] = "";
//$_COOKIE['senha'] = "";

$loginemail1 = $_COOKIE['email'];
$loginsenha1 = $_COOKIE['senha'];
$scookies = "";

if ($loginemail1 == 'erro'){
  $loginemail1 = '';
}

if ($loginsenha1 == 'erro'){
  $loginsenha1 = '';
}

if(isset($_GET["vemail"])){
  $auxemail = $_SESSION['email'];
  if ($auxemail ==""){    
    echo "O campo E-MAIL não pode estar vazio.<BR>";
  }
  else{
    $loginemail1 = $_SESSION['email'];
}
}

if(isset($_GET["vsenha"])){
  $auxsenha = $_SESSION['senha'];
  if ($auxsenha ==""){    
    echo "O campo SENHA não pode estar vazio.<BR>";
  }
  else{
    $loginsenha1 = $_SESSION['senha'];
}
}

if(isset($_GET["emailval"])){
  echo "O campo e-mail deve conter um e-mail válido.<BR>";
  $loginemail1 = $_SESSION['email'];
  $loginsenha1 = $_SESSION['senha'];  
}

if(isset($_GET["senhaval"])){
  echo "O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.<BR>";
  $loginemail1 = $_SESSION['email'];
  $loginsenha1 = $_SESSION['senha'];  
}

if(isset($_GET["log_nome"])){
  echo "DADOS DE ACESSO INVÁLIDO.<BR>";
  $loginemail1 = $_SESSION['email'];
  $loginsenha1 = $_SESSION['senha'];  
}

if(isset($_GET["msg2"]))
  echo nl2br("Cadastro alterado com sucesso! \n\n");

if(isset($_GET["msg3"]))
  echo nl2br("Cadastro excluído com sucesso! \n\n");


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
          <h1>ATIVIDADE FINAL "LOGIN"</h1>
        </div>
      </div>

    </div>
  </header>

  <aside id="conteudo">

    <article>
      <div id="contatos">
        <h2>Login</h2>
        <form id="formulario" name="formulario" class="needs-validation" novalidate action="validar_usuario_login.php" method="POST">
         
          <div class="form-group row">
            <label id="labelemail" class="col-sm-2 col-form-label" for="inputemail">Email*</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" name="loginemail" id="loginemail" aria-label="loginemail" placeholder="Digite seu email" value="<?php echo $loginemail1 ?>" required>
              <div class="invalid-feedback">
                Verifique o preenchimento do campo e-mail.
              </div>
            </div>
          </div>
  
          <div class="form-group row">
            <label id="labelsenha" class="col-sm-2 col-form-label" for="inputsenha">Senha*</label>
            <div class="col-sm-10">
              <input type="password" minlength="8" class="form-control" name="loginsenha" id="loginsenha" aria-label="loginsenha" placeholder="Digite sua senha" value="<?php echo $loginsenha1 ?>" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{8,50}$).*$" required>
              <div class="invalid-feedback">
                O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.
              </div>
              <div>
                <input type="checkbox" name="checkcookies" id="checkcookies" checked>
                <label for="checkcookies">Salvar dados de acesso "COOKIES"</label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
              <input class="btn btn-primary my-1" type="submit" value="Logar" aria-label="logar" />
              <p>* Campos obrigatórios</p>
              <a href="formulario.php">Cadastrar novo usuário</a>.
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

?>      
</html>