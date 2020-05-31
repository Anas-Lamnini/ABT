<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accueil</title>
    <link rel="stylesheet" type="text/css" href="../Design/CSS/style-profile.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"
    />  
	<style type="text/css">
	

/* nav dial mon ancient project */

@import url('https://fonts.google.googleapis.com/css?family=Poppins:400,500,700');

html, body
{
	font-family:'Poppins' , sans-serif;
	color:#222;
}
.navbar
{
	padding: .8rem;
}
.navbar-nav li
{
	padding-right: 20px;
}
.nav-link
{
	font-size: 1.1em !important;
}
.carousel-inner img
{
	width:100% !important;
	height:500px !important;
}
.carousel-caption
{
	position:absolute;
	top:50%;
	transform: translateY(-50%);
}
.carousel-caption h1
{
	font-size:600%;
	text-transform:uppercase;
	text-shadow:3px 3px 20px #000;
}
.carousel-caption h3
{
	font-size:250%;
	font-weight:500%;
	text-shadow:1px 1px 10px #000;
	padding-bottom:1rem;
}
.jumbotron
{
	padding: 1rem;
	border-radius: 0;
}
.padding
{
	padding-bottom: 2rem;
}
.welcome
{
	width:75%;
	margin:0 auto;
	padding-top: 2rem;
}
.welcome hr
{
	border-top: 2px solid #b4b4b4;
	width:95%;
	margin-top:.3rem;
	margin-bottom: 1rem;
}
.fa-code
{
  	color:#e54d26;
}
.fa-bold
{
	color:#563d7c;  
}
.fa-css3
{
	color:#2163af;
}
.fa-php
{
    color:blue;
}
.fa-js
{
  	color:yellow; 
}
.fa-laravel
{
    color:red;
}
.fa-code, .fa-bold, .fa-css3, .fa-php, .fa-js, .fa-laravel
{
	font-size: 5em;
	margin:1rem;
}
footer
{
	background-color: #3f3f3f;
	color:#d5d5d5;
}


.m :hover
{
   background-color:black;
   padding-right:0px;
   width:108%;
   font-color:black;
}

/*---Media Queries --*/
@media (max-width: 992px)
{

}
@media (max-width: 768px)
{
	
}
@media (max-width: 576px)
{
	
}



/*---Firefox Bug Fix --*/
.carousel.item
{
	transition: -webkit-transform 0.5s ease;
	transition: transform 0.5s ease;
	transition: transform 0.5s ease, -webkit-transform 0.5s ease;
	-webkit-backface-visibility: visible;
	backface-visibility: visible;
}

/*--- Fixed Background Image --*/
figure
{
	position: relative;
	width: 100%;
	height: 60%;
	margin: 0!important;
}
.fixed-wrap
{
	clip: rect(0, auto, auto, 0);
	position: absolute;
	top: 0;
	left: 0;
	width:100%;
	height:100;
}
#fixed
{
	background-image: url('img/mac.png');
	position: fixed
    display: block;
    top :0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center center;
    -webkit-transform: translateZ(0);
            transform: translateZ(0);
            will-change: transform;
}

/*--- Bootstrap Padding Fix --*/
[class*="col-"]
{
	padding: 1rem;
}
    </style>
  </head>





  <body>
<!-- Navigation -->
<!--
<nav class="navbar navbar-expand-md navbar-light bg-dark sticky-top">
<div class="container fluid" style="margin-left:1px;">
<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="#"
          ><img src="../images/ABT-Logo.png" class="imgnav"></a>
        <button class="navbar-toggler align-self-start" type="button">
          <span class="navbar-toggler-icon"></span>
        </button> 
     <div class="collapse navbar-collapse" id="navbarResponsive" >
          <ul class="navbar-nav ml-auto">
                         
              <li  class="dropdown">
                  <a class="nav-link" data-toggle="dropdown"  style="color:white;"><i class="fa fa-user" aria-hidden="true"></i></a>
                          <ul class="dropdown-menu"  style="background-color:#353535; width:290%;">
                            <li class="m"> <a class="nav-link" href="Profile" style="color:white">Profile</a></li>
                            <li class="m"><a class="nav-link" href="#" style="color:white">Calendrier</a></li>
                          </ul> 
              </li>           
          </ul>
     </div> 
</div>
</nav>-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<a class="navbar-brand order-1 order-lg-0 ml-lg-0 ml-2 mr-auto" href="http://localhost:8000/Accueil"
          ><img src="../images/uirlogo.png" style="width:180px; height:60px;" class="imgnav"></a>
        <button class="navbar-toggler align-self-start" type="button">
          <span class="navbar-toggler-icon"></span>
        </button> 
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav" style="margin-left:380px;">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost:8000/Accueil">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost:8000/displayfiles">Visualisation</a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Users
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost:8000/Profile">Profile</a>
          <a class="dropdown-item" href="#">Calendar</a>
        </div>
      </li>
    </ul>
  </div>
