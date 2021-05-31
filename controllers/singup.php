<?php
include "../models/singUp.php";
$signupp=new Signup();

if (isset($_POST['submit']))
 {
    $idrole=2;
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $count=$signupp->UserExist($email);
    if($count > 0){
        header("location:../views/logIn.php?ExistDeja");
    }
    else{
    $signupp->register($email,$password,$fullname,$idrole);
    echo "<script type=\"text/javascript\"> alert(' les données sont inséré');window.location='../views/logIn.php?uploadSuccefull';</script>";

    }        
}
?>