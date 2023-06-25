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
      <img src="images/az-900.jpg"  alt="az-900">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Chapter 1: Cloud Concepts</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Understanding Cloud Computing</p>
        <p class="card-text"> Microsoft currently offers three cloud computing solutions: Microsoft Azure, Microsoft 365,
and Microsoft Dynamics 365. Azure, which is covered on the AZ-900 Certification Exam,
provides a broad spectrum of cloud services. These services encompass both server-based
and end user–based computing services, along with database services and analytics, artificial
intelligence, networking, infrastructure, and much more.</p>

        <p class="card-text">Both Microsoft cloud offerings enable organizations to eliminate computing infrastructure that they might normally host themselves. Larger organizations typically host their own
servers, networking equipment, and other IT resources in a data center, which is a facility
specifically designed and constructed to house servers and other IT hardware and related
infrastructure. Some organizations maintain their own data centers, whereas others contract
with a third-party data center provider to host their IT equipment and resources.
Smaller organizations generally either use a third-party data center or place their servers
and other IT infrastructure in one or more server rooms, which are essentially very small
data centers housed inside the company’s facility.</p>

        <p class="card-text">Figure 1.1 shows an example of an organization that is hosting some of its IT infrastructure and services in Azure. As Figure 1.1 illustrates, some of the organization’s IT resources
remain on site in their own data center, whereas other resources are hosted in Azure, and
services interact between the two environments.  
</p>
<br>
        <img src="images/az-900fig11.jpg" width="800" height="800"></img>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Benefits of Cloud Computing </p>
<p class="card-text">Leveraging a cloud computing model offers several benefits, both in financial cost and
human resources. This section explores these primary benefits.</p>

<p class="card-text" style="font-wheight: bold; font-size:25px;"> Economic Benefits </p>

<p class="card-text">IT hardware, infrastructure, and related resources can be extremely expensive. In an onpremises model where an organization hosts its own IT infrastructure, whether in its own
data center or a third-party data center, the organization bears the cost of the hardware,
shipping, support, and related costs. The cost is amortized over several years, sometimes
longer than the useful life of the hardware. This type of purchase is a capital expenditure
(CapEx), which is money spent by an organization to acquire or maintain fixed assets. Most
organizations carefully budget their capital expenditures and require a yearlong budgeting
process to set the CapEx budget, and then hold strictly to the budget.</p>
<p class="card-text">With Azure, Microsoft handles the capital expenditures necessary to maintain and grow
the service. An organization using Azure services therefore eliminates those capital expenditures and replaces them with operational expenditures (OpEx), which are monthly expenditures that the organization uses to run its operation. For example, rather than purchasing
a license for Microsoft Office for each user (which would be a capital expense), the organization pays a monthly per-user fee for Microsoft 365 (an operational expense). Instead of
incurring a relatively large up-front cost for the perpetual license, the organization spreads
out the cost on a monthly basis.
</p>
<p class="card-text">The move from a capital to an operational expenditure model can eliminate very large
up-front costs to deploy hardware, licenses, support contracts, and other resources. The
operational model not only avoids those large up-front expenditures, but also enables the
organization to spread the cost throughout the year. It also allows the organization to tie the
cost to headcount, so if an individual leaves the organization, the corresponding operational
cost also goes away (or is simply reallocated to an incoming resource).</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">  Scalability and Elasticity </p>

<p class="card-text">Two additional benefits of cloud computing are scalability and elasticity. Scalability is the
ability to add computing resources to adjust to increased demand. For example, assume your
organization deploys a web farm to handle e-commerce business. For seven or eight months
out of the year, your needs are relatively stable. During a peak holiday season, however, you
might need several additional servers to handle the increased traffic from sales. You can scale
out your servers, adding additional ones to meet the increased demand, then scale in (eliminate the additional servers) when the peak season is over. This is called horizontal scaling.
Instead of incurring the up-front capital expenditure cost of the equipment, you have an
increased operational cost only while you are using those servers. Figure 1.2 illustrates an
example of horizontal scaling.</p>
<br>
        <img src="images/az-900fig12.jpg" width="800" height="450"></img>
        <p class="card-text">There are two types of scalability. The previous example described scaling out and its
reverse, scaling in. Scaling up, also called vertical scaling, refers to adjusting capacity in
existing resources to accommodate demand changes. For example, increasing the amount of memory available to a virtual server is an example of scaling up. Adding more processor
cores to an existing server is another example of scaling up. As with horizontal scaling, you
can go the other way with vertical scaling. When you remove the extra memory when you
no longer need it, you’re scaling down. Figure 1.3 illustrates an example of vertical scaling. </p>
<br>
        <img src="images/az-900fig13.jpg" width="800" height="450"></img>
