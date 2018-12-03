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
				<h1 class="tm-title bold shadow">We believe it belongs to Cleavers</h1>
				
			</div>
		</div>
	</div>
</header>

<!-- about and skills section -->
<section class="container">
	<div class="row">
		<div class="col-md-6 col-sm-12">
			<div class="about">
				<h3 class="accent">Cleavers</h3>
				<h2>description</h2>
				<p>
					Cleavers are annuals with creeping straggling stems which branch and grow along the ground and over other plants. They attach themselves with the small hooked hairs which grow out of the stems and leaves. The stems can reach up to three feet or longer, and are angular or square shaped. The leaves are simple, narrowly oblanceolate to linear, and borne in whorls of six to eight.
Cleavers have tiny, star-shaped, white to greenish flowers, which emerge from early spring to summer. The flowers are clustered in groups of two or three, and are borne out of the leaf axils. The corolla bears 4 petals. The globular fruits are burrs which grow one to three seeds clustered together; they are covered with hooked hairs which cling to animal fur, aiding in seed dispersal.
				</p>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
			<div class="skills">
				<h2 class="white">History</h2>
				The species is native to a wide region of Europe, North Africa and Asia from Britain and the Canary Islands to Japan. It is now naturalized throughout most of the United States, Canada, Mexico, Central America, South America, Australia, New Zealand, some oceanic islands and scattered locations in Africa. Whether it is native to North America is a question of some debate, but it is considered to be native there in most literature. It is considered a noxious weed in many places.
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
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
						<p class="education-description">The plant can be found growing in hedges and waste places, limestone scree and as a garden weed.

G. aparine prefers moist soils and can exist in areas with poor drainage. It reportedly flourishes in heavy soils with above-average nitrogen and phosphorus content, and prefers soils with a pH value between 5.5 and 8.0. G. aparine is often found in post-fire plant communities in the United States, likely developing from onsite seed and therefore rendering controlled burns as an ineffective means of removing G. aparine in areas where it is considered a noxious weed.</p>
					</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-12">
			<div class="languages">
				<h2>List</h2>
					<ul>
						<li>catchweed</li>
						<li>stickyweed</li>
						<li>stickybud</li>
						<li>goosegrass</li>
						<li>bedstraw</li>
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