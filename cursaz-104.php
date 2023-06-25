<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
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
	<a href="home.php" class="navbar-brand">Free<b>Learn</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
		<span class="navbar-toggler-icon"></span>
	</button>
	<!-- Collection of nav links, forms, and other content for toggling -->
	<div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
		<div class="navbar-nav">
			<a href="home.php" class="nav-item nav-link">Home</a>			
			<div class="nav-item dropdown">
				<a href="#" data-toggle="dropdown" class="nav-item nav-link dropdown-toggle">Cursuri</a>
				<div class="dropdown-menu">					
					<a href="detaliicisco.php" class="dropdown-item">CISCO</a>
					<a href="detaliimicrosoft.php" class="dropdown-item">Microsoft</a>
					<a href="detaliicomptia.php" class="dropdown-item">CompTIA</a>
			
                </div>
            </div>
            <a href="about.php" class="nav-item nav-link">About</a>
			<a href="contact.php" class="nav-item nav-link">Contact</a>
		</div>
		<div class="navbar-nav ml-auto action-buttons">
        <a>Hello <?php echo $row["name"]; ?></a>
			
			<div class="nav-item dropdown">
				<a href="logout.php" class="btn btn-primary dropdown-toggle sign-up-btn">Logout</a>
               
			</div>
        </div>
	</div>
</nav>
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 5400px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/az-104.jpg"  alt="az-104">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">CHAPTER 1: Managing Azure AD	Objects</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Objectives</p>
        <p class="card-text"> In	this	chapter,	we	will	explain	the	 bulk	 user	creation	in	Azure	AD	and	 group
creation	and	management.	We	will	discuss	how	to	provide	access	to	guest	users
and	 how	 to	 manage	 guest	 users.	 We	 will	 cover	 how	 the	 users	 can	reset	 their
passwords	 using	 the	self-service	 password	 and	 add	 the	 devices	 in	 Azure	 AD
using	the	Azure	AD	join	tool.</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">Bulk user creation</p>
        <p class="card-text">Bulk	 user	creation	will	 help	 your	 organization	in	the	 onboarding	 process	to	 be completed	soon	and	other	prospects	to	improve	the	user	creation,	which	has	been
joined	 your	 organization	 or	 existing	 users’	 creation	 in	 Azure.	 It	 will	 reduce
administrative	 work.	 If	 you	 want	to	 create	the	 users	 or	 bulk	 of	 users	in	 Azure
environments,	 you	 need	 a	 user	 administrator	 access	 in	 the	 Azure	 Active
Directory.</p>
<p class="card-text">Let	us	try	and	create	bulk	users	in	Azure	AD.	Follow	the	given	steps	to	create
the	bulk	users:
</p>
    
<li type="number">Go	to	Azure	Active	Directory.</li>
<li type="number">Select	the	Users	and	click	on	All	users.</li>
<li type="number">	 Click	on	Bulk	Create.</li>
<p class="card-text">Take	a	look	at	the	following	screenshot	for	bulk	user	creation:
</p>
<br>
        <img src="images/az-104fig11.jpg" width="800" height="450"></img>
        <li type="number">When	you	click	on	bulk	create,	it	will	ask	you	to	download	the	CSV	file.</li>
        <li type="number">Fill	in	the	following	details:</li>
        <li type="circle">Provide	the	name,	last	name,	and	username.</li>
        <li type="circle">Provide	 the	 initial	 password	 and	 block	sign-in	(Yes/No)	 which	 is	 a
mandatory	field.</li>
        <li type="circle">Provide	the	department	and	user	location.
</li>
        <li type="circle">Provide	the	job	title	and	country	code.</li>
        <li type="circle">Provide	the	official	phone	number,	mobile	number,	and	so	on.</li>
        <li type="number">You	have	to	put	all	the	details	in	a	single	line	as	per	the	.csv	file.	 I	have
changed	 the	 column	 to	show	 you	 the	 properties	 of	 the	CSV	file.	Take	 a
look	at	the	following	screenshot	for	bulk	user	creation	details:</li>
<br>
        <img src="images/az-104fig12.jpg" width="800" height="450"></img>
        <li type="number">Once	 you	 fill	all	the	 details	and	 upload	the	.csv	 file,	 click	 on	Submit.	 It
