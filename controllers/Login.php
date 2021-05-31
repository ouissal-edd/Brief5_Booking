<?php
include "../models/Singnin.php";
$signin=new signin();

if (isset($_POST['connexion']))
 {

   $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $user = $signin->login($email,$password);   
    if ($user =="client"){
       header("location:../views/reservation.php"); 
    }
    else if($user =="admin"){
       header("location:../views/profilAdmin.php"); 
    } 
    else {  
        echo "<script>alert(\"l'email ou le mot de passe n'est pas correct\")</script>";  
        
    }        
}
?>