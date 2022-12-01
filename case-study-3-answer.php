<? 
$rootdirectory = "./";
require($rootdirectory."/_includes/config.php");
$titleimagepath = $rootdirectory."/images/spectrum_icon.png"; ?>

<?
	
	/* PAGE & SPECIFIC METADATA - These are basic page metadata variables that can be customized for each page; These can also be updated on your config file for site-wide usage */

	$sitename = "Auburn University";
	$pagetitle = "Case Study 3";
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
				<li class="breadcrumb-item"><a href="case-study-3.php">Case Study 3</a></li>
				<li class="breadcrumb-item active" aria-current="page">Case Study 3 Answers</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Case Study 3</h2>
				<h3 class="section-header">Cooperation in Class</h3>
				<div class="col-md-6 information">
					<div class="info">					
                    <strong>Do you think cooperative work groups are used to promote science learning?</strong>
                    <br>
                    According to Kathy Cabe Trundle, cooperative learning can be an effective strategy for some students. Not all students
                    learn successfully in a group arrangement. Teachers must determine whether students are independent or 
                    social learners. 
                    <br>
                    <br>
                    <strong>Do you think the potential advantages of coperative learning outweigh the potential disadvantages? </strong>
                    <br>
                    According to Kathy Cabe Trundle, cooperative learning can be made advantageous through three strategies: addressing students' individual 
                    learning styles, implementing homogenous gender grouping, and holding students individually accountable for their work in cooperative groups.
                    <br>
                    <br>

                    <strong>Would you encourage Maggie to: </strong>
                    <br>
                        Kathy encourages Maggie to modify her plan for student assessment. For cooperative groups to be successful, students must have a group 
                        reward and individual accountability. Maggie could add an individual student assessment component to her cooperative learning model by
                        giving individual tests or quizzes to each student or randomly selecting work from one student to represent the entire group.

                    <br>
                    <br>
					</div>
					<div class="buttons row">
						<a href="case-study-3-reflections.php" class="btn btn-au-odark col">Back</a>
						<a href="T-Note-3.php" class="btn btn-au-bdark col">Teacher's Note</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
