<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php"); ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Life Cases";
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
		  <a class="nav-link" href="#">About</a>
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
				
			
				<h2 class="section-header">Life Cases</h2>
				
				
				<!--<h3 class="section-header">Sub-Department Name</h3>-->
				
				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-3">
					
					<div class="col item">
						<a href="life-case-1.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/1/2.png' 
									onmouseover="this.src='./life-case-images/1/1.png';" 
									onmouseout="this.src='./life-case-images/1/2.png';" 
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 1</h4>
									<p class="card-text">Threatening Student</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="life-case-2.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/2/2.png' 
									onmouseover="this.src='./life-case-images/2/1.png';" 
									onmouseout="this.src='./life-case-images/2/2.png';"
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 2</h4>
									<p class="card-text">Negative Group Dynamics</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="life-case-3.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/3/2.png' 
									onmouseover="this.src='./life-case-images/3/1.png';" 
									onmouseout="this.src='./life-case-images/3/2.png';"
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 3</h4>
									<p class="card-text">Bullying Student</p>
								</div>
							</div>
						</a>	
					</div>
				
				</div>
				
				<div class="row row-cols-1 row-cols-sm-3 row-cols-xl-3">
					
					<div class="col item">
						<a href="life-case-4.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/4/2.png' 
									onmouseover="this.src='./life-case-images/4/1.png';" 
									onmouseout="this.src='./life-case-images/4/2.png';"
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 4</h4>
									<p class="card-text">Disrespectful Student</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="life-case-5.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/5/2.png' 
									onmouseover="this.src='./life-case-images/5/1.png';" 
									onmouseout="this.src='./life-case-images/5/2.png';" 
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 5</h4>
									<p class="card-text">Attention Seeking Student</p>
								</div>
							</div>
						</a>	
					</div>
					
					<div class="col item">
						<a href="life-case-6.php">
							<div class="card h-100">
								<img 
									src='./life-case-images/6/2.png' 
									onmouseover="this.src='./life-case-images/6/1.png';" 
									onmouseout="this.src='./life-case-images/6/2.png';"
									class="card-img-top" 
									alt="..." 
								/>
								<div class="card-body">
									<h4 class="card-title">Life Case 6</h4>
									<p class="card-text">Emotionally Neglected Student</p>
								</div>
							</div>
						</a>	
					</div>
				
				</div>
				
			</div>
			
		</div>
	
	</div>

</div>	
	
<?php include ($footerpath);?>
	
