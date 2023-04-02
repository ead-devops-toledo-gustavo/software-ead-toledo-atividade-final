<?php /* 4 */
require("conecta.php");

if(!isset($_SESSION)){
    session_start();
  }

$nome = $_SESSION['nome_usuario'];
$email = $_SESSION['email_usuario'];
$senha = $_SESSION['senha_usuario'];
$confsenha = $_SESSION['conf_senha_usuario'];


$hashsenha = trim(ltrim(password_hash($senha, algo:PASSWORD_DEFAULT)));

try {
    $stmt = $conn->prepare("INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `hashsenha`) VALUES (NULL, :nome, :email, :senha, :hashsenha)");
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("email",$email);
    $stmt->bindParam("senha",$senha);
    $stmt->bindParam("hashsenha",$hashsenha);
       
    if($stmt->execute()){
        //header("Location:formulario.php?msg1=ok");
        //header("Location:formulario.php?msg1=ok&nome=$nome&email=$email&senha=$senha&status=ATIVO");
        header("Location:formulario.php?msg1=ok");
        }
        }
        catch(PDOException $e) {
	    $e->getMessage();    
    }
$conn = null;
$stmt = null;
?>
