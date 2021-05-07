<!DOCTYPE html>
<html lang="en">
<head>
	<title>Marhaba</title>
	 <!--  bootstrap css file -->

      <link rel="stylesheet" type="text/css" href="../app/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../app/css/main.css">

</head>
<body>
  <!-- navbar -->
<!-- bg-light :background du nav  -->
   <!-- navbar-light :enleve la couleur bleu du content  -->
   <!-- navbar-expand-lg : elle enleve le style du responsive et met les lien comme nav normale  -->
   <!-- navbar : pour prendre un style navbar et aligner tt ce qui est dedans -->
   <!-- container-fluid : est la largeur: 100%  -->
   <!-- navbar-brand:logo -->
   <!-- navbar-toggler .collapse et .navbar-collapse vont nous permettre de changer l’apparence de notre barre de navigation en fonction de la taille de la fenêtre pour proposer une meilleure ergonomie. -->
  <nav class="navbar navbar-expand-lg fixed-top ">
	<h1>   <img id="logo" src="../app/images/logo.png"> <a class="navbar-brand" href="#">MARHABA </a></h1>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse " id="navbarSupportedContent">
		  <!-- navbar-nav pour le menu de navigation -->
		  <!-- m -  définissent margin r- définissent margin-rightoupadding-right-->
	    <ul class="navbar-nav mr-4">
	      <!-- .nav-item : portée par les balises li, elle permet de centrer l’élément contenu dans li
.nav-link : elle est portée par les liens pour qu’ils respectent le design prévu par bootstrap pour les liens de la barre de navigation -->
	      <li class="nav-item">
	        <a class="nav-link" href="#">About</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link "  href="#">Product</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="#">Reservez</a>
	      </li>
	     
	      <li class="nav-item">
	        <a class="nav-link "  href="LogIn">LogIn</a>
	      </li>
	    </ul>
	    
	  </div>
</nav>
<!-- header -->
<header class="header ">
  <div class="overlay"></div>
  <!-- container va permettre de définir un conteneur adaptable ou « responsive » de taille fixe, ce qui signifie que notre conteneur aura toujours la même taille pour un breakpoint donné et changera de taille à chaque breakpoint. -->
   <div class="container">
   	  <div class="description ">
  	<h1 >
  		Marhaba <span style="color:rgb(18,119,126); ">Luxury</span> 
  		<p>
  		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		  <button class="btn btn-outline-secondary btn-lg"  >Reservez</button>

  	</h1>
  </div>
  </div>
</header>

<!-- service -->
<div class="service">
	<div class="container">
	<h1 class="text-center" style="margin-bottom:6%;margin-top:6%">Our Services </h1>
		<div class="row">
			<div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/pension.png" style="width:100%">
                        <div class="card-body ">
                        <h3 class="card-title">Pension haute quality</h3>
                            <p class="card-text">
                                petit dejeuner 2€ <br>dejeuner 3€<br>diner 5€
                        </div>
					</div>
                </div>
                    
			    </div>


                <div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/activity.png" style="width:100%">
                        <div class="card-body ">
                        <h3 class="card-title">Activity every night</h3>
                            <p class="card-text">
                                Dance <br>sing<br>jumping
                        </div>
					</div>
                </div>
                  
			    </div>

                <div class="col-md-4 col-lg-4 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/vip.png" style="width:100%">
                        <div class="card-body ">
                        <h3 class="card-title">Service vip</h3>
                            <p class="card-text">
                               paye a abonnement and win:<br>
                               -30% on your Pension<br>
                               -15% on your hebergement
                              

                        </div>
					</div>
                </div>
                    
			    </div>

                
</div>
</div>
</div>












