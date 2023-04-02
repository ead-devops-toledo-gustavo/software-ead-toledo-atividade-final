<?php /* 2 */
require("conecta.php");

$nome = $_POST["inputnome"];
$email = $_POST["inputemail"];
$senha = $_POST["inputsenha"];
$confsenha = $_POST["inputconfsenha"];

if(!isset($_SESSION)){
    session_start();
}

$_SESSION['nome_usuario'] = $nome;
$_SESSION['email_usuario'] = $email;
$_SESSION['senha_usuario'] = $senha;
$_SESSION['conf_senha_usuario'] = $confsenha;


//funções
function validar_campo_vazio($nome,$email,$senha,$confsenha){
    $vazio = false;
    if ($nome == "" || $email == "" || $senha == "" || $confsenha == ""){
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

function validar_email($email){  
    $valido = false;
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        $valido = true;
    }
    return $valido;
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

//Validar se a senha e a confirmação de senha são iguais
if (isIguais($senha,$confsenha) == false){
    
    header("Location:formulario.php?senhaval1=erro");
}
    
//Validar se a senha é válida
if (validar_senha($senha) == false){
    //header("Location:formulario.php?nome=$nome&email=$email&senhaval=$senha&confsenha=$confsenha");
    header("Location:formulario.php?&senhaval=erro");
}

//Validar se o E-MAIL é valido
if (validar_email($email) == false){
    //header("Location:formulario.php?nome=$nome&emailval=$email&senha=$senha&confsenha=$confsenha");
    header("Location:formulario.php?emailval=erro");
}

//Validar se o NOME é MENOR que 3 ou MAIOR que 50 caracteres
if (validar_tamanho_nome($nome) == true){
    //header("Location:formulario.php?nometam=$nome&email=$email&senha=$senha&confsenha=$confsenha");
    header("Location:formulario.php?nometam=erro");
}

//Validar se existe campo vazio
if (validar_campo_vazio($nome,$email,$senha,$confsenha) == true){

    header("Location:formulario.php?vnome=erro&vemail=erro&vsenha=erro&vconfsenha=erro");
}

//Validar se o cliente esta cadastrado no sistema.
if (isIguais($senha,$confsenha) == true && 
    validar_senha($senha) == true &&  
    validar_email($email) == true && 
    validar_tamanho_nome($nome) == false && 
    validar_campo_vazio($nome,$email,$senha,$confsenha) == false ) {
        header("Location:validar_usuario.php?nome=$nome&email=$email&senha=$senha&confsenha=$confsenha");
    }
?>
