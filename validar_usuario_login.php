<?php /* 7 */
require('autentica.php');

if(!isset($_SESSION)){
  session_start();
}

$_SESSION['email'] = $_POST["loginemail"];
$_SESSION['senha'] = $_POST["loginsenha"];

//echo $_SESSION['email'],$_SESSION['senha'];

$email = $_POST["loginemail"];
$senha = $_POST["loginsenha"];

//$_SESSION['hashsenha'] = trim(ltrim(password_hash($senha, algo:PASSWORD_DEFAULT)));

if(isset($_POST["checkcookies"])){
  //$scookies = $_POST["checkcookies"];
  setcookie('email', $email, time()+120); //coloquei 2 minutos para conseguir testar.
  setcookie('senha', $senha, time()+120);
}
else{
  //$scookies = "";
  setcookie('email', 'erro');
  setcookie('senha', 'erro');
 
}

/*
echo "E-mail: ".$email."<br>";
echo "Senha: ".$senha."<br>";
echo "Cookies: ".$scookies."<br>";
*/

//funções
function validar_campo_vazio($email,$senha){
  $vazio = false;
  if ($email == "" || $senha == ""){
      $vazio = true;
      return $vazio;
  }
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
//Validar se a senha é válida
if (validar_senha($senha) == false){
  header("Location:login.php?senhaval=erro");
}

//Validar se o E-MAIL é valido
if (validar_email($email) == false){
  header("Location:login.php?&emailval=erro");
}

//Validar se existe campo vazio
if (validar_campo_vazio($email,$senha) == true){
  header("Location:login.php?vemail=erro&vsenha=erro");
}

//Validar se o cliente esta cadastrado no sistema.
if (validar_senha($senha) == true &&  
    validar_email($email) == true && 
    validar_campo_vazio($email,$senha) == false ) {
      //$hashsenha = trim(ltrim(password_hash($senha, algo:PASSWORD_DEFAULT)));  // não consegui validar pelo HASH da senha, cada hora gera um HASH diferente.
        require("conecta.php");        
        try {          
        $stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = :email AND `senha` = :senha");
        //$stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = :email AND `hashsenha` = :hashsenha");
        $stmt->bindParam("email",$email); 
        $stmt->bindParam("senha",$senha);
        //$stmt->bindParam("hashsenha",$hashsenha);
        $stmt->execute();
    
        $res = $stmt->fetchAll();

        if(count($res) > 0) {
          foreach ($res as $row) {
            /*
            $nome = $row ['nome'];
            $email = $row ['email'];
            $senha = $row ['senha'];
            $hashsenha = $row ['hashsenha'];
            //$status = $row ['status'];
            */
            $_SESSION['id_usuario'] = $row ['id'];
            $_SESSION['nome_usuario'] = $row ['nome'];
            $_SESSION['email_usuario'] = $row ['email'];
            $_SESSION['senha_usuario'] = $row ['senha'];
            $_SESSION['hashsenha_usuario'] = $row ['hashsenha'];
            
            header("Location:perfil.php");
          }

          /*
          echo "$banco_nome <br>";
          echo "$banco_email <br>";
          echo "$banco_senha <br>";
          echo "LOGADO";
          */
          
          //header("Location:perfil.php?nome=$nome&email=$email&senha=$senha&hashsenha=$hashsenha&status=$status");			
      }
        else {
          setcookie('email', 'erro');
          setcookie('senha', 'erro');        
          header("Location:login.php?log_nome=erro");			
          //header("Location:login.php?log_nome=$email&senha=$senha");			
          
          //echo "DADOS DE ACESSO INVÁLIDO <br>";
          //echo "$email <br>";
          //echo "$senha <BR>";
          //echo "$hashsenha <BR>";
      }

    } catch(PDOException $e) {
      //echo $e->getMessage(); // eliminar esse echo quando for para produção.
    }
  }
    
    $conn = null;
?>
