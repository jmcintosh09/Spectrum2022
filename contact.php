<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php"); ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Contact Us";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";

	/* ----------------- */

?>

<?php include ($headerpath);?>



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
		  <a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="case-studies.php">Case Studies</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="life-cases.php">Life Cases</a>
		</li>
		<li class="nav-item">
		  <a class="nav-link" href="#">Contact Us</a>
		</li>
	  </ul>
	</div>
  </div>
</nav>

<div id="page_content" class="page-content no-title-container arrow-bottom " role="main">	

	<div id="page_content" class="page-content pillars" role="main">

		<div class="content_row row">
			
			<div class="content staff row ">
				
			
				<h2 class="section-header">Contact Us</h2>
				
				
				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-3">
					
					<div class="col item">
							<div class="card h-100">
								<img 
									src='./contact-images/Harrison.jpg' 
									class="card-img-top" 
									alt="Dr. Harrison" 
								/>
								<div class="card-body">
									<h4 class="card-title">Jamie Harrison</h4>
									<p class="card-text">Associate Professor and Program Coordinator</p>
									<p class="contact phone">Phone: (334) 844-8278</p>
									<p class="contact phone"></p>
									<p class="contact email"><a href="mailto:jlh0069@auburn.edu">Email: jlh0069@auburn.edu</a></p>
								</div>
							</div>
					</div>
					
					<div class="col item">
							<div class="card h-100">
								<img 
									src='./contact-images/Seals.jpg' 
									class="card-img-top" 
									alt="Dr. Seals" 
								/>
								<div class="card-body">
									<h4 class="card-title">Cheryl Seals</h4>
									<p class="card-text">Charles W. Barkley Professor</p>
									<p class="contact phone">Phone: (334) 844-6319</p>
									<p class="contact phone"></p>
									<p class="contact email"><a href="mailto:sealscd@auburn.edu">Email: sealscd@auburn.edu</a></p>
								</div>
							</div>
					</div>
				</div>

				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-3">
					
					<div class="col item">
							<div class="card h-100">
								<img 
									src='./contact-images/Thomas.jpg' 
									class="card-img-top" 
									alt="Dr. Tripp" 
								/>
								<div class="card-body">
									<h4 class="card-title">Chippewa Thomas</h4>
									<p class="card-text">Professor & Director of Faculty Engagement</p>
									<p class="contact phone">Phone: (334) 844-5701</p>
									<p class="contact phone"></p>
									<p class="contact email"><a href="mailto:thoma07@auburn.edu">Email: thoma07@auburn.edu</a></p>
								</div>
							</div>
					</div>

					<div class="col item">
							<div class="card h-100">
								<img 
									src='./contact-images/Tripp.jpg' 
									class="card-img-top" 
									alt="Dr. Tripp" 
								/>
								<div class="card-body">
									<h4 class="card-title">L. Octavia Tripp</h4>
									<p class="card-text">Associate Professor</p>
									<p class="contact phone">Phone: (334) 844-6799</p>
									<p class="contact phone"></p>
									<p class="contact email"><a href="mailto:tripplo@auburn.edu">Email: tripplo@auburn.edu</a></p>
								</div>
							</div>
					</div>
				
				</div>
				
			</div>
			
		</div>
	
	</div>

</div>	
	
<?php include ($footerpath);?>
	
