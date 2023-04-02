<?php /* 14 */
if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET["msg2"])){    
    session_destroy();
    header("Location:login.php?msg2=ok");
    //echo "chegou aqui";
    }
    else{
        session_destroy();
        header("Location:login.php");
        //echo "não chegou aqui";
        //$loginemail1 = $_SESSION['email'];
  }
?>