<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 1";
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
				<li class="breadcrumb-item"><a href="case-study-1.php">Case Study 1</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 1 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 1</h2>
				<h3 class="section-header">Experience Student</h3>
				<div class="col-md-6 information">
					<div class="info">					
                    <strong>Considering Darrens behavioral problems and his history of antagonizing fellow students, should he be permitted to continue his presentation?</strong>
                    <br>
                    <br>
                    Yes, Darren should be permitted to continue his presentation. <br>
                    
                    Consistent with teaching practices that are aligned with constructivist philosophy and learning theory, 
                    current thinking in science education reflects a shift from the teacher imparting knowledge to students, 
                    with communication mainly one way, to the teacher as a facilitator of learning with students acting both as learners and, 
                    in some circumstances, as teachers too. When this occurs, networks of student teachers and learners may spring into existence,
                    and it is quite possible that the teacher sometimes begins acting as a co-learner as well. 
                    <br>
                    <br>
					</div>
					<div class="buttons row">
						<a href="case-study-1-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="T-Note-1.php" class="btn btn-au-bdark col">Teacher's Note</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
