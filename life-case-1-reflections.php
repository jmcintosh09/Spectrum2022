<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php"); ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Spectrum Educational Tool";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";

	/* ----------------- */

?>

<?php include ($headerpath);?>

	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">Spectrum Educational Tool</h1>
			</div>
			<div class="angle-right"></div>
		</div>

	</div>

	<div id="page_content" class="page-content no-title-container arrow-bottom " role="main">

		<div class="content_row breadcrumbs">
		
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Spectrum</a></li>
				<li class="breadcrumb-item"><a href="life-cases.php">Life Cases</a></li>
				<li class="breadcrumb-item"><a href="life-case-1.php">Life Case 1</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 1 Reflection</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 1</h2>
				<div class="col-md-6 information">
					<div class="info">
					
						<strong> What is the next course of action you should take?</strong>
						<br>
						<br>
						<input name="Radio1" type="radio" value="yes"> Schedule a conference with the parents. <br>
						<input name="Radio1" type="radio" value="no"> Send them to time-out. <br>
						<input name="Radio1" type="radio" value="no"> Send the students to the counselor. <br>					
					</div>
				</div>			
				<div class="col-md-4 information">
					<div class="buttons row">
						<a href="life-case-1.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-1-answer.php" class="btn btn-au-bdark col">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
