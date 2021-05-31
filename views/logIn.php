<?php
require_once ("../models/db.php");
    session_start();
    if(!empty($_SESSION['fullname']))
    {     
        header("location:index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../app/css/bootstrap.min.css">
<link rel="stylesheet" href="../app/css/StyleLogIn.css">
    <title>LogIn-Marhaba</title>
</head>
<body>
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3"> <img id="logo" src="../app/images/logo.png"> </div>
                            <h3 class="mb-5 text-center heading">MARHABA</h3>
                            <h6 class="msg-info">Please login to your account</h6>
<!-- form conexion -->
                           <form method="post" action="../controllers/Login.php" >
                            <div class="form-group"> <label class="form-control-label text-muted">Email</label> <input type="text" name="email" placeholder="email" class="form-control">
                            </div>
                            <div class="form-group"> <label class="form-control-label text-muted">Password</label> <input type="password" name="password" placeholder="Mot de passe" class="form-control">
                            </div>
                            <div class="row justify-content-center my-3 px-3"> <button type="submit" name="connexion" class="btn-block btn-color">Login to Marhaba</button> </div>
                            </form>
 <!-- endd form conexion -->

                            <div class="row justify-content-center my-2"> <a href="#"><small class="text-muted">Forgot Password?</small></a> </div>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                              Don't have an account?<button data-toggle="modal" data-target="#myModal" class="btn btn-white ml-2">Create new</button>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">We are more than just a company</h3> <small class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- register -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>      </div>
      <div class="modal-body">
      <div class="card-body bg-light">
			      	<form method="post" action="../Controllers/singup.php" class="mr-1">
			      		<div class="form-group">
				      		<input type="text" name="fullname" placeholder="Nom & Prénom" class="form-control">
				      	</div>
			      		<div class="form-group">
				      		<input type="text" name="email" placeholder="email" class="form-control">
				      	</div>
				      	<div class="form-group">
				      		<input type="password" name="password" placeholder="Mot de passe" class="form-control">
				      	</div>
			      		<button type="submit" name="submit" class="btn btn-sm btn-primary">Inscription</button>
			      	</form>
                      <!-- end register -->

				</div>
      </div>

    </div>

  </div>
</div>


    <!-- js -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>