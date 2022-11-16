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

	<div id="page_content" class="page-content staff-bio pillars" role="main">

		<div class="content_row breadcrumbs">
		
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Spectrum</a></li>
				<li class="breadcrumb-item"><a href="life-cases.php">Life Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 3</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="content row">
			
				<div class="col-md-5 video">
					<video width="400" height="250" controls>
						<source src="videos/Life_Case_3.mp4" type="video/mp4">
						<source src="videos/Life_Case_3.ogv" type="video/ogv">
						Your browser does not support the video tag.
					</video>
				</div>
				
				<div class="col-md-1"></div>
				
				<div class="col-md-6 information">
					<div class="name">Life Case 3</div>
					<div class="title">Bullying Student</div>					
					<div class="info">
						<p>
							At your school, teachers must rotate once every other week with playground duty,
							which involves being out on the playground during lunch	time and helping to monitor
							the activities of students on the playground. One day on your shift right before
							the bell rings to end the lunch recess, a student from your class comes up
							and tells you that Jon (another student from your class) is standing over in the
							corner and has been throwing rocks at both the building and in the general direction
							of other students. As you walk over to where Jon is to you, you see he now has a big
							rock in his hand. You first ask Jon to put down the rock and he refuses to
							comply, stating "You can't make me."
						</p>
					<div class="buttons row">
						<a href="life-case-2.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-3-reflections.php" class="btn btn-au-bdark col">Next</a>
					</div>
					</div>
					
				</div>
			
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
