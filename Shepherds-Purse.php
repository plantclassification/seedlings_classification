<?php
$title = $_COOKIE['mycookie'];
$kl = $_COOKIE['kl'];
$float=floatval($kl);
$float=$float*100;
$float=intval($float);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>result and information</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- stylesheet css -->
	<link rel="stylesheet" href="css2/bootstrap.min.css">
	<link rel="stylesheet" href="css2/font-awesome.min.css">
	<link rel="stylesheet" href="css2/templatemo-green.css">
	
</head>
<body data-spy="scroll" data-target=".navbar-collapse">

<!-- preloader section -->
<div class="preloader">
	<div class="sk-spinner sk-spinner-wordpress">
       <span class="sk-inner-circle"></span>
     </div>
</div>

<!-- header section -->
<header>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<img src="<?php echo $title; ?>" height="500" width="500" class="img-responsive 1img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow">We believe it belongs to Shepherds Purse</h1>
                <h2 class="tm-title bold shadow"> The confidence is <?php echo $float; ?>% among all 12 classes</h2>
				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Shepherds Purse</h3>
				<h2>description</h2>
				<p>C. bursa-pastoris plants grow from a rosette of lobed leaves at the base. From the base emerges a stem about 0.2–0.5 m (0.66–1.64 ft) tall, which bears a few pointed leaves which partly grasp the stem. The flowers, which appear in any month of the year in the British Isles,are white and small, 2.5 mm (0.098 in) in diameter, with four petals and six stamens. They are borne in loose racemes, and produce flattened, two-chambered seed pods known as siliques, which are triangular to heart-shaped, each containing several seeds
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				Capsella bursa-pastoris, known by its common name shepherd's purse because of its triangular flat fruits, which are purse-like, is a small annual and ruderal flowering plant in the mustard family Brassicaceae that grows up to 0.5 m (1.6 ft) tall. It is native to eastern Europe and Asia minor, but is naturalized and considered a common weed in many parts of the world, especially in colder climates, including British Isles, where it is regarded as an archaeophyte, North America and China, but also in the Mediterranean and North Africa. C. bursa-pastoris is the second most common weed in the world.
			</div>
		</div>
	</div>
	
</section>

<!-- education and languages -->
<section class="container">
	<div class="row">
		<div class="col-md-8 col-sm-12">
			<div class="education">
				<h2 class="white">Plant breeding</h2>
					<div class="education-content">
							<div class="education-school">

							</div>
						<p class="education-description">Capsella bursa-pastoris is closely related to the model organism such as Arabidopsis thaliana and is also used as a model organism, due to the variety of genes expressed throughout its life cycle that can be compared to genes that are well studied in A. thaliana. Unlike most flowering plants, it flowers almost all year round.Like other annual ruderals exploiting disturbed ground, C. bursa-pastoris reproduces entirely from seed, has a long soil seed bank, and short generation time, and is capable of producing several generations each year.		</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>Capsella bursa-pastoris</li>
						<li>C. bursa-pastoris</li>

					</ul>
			</div>
		</div>
	</div>
</section>

<!-- contact and experience -->
<section class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
			<div class="contact">
				<h2>Contact</h2>
					<p><i class="fa fa-map-marker"></i> Boston University</p>
					<p><i class="fa fa-phone"></i> +8613260006638</p>
					<p><i class="fa fa-envelope"></i> hdsyzxlh@hotmail.com</p>

			</div>
		</div>
		<div class="col-md-8 col-sm-12">
			<div class="experience">
				<h2 class="white">Information</h2>
				
					<div class="experience-content">
						<h4 class="experience-title accent">Please send us a message if there is something wrong </h4>
						<h5>Go back to main page</h5><span></span>
						<h5></h5>
						<br />
						<button class='newbutton1'  onclick="FormSubmit();">Home</button>
					
					</div>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12">
               Descriptions and images come from wikipedia: https://en.wikipedia.org/wiki/Capsella_bursa-pastoris
				<ul class="social-icons">

				</ul>
			</div>
		</div>
	</div>
</footer>

<!-- javascript js -->	
<script src="js2/jquery.js"></script>
<script src="js2/bootstrap.min.js"></script>	
<script src="js2/jquery.backstretch.min.js"></script>
<script src="js2/custom.js"></script>
</script>
   <style type="text/css">
     .newbutton1 {  
        width: 200px;  
        padding:8px;  
        background-color: #6aaf08;  
        border-color: #357ebd;  
        color: #fff;  
        -moz-border-radius: 10px;  
        -webkit-border-radius: 10px;  
        border-radius: 10px; /* future proofing */  
        -khtml-border-radius: 10px; /* for old Konqueror browsers */  
        text-align: center;  
        vertical-align: middle;  
        border: 1px solid transparent;  
        font-weight: 900;  
        font-size:125%  
      }  
      



  </style>
<script   language="javascript" type="text/javascript">   
  function   FormSubmit()   
  {     
          self.location='./index.html'; 
  }   
</script> 
</body>
</html>