<?php  /* 10 */

if(!isset($_SESSION)){
  session_start();
}

$_SESSION['new_nome'] = $_POST["inputnome"];
$_SESSION['new_senha'] = $_POST["inputsenha"];
$_SESSION['new_conf_senha'] = $_POST["inputconfsenha"];

$email = $_SESSION['email_usuario'];

$nome = $_SESSION['new_nome'];
$senha = $_SESSION['new_senha'];
$confsenha = $_SESSION['new_conf_senha'];

//funções
function validar_campo_vazio($nome,$senha,$confsenha){
    $vazio = false;
    if ($nome == "" || $senha == "" || $confsenha ==""){
        $vazio = true;
        return $vazio;
    }
  } 

  function validar_tamanho_nome($nome){
    $aux = false;
    if (strlen($nome) <= 3 or strlen($nome) >= 50){
        $aux = true;
    }    
    return $aux;
}

function validar_senha($senha) {
    $regra = '/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z\d].\S{6,36}$/';
    $valido = false;
    if (preg_match($regra, $senha)){
        $valido = true;
    }  
    return $valido;
}

function isIguais($senha,$confsenha){  
    $iguais = true;
    if($senha != $confsenha){
      $iguais = false;
    }
    return $iguais;
}

if (isIguais($senha,$confsenha) == false){
  header("Location:alterar.php?senhaval1=erro");
}
    
//Validar se a senha é válida
if (validar_senha($senha) == false){  
  header("Location:alterar.php?senhaval=erro");  
  //header("Location:alterar.php?nome=$nome&email=$email&senhaval=$senha&confsenha=$confsenha");
}

//Validar se o NOME é MENOR que 3 ou MAIOR que 50 caracteres
if (validar_tamanho_nome($nome) == true){
  header("Location:alterar.php?nometam=erro");
}


//Validar se existe campo vazio
if (validar_campo_vazio($nome,$senha,$confsenha) == true){
  header("Location:alterar.php?vnome=erro&vsenha=erro&vconfsenha=erro");
}

if (isIguais($senha,$confsenha) == true && 
  validar_senha($senha) == true &&  
  validar_tamanho_nome($nome) == false && 
  validar_campo_vazio($nome,$senha,$confsenha) == false ) {
    require("conecta.php");    
    header("Location:alteracao.php");             
}

?>