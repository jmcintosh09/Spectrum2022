<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Life Case 3";
	$keywords = "Auburn University, Auburn, Alabama, War Eagle";
	$description = "Auburn University, one of the South’s largest universities, is a leader in arts and applied science education, and it brings a tradition of spirit to the responsive career preparation it offers.";
 	$previewimage = "https://auburn.edu/template/2022/_assets/images/bank/page-preview-samford-03.jpg";

	/* ----------------- */

?>

<?php include ($headerpath);?>

	<div id="title_container" class="title-container row align-items-center" role="banner" aria-labelledby="page_title">

		<div class="content col row align-items-center">
			<div class="col">
				<h1 id="page_title" class="title">
					<img src="<? echo $titleimagepath;?>" width="150" height="100" class="d-print-none" alt="<? echo $headerimage_alt;?>">
					Spectrum Educational Tool
				</h1>
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
				<li class="breadcrumb-item"><a href="life-case-3.php">Life Case 3</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 3 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 3</h2>
				<h3 class="section-header">Bullying Student</h3>
				<div class="col-md-6 information">
					<div class="info">
						<strong>What could be your possible immediate reaction to the student?</strong>
						<br>
						The answer is that you have to take the stone out of the student's hand and immediately take him to class.
						Though you are angry at the student for hurting other students, it should not be reflected as shouting or beating.
						<br>
						<br>
					</div>

					<div class="info">
						<strong>Do you need to notify the higher authorities about the incident?</strong>
						<br>
						As the incident involves physical abuse, hurting others students with stones, you need to notify the higher authorities.
						<br>
						<br>
					</div>

					<div class="info">
						<strong>Later, after going to the class, what actions do you take against Jon? </strong>
						<br>
						It is better to notify the higher authorities and allow them to take the appropriate actions.
						<br>
						<br>
					</div>
					<div class="buttons row">
						<a href="life-case-3-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-4.php" class="btn btn-au-bdark col">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