</nav>





  

<!-- Image Slider -->

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/imgUIR1.jpg" alt="First slide" style="width:100%; height:100%;">
      <div class="carousel-caption">
      <div style="border:solid;">
        <h1 class="display-2" style="font-size:50px; text:underline;" >Université Internationale Rabat
         <span class="border"></span></h1>
        <div class="text-light" class="whiteTextOverride">
           <h3>VOUS SERVIR EST NOTRE PRIORITÉ</h3>
        </div></div>
    </div></div>

    <div class="carousel-item">
      <img src="../images/imgUIR4.jpg" alt="Second slide" style="width:100%; height:600px;">
      <div class="carousel-caption">
        <div style="border:solid;">
        <h1 class="display-2" style="font-size:50px; text:underline;">Université Internationale Rabat 
        <span class="border"></span></h1>
        <div class="text-light" class="whiteTextOverride">
           <h3>VOUS SERVIR EST NOTRE PRIORITÉ</h3>
        </div></div>
    </div></div>
    
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="false"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="false"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<!--- NOTRE EQUIPE -->

<div class="container-fluid padding">
<div class="row welcome text-center">
	<div class="col-12">
    	<h2 class="text-info">PROFESSEURS</h2>
    </div>
    <hr>	
</div>
</div> 




<!--- Cards -->

<div class="jumbotron">
<div class="container-fluid padding">
<div class="row padding">
<div class="col-md-1" ></div>	
	<div class="col-md-3"   >
		<img src="../images/larbi.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body" >
			<h4 class="card-title">Mr.Larbi ALAOUI</h4>
			<a href="https://www.uir.ac.ma/fr/pole/tic-lab-technologies-de-linformation-et-de-la-communication/Larbi-ALAOUI" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>
		<div class="col-md-1" ></div>

    <div class="col-md-3"  >
		<img  src="../images/najib.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body">
			<h4 class="card-title">Mr.Najib MEHDI</h4>
			<a href="https://www.uir.ac.ma/fr/pole/tic-lab-technologies-de-linformation-et-de-la-communication/Mehdi-NAJIB" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>
		<div class="col-md-1" ></div>
    
    <div class="col-md-3"  >
		<img  src="../images/sadiki.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body">
			<h4 class="card-title">Mr.Tayeb SADIKI</h4>
			<a href="https://www.researchgate.net/profile/Sadiki_Tayeb" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>
		
</div>


<div class="row padding">
<div class="col-md-1" ></div>
	<div class="col-md-3" >
		<img src="../images/nabih.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body">
			<h4 class="card-title">Mr.Nabih ALAOUI</h4>
			<a href="https://www.uir.ac.ma/fr/pole/tic-lab-technologies-de-linformation-et-de-la-communication/Nabih_Alaoui" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>
		<div class="col-md-1" ></div>

    <div class="col-md-3">
		<img  src="../images/maaroufi.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body">
			<h4 class="card-title">Mr.Nadir MAAROUFI</h4>
			<a href="https://www.uir.ac.ma/fr/pole/tic-lab-technologies-de-linformation-et-de-la-communication/Maaroufi-Nadir" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>
		<div class="col-md-1" ></div>
    

    <div class="col-md-3"  >
		<img  src="../images/boulmalf.jpeg" class="rounded-circle" style="width:200px; height:200px;">
		<div class="card-body">
			<h4 class="card-title">Mr.Mohammed BOULMALF</h4>
			<a href="https://www.uir.ac.ma/fr/pole/tic-lab-technologies-de-linformation-et-de-la-communication/Mohammed-BOULMALF" class="btn btn-primary">Voir Profil</a>
		</div>
	    </div>	
</div>
</div>
</div>



<!--footer-->
<footer>
<div class="container-fluid ">
<div class="row text-center">
	<div class="col-md-4">	
  </br></br>
		<h3 style="color:white;">U I R </h3>
		<hr class="light" style="background-color:white;">
		<p>INFO@UIR.MA</p>
		<p>05 35 52 18 01/02/03</p>
		<p>Morocco,Rabat,50000 </p>
		<p>24/7 Services</p>
	</div>	
    <div class="col-md-4">
    </br>
		<hr class="light" style="background-color:white;">
		<p>Nos Heures</p>
		<hr class="light" style="background-color:white;">
		<p>Lundi -> Vendredi : 8am -> 4:30pm</p>
		<p>Samedi -> Dimanche : Fermé</p>
	</div>
    
    <div class="col-md-4">
    </br> 
		<hr class="light" style="background-color:white;">
		<p>Zone de service</p>
		<hr class="light" style="background-color:white;">
		<p>SALE JADIDA</p>
    <p>SALE JADIDA</p>
    <p>SALE JADIDA</p>
	</div>
	<div class="col-12">
		<hr class="light" style="background-color:white;">
		<h5>&copy; 2020 UIR</h5>
	</div>
</div>
</div>	
</footer>
    
  </body>
</html>

