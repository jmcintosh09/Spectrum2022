<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 5";
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
				<li class="breadcrumb-item"><a href="case-study-5.php">Case Study 5</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 5 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 5</h2>
				<h3 class="section-header">Innapropriate Comments</h3>
				<div class="col-md-6 information">
					<div class="info">					

                    <strong>How should Ms. Peterson handle this situation?</strong>
                    <br>
                    The right answer is: Give him a warning and if he doesn't stop, send him to the principal's office.
                    <br>
                    <br>

                    Give Jack an opportunity to change his behaviour and if he continues to make inappropriate comments, you will need to inform
					the principal because Jack is being a distraction to the other students.
                    <br>
                    <br>

                    <strong>
					Should you call Jack's parents?
                    </strong>
                    <br>
                    The right answer is: Sure, but first give Jack the opportunity to change his behavior.
                    <br>
                    <br>

                    No student wants their parents to know about their behaviour. Give Jack the chance to change his behaviour and if that doesn't work inform the principal and Jack's parents.
                        <br>
                        <br>
					</div>
					<div class="buttons row">
						<a href="case-study-5-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="T-Note-5.php" class="btn btn-au-bdark col">Teacher's Note</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
