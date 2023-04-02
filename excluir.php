<?php /* 12 */
require("conecta.php");

if(!isset($_SESSION)){
    session_start();    
    $email = $_SESSION['email_usuario'];
}

/*
echo "$email <br>";
*/

try {
    $stmt = $conn->prepare('DELETE FROM usuarios WHERE email = :email');
    $stmt->bindParam("email",$email);
       
    if($stmt->execute()){
        //echo 'deu certo';
        setcookie('email', 'erro');
        setcookie('senha', 'erro');      
        session_destroy();
        header("Location:login.php?msg3=ok");
        }
    }
        catch(PDOException $e) {
	    //echo $e->getMessage();    
    }
$conn = null;
$stmt = null;

?>