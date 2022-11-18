<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Life Case 2";
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
				<li class="breadcrumb-item"><a href="life-case-2.php">Life Case 2</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 2 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 2</h2>
				<h3 class="section-header">Negative Group Dynamics</h3>
				<div class="col-md-6 information">
					<div class="info">
						<strong>Clearly, the boys are trying to get attention. So, in this case, does ignoring them be helpful? </strong>
						<br>
						In most of the cases, involving a group seeking for attention, ignoring them would be the first option to do. If it does not work, the next solution would be
						to talk to the boys.
						<br>
						<br>
					</div>
					<div class="info">
						<strong>What is the best way to handle the situation? </strong>
						<br>
						Sometimes, ignoring the students can mislead them, causing them to take the teacher for granted. Talking to the boys and telling them that their behaviour is not advisable can make a change.
						<br>
						<br>
					</div>
					<div class="info">
						<strong>For such students, most of the time, the reason could be the lack of attention at home. Do you consider that? </strong>
						<br>
						Advising the boys not to disturb the class at first is a better way. If they do not listen, it is a better way to find the reason
						behind their acting out which could be the situations at home.
						<br>
						<br>
					</div>
					<div class="buttons row">
						<a href="life-case-2-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-3.php" class="btn btn-au-bdark col">Next Life Case</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
