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
				<li class="breadcrumb-item active" aria-current="page">Life Case 6 Reflection</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 6</h2>
				<h3 class="section-header">Emotionally Neglected Student</h3>
				<div class="col-md-6 information">
					<div class="info">
						<strong>What is the best possible way to handle this situation?</strong>
						<br>
						<input name="Radio2" type="radio" value="yes"> Solve the issue collaboratively, talk to Jill about her situaion and try to explain to her the classes she missed in your free time.<br>
						<input name="Radio2" type="radio" value="no"> As her parents are not showing any interest, ignore the Jill's behaviour. <br>
						<input name="Radio2" type="radio" value="no"> Ask Jill to hire a personal tutor to cover the missed classes.<br>
						<br>
					</div>


					<div class="info">
						<strong>Analysing Jill's behaviour, what could be the reason for Jill's lack of interest in class?</strong>
						<br>
						<input name="Radio1" type="radio" value="yes"> As she missed out of many classes, she is not able to catch up with the new material by which she is losing interest in class. <br>
						<input name="Radio1" type="radio" value="no"> She does not want to go to school and is trying to drop out. <br>
						<input name="Radio1" type="radio" value="no"> Due to many personal problems at home, she is not able to concentrate.<br>
						<br>
					</div>

					<div class="info">
						<strong>As Jill's parents are not showing interest in their daughter's academic status, what can you do about them? </strong>
						<br>
						<input name="Radio3" type="radio" value="yes"> Ignore the ignorance of her parents towards their daughter, and you try to resolve the issues related to class.<br>
						<input name="Radio3" type="radio" value="no"> Complain to the authorities that Jill's parents are not taking any interest. <br>
						<input name="Radio3" type="radio" value="no"> Get angry at Jill's parents and warn them to change their attitude. <br>
						<br>
					</div>
				</div>			
				<div class="col-md-4 information">
					<div class="buttons row">
						<a href="life-case-6.php" class="btn btn-au-odark col">Back to Video</a>
						<a href="life-case-6-answer.php" class="btn btn-au-bdark col">Check Answers</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
