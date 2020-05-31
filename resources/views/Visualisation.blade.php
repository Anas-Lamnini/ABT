<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add File</title>
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
<!-- Image Slider -->
<!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../images/addfile.jpg" alt="First slide" style="width:100%; height:2000%;">
      <div class="carousel-caption">
      <div style="border:solid;">
        <h1 class="display-2" style="font-size:100px; text:underline;" >ADD FILE</h1>
      </div>
    </div></div>   
  </div> 
</div>-->

    

<!-- Fake nav-->
<ul class="breadcrumb" style="width:100%;">
  <li><a class="text-secondary" href="Accueil" style="font-size:20px;">Accueil</a></li>
  <li><a class="text-secondary" href="displayfiles" style="font-size:20px;">Documents</a></li>
  <li><a class="text-secondary" href="Visualisation" style="font-size:20px;">Add File</a></li>
</ul>




<!--Add File-->
<div class="azerty">
<div class="row welcome text-center" style="background-color: rgba(255, 255, 255, 0.8);" >
<div class="col-md-12" >
      <form action="{{ route('adddocs') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="text-secondary" style="font-size:40px; font-weight:bold;">Document Name :</label> <hr>
                <input type="text" name="DocumentName" class="form-control" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label class="text-secondary" style="font-size:40px; font-weight:bold;">Description :</label> <hr></div>
                <input type="text" name="Description" class="form-control" placeholder="Enter your Document Description">
                <br \>   

            <div class="form-group">           
            <label class="text-secondary" style="font-size:40px; font-weight:bold;">Upload PDF :</label> <hr>
                <div class="custom-file">
                    <input type="file" name="image" class="custom-file-input" >
                    <label class="custom-file-label" style="width:100%;">Choose file</label>
                </div>
            </div></div> 
            <div class="col-lg-5">        
              <button type="submit" name="submit" class="btn btn-secondary" style="margin-left:250px;"> Save Data </button>
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-5">            
              <button type="submit" name="submit" class="btn btn-secondary" href="Visualisation" 
              style="width:150px; height:40px; margin-right:250px;">Display data</button><br \><br \> 
            </form>
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

