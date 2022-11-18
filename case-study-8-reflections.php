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
				<li class="breadcrumb-item"><a href="case-studeies.php">Case Studies</a></li>
				<li class="breadcrumb-item"><a href="case-study-8.php">Case Study 8</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 8 Reflection</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 8</h2>
				<h3 class="section-header">Questionning Student</h3>
				<div class="col-md-6 information">
					<div class="info">
					
						<strong>If you are in Michelle's situation, what would you do?</strong>
						<br>
						<br>
						<input name="Radio2" type="radio" value="yes"> Ignore Lily and continue with the class. <br>
						<input name="Radio2" type="radio" value="no"> Get angry at Lily for asking so many questions. <br>
						<input name="Radio2" type="radio" value="no"> Tell Lily that you will try to explain her about the questions later.<br>

						<strong>If the situation continues with Lily every class, what would you do? </strong>
						<br>
						<br>
						<input name="Radio1" type="radio" value="yes"> Ignore it and continue with your plan.<br>
						<input name="Radio1" type="radio" value="no"> After the class, talk to Lily and explain it to her that asking so many questions can disturb the class. <br>
						<input name="Radio1" type="radio" value="no"> Answer Lily evertime she asks a question. <br>
					</div>
				</div>			
				<div class="col-md-4 information">
					<div class="buttons row">
						<a href="case-study-8.php" class="btn btn-au-odark col">Back to Video</a>
						<a href="case-study-8-answer.php" class="btn btn-au-bdark col">Check Answer</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	