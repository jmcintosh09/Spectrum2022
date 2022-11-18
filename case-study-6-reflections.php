<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study";
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
				<li class="breadcrumb-item"><a href="case-studeies.php">Case Studies</a></li>
				<li class="breadcrumb-item"><a href="case-study-6.php">Case Study 6</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 6 Reflection</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 1</h2>
				<h3 class="section-header">Defiant Student</h3>
				<div class="col-md-6 information">
					<div class="info">
						<strong>What would you do differently with Melissa's third period class?</strong>
						<br>
						<br>

						<input name="Radio1" type="radio" value="yes">Try the lab again the same way.<br>
						<input name="Radio1" type="radio" value="no"> Have the lab at a later date so you can explain to the students how to us critical thinking to solve a problem.  <br>
						<input name="Radio1" type="radio" value="no"> Recreate the lab worksheet that gives the students step by step instructions and has the answer readily available.   <br>			
						
						<strong>Do you agree with Melissa's initial idea that high school biology students should have opportunities to solve real-world problems and apply concepts?</strong>
						<br>
						<br>

						<input name="Radio2" type="radio" value="yes">Yes, problem solving teaches students to develop their own creativity, thinking skills, and communicative skills.<br>
						<input name="Radio2" type="radio" value="no"> Sure, students should have at least on opportunity to try it.  <br>
						<input name="Radio2" type="radio" value="no"> No, students are not able to understand critical thinking and apply in to real-world problems.   <br>
						<br>				
					</div>
				</div>			
				<div class="col-md-4 information">
					<div class="buttons row">
						<a href="case-study-6.php" class="btn btn-au-odark col">Back to Video</a>
						<a href="case-study-6-answer.php" class="btn btn-au-bdark col">Check Answer</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
