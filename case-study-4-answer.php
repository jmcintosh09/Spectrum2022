<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 4";
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
				<li class="breadcrumb-item"><a href="case-study-4.php">Case Study 4</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 4 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 4</h2>
				<h3 class="section-header">Critical Thinking</h3>
				<div class="col-md-6 information">
					<div class="info">					

                  <strong>What would you do differently with Melissa's third period class?</strong>
                  <br>
                  The right answer is: Have the lab at a later date so you can explain to the students how to use critical thinking to solve a problem.
                  <br>
                  <br>

                  The students were frustrated in fist period because they were not accustomed to using critical thinking to solve problems
                  in their classes. The students were used to having step by step instruction with the answer to the lab incorporated in the
                  lab worksheet.  The new way of thinking was unclear to them; they were not prepared to use a different way of thinking.
                  As a teacher you should explain critical thinking and positive problem-solving altitude. Have the students use the tool
                  that you taught them and have the lab at a later date.
                  <br>
                  <br>

                  <strong>
                      Do you agree with Melissa's initial idea that high school biology students should have opportunities
                      to solve real-world problems and apply concepts?
                  </strong>
                  <br>
                  The right answer is: Yes, problem solving teaches students to develop their own creativity, thinking skills, and communicative skills.
                  <br>
                  <br>

                  Teaching sciences or problem solving is challenging for all teachers. In problem solving, the procedures and problems themselves may be left open for students to determine. 
                  Fostering students learning in the processes of science is an important goal of science teaching. Problem solving teaches students to develop their own creativity, thinking skills, and communicative skills. 
                  Many people feel that these skills may be more important than the learning of any particular science fact or concepts.
                    <br>
                    <br>
					</div>
					<div class="buttons row">
						<a href="case-study-4-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="T-Note-4.php" class="btn btn-au-bdark col">Teacher's Note</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
