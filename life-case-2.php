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

	<div id="page_content" class="page-content staff-bio pillars" role="main">

		<div class="content_row breadcrumbs">
		
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Spectrum</a></li>
				<li class="breadcrumb-item"><a href="life-cases.php">Life Cases</a></li>
				<li class="breadcrumb-item active" aria-current="page">Life Case 2</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="content row">
			
				<div class="col-md-5 video">
					<video width="400" height="250" controls>
						<source src="videos/Life_Case_2.mp4" type="video/mp4">
						<source src="videos/Life_Case_2.ogv" type="video/ogv">
						Your browser does not support the video tag.
					</video>
				</div>
				
				<div class="col-md-1"></div>
				
				<div class="col-md-6 information">
					<div class="name">Life Case 2</div>
					<div class="title">Negative Group Dynamics</div>					
					<div class="info">
						<p>
							Ms. Lily is a teacher to sixth grade students. There are four students in her class who have disruptive behaviour 
							by acting out and seeking attention. One day while Ms. Lily was teaching the class, they were talking and cracking up at each other.
							To her surprise, one of the students started dancing in the class. 
							Even after the lunch time, when the rest of the class had already left back to the classroom, they were still playing.
							After the class has started, they walked 15 minutes late into the classroom when the quiz review is going on. 
							During the quiz review, Ms. Lily has decided to review the quiz in groups.
							After forming their group, the boys talked so loud and asked questions that had already been answered out loud. 
							In addition, while the class is going on, one of the boys was constantly sneezing. After each sneeze one of the other boys would say "bless you" loud.
							The behaviour of these four boys was making  other students pay more attention to them than they were to the teacher. 
							This is the case of disruptive behaviour in the classroom.
						</p>
					<div class="buttons row">
						<a href="life-case-1.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-2-reflections.php" class="btn btn-au-bdark col">Next</a>
					</div>
					</div>
					
				</div>
			
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
