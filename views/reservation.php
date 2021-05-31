<?php
    session_start();
    if(empty($_SESSION['fullname']))
    {     
        header("location:logIn.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../app/css/bootstrap.min.css">
    <link rel="stylesheet" href="../app/css/reservation.css">
    <title>Document</title>
</head>
<body>

  
   <nav class="navbar navbar-expand-lg fixed-top ">
	<h1>   <img id="logo" src="../app/images/logo.png"> <a class="navbar-brand" href="index">MARHABA </a></h1>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
	    <ul class="navbar-nav mr-4">
	  
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link "  href="#">Product</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="reservation">Reservez</a>
	      </li>
	     
	      <li class="nav-item">
        <a  href="../controllers/LogOut.php"><button id="logout" type="button" class="btn btn-outline-warning text-white ms-4">Log Out <?php echo $_SESSION['fullname'] ?> </button></a>	      </li>
	    </ul>
	    
	  </div>
</nav>

  <div class="container"> 

<?php
include_once '../controllers/reservation.php';
?>
<div class="forme">
<form action="" method="POST" >
<label for="start"> date:</label>
<input type="date" id="start" name="dateEntrer" value="" min="2021-01-01" max="2030-12-31">
<input type="date" id="start" name="dateSortie" value="" min="2021-01-01" max="2030-12-31">

    <label for="appartement"> Appartement</label>
    <input type="checkbox" id="apprtmnt" onclick="checkApp()"  value="Appartements">
    <div id="apart"></div>

    <label for="bunglow"> Bunglow</label>
    <input type="checkbox" id="bunglw" onclick="checkBunglow()" value="bungaloow">
    <div id="bng" ></div>

    <label for="chambre"> Chambre</label>
    <input type="checkbox" id="chmbr" onclick="checkChamb()"  value="chmb">
    <div id="chmbre"></div>
    <div class="nbLitdb"></div>
<br>
    <label>Pension </label>
    <select id="pensio"  name="pens">
      <option value="complete">Complete</option>
      <option value="sans">sans</option>
      <option value='ptDej/dej'>ptDej/dej</option> 
      <option  value='ptDej/diner'> ptDej/diner</option>
    </select>
    <div id="Demip" ></div>

      <div class="child">
        <p>Vous avez des enfants?</p>
        <input type="radio" id="sans_enfant" name="enfant" value="sansEnfant" onclick="afficher('none')">Non
        <input type="radio" id="Aenfant" name="enfant" value="avecEnfant" onclick="afficher('block')">Oui
      </div>
      <div id="enfantsExiste">
        <p>Entrez l'age des enfants moins ou egale 2</p>
<input type="number" name="nbrbaby"  id="un" ><div id="uno"></div>
<p>Entrez l'age des enfants entre 2 et 10</p>
<input type="number"  name="nbrjunior"   id="deux"><div id="dos"></div>
<p>Entrez l'age des enfants plus de 14</p>
<input type="number" name="nbrsenior"  id="trois" ><div id="tres"></div>
      
</div>
<input class="buttReserve" type="submit" value="reserver" name="reserver"/>
  </form>


  </div>
</div>
<script src="../app/js/reservation.js"></script>
</body>


</html>