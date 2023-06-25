<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Free Learn</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
	font-family: 'Varela Round', sans-serif; 
}
.form-control {
	box-shadow: none;		
	font-weight: normal;
	font-size: 13px;
}
.navbar {
	background: #fff;
	padding-left: 16px;
	padding-right: 16px;
	border-bottom: 1px solid #dfe3e8;
	border-radius: 0;
}
.nav-link img {
	border-radius: 50%;
	width: 36px;
	height: 36px;
	margin: -8px 0;
	float: left;
	margin-right: 10px;
}
.navbar .navbar-brand {
	padding-left: 0;
	font-size: 20px;
	padding-right: 50px;
}
.navbar .navbar-brand b {
	color: #33cabb;		
}
.navbar .form-inline {
	display: inline-block;
}
.navbar a {
	color: #888;
	font-size: 15px;
}
.search-box {
	position: relative;
}	
.search-box input {
	padding-right: 35px;
	border-color: #dfe3e8;
	border-radius: 4px !important;
	box-shadow: none
}
.search-box .input-group-text {
	min-width: 35px;
	border: none;
	background: transparent;
	position: absolute;
	right: 0;
	z-index: 9;
	padding: 7px;
	height: 100%;
}
.search-box i {
	color: #a0a5b1;
	font-size: 19px;
}
.navbar .sign-up-btn {
	min-width: 110px;
	max-height: 36px;
}
.navbar .dropdown-menu {
	color: #999;
	font-weight: normal;
	border-radius: 1px;
	border-color: #e5e5e5;
	box-shadow: 0 2px 8px rgba(0,0,0,.05);
}
.navbar a, .navbar a:active {
	color: #888;
	padding: 8px 20px;
	background: transparent;
	line-height: normal;
}
.navbar .navbar-form {
	border: none;
}
.navbar .action-form {
	width: 280px;
	padding: 20px;
	left: auto;
	right: 0;
	font-size: 14px;
}
.navbar .action-form a {		
	color: #33cabb;
	padding: 0 !important;
	font-size: 14px;
}
.navbar .action-form .hint-text {
    text-align: center;
    margin-bottom: 15px;
    font-size: 13px;
}
.navbar .btn-primary, .navbar .btn-primary:active {
	color: #fff;
	background: #33cabb !important;
	border: none;
}	
.navbar .btn-primary:hover, .navbar .btn-primary:focus {		
	color: #fff;
	background: #31bfb1 !important;
}
.navbar .social-btn .btn, .navbar .social-btn .btn:hover {
	color: #fff;
	margin: 0;
	padding: 0 !important;
	font-size: 13px;
	border: none;
	transition: all 0.4s;
	text-align: center;
	line-height: 34px;
	width: 47%;
	text-decoration: none;
}
.navbar .social-btn .facebook-btn {
	background: #507cc0;
}
.navbar .social-btn .facebook-btn:hover {
	background: #4676bd;
}
.navbar .social-btn .twitter-btn {
	background: #64ccf1;
}
.navbar .social-btn .twitter-btn:hover {
	background: #4ec7ef;
}
.navbar .social-btn .btn i {
	margin-right: 5px;
	font-size: 16px;
	position: relative;
	top: 2px;
}
.or-seperator {
	margin-top: 32px;
	text-align: center;
	border-top: 1px solid #e0e0e0;
}
.or-seperator b {
	color: #666;
	padding: 0 8px;
	width: 30px;
	height: 30px;
	font-size: 13px;
	text-align: center;
	line-height: 26px;
	background: #fff;
	display: inline-block;
	border: 1px solid #e0e0e0;
	border-radius: 50%;
	position: relative;
	top: -15px;
	z-index: 1;
}
.navbar .action-buttons .dropdown-toggle::after {
	display: none;
}
.form-check-label input {
	position: relative;
	top: 1px;
}
@media (min-width: 1200px){
	.form-inline .input-group {
		width: 300px;
		margin-left: 30px;
	}
}
@media (max-width: 768px){
	.navbar .dropdown-menu.action-form {
		width: 100%;
		padding: 10px 15px;
		background: transparent;
		border: none;
	}
	.navbar .form-inline {
		display: block;
	}
	.navbar .input-group {
		width: 100%;
	}
}
</style>
<script>
// Prevent dropdown menu from closing when click inside the form
$(document).on("click", ".action-buttons .dropdown-menu", function(e){
	e.stopPropagation();
});
</script>
</head> 
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<a href="index.php" class="navbar-brand">Free<b>Learn</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="index.php" class="nav-item nav-link">Home</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Cursuri</a>
				<div class="dropdown-menu">					
					<a href="detaliicisco1.php" class="dropdown-item">CISCO</a>
					<a href="detaliimicrosoft1.php" class="dropdown-item">Microsoft</a>
					<a href="detaliicomptia1.php" class="dropdown-item">CompTIA</a>
			
                </div>
            </div>
            <a href="about1.php" class="nav-item nav-link">About</a>
			<a href="contact1.php" class="nav-item nav-link">Contact</a>
		</div>
		<div class="navbar-nav ml-auto action-buttons">
        <a href="login.php">Login</a>
			
			<div class="nav-item dropdown">
				<a href="register.php" class="btn btn-primary dropdown-toggle sign-up-btn">Sigup</a>
               
			</div>
        </div>
	</div>