<!-- aaaaaaaaaaaa -->
<div class="products">
	<div class="container">
	<h1 class="text-center">Rechercher par type d'hébergement</h1>
		<div class="row">
			<div class="col-md-2 col-lg-2 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/bunglow.jpg" class="img-fluid">
					</div>
                </div>
                    <div class="card-body ">
                        <h4 class="card-title">bungalow</h4>
                            <p class="card-text">
                                700 bungalow
                        </div>
			    </div>


                <div class="col-md-2 col-lg-2 col-sm-12">
                    <div class="card">
                        <div class="card-img">
                            <img src="../app/images/viilla.jpg" class="img-fluid">
                        </div>
                    </div>
                        <div class="card-body ">
                            <h4 class="card-title">grand-villas</h4>
                                <p class="card-text">
                                    100 grand-villas
                            </div>
                        
                    
                    
                </div>

         
            <div class="col-md-2 col-lg-2 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/clement-falize-RfrFCL5pgxw-unsplash.jpg" class="img-fluid">
					</div>
				</div>
                <div class="card-body ">
                    <h4 class="card-title">appartements</h4>
                        <p class="card-text">
                            50 appartements
                    </div>
			</div>

            <div class="col-md-2 col-lg-2 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/chambre simple.jpg" class="img-fluid">
					</div>
				</div>
                <div class="card-body ">
                    <h4 class="card-title">Chambre-simple</h4>
                        <p class="card-text">
                            80 Chambre-simple
                    </div>
			</div>


            <div class="col-md-2 col-lg-2 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/chambre doub.jpg" class="img-fluid">
					</div>
				</div>
                <div class="card-body ">
                    <h4 class="card-title">Chambre-double</h4>
                        <p class="card-text">
                           30 Chambre-double
                    </div>
			</div>

            <div class="col-md-2 col-lg-2 col-sm-12">
				<div class="card">
					<div class="card-img">
						<img src="../app/images/viilla.jpg" class="img-fluid">
					</div>									
				</div>
                <div class="card-body ">
                    <h4 class="card-title">Villas</h4>
                        <p class="card-text">
                            45 Villas
                    </div>
			</div>

		</div>
    </div>
</div>
<!-- products price -->



<div class="container mt-5 mb-5">
    <div class="d-flex justify-content-center row">
        <div class="col-md-10">
            <div class="row p-2 bg-white border rounded">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="../app/images/4.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h5>Chambre Double</h5>
        
                    <div class="mt-1 mb-1 spec-1"><span  class="dot"></span> <span>Climatisé</span></div>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span> <span>Lit Confortable </span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$49.99</h4><span class="strike-text">$90.99</span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button  style="background: rgb(243,190,78); border:none" class="btn btn-primary btn-sm" type="button">Details</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="../app/images/5.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h5>bungalow</h5>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Meilleur prix pour une nuit </span></div>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Wifi+parking</span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$114.99</h4><span class="strike-text">$220</span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button style="background: rgb(243,190,78); border:none" class="btn btn-primary btn-sm" type="button">Details</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="../app/images/6.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h5>Chambre Simple</h5>
                  
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Un seul lit </span></div>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Wifi+climatiseur</span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$20.99</h4><span class="strike-text">$60.99</span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button style="background: rgb(243,190,78); border:none" class="btn btn-primary btn-sm" type="button">Details</button></div>
                </div>
            </div>
            <div class="row p-2 bg-white border rounded mt-2">
                <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="../app/images/6.jpg"></div>
                <div class="col-md-6 mt-1">
                    <h5>apparts</h5>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Appartement pour 7 personnes</span></div>
                    <div class="mt-1 mb-1 spec-1"><span class="dot"></span><span>Parking+piscine</span></div>
                    <p class="text-justify text-truncate para mb-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                </div>
                <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                    <div class="d-flex flex-row align-items-center">
                        <h4 class="mr-1">$50.99</h4><span class="strike-text">$111.99</span>
                    </div>
                    <div class="d-flex flex-column mt-4"><button style="background: rgb(243,190,78); border:none" class="btn btn-primary btn-sm" type="button">Details</button></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end product price -->




<!-- Footer -->
<div class="Footeer">
<footer class=" text-center text-white">
  
  <!-- p-4 size du padding -->
  <div class="container p-4">
     
        <div class="row d-flex justify-content-center">
			<!-- col-auto: éloigner les colonnes frères les unes des autres. -->
          <div class="col-auto">
			  <!-- Définissez l'espacement d'un élément avec les classes {property} {côtés} -->
            <p class="pt-2">
              <strong>Lorem ipsum dolor </strong>
            </p>
          </div>
          

          
          <div class="col-md-5 col-12">
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
         
          <div class="col-auto"></div>
           
            <button style="border: rgb(243,190,78);" type="submit" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
        
        </div>
        <!--Grid row-->
    

    <!-- Section: Text -->
    <section class="container">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    
  <div class="container-fluid p-4 text-center"  style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MARHABA</a>
  </div>
 
</footer>
<!-- Footer -->


<!-- js -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>