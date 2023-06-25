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
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 4000px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/ccna.jpg"  alt="ccna">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Introduction to Networking</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Chapter 2: Fundamentals of Ethernet LANs</p>
        <p class="card-text">Most enterprise computer networks can be separated into two general types of technology:
local-area networks (LANs) and wide-area networks (WANs). LANs typically connect
nearby devices: devices in the same room, in the same building, or in a campus of buildings.
In contrast, WANs connect devices that are typically relatively far apart. Together, LANs and
WANs create a complete enterprise computer network, working together to do the job of a
computer network: delivering data from one device to another.</p>
        <p class="card-text">Many types of LANs have existed over the years, but today’s networks use two general
types of LANs: Ethernet LANs and wireless LANs. Ethernet LANs happen to use cables
for the links between nodes, and because many types of cables use copper wires, Ethernet
LANs are often called wired LANs. Ethernet LANs also make use of fiber-optic cabling,
which includes a fiberglass core that devices use to send data using light. In comparison to
Ethernet, wireless LANs do not use wires or cables, instead using radio waves for the links
between nodes; Part V of this book discusses Wireless LANs at length.</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">Typical SOHO LANs</p>
        <p class="card-text">To begin, first think about a small office/home office (SOHO) LAN today, specifically a
LAN that uses only Ethernet LAN technology. First, the LAN needs a device called an
Ethernet LAN switch, which provides many physical ports into which cables can be connected.
An Ethernet uses Ethernet cables, which is a general reference to any cable that
conforms to any of several Ethernet standards. The LAN uses Ethernet cables to connect different
Ethernet devices or nodes to one of the switch’s Ethernet ports.</p>
        <p class="card-text">Figure 2-1 shows a drawing of a SOHO Ethernet LAN. The figure shows a single LAN
switch, five cables, and five other Ethernet nodes: three PCs, a printer, and one network
device called a router. (The router connects the LAN to the WAN, in this case to the
Internet.)</p>
<img src="images/figura21.jpg" width="800" height="450"</img>
		<br>
        <p class="card-text">Although Figure 2-1 shows the switch and router as separate devices, many SOHO Ethernet
LANs today combine the router and switch into a single device. Vendors sell consumer-grade
integrated networking devices that work as a router and Ethernet switch, as well as doing
other functions. These devices typically have “router” on the packaging, but many models
also have four-port or eight-port Ethernet LAN switch ports built in to the device.</p>
<p class="card-text">Typical SOHO LANs today also support wireless LAN connections. You can build a single
SOHO LAN that includes both Ethernet LAN technology as well as wireless LAN technology,
which is also defined by the IEEE. Wireless LANs, defined by the IEEE using standards
that begin with 802.11, use radio waves to send the bits from one node to the next.</p>
<p class="card-text">Most wireless LANs rely on yet another networking device: a wireless LAN access point
(AP). The AP acts somewhat like an Ethernet switch, in that all the wireless LAN nodes communicate
with the wireless AP. If the network uses an AP that is a separate physical device,
the AP then needs a single Ethernet link to connect the AP to the Ethernet LAN, as shown in
Figure 2-2.</p>
<p class="card-text">Note that Figure 2-2 shows the router, Ethernet switch, and wireless LAN access point as
three separate devices so that you can better understand the different roles. However, most
SOHO networks today would use a single device, often labeled as a “wireless router,” that
does all these functions.</p>
<img src="images/figura22.jpg" width="800" height="450"</img>
		<br>
<p class="card-text" style="font-wheight: bold; font-size:25px;">Typical Enterprise LANs</p>
<p class="card-text">Enterprise networks have similar needs compared to a SOHO network, but on a much larger
scale. For example, enterprise Ethernet LANs begin with LAN switches installed in a wiring
closet behind a locked door on each floor of a building. The electricians install the Ethernet
cabling from that wiring closet to cubicles and conference rooms where devices might need
to connect to the LAN. At the same time, most enterprises also support wireless LANs in the
same space, to allow people to roam around and still work and to support a growing number
of devices that do not have an Ethernet LAN interface.</p>
<p class="card-text">Figure 2-3 shows a conceptual view of a typical enterprise LAN in a three-story building. Each
floor has an Ethernet LAN switch and a wireless LAN AP. To allow communication between
floors, each per-floor switch connects to one centralized distribution switch. For example, PC3
can send data to PC2, but it would first flow through switch SW3 to the first floor to the distribution
switch (SWD) and then back up through switch SW2 on the second floor.</p>
<img src="images/figura23.jpg" width="800" height="450"</img>
<br>

<p class="card-text">The figure also shows the typical way to connect a LAN to a WAN using a router. LAN
switches and wireless access points work to create the LAN itself. Routers connect to both
the LAN and the WAN. To connect to the LAN, the router simply uses an Ethernet LAN
interface and an Ethernet cable, as shown on the lower right of Figure 2-3.</p>
<p class="card-text">The rest of this chapter focuses on Ethernet in particular.</p>
<br>
<br>
		<video width="800" height="450" src="images/soho.mp4" controls></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. In the LAN for a small office, some user devices connect to the LAN using a cable,
        while others connect using wireless technology (and no cable). Which of the following
        is true regarding the use of Ethernet in this LAN?',
        'options' => array(
            '1' => 'Only the devices that use cables are using Ethernet.',
            '2' => 'Only the devices that use wireless are using Ethernet.',
            '3' => 'Both the devices using cables and those using wireless are using Ethernet.',
			'4' => 'None of the devices are using Ethernet.'
        ),
        'correct_answer' => '1'
    ),
    array(
        'question' => '2. Which of the following are advantages of using multimode fiber for an Ethernet link
        instead of UTP or single-mode fiber?',
        'options' => array(
            '1' => 'To achieve the longest distance possible for that single link.',
            '2' => 'To extend the link beyond 100 meters while keeping initial costs as low as possible.',
            '3' => 'To make use of an existing stock of laser-based SFP/SFP+ modules.',
			'4' => 'To make use of an existing stock of LED-based SFP/SFP+ modules.'
        ),
        'correct_answer' => '2'
    ),
    array(
        'question' => '3. Which of the following is true about the Ethernet FCS field?',
        'options' => array(
            '1' => 'Ethernet uses FCS for error recovery.',
            '2' => 'It is 2 bytes long.',
            '3' => 'It resides in the Ethernet trailer, not the Ethernet header.',
			'4' => 'It is used for encryption.'
        ),
        'correct_answer' => '3'
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
    echo '<button class="btn btn-primary" onclick="window.location.href=\'cursccna1.php\'">Next</button>';
   
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