</nav>
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 780px">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="images/az-9001.jpg"  alt="az-900">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Microsoft AZ-900 – Azure Fundamentals</h5>
        <p class="card-text">Cursul Microsoft AZ-900 – Azure Fundamentals oferă cunoștințe fundamentale despre conceptele de bază în Azure precum și o prezentare generală a serviciilor și soluțiilor Azure disponibile.  El prezintă și instrumente de management, noțiuni de securitate (generale și de rețea), confidențialitate și conformitate în Azure, precum și informații despre gestionarea costurilor Azure în funcție de nivelul de servicii agreat.</p>
        <p class="card-text">Acest curs este potrivit pentru profesioniștilor cu cunoștințe generale de IT care încep să lucreze cu Azure și își doresc să învețe despre ofertele Azure. Acest curs nu oferă un permis Azure sau timp în clasă pentru ca studenții să facă activități practice. Elevii pot obține o încercare gratuită și pot face explicațiile în afara orelor de curs.  Participanții acestui curs vor câștiga încredere pentru a lua alte cursuri și certificări precum Azure Administrator.</p>
        <p class="card-text" style="font-style: italic; font-size:30px;">În cadrul cursului Microsoft AZ-900: Microsoft Azure Fundamentals vei învăța despre:</p>
        <li type="circle">Elementele de bază ale cloud computing și Azure și cum să începeți cu abonamentele și conturile Azure.</li>
        <li type="circle">Avantajele utilizării serviciilor de cloud computing, și să faceți diferența între categoriile și tipurile de cloud computing și cum să examinați diferitele concepte, resurse și terminologie care sunt necesare pentru a lucra cu arhitectura Azure.</li>
        <li type="circle">Serviciile de bază disponibile cu Microsoft Azure.</li>
        <li type="circle">Soluțiile de bază care cuprind o gamă largă de instrumente și servicii de la Microsoft Azure.</li>
        <li type="circle">Caracteristicile generale de securitate și securitatea rețelei și cum puteți utiliza diferitele servicii Azure pentru a vă asigura că resursele dvs. cloud sunt sigure, securizate și de încredere.</li>
        <li type="circle">Caracteristicile de identitate, guvernanță, confidențialitate și conformitate și cum vă poate ajuta Azure să vă asigurați accesul la resursele cloud, ce înseamnă construirea unei strategii de guvernare în cloud și modul în care Azure aderă la standardele comune de reglementare și de conformitate.</li>
        <li type="circle">Factorii care influențează costurile, instrumentele pe care le puteți utiliza pentru a estima și gestiona cheltuielile în cloud și modul în care acordurile de nivel de servicii (SLA) Azure vă pot afecta deciziile de proiectare a aplicației.
</li>
        
      </div>
    </div>
  </div>
</div>
</div>
</body>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
     

      
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
   © 2023 Copyright
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
</html>