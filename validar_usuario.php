<?php /* 3 */
require("conecta.php");

if(!isset($_SESSION)){
  session_start();
}

$email = $_SESSION['email_usuario'];

/*
$nome = $_GET["nome"];
$email = $_GET["email"];
$senha = $_GET["senha"];
$confsenha = $_GET["confsenha"];
*/

try {
  $stmt = $conn->prepare("SELECT * FROM `usuarios` WHERE `email` = :email");
	$stmt->bindParam("email",$email);
	$stmt->execute();

  $res = $stmt->fetchAll();
  
	if(count($res) > 0) {
      //header("Location:formulario.php?nome=$nome&emailcadastrado=$email&senha=$senha&confsenha=$confsenha");			
      header("Location:formulario.php?emailcadastrado=erro");			
      //echo "Usuário já cadastrado no sistema ";
    }
    else {
      //header("Location:cadastrar_usuario.php?nome=$nome&email=$email&senha=$senha&confsenha=$confsenha");
      header("Location:cadastrar_usuario.php?cad=ok");
      //echo "Usuário não cadastrado";
  }

} catch(PDOException $e) {
	//echo $e->getMessage(); // eliminar esse echo quando for para produção.
}
$conn = null;

?>
