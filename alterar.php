<?php /* 9 */

$nome1 = "";
$senha1 = "";
$confsenha1 = "";

if(!isset($_SESSION)){  
  session_start();
  }

$_SESSION['nome_usuario'] = "";
//$_SESSION['new_senha'] = "";

$nome = $_SESSION['nome_usuario'];
//$email= $_SESSION['email_usuario'];
//$senha1 = $_SESSION['new_senha'];
//$confsenha1 = $_SESSION['new_conf_senha'];

/*
if(isset($_GET["nome"])){
    $nome = $_GET["nome"];
}

if(isset($_GET["email"])){
    $email = $_GET["email"];
    function dados_globais() {
      $GLOBALS["email"];
  }
}

if(isset($_GET["senha"])){
    $senha = $_GET["senha"];
    $confsenha = $_GET["senha"];
}
*/

if(isset($_GET["vnome"])){
  $nome1 = $_SESSION['new_nome'];
  if ($nome1 == ""){

    echo "O campo NOME não pode estar vazio.<BR>";
  }
}

if(isset($_GET["vsenha"])){
  $senha1 = $_SESSION['new_senha'];
  if ($senha1 ==""){    
    echo "O campo SENHA não pode estar vazio.<BR>";
  }
}

if(isset($_GET["vconfsenha"])){
  $confsenha1 = $_SESSION['new_conf_senha'];
  if ($confsenha1 ==""){
    echo "O campo CONFIRMAÇÃO DE SENHA não pode estar vazio.<BR>";
  }
}

if(isset($_GET["nometam"])){
    echo "O campo NOME deve conter entre 3 e 50 caracteres.<BR>";
    $nome1 = $_SESSION['new_nome'];
    $senha1 = $_SESSION['new_senha'];
    $confsenha1 = $_SESSION["new_conf_senha"]; 
  }

  if(isset($_GET["senhaval"])){
    echo "O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.<BR>";
    $nome1 = $_SESSION['new_nome'];
    $senha1 = $_SESSION['new_senha'];
    $confsenha1 = $_SESSION["new_conf_senha"]; 
  }
  
  if(isset($_GET["senhaval1"])){
    echo "O campo SENHA não é igual ao campo CONFIRMAÇÃO DE SENHA.<BR>";
    $nome1 = $_SESSION['new_nome'];
    $senha1 = $_SESSION['new_senha'];
    $confsenha1 = $_SESSION["new_conf_senha"]; 
  }

/*
echo "Nome: ".$nome."<br>";
echo "E-mail: ".$email."<br>";
echo "Senha: ".$senha."<br>";
echo "Confirmação de Senha: ".$confsenha."<br>";
*/

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title id="home">Formulário de Alteração Cadastral</title>
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
          <h1>ATIVIDADE FINAL "ALTERAÇÃO CADASTRAL"</h1>
        </div>
      </div>

    </div>
  </header>

  <aside id="conteudo">

    <article>        
    <h2>Perfil do(a): <?php print "$nome <br><br>"; ?></h2>
        <form id="formulario" name="formulario" class="needs-validation" novalidate action="validar_alteracao.php" method="POST">

        <div class="form-group row">
            <label id="labelnome" class="col-sm-2 col-form-label" for="inputnome">Nome*</label>
            <div class="col-sm-10">
              <input type="text" minlength="3" maxlength="50" class="form-control" name="inputnome" id="inputnome" aria-label="inputnome" value="<?php echo $nome1?>" placeholder="Digite o novo nome" required autofocus>
              <div class="invalid-feedback">
               O campo nome deve conter entre 3 e 50 caracteres.
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label id="labelsenha" class="col-sm-2 col-form-label" for="inputsenha">Senha*</label>
            <div class="col-sm-10">
              <input type="password" minlength="8" class="form-control" name="inputsenha" id="inputsenha" aria-label="inputsenha" placeholder="Digite a nova senha" value="<?php echo $senha1?>" pattern="(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\W+)(?=^.{8,50}$).*$" required>
              <div class="invalid-feedback">
                O campo senha deve conter no mínimo 8 caracteres com letras maiúsculas e minúsculas, números, caracteres especiais e não conter sequências.
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label id="labelconfsenha" class="col-sm-2 col-form-label" for="inputconfsenha">Confirmação Senha*</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="inputconfsenha" id="inputconfsenha" aria-label="inputconfsenha" placeholder="Confirme a nova senha" value="<?php echo $confsenha1?>" data-match="#inputsenha" data-match-error="Atenção! As senhas não estão iguais." required>
              <div class="invalid-feedback">
                Campo confirmação de senha e o campo senha não conferem.
              <div class="help-block with-errors"></div>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
              <input class="btn btn-primary my-1" type="submit" value="Alterar" aria-label="logar" />
              <p>* Campos obrigatórios</p>
              <a href="perfil.php">Voltar<br></a>             
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