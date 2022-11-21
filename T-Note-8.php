<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 8";
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
				<li class="breadcrumb-item"><a href="case-studies.php">Case Studies</a></li>
				<li class="breadcrumb-item"><a href="case-study-8.php">Case Study 8</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 8 Teacher Note</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header text-center">Case Study 8</h2>
				<h3 class="section-header text-center">Quesitoning Student</h3>
				<div class="video text-center">
					<video width="600" height="350" poster = "case-study-images/8/3.png" controls>
						<source src="videos/8 TNote.mp4" type="video/mp4">
						<source src="videos/8-teacher_s-note.ogv" type="video/ogv">
						Your browser does not support the video tag.
					</video>
				</div>		
				<div class=" justify-content-center information ">
					<div class="buttons row">
						<a href="case-study-8-answer.php" class="btn btn-au-odark col">Back</a>
						<a href="case-study-9.php" class="btn btn-au-bdark col">Next Case Study</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
