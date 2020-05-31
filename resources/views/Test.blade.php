<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scalable=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ViewFiles</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../Design/CSS/Welcome-Page.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y="
      crossorigin="anonymous"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>    
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script> 
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
  
  
  
  
  /*--- Bootstrap Padding Fix --*/
  [class*="col-"]
  {
    padding: 1rem;
  }
  
  /* Style the list */
  ul.breadcrumb {
    padding: 10px 16px;
    list-style: none;
    background-color: #eee;
  }
  
  /* Display list items side by side */
  ul.breadcrumb li {
    display: inline;
    font-size: 18px;
  }
  
  /* Add a slash symbol (/) before/behind each list item */
  ul.breadcrumb li+li:before {
    padding: 8px;
    color: black;
    content: "/\00a0";
  }
  
  /* Add a color to all links inside the list */
  ul.breadcrumb li a {
    color: #0275d8;
    text-decoration: none;
  }
  
  /* Add a color on mouse-over */
  ul.breadcrumb li a:hover {
    color: #01447e;
    text-decoration: underline;
  }
  .azerty
  {
    background-image: url('../images/imgform.jpg');  
  }
</style>
</head>





<body>
<!-- Fake nav-->
<ul class="breadcrumb" style="width:100%;">
  <li><a class="text-secondary" href="Accueil" style="font-size:20px;">Accueil</a></li>
  <li><a class="text-secondary" href="displayfiles" style="font-size:20px;">Documents</a></li>
  <li><a class="text-secondary" href="Visualisation" style="font-size:20px;">View File</a></li>
</ul>


  
<div class="azerty">
<div class="row welcome text-center" style="background-color: rgba(255, 255, 255, 0.8);" >
<div class="col-md-12" >
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  <title>ViewFiles</title>
    <body>
    
    <div class="form-group">
    <label class="text-secondary" style="font-size:40px; font-weight:bold;">Document Name : </label>
    <label  style="font-size:20px;">{{$Visualisation->DocumentName}}</label>
    </div>

    <hr>

    <div class="form-group">
    <label class="text-secondary"  style="font-size:25px; font-weight:bold; margin-right:580px; text-decoration:underline;">Document Description :</label><br \>
    <label  style="font-size:17px; margin-right:800px;">{{$Visualisation->Description}}</label>
    </div></div>

    <div style="margin-left:80px;">
    <p>
    <iframe src="{{ asset('uploads/Visualisation/'. $Visualisation->image) }}" style ="width:850px; height:800px;"></iframe>
    </p>   
    </div>

</div></div></div> 


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
