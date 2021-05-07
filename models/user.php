<?php
include 'db.php';

class User extends Connexion
{
private	$fullname ;
private	$email ;
private	$password ;
private	$idrole ;
        public function insertion()
	{

		if (isset($_POST['submit'])) {
			if (isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password'])) {
				if (!empty($_POST['fullname']) && !empty($_POST['email']) && !empty($_POST['password'])) {
	
					
					$fullname = $_POST['fullname'];
					$email = $_POST['email'];
					$password = $_POST['password'];
					$idrole = 2 ;

					$requet = $this->getCon()->prepare("INSERT INTO users (fullname,email,password,idrole) VALUES ('$fullname','$email','$password','$idrole')");
					$requet->execute(array("$fullname","$email","$password"));

                        echo "<script type=\"text/javascript\"> alert(' les données sont inséré');window.location='logIn.php';</script>";
					}
                }
            }
        }


public function authentification(){

	if(isset($_POST['connexion']))
	{
		if(empty($_POST['email']) || empty($_POST['password']))
		   {
				header("location:logIn.php?Empty= Please Fill in the Blanks");
		   }
		   else
		   {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query1	 = $this->getCon()->prepare ("SELECT r.*,u.* from users u, role r where r.idR=u.idrole and u.email='".$email."' and u.password='".$password."'");
	$result1=$query1->execute();
	$result1=$query1->fetch(PDO::FETCH_ASSOC); 
	// header('location:profile.php');

	if( $result1['sonrole'] == "client")
		 {
			session_start(); 
			$_SESSION['id']=$result1['id'];
			$_SESSION['fullname']=$result1['fullname'];

			header('Location:profile.php');
		 }   
		 else if($result1['sonrole'] == "admin")
		 { 
			session_start();
			$_SESSION['id']=$result1['id'];
			header('Location:profilAdmin.php');
		 }
		 else if(empty($_SESSION['id'])){
		 header("location:logIn.php");
		  }
			else
		{
			header('location:logIn.php?Invalid= Please Enter Correct User Name and Password ');
		}
	}
	}
	


}







	}
?>



