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
				<h1 class="tm-title bold shadow">We believe it belongs to Scentless Mayweed</h1>
				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Scentless Mayweed</h3>
				<h2>description</h2>
				<p>A native annual or biennial weed of arable land and waste ground, common on all lowland soils except chalk. Scentless mayweed is abundant throughout the UK but the distribution is determined by the location of cultivated land. It is recorded up to 1,750 ft. It is moderately resistant to trampling and compaction but it does not thrive in high summer temperatures or drought. It is intolerant of dense shade and waterlogging. It responds to increased levels of soil fertility, particularly to applications of manure.</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				Scentless mayweed is very variable in size and habit. Some populations have developed resistance to certain hormone herbicides. A diploid form predominates in Britain and Northern Europe. In continental Europe, a tetraploid form is predominant that may exhibit perennial growth. There is some evidence that winter and summer annual forms occur. Hybrids have been reported with other mayweed species but these were sterile.
                <br><br><br><br>
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
						<p class="education-description">Scentless mayweed flowers from June to October. It is self-incompatable in Britain and isolated plants may not set seed. The flowers are insect pollinated. Seeds start to become viable 12 days after flowering and are fully ripe 4 weeks after the outer florets open. Seed is set from August to October. Each flower head can contain 345 to 533 seeds. A plant may produce 10,000 to 200,000 seeds but figures of over a million have been quoted. There is a good correlation between seed number and plant dry weight.
						</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>corn feverfew</li>
						<li>Tripleurospermum inodorum</li>
						<li>scentless chamomile</li>
						<li>wild chamomile</li>
						<li> Baldr's brow</li>
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