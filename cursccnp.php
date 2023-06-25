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
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 3000px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/ccna.jpg"  alt="ccna">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Fundamental Routing Concepts</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Chapter 1: Characteristics of Routing Protocols</p>
        <p class="card-text" style="font-wheight: bold; font-size:25px;"> Routing Protocol Fundamentals</p>
        <p class="card-text">Routing occurs when a router or some other Layer 3 device (for example, a multilayer
switch) makes a forwarding decision based on network address information (that is, Layer
3 information). A fundamental question, however, addressed throughout this book, is
from where does the routing information originate? </p>
        <p class="card-text">A router could know how to reach a network by simply having one of its interfaces
directly connect that network. Perhaps you statically configured a route, telling a router
exactly how to reach a certain destination network. However, for large enterprises, the
use of static routes does not scale well. Therefore, dynamic routing protocols are typically seen in larger networks (and many small networks, too). A dynamic routing protocol
allows routers configured for that protocol to exchange route information and update
that information based on changing network conditions. </p>
        <p class="card-text">The first topic in this section explores the role of routing in an enterprise network. Then
some of the characteristics of routing protocols are presented, to help you decide which
routing protocol to use in a specific environment and to help you better understand the
nature of routing protocols you find already deployed in a network. 
</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> The Role of Routing in an Enterprise Network </p>
        <p class="card-text">An enterprise network typically interconnects multiple buildings, has connectivity to one
or more remote offices, and has one or more connections to the Internet. Figure 1-1 identifies some of the architectural layers often found in an enterprise network design: </p>
<li type="circle">Building Access: This layer is part of the Campus network and is used to provide
user access to the network. Security (especially authentication) is important at this
layer, to verify that a user should have access to the network. Layer 2 switching is
typically used at this layer, in conjunction with VLANs. </li>
<li type="circle">Building Distribution: This layer is part of the Campus network that aggregates
building access switches. Multilayer switches are often used here. </li>
<li type="circle">Campus Backbone: This layer is part of the Campus network and is concerned with
the high-speed transfer of data through the network. High-end multilayer switches
are often used here.</li>
<li type="circle">Edge Distribution: This layer is part of the Campus network and serves as the
ingress and egress point for all traffic into and out of the Campus network. Routers
or multilayer switches are appropriate devices for this layer.</li>
<li type="circle">Internet Gateways: This layer contains routers that connect the Campus network
out to the Internet. Some enterprise networks have a single connection out to the
Internet, while others have multiple connections out to one or more Internet Service
Providers (ISP). </li>
<br>
<img src="images/ccnpfig11.jpg" width="800" height="450"></img>
<li type="circle">WAN Aggregation: This layer contains routers that connect the Campus network
out to remote offices. Enterprises use a variety of WAN technologies to connect to
remote offices (for example, Multiprotocol Label Switching [MPLS]). </li>

<p class="card-text">Routing protocols used within the Campus network and within the WAN aggregation
layer are often versions of Routing Information Protocol (RIP), Open Shortest Path First
(OSPF), or Enhanced Interior Gateway Routing Protocol (EIGRP). However, when connecting out to the Internet, Border Gateway Protocol (BGP) is usually the protocol of
choice for enterprises having more than one Internet connection.</p>
<p class="card-text">An emerging industry trend is to connect a campus to a remote office over the Internet,
as opposed to using a traditional WAN technology. Of course, the Internet is considered
an untrusted network, and traffic might need to traverse multiple routers on its way from
the campus to a remote office. However, a technology called Virtual Private Networks
(VPN) allows a logical connection to be securely set up across an Internet connection.
 Chapter 2 , “Remote Site Connectivity,” examines VPNs in more detail. 
</p>
<p class="card-text">Today, TCP/IP rules as the most pervasive networking model in use. You can find support for
TCP/IP on practically every computer operating system (OS) in existence today, from mobile
phones to mainframe computers. Every network built using Cisco products today supports
TCP/IP. And not surprisingly, the CCNA exam focuses heavily on TCP/IP. This chapter uses
TCP/IP for one of its main purposes: to present various concepts about networking using the
context of the different roles and functions in the TCP/IP model.</p>

		<br>
		<br>
		<video src="images/routing.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. Which of the following features prevents a route learned on one interface from being
        advertised back out of that interface? ',
        'options' => array(
            '1' => 'Poison Reverse',
            '2' => 'Summarization',
            '3' => 'Split Horizon',
			'4' => 'Convergence'
        ),
        'correct_answer' => '3'
    ),
    array(
        'question' => '2. Select the type of network communication flow that is best described as “one-tonearest.” ',
        'options' => array(
            '1' => 'Unicast',
            '2' => 'Multicast',
            '3' => 'Broadcast',
			'4' => 'Anycast'
        ),
        'correct_answer' => '4'
    ),
    array(
        'question' => '3. An NBMA network has which of the following design issues? (Choose the two best
        answers.)',
        'options' => array(
            '1' => 'Split Horizon issues',
            '2' => 'Bandwidth issues',
            '3' => 'Quality of service issues',
			'4' => 'Designated router issues'
        ),
        'correct_answer' => '4'
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
    echo '<button class="btn btn-primary" onclick="window.location.href=\'cursccnp1.php\'">Next</button>';
   
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