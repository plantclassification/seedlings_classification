
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
				<h1 class="tm-title bold shadow">We believe it belongs to Black-grass</h1>

				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Black-grass</h3>
				<h2>description</h2>
				<p>
					Black-grass flowers from May to August, sometimes into October. The flower heads appear above the cereal crop in May and June. Additional flower heads may develop on side branches. The flowers are wind pollinated but are self-fertile. Seed production ranges from just 50 up to 6,000 seeds per plant. Seeds ripen quickly and many are shed before cereal harvest. Those that remain on the plant are likely to contaminate the harvested grain.
				</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				Black-grass is a native annual grass weed that occurs throughout the UK but is found mainly in the cereal growing areas of southern and eastern England. It rarely occurs outside of cultivated land and is most abundant in winter crops. Black-grass is often found spreading into arable fields from the field margins. It is chiefly confined to heavy land, occurring only occasionally on sandy or gravely soil but has begun to appear on chalk.
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
							The decline of seed in soil is greatest in the first year but appreciable numbers can remain after 4 years in both cultivated and undisturbed soil. If seeds are ploughed down deeply they may retain viability for 11 years. Black-grass seed does not persist for long in peat soils. Seed sown in the field and followed over a 5-year period in winter or spring cereals had an annual decline rate of 80%. Emerged seedlings represented 15% of the seedbank. Seeds in dry storage will still germinate after 13 years but viability begins to decline after 8 years. Seeds stored under granary conditions gave 34% germination after 1 year and 7% after 4 years.
						</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>slender meadow foxtail</li>
						<li>twitch grass</li>
						<li>black twitch</li>
				
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