will	start	processing	the	user	creation.	It	will	take	some	time	to	create	the
users,	 and	 you	 can	see	 all	 those	 users	 under	 the	 user's	 tab.	Refer	 to	 the
following	screenshot:</li>
<br>
        <img src="images/az-104fig13.jpg" width="300" height="800"></img>

<p class="card-text" style="font-wheight: bold; font-size:25px;">User	creation</p>
        <p class="card-text"> In	the	bulk	user	creation,	I	have	explained	the	use	of	the	bulk	user	creation,	but
let	us	say	if	you	want	to	create	an	individual	user,	then	how	can	you	create	the
user?
</p>
<p class="card-text">Please	follow	the	given	steps:
</p>
<li type="number">Go	to	Azure	Active	Directory.</li>
<li type="number">Select	the	Users	and	click	on	All	users.</li>
<li type="number">Click	on	the	New	user.</li>
<li type="number">	 Enter	the	User	name.</li>
<li type="number">Provide	the	Name,	First	name,	and	Last	name.</li>
<li type="number">You	can	also	provide	the	department	number,	location,	and	Job	title.</li>
<li type="number">Once	you	provide	all	the	preceding	details,	click	on	Create	and	your	users
will	be	created.</li>
<p class="card-text">Refer	to	the	following	screenshot	for	more	details:
</p>
<br>
        <img src="images/az-104fig14.jpg" width="800" height="400"></img>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Group	creation</p>      
<p class="card-text"> If	you	would	like	to	create	the	Azure	AD	group,	then	follow	the	given	steps	to create	the	Azure	user’s	group:
</p>
<li type="number">Click	on	the	Azure	AD.</li>
<li type="number">Select	the	groups	from	the	Manage	tab.</li>
<li type="number">Select	All	groups.</li>
<li type="number">Click	on	the	New	group.</li>
<p class="card-text"> Please	take	a	look	at	the	following	screenshot:</p>
<br>
        <img src="images/az-104fig15.jpg" width="800" height="500"></img>
		<br>
		<video src="images/az-104.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. Which Azure service keeps track of connection on-site?',
        'options' => array(
            '1' => 'Azure DNS',
            '2' => 'Azure Logs',
            '3' => 'Azure Alerts',
			'4' => 'Azure Monitor'
        ),
        'correct_answer' => '3'
    ),
    array(
        'question' => '2. After moving the application to Azure, you must make sure to establish a backup solution. For this need, which of the following would you develop first?',
        'options' => array(
            '1' => 'Create a backup policy',
            '2' => 'A recovery services vault',
            '3' => 'An Azure backup server',
			'4' => 'A recovery plan'
        ),
        'correct_answer' => '2'
    ),
    array(
        'question' => '3. You have an Azure subscription that includes the web app webapp1 from the Azure App Service. The domain name for Webapp1 is webapp1.azurewebsites.net. You must update webapp1 to include a unique domain called www.contoso.com. You check who owns the domain. The following DNS record to use is?',
        'options' => array(
            '1' => 'SRV',
            '2' => 'CNAME',
            '3' => 'TXT',
			'4' => 'PTR'
        ),
        'correct_answer' => '2'
    )
);

$total_questions = count($quiz);
$score = 0;

// Verificăm dacă s-au trimis răspunsurile
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificăm fiecare întrebare și calculăm scorul
    foreach ($_POST['answers'] as $question => $answer) {
        if ($quiz[$question]['correct_answer'] == $answer) {
            $score++;
        }
    }
    
    // Afișăm scorul final
    echo '<h2>Scorul tău este: ' . $score . '/' . $total_questions . '</h2>';
    
    // Afișăm butonul "Next" lângă rezultat, care duce către alta pagină
    echo '<button class="btn btn-primary" onclick="window.location.href=\'cursaz-104.php\'">Next</button>';
   
    exit;
}
?>

<form method="POST" action="" >
    <?php
    for ($i = 0; $i < $total_questions; $i++) {
        echo '<h3>' . $quiz[$i]['question'] . '</h3>';
        
        foreach ($quiz[$i]['options'] as $option => $value) {
            echo '<input type="radio" name="answers[' . $i . ']" value="' . $option . '"> ' . $value . '<br>';
        }
        
        echo '<br>';
    }
    ?>
    <input class="btn btn-primary" type="submit" value="Trimite">
</form>
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