<p class="card-text" style="font-wheight: bold; font-size:25px;">  High Availability  </p>

<p class="card-text">High availability (HA) describes a system that is available for use without significant outages and that is generally backed by a service level agreement (SLA). For example, if a service has an SLA of 99.9 percent, the service is guaranteed to be available 99.9 percent of the
time. Translated to the real world, that means the service can be unavailable no more than
43.2 minutes in a 30-day period to meet the 99.9 percent SLA for that month. A financially
backed SLA provides a credit for the time in which the service was unavailable.</p>
	
        <p class="card-text" style="font-wheight: bold; font-size:25px;">   Fault Tolerance</p>

<p class="card-text">The term fault tolerance describes a characteristic of a system that enables it to continue
functioning when one or more components of the system fails. For example, a typical
SharePoint farm consists of at least one database server, a web server, and an application
server. These servers together provide the SharePoint services that users consume. If the
web server goes down, the service becomes unavailable. To make the SharePoint farm more
fault tolerant, you can add a second web server and balance traffic between them. So, if
one web server goes down, the other continues to serve web requests. Users might notice a degradation in responsiveness, but the service remains functional. The SharePoint farm is
now fault tolerant to a degree. Figure 1.2 (shown earlier) illustrates this example. </p>
		
        <p class="card-text" style="font-wheight: bold; font-size:25px;"> Disaster Recovery</p>

<p class="card-text">Fault tolerance generally applies at the component level of a service. For example, adding a
second web server, ensuring that a virtual machine can quickly fail over to another instance,
or creating a clustered database instance are examples of fault tolerance. Fault tolerance generally comes into play when a single resource fails.
Disaster recovery refers to the process of recovering from a situation where multiple systems or services fail. For example, assume that your company’s primary data center is hit
by a tornado, destroying all the IT infrastructure and services hosted at that location. This
is certainly a disaster. Recovering from that disaster, however, might be as difficult as setting
up all new servers and restoring their configuration and data from backups, or it could be
as (relatively) simple as pointing all of your users to a backup data center where all of your
infrastructure has been actively duplicated, updated, and ready to become your primary
data center</p>
<p class="card-text">a center.
There is no right answer for a disaster recovery strategy, and it is very much situational
and tied to your business continuity needs and defined by the IT services you provide. A
very small company, for example, might only need a complete set of backups of its only
server and data so that it can quickly restore to a new server. A large organization naturally
requires a much more complex disaster recovery plan that can include multiple data centers,
active mirroring of services between data centers, and much more. Many organizations are
turning to Azure to not only provide a higher level of fault tolerance than they could otherwise implement on-premises, but to implement a disaster recovery environment in Azure for
their on-premises systems. Other organizations are turning to Microsoft 365 and Azure to
host all of their IT services, with no on-premises IT infrastructure at all, to attain a high level
of flexibility, elasticity, fault tolerance, and disaster recovery.</p>

		<br>
		<video src="images/az-900.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. The cost per subscriber decreases as the number of Azure subscribers increases. Which benefit
        of cloud computing does this statement describe? ',
        'options' => array(
            '1' => 'Agility',
            '2' => 'Scalability ',
            '3' => 'Economy of scale',
			'4' => 'Elasticity '
        ),
        'correct_answer' => '3'
    ),
    array(
        'question' => '2. You are an IT director for Contoso and are preparing a proposal to your CIO to move all IT
        infrastructure to Azure. Which of the following is an advantage to moving your infrastructure to a public cloud provider?',
        'options' => array(
            '1' => 'You will have complete control over all infrastructure, network, applications, and all
            other resources in the cloud.
            ',
            '2' => '. You can scale your infrastructure horizontally or vertically without capital expenditure
            costs ',
            '3' => 'You will reduce your operational expenditures ',
			'4' => 'The cloud provider will manage all infrastructure for you, enabling Contoso to reduce
            IT staff.'
        ),
        'correct_answer' => '4'
    ),
    array(
        'question' => '3. You deploy a web app using Azure App Services and configure autoscaling for it so that
        it can request additional compute resources when the app experiences high increases in
        demand. What is this an example of? ',
        'options' => array(
            '1' => 'Elasticity',
            '2' => 'PaaS',
            '3' => 'Fault tolerance ',
			'4' => 'High availability'
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
    echo '<button class="btn btn-primary" onclick="window.location.href=\'cursaz-9001.php\'">Next</button>';
   
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
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button"
        ><i class="fa fa-facebook-square fa-3x social"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button"
        ><i class="fa fa-twitter-square fa-3x social"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com" role="button"
        ><i class="fa fa-google-plus-square fa-3x social"></i
      ></a>

      
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