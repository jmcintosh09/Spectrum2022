<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Life Case 6";
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
				<li class="breadcrumb-item"><a href="life-case-1.php">Life Case 6</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 6 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 6</h2>
				<h3 class="section-header">Emotionally Neglected Student</h3>
				<div class="col-md-6 information">
					<div class="info">					
						<strong>What is the best possible way to handle this situation? </strong>
						<br>
						The best answer could be talking to Jill about her situation and helping her out. Try explaning to her the classes she missed in your free time.
						<br>
						<br>
					</div>

					<div class="info">
						<strong>Analysing Jill's behaviour, what could be the reason for Jill's lack of interest in class?</strong>
						<br>
						Due to the diffrent spontaneous trips Jill is going, she missed out on many classes. So, when she returned to school, she is
						not able to understand tee new material which is based on the old material. So, she lost interest in what is going on in the class.
						<br>
						<br>
					</div>

					<div class="info">
						<strong>As Jill's parents are not showing interest in their daughter's academic status, what can you do about them? </strong>
						<br>
						Having concern about their daughter's academic success is a personal choice to Jill's parents. So, you cannot do anything about it except ignore them.
						Making your effort to help Jill is the best way.
						<br>
						<br>
					</div>
					<div class="buttons row">
						<a href="life-case-6-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="life-cases.php" class="btn btn-au-bdark col">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
