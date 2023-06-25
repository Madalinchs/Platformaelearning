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
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 3400px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/ccna.jpg"  alt="ccna">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">IP IGP Routing</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Chapter 1: IP Forwarding (Routing)</p>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">  IP Forwarding</p>
        <p class="card-text">  IP forwarding , or IP routing , is the process of receiving an IP packet, making a decision of where to send the packet next, and then forwarding the packet. The forwarding
process needs to be relatively simple, or at least streamlined, for a router to forward large
volumes of packets. Ignoring the details of several Cisco optimizations to the forwarding
process for a moment, the internal forwarding logic in a router works basically as shown
in Figure 6-1 . </p>
<br>
        <img src="images/cciefig61.jpg" width="800" height="450"></img>
        <p class="card-text">The following list summarizes the key steps shown in Figure 6-1 :</p>
 <li type="circle">A router receives the frame and checks the received frame check sequence (FCS); if
errors occurred, the frame is discarded. The router makes no attempt to recover the
lost packet. </li>
 <li type="circle">If no errors occurred, the router checks the Ethernet Type field for the packet type
and extracts the packet. The Data Link header and trailer can now be discarded. </li>
 <li type="circle">Assuming an IPv4 packet, its header checksum is first verified. In case of mismatch,
the packet is discarded. With IPv6 packets, this check is skipped, as IPv6 headers do
not contain a checksum. </li>
 <li type="circle">If the header checksum passed, the router checks whether the destination IP address
is one of the addresses configured on the router itself. If it does, the packet has just
arrived at its destination. The router analyzes the Protocol field in the IP header,
identifying the upper-layer protocol, and hands the packet’s payload over to the
appropriate upper-protocol driver.</li>
 <li type="circle">If the destination IP address does not match any of the router’s configured addresses, the packet must be routed. The router first verifies whether the TTL of the packet
is greater than 1. If not, the packet is dropped and an ICMP Time Exceeded message
is sent to the packet’s sender. </li>
 <li type="circle">The router checks its IP routing table for the most specific prefix match of the packet’s destination IP address.</li>
 <li type="circle">The matched routing table entry includes the outgoing interface and next-hop router.
This information is used by the router to look up the next-hop router’s Layer 2
address in the appropriate mapping table, such as ARP, IP/DLCI, IP/VPI-VCI, dialer
maps, and so on. This lookup is needed to build a new Data Link frame and optionally dial the proper number. </li>
 <li type="circle">Before creating a new frame, the router updates the IP header TTL or Hop Count
field, requiring a recomputation of the IPv4 header checksum.</li>
 <li type="circle">The router encapsulates the IP packet in a new Data Link header (including the destination address) and trailer (including a new FCS) to create a new frame. </li>
        <p class="card-text">The preceding list is a generic view of the process. Next, a few words on how Cisco routers can optimize the routing process by using Cisco Express Forwarding (CEF). 
</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Process Switching, Fast Switching, and Cisco Express Forwarding 
 </p>
        <p class="card-text">Steps 6 and 7 from the generic routing logic shown in the preceding section are the most
computation-intensive tasks in the routing process. A router must find the best route to
use for every packet, requiring some form of table lookup of routing information. Also,
a new Data Link header and trailer must be created, and the information to put in the
header (like the destination Data Link address) must be found in another table. </p>

<p class="card-text">Cisco has created several different methods to optimize the forwarding processing inside
routers, termed switching paths . This section examines the two most likely methods to
exist in Cisco router networks today: fast switching and CEF.</p>
<p class="card-text">With fast switching, the first packet to a specific destination IP address is process
switched , meaning that it follows the same general algorithm as shown in Figure 6-1 .
With the first packet, the router adds the results of this daunting lookup to the fastswitching cache , sometimes called the route cache , organized for fast lookups. The
cache contains the destination IP address, the next-hop information, and the data-link
header information that needs to be added to the packet before forwarding (as in Step 6
in Figure 6-1 ). Future packets to the same destination address match the cache entry, so
it takes the router less time to process and forward the packet, as all results are already
stored in the cache. This approach is also sometimes termed route once, forward many
times . 
</p>
<p class="card-text">Although it is much better than process switching, fast switching has significant drawbacks. The first packet must be process switched, because an entry can be added to the
cache only when a packet is routed and the results of its routing (next hop, egress interface, Layer 2 rewrite information) are computed. A huge inflow of packets to destinations
that are not yet recorded in the route cache can have a detrimental effect on the CPU
and the router’s performance, as they all need to be process switched. The cache entries
are timed out relatively quickly, because otherwise the cache could get overly large as it
has an entry per each destination address, not per destination subnet/prefix. If the routing table or Layer 3–to–Layer 2 tables change, parts of the route cache must be invalidated rather than updated, causing packets for affected destinations to become process
switched again. Also, load balancing can only occur per destination with fast switching.
Overall, fast switching was a great improvement at the time it was invented, but since that
time, better switching mechanisms have been developed. One of them, Cisco Express
Forwarding (CEF), has become the major packet-forwarding mechanism in all current
Cisco IP routing implementations, with fast switching becoming practically unused. The
support for unicast fast switching has therefore been discontinued and removed from IOS
Releases 12.2(25)S and 12.4(20)T onward. </p>
<p class="card-text">To learn the basic idea behind CEF as an efficient mechanism to perform routing decisions, it is important to understand that the crucial part of routing a packet through a
router is finding out how to construct the Layer 2 frame header to allow the packet to
be properly encapsulated toward its next hop, and forward the packet out the correct
interface. Often, this operation is called a Layer 2 frame rewrite because that is what it
resembles: A packet arrives at a router, and the router rewrites the Layer 2 frame, encapsulating the packet appropriately, and sends the packet toward the next hop. The packet’s
header does not change significantly—in IPv4, only the TTL and checksum are modified; with IPv6, only the Hop Count is decremented. An efficient routing mechanism
should therefore focus on speeding up the construction of Layer 2 rewrite information
and egress interface lookup. The process switching is highly inefficient in this aspect: The
routing table lookup is relatively slow and might need recursive iterations until the directly attached next hop and egress interface are identified. The next-hop information must
then be translated in ARP or other Layer 3–to–Layer 2 mapping tables to the appropriate
Layer 2 address and the frame header must be constructed, and only then the packet can
be encapsulated and forwarded. With each subsequent packet, this process repeats from
the beginning. </p>

		<video src="images/vpn.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. What command is used to enable CEF globally for IPv6 packets? ',
        'options' => array(
            '1' => 'enable cef6',
            '2' => 'ipv6 enable cef ',
            '3' => 'ipv6 cef',
			'4' => 'ip cef (the command automatically enables CEF for IPv4 and IPv6) '
        ),
        'correct_answer' => '3'
    ),
    array(
        'question' => '2. Can CEF for IPv6 be enabled independently of CEF for IPv4?',
        'options' => array(
            '1' => 'Yes',
            '2' => 'No',
        
        ),
        'correct_answer' => '1'
    ),
    array(
        'question' => '3. Which of the following packet-switching paths is considered to be the slowest? ',
        'options' => array(
            '1' => 'Process Switching',
            '2' => 'Fast Switching',
            '3' => 'Route Cache',
			'4' => 'Cisco Express Forwarding'
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
    echo '<button class="btn btn-primary" onclick="window.location.href=\'cursccie1.php\'">Next</button>';
   
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