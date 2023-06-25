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
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 4500px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/ccna.jpg"  alt="ccna">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Fundamental Routing Concepts</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Chapter 2: Remote Site Connectivity</p>
        <p class="card-text" style="font-wheight: bold; font-size:25px;"> Remote Connectivity Overview</p>
        <p class="card-text">  The voice, video, and data commonly sent between remote offices and central sites often
demand low latency and easy provisioning, all while maintaining a low cost. Traditional
WAN solutions (for example, leased lines, Frame Relay, and ATM) typically fail to simultaneously meet all these requirements. Fortunately, a variety of VPN technologies fit
nicely into such a design.
 This section categorizes various VPN technologies. Then, the remainder of this chapter
examines these technologies in a bit more detail.</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">MPLS-Based Virtual Private Networks </p>
        <p class="card-text">Multiprotocol Label Switching (MPLS) is a technology commonly used by service
providers, although many large enterprises also use MPLS for their backbone network.
MPLS makes forwarding decisions based on labels rather than IP addresses. Specifically,
a 32-bit label is inserted between a frame’s Layer 2 and Layer 3 headers. As a result, an
MPLS header is often called a shim header , because it is stuck in between two existing
headers.
 MPLS-based VPNs can be grouped into one of two primary categories:</p>
 <li type="circle">Layer 2 MPLS VPNs</li>
 <li type="circle">Layer 3 MPLS VPNs</li>
        <p class="card-text">These two approaches are discussed further in the section “MPLS VPN,” later in this
chapter.  
</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Tunnel-Based Virtual Private Networks </p>
        <p class="card-text">A tunnel is a virtual connection that can physically span multiple router hops. However,
from the perspective of the traffic flowing through the tunnel, the transit from one end
of a tunnel to the other appears to be a single router hop.
 Multiple VPN technologies make use of virtual tunnels. A few examples discussed in this
chapter include</p>
<li type="circle">Generic Routing Encapsulation (GRE)</li>
<li type="circle">Dynamic Multipoint VPN (DMVPN)</li>
<li type="circle">Multipoint GRE</li>
<li type="circle">IPsec</li>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Hybrid Virtual Private Networks </p>

<p class="card-text">Rather than just using a single MPLS-based VPN technology or a single tunnel-based
VPN technology, you can use select VPN technologies in tandem. For example, you
might want to extend an MPLS network at one corporate location to MPLS networks at
remote corporate locations, while having a requirement that traffic traveling through a
service provider’s cloud be encrypted.</p>
<p class="card-text">You could meet the requirements of such a design by having a Layer 3 MPLS VPN set up
over a DMVPN. The DMVPN technology carrying the Layer 3 MPLS VPN traffic allows
you to efficiently set up direct links between corporate locations, and it also allows you
to use IPsec, which can encrypt the traffic flowing through the service provider’s cloud.
</p>
<p class="card-text">When it comes to hybrid VPNs, a significant design consideration is overhead . Every
time you add an encapsulation, you are adding to the total header size of the packet.
With more headers, the amount of data you can carry inside a single packet is decreased.
As a result, you might have to configure a lower maximum transmission unit (MTU)
size for frames on an interface.</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">  MPLS VPN </p>

<p class="card-text">MPLS VPNs extend the capabilities of MPLS, supporting VPNs created across an MPLS
network. These VPNs, most commonly found in service provider or large enterprise networks, can be categorized as either Layer 2 MPLS VPNs or Layer 3 MPLS VPNs. </p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">   Layer 2 MPLS VPN  </p>

<p class="card-text">With a Layer 2 MPLS VPN, the MPLS network allows customer edge (CE) routers at different sites to form routing protocol neighborships with one another as if they were Layer
2 adjacent. Therefore, you can think of a Layer 2 MPLS VPN as a logical Layer 2 switch,
as depicted in Figure 2-1 . </p>
		<br>
        <img src="images/ccnpfig21.jpg" width="800" height="450"></img>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">    Layer 3 MPLS VPN </p>

<p class="card-text">With a Layer 3 MPLS VPN, a service provider’s provider edge (PE) router (also known
as an Edge Label Switch Router [ELSR] ) establishes a peering relationship with a CE
router, as seen in Figure 2-2 . Routes learned from the CE router are then sent to the
remote PE router in the MPLS cloud (typically using multiprotocol BGP [MP-BGP] ),
where they are sent out to the remote CE router. </p>
		<br>
        <img src="images/ccnpfig22.jpg" width="800" height="450"></img>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">   GRE </p>

<p class="card-text">As its name suggests, a Generic Routing Encapsulation (GRE) tunnel can encapsulate
nearly every type of data that you could send out of a physical router interface. In fact,
GRE can encapsulate any Layer 3 protocol, which makes it very flexible.</p>
<p class="card-text">GRE by itself does not provide any security for the data it transmits; however, a GRE
packet can be sent over an IPsec VPN, causing the GRE packet (and therefore its contents) to be protected. Such a configuration is commonly used, because IPsec can only
protect unicast IP packets. This limitation causes issues for routing protocols that use IP
multicasts. Fortunately, a GRE tunnel can encapsulate IP multicast packets. The resulting
GRE packet is an IP unicast packet, which can then be protected by an IPsec tunnel. </p>
<p class="card-text"> As an example, consider Figure 2-3 . Routers R1 and R2 need to form an Open Shortest
Path First (OSPF) neighborship across the service provider’s cloud. Additionally, traffic
between these two routers needs to be protected. While IPsec can protect unicast IP traffic, OSPF communicates through IP multicasts. Therefore, all traffic between Routers R1
and R2 (including the OSPF multicasts) is encapsulated inside of a GRE tunnel. Those
GRE packets, which are unicast IP packets, are then sent across, and protected by, an
IPsec tunnel. </p>
		<br>
        <img src="images/ccnpfig23.jpg" width="800" height="450"></img>
		<br>
		<video src="images/vpn.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. Which of the following is a valid design consideration for a hybrid VPN? ',
        'options' => array(
            '1' => 'You cannot encapsulate an encrypted packet.',
            '2' => 'You cannot encrypt an encapsulated packet. ',
            '3' => 'You might need to decrease the MTU size for frames on an interface.',
			'4' => 'You might need to increase the MTU size for frames on an interface. '
        ),
        'correct_answer' => '3'
    ),
    array(
        'question' => '2. In a Layer 3 MPLS VPN, with what does a CE router form a neighborship?',
        'options' => array(
            '1' => 'A PE in the MPLS network.',
            '2' => 'A CE at a remote location. ',
            '3' => 'No neighborship is formed, because the MPLS network acts as a logical switch. ',
			'4' => 'No neighborship is formed, because IP multicast traffic cannot be sent across
            an MPLS network.'
        ),
        'correct_answer' => '1'
    ),
    array(
        'question' => '3. You want to interconnect two remote sites with a VPN tunnel. The tunnel needs
        to support IP unicast, multicast, and broadcast traffic. Additionally, you need to
        encrypt traffic being sent over the tunnel. Which of the following VPN solutions
        meets the design requirements? ',
        'options' => array(
            '1' => 'Use a GRE tunnel.',
            '2' => 'Use an IPsec tunnel',
            '3' => 'Use a GRE tunnel inside of an IPsec tunnel. ',
			'4' => 'Use an IPsec tunnel inside of a GRE tunnel.'
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