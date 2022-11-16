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
				<li class="breadcrumb-item active" aria-current="page">Life Case 2 Reflection</li>
			  </ol>
			</nav>
			
		</div>	

		<div class="content_row row">
			
			<div class="col">
				<h2 class="section-header">Life Case 2</h2>
				<h3 class="section-header">Negative Group Dynamics</h3>
				<div class="col-md-6 information">
					<div class="info">					
						<strong>Clearly, the boys are trying to get attention. So, in this case, would ignoring them be helpful?</strong>
						<br>
						<input name="Radio2" type="radio" value="yes"> Yes, as giving more attention to them make it worse <br>
						<input name="Radio2" type="radio" value="no"> No, if ignored, the boys might take it for granted and continue. <br>
						<input name="Radio2" type="radio" value="no">Depends on the state of boys behaviour.<br>	
						<br>			
					</div>
					<div class="info">
						<strong>What is the best way to handle the situation?</strong>
						<br>
						<input name="Radio1" type="radio" value="yes"> Ignore the behaviour of the boys. <br>
						<input name="Radio1" type="radio" value="no"> Talk to the boys individually and advice them to not to disturb the class. <br>
						<input name="Radio1" type="radio" value="no"> Punish the most annoying one in the four which makes the others silent. <br>
						<br>
					</div>
					<div class="info">
						<strong>For such students, most of the time, the reason could be the lack of attention at home. Do you consider that?</strong>
						<br>
						<input name="Radio3" type="radio" value="yes"> Yes I will ask the boys about their situation at home. <br>
						<input name="Radio3" type="radio" value="no"> First talk to boys not to distrub the class. If they do not listen, then prey into their personal life at home. <br>
						<input name="Radio3" type="radio" value="no"> I do not wish to prey into students's personal life no matter the situation is. <br>
						<br>
					</div>
				</div>			
				<div class="col-md-4 information">
					<div class="buttons row">
						<a href="life-case-2.php" class="btn btn-au-odark col">Back</a>
						<a href="life-case-2-answer.php" class="btn btn-au-bdark col">Next</a>
					</div>
				</div>
			</div>
			
		</div>
	
	</div>	
	
<?php include ($footerpath);?>
	
