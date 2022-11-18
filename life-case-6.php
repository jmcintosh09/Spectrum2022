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

	<div id="page_content" class="page-content staff-bio pillars" role="main">

		<div class="content_row breadcrumbs">
		
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Spectrum</a></li>
				<li class="breadcrumb-item"><a href="life-cases.php">Life Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 6</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="content row">
			
				<div class="col-md-5 video">
					<video width="400" height="250" controls>
						<source src="videos/Life_Case_6.mp4" type="video/mp4">
						<source src="videos/Life_Case_6.ogv" type="video/ogv">
						Your browser does not support the video tag.
					</video>
				</div>
				
				<div class="col-md-1"></div>
				
				<div class="col-md-6 information">
					<div class="name">Life Case 6</div>
					<div class="title">Emotionally Neglected Student</div>					
					<div class="info">
						<p>
							Jill is a student in Mr. Smith's class and is not attentive in the class. She is completely 
							disconnected from what is being taught in the class and seems to be in another world.
							At home, Jill's parents fight every day and they went through a nasty divorce. Unfortunately,
							Jill has to witness it.	Mr. Smith met with her parents and mentioned to them about her behaviour.
							But, her parents did not take any action to correct these issues. Her behaviour in class can most 
							likely be attributed to the lack of attention that she gets at home. Everyday in the class, Jill 
							gets up and goes to the bathroom on an average of three times per hour,	and will be gone for at 
							least ten minutes at a time. In addition to that, she was absent for 4 days for a spontaneous 
							trip to a beach. Since she missed many classes, she started to fail most assignments. 
							At times however, Jill tries to win back her peers by making others feel sorry for her.
							To conclude, Jill is a student who is disconnected to the class due to the neglection of parents who have 
							no interest in their daughter's academic success at school.
						</p>
					<div class="buttons row">
						<a href="life-case-5.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-6-reflections.php" class="btn btn-au-bdark col">Discussion and Reflections</a>
					</div>
					</div>
					
				</div>
			
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
