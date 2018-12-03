<?php
$title = $_COOKIE['mycookie'];
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
				<img src="<?php echo $title; ?>" class="img-responsive 1img-circle tm-border" alt="templatemo easy profile">
				<hr>
				<h1 class="tm-title bold shadow">We believe it belongs to Common Chickweed</h1>
				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Common Chickweed</h3>
				<h2>description</h2>
				<p>Common chickweed flowers and sets seed all through the year. It has been known to flower and ripen seed under a snow-cover 10-20 cm deep. Flowers are normally self-pollinated but there is a short period when insects can effect cross-pollination. In winter, flowers are produced that do not open making self-pollination inevitable. Stems cut off in flower do not produce viable seed but any green immature capsules present will ripen and the seeds within them can become capable of germination. Individual seed capsules contain around 10 seeds and the average seed number per plant is 2,200 to 2,700. However, plants with 25,000 seeds have been recorded. There is a good correlation between seed number and plant dry weight. Common chickweed can complete its life cycle in 5-6 weeks.</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				Common chickweed, an annual or overwintering native plant, is one of the commonest weeds of cultivated land in the UK. It also occurs on roadsides, shingle riverbanks, coastal cliffs and in gardens. It is widely distributed over all soil types but is more abundant on lighter soils. It is favoured by high potassium levels and is indicative of high nitrogen and low phosphate and lime levels. It is absent from the most acidic soils. It thrives in areas of soil disturbance and declines when cultivation ceases for a long period. It is sensitive to drought and is one of the first weeds to wilt in dry conditions.
                <br><br><br><br><br><br><br>

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
						<p class="education-description">Buried seeds are known to retain viability for at least 25 and probably over 40 years. Seed buried in soil for 10 years gave up to 22% germination. Seeds in dry storage for 30 months at low temperatures retained full viability. Common chickweed seeds broadcast onto the surface of clay and silty-loam soils, ploughed to 20 cm or flexible tine cultivated to 10-15 cm and followed over a 6 year period of cropping with winter or spring wheat declined at an annual rate of 35%. The estimated time to 95% decline was 7-8 years depending on the frequency of cultivation. In a series of autumn-sown crops the time to 99% decline of seed in the soil seedbank was 11.1 years. The mean annual decline rate was 30%. In other studies in cultivated soil the annual percent decline was 41%. Elsewhere, under a grass sward, common chickweed seed had a mean annual decline rate of 26%.</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>chickenwort</li>
						<li>craches</li>
						<li>maruns</li>
						<li>winterweed</li>
                        <br><br>
                        <br>
                        <br>


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