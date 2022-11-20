<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 2";
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
				<li class="breadcrumb-item"><a href="case-study-2.php">Case Study 2</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 2 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 2</h2>
				<h3 class="section-header">Apathetic Student</h3>
				<div class="col-md-6 information">
					<div class="info">					

                  <strong>
                      Mary has provided John with opportunities to peek his interest in class. Do you think Mary should have ignored John's behaviour
                      and think that he should learn by himself?
                  </strong>
                  <br>
                  The answer is that Mary should not assume that John would learn by himself. A teacher's responsiblity is to help the distracted students and at least
                  try to boost their interest. So, it is the correct way that Mary has helped John to pique his interest.
                  <br>
                  <br>

                  <strong>In the case of John, do you think that Mary's strategy would work?</strong>
                  <br>
                  The answer is that explaining the topics to John in person would make him inclined towards the subject. This might lead to
                  gain in his interest. And constantly conducting quizzes will also test his ability in the subject. So, Mary's strategy would work.
                  <br>
                  <br>

                  <strong>What other strategy should Mary follow to involve John in class?</strong>
                  <br>
                  Making the student to discuss with his/her friends or giving extra assignments might work in specific cases. But, pointing the student in the middle of the class
                  might lead to decrease in his/her confidence. So, in the case of John, Mary's strategy would work better.
                    <br>
                    <br>
					</div>
					<div class="buttons row">
						<a href="case-study-2-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="T-Note-2.php" class="btn btn-au-bdark col">Teacher's Note</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
