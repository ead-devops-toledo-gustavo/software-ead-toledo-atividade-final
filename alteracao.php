<?php /* 11 */
require("conecta.php");

if(!isset($_SESSION)){
    session_start();
}
$nome = $_SESSION['new_nome'];
$senha = $_SESSION['new_senha'];
$email = $_SESSION['email_usuario'];

$hashsenha = trim(ltrim(password_hash($senha, algo:PASSWORD_DEFAULT)));

/*
echo "$nome <br>";
echo "$senha <br>";
echo "$email <br>";
echo "$hashsenha <br><br>";
*/


try {
    $stmt = $conn->prepare('UPDATE usuarios SET nome = :nome, senha = :senha, hashsenha = :hashsenha  WHERE email = :email');
    $stmt->bindParam("nome",$nome);
    $stmt->bindParam("senha",$senha);
    $stmt->bindParam("email",$email);
    $stmt->bindParam("hashsenha",$hashsenha);
       
    if($stmt->execute()){
        setcookie('email', 'erro');
        setcookie('senha', 'erro');      
        header("Location:sair.php?msg2=ok");
        //header("Location:login.php?msg2=ok");
        }
    }
        catch(PDOException $e) {
	    //echo $e->getMessage();    
    }
$conn = null;
$stmt = null;

?>