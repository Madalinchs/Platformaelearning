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
<div class="card mb-3" style="margin-left: 35px; width: 1460px; height: 5000px">
  <div class="row g-0">
    <div class="col-md-3">
      <img src="images/az-900.jpg"  alt="az-900">
    </div>
    <div class="col-md-9">
      <div class="card-body">
        <h5 class="card-title" style="font-wheight: bold; font-size:35px;">Chapter 2: Azure Core Services</h5>
        <p class="card-text" style="font-wheight: bold; font-size:25px;">Geographies and Regions</p>
        <p class="card-text">As explained previously in this chapter, Azure has multiple data centers distributed around
the globe. Those data centers house the servers and other infrastructure on which Azure
is built. The data centers are distributed into various geographies. The Azure geographies generally align to specific countries such as the United States, Canada, Australia,
and so on. However, Azure geographies can also be aligned to specific markets, such as
Europe and Asia.</p>

        <p class="card-text">Compliance and data residency are key aspects of an Azure geography, and China is
a good example. Azure China is a physically isolated instance of Azure located wholly in
China. Azure China is operated by Shanghai Blue Cloud Technology Co., Ltd. (21Vianet).
Azure China enables Chinese companies and entities to host their data and applications
within China and meet strict Chinese regulatory requirements. Azure China is not limited to
Chinese government entities.</p>

        <p class="card-text">Within each geography are Azure regions. A region is a grouping of data centers that
interact to provide redundancy and availability for the services hosted within that region.
For example, West US, Central US, and North Central US are three of many regions in
the United States. Each region is paired with another in the same geography to allow for
replication of resources across multiple data centers to reduce the effects of natural disasters, outages, or other potential events that would affect a given data center’s ability to
serve up the services hosted in that data center. For example, West US and East US are
paired regions, North Europe and West Europe are paired, and UK West and UK South are
paired. Figure 2.1 shows the relationship between geographies, region pairs, regions, and
data centers. 
</p>
<br>
        <img src="images/az-900fig21.jpg" width="800" height="700"></img>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Availability Zones </p>
<p class="card-text">As Figure 2.1 illustrates, there is a nested nature to Azure that provides both fault tolerance and availability. Azure offers another level of availability protection through availability zones. An availability zone is a physically separate zone within a region, each with its
own power, network, and cooling. You might think of an availability zone as a data center,
although the separation of power, network, and cooling defines the zone, not the physical
data center. An availability zone might encompass more than one data center. There are a
minimum of three availability zones per region, although not all regions offer availability
zones. Figure 2.2 illustrates availability zones.</p>
<p class="card-text">For example, assume you need to deploy a set of virtual machines (VMs) to host a line-ofbusiness service but need to ensure that the service remains available in the event of a failure
at one of the data centers hosting the VMs. You deploy VMs to an additional availability
zone so that if an incident does occur at one of the data centers, the VMs in the other availability zone will be unaffected.</p>
<br>
        <img src="images/az-900fig22.jpg" width="800" height="700"></img>
<p class="card-text" style="font-wheight: bold; font-size:25px;"> Resources and Resource Groups </p>

<p class="card-text">Azure resources are manageable items in Azure such as virtual machines, databases,
virtual networks, and storage accounts. Figure 2.3 shows an example of creating a
resource in Azure.</p>
<br>
        <img src="images/az-900fig23.jpg" width="800" height="800"></img>
<p class="card-text">If you deploy only a few resources to Azure, managing them will likely not be a significant
challenge. However, your Azure solution may grow to encompass a very large number of
resources of different types, all potentially scattered across multiple regions. As the number
of resources grows, your ability to manage them individually quickly becomes difficult.
Resource groups provide a means for organizing and managing resources.

</p>
<p class="card-text">Think of a resource group as a logical container for one or more resources. You can apply
various properties to the resource group, and those properties apply to all the resources in
that resource group. For example, assume you have a group of resources that you want to
prevent from being deleted but want resource admins to be able to modify. You can create
a resource group, assign the resources to that group, and apply a CanNotDelete lock on the
resource group. Any resources that you later apply to the resource group will also be
automatically protected from deletion.</p>
<p class="card-text" style="font-wheight: bold; font-size:25px;">  Azure Resource Manager </p>

<p class="card-text">Azure Resource Manager (ARM) is the service that enables you to manage resources, serving as the deployment and management service for Azure. ARM is not a tool or interface.
Rather, as a service it functions as the broker between management tools like the Azure
portal and resource providers. For example, when you create a VM in the Azure portal, the
portal sends the properties to the ARM application programming interface (API). ARM then
communicates with the resource provider to create the VM.</p>

        <p class="card-text">ARM supports the use of templates for creating, managing, and monitoring resources.
ARM templates are JavaScript Object Notation (JSON) files that define one or more
resources and their properties to deploy a tenant, management group, subscription, or
resource group. So, you can automate the deployment of an entire Azure environment by
using templates. ARM templates significantly simplify the creation of resources because you
only need to declare in the template what you want to create and what its properties will be,
and ARM then passes that information to the Azure providers, which then actually create
the resources. </p>



		<br>
		<video src="images/az-9001.mp4" width="800" height="450" controls ></video>
		<br>
		<br>
        <p class="card-text" style="font-style: italic; font-size:30px;">QUIZ:</p>

		<?php
$quiz = array(
    array(
        'question' => '1. Which of the following is not a feature of Azure App Service?',
        'options' => array(
            '1' => 'Support for multiple development languages, including Java and Python',
            '2' => 'Support for Windows and Linux ',
            '3' => 'Firewall protection for apps you develop with Azure App Service',
			'4' => 'Support for containers '
        ),
        'correct_answer' => '2'
    ),
    array(
        'question' => '2. You need to deploy a stateful application using Azure Container Instances. Which of the following provides storage, enabling the application to store and retrieve persistent state?',
        'options' => array(
            '1' => 'Azure Disk',
            '2' => 'Azure Files ',
            '3' => 'Azure Blob',
			'4' => 'Azure Archive'
        ),
        'correct_answer' => '2'
    ),
    array(
        'question' => '3. Which of the following Azure services is designed for storing nonstructured data and includes
        support for NoSQL?
         ',
        'options' => array(
            '1' => 'Azure SQL Database',
            '2' => 'Azure HDInsight',
            '3' => 'Azure Database for MySQL',
			'4' => 'Azure Cosmos DB'
        ),
        'correct_answer' => '1'
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