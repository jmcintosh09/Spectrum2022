<?php

$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");

	$headerpath = $rootdirectory."/_includes/header-pushdown.php";
    $titleimagepath = $rootdirectory."/images/spectrum_icon.png";

	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Spectrum Educational Tool";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";

	/* ----------------- */

include ($headerpath);

?>
	

	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
                
				<h1 id="page_title" class="title">
				<img src="<? echo $titleimagepath;?>" width="150" height="100" class="d-print-none" alt="<? echo $headerimage_alt;?>"> 
				 Spectrum Educational Tool</h1>
			</div>
			<div class="angle-right"></div>
		</div>

	</div>

	<nav id="secondary_nav_horiz" role="navigation" aria-label="Page and section navigation" class="sec-nav-horiz sticky navbar navbar-expand-xl navbar-light d-print-none" name="Section navigation">
	<div class="image-brand"></div>	
  <div class="container-fluid">

	<div class="navbar-brand">
		<span class="d-block d-xl-none">Menu</span>
		<span class="d-none d-sm-block"></span>
	</div>  


	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle page / section navigation">

	  <span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
		<li class="nav-item">
		  <a class="nav-link" href="#">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Services</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Case Studies</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="life-cases.php">Life Cases</a>
		</li> 
		<li class="nav-item dropdown">
          <a id="navbarDropdown01" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Item #3
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown01">
			<li><a class="dropdown-item" href="#">Chapter 1</a></li>
			  <li><a class="dropdown-item" href="#">Chapter 2</a></li>
			  <li><a class="dropdown-item" href="#">Chapter 3</a></li>
			  <li><a class="dropdown-item" href="#">Chapter 4</a></li>
          </ul>
        </li>   
		<li class="nav-item">
		  <a class="nav-link" href="#">Tools</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Contact Us</a>
		</li>
		<li class="nav-item dropdown">
          <a id="navbarDropdown02" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Item #6
          </a>
        </li>
	  </ul>
	</div>
  </div>
</nav>
	
	<div id="page_content" class="page-content pillars" role="main">

		<div class="content_row row">

			<h2 class="section-header">Spectrum Educational Tool</h2>

            <p>Innovative teacher training introduces a new set of demanding challenges and issues. Teaching has become a very complex and demanding process. Teachers with little exposure to digital media and with little preparation with digital media may face difficulties in dealing with the complexity of classroom teacing. These new teachers may often find the demands of the classroom too challenging and quckily become discourages or adopt a simplisitc view of teaching where 'Tricks & Trade' serve as a substitute for thoughtful process.</p>

			<h2 class="section-header">Why Spectrum Educational Tool?</h2>

            <p>By using Spectrum Education tool, it provides extensive training of teachers which will help them in understanding digital media and know better strategies for successful classroom management. The teachers will be well versed with teaching skills, instructional strategies, curricula and assessment practices. Our goal is to reinforce best practices for classroom management and to create an online learning environment to support pre-service and in-dervice teachers.</p>


	</div>
		
	</div>	
	
<?php include ($footerpath);?>

