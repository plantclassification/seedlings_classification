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
                <h1 class="tm-title bold shadow">We believe it belongs to Charlock</h1>
                   <h2 class="tm-title bold shadow"> The confidence is <?php echo $float; ?>% among all 12 classes </h2>
				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Charlock</h3>
				<h2>description</h2>
				<p>
					Charlock generally flowers from May to July but flowering may begin as early as April in plants that germinated the previous autumn. Successive flushes of germinating seeds flower through the summer as plants mature. Plants are self-incompatible and cross-pollination is performed by a variety of insects. Seed is set from August onwards. The seeds may be dark or light brown and both types can be found on the same plant and even in the same pod. Charlock has 10-18 seeds per seedpod and produces around 2,000-4,000 seeds per plant. Seed number is closely related to plant dry weight. Charlock can be found in fruit for 3 months of the year.
				</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				Formerly the most troublesome annual weed of arable land, charlock is found throughout the UK. It can be plentiful in artificial communities subject to disturbance by human activity but is more of a problem in spring-sown than autumn-sown crops. Charlock also occurs on wasteland and roadsides. It is probably native and is frequent on clay and heavy soil, but is also found on chalk and occasionally on sands and light loam. It is especially prevalent on calcareous loams. Charlock was still abundant in cultivated areas in the 1950
			<br>
                <br>
                <br>
                <br>
                <br>
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
						<p class="education-description">
							Seed longevity in dry storage is 12 years and in soil is 35 years. Charlock seeds buried in uncultivated soil will remain viable for 60 years and can germinate when brought to the surface by deep ploughing. Allowing charlock to seed every 11 years is sufficient to maintain the soil seedbank population.
						</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>field mustard</li>
						<li>karlock</li>
						<li>kedlock</li>
						<li>kilk</li>
						<li>shallock</li>
				
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
				All desciptions and images come from wikipiedia https://en.wikipedia.org/wiki/Sinapis_arvensis
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