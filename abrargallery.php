<?php
require 'gallery.php';
$gallery = new Gallery();
$gallery->setPath('assets/img/abrar'); //path to the image folder
$images = $gallery->getImages(array('JPG','PNG', 'jpg', 'png')); //array of possible image extensions (useful if you have mixed galleries)
$row_counter = 0; //don't change that
$img_no_caption = " "; //default caption for image that don't have one

$no_images_warning="Ooops! No images in gallery!"; //Display the text when $gallery->setPath directory is empty.
$col_md_x = 2; //Bootstrap - choose either 2,3,4 or 6 to have 6,4,3 or 2 pics per line respectively
//----------------------------------------------

$row_x = 12 / $col_md_x; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>My Portfolio</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="assets/css/aos.css" rel="stylesheet">
	<link href="assets/css/gallery.css" rel="stylesheet">
	<link href="assets/css/lightbox.css" rel="stylesheet" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.custom.js"></script>
    
  </head>
  
  <style>
  .gallery-pages .item {
    margin-bottom: 30px;
  }
  
  
  </style>

  <body>

	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="index.html#home">My Portfolio</a></h1>
			<i class="fa fa-arrow-right menu-close"></i>
			<a href="index.html">Home</a>
			<a href="resume.html">Resume</a>
			<a href="#">Career Research Summary</a>
			<a href="#">Career-Related Education</a>
			<a href="#">Educational Enhancement</a>
			<a href="#">Sources</a>
			<a href="#">Special Skills</a>
		</div>
		
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>
	
	<!-- MAIN IMAGE SECTION -->
	<div id="mainimagewrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1 id="headline" data-aos="fade-zoom-out" data-aos-delay="400" data-aos-easing="ease-in-sine" data-aos-duration="600"class="animated-text">GALLERY</h1>
				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /main image -->

	<!-- CONTENT SECTION -->
	<div id="maincontent">
    <div class="container">
      <div class="row mt">
		  <div class="col-lg-12">
		    <h1 data-aos="fade-up" data-aos-delay="600">Header</h1>
		  	<hr>
		  </div><!-- col-lg-8 -->

      </div><!-- /row -->
	  
	  <div class="row mt">
	  
	    <div class="gallery" data-aos="fade-up" data-aos-delay="800">
     
		<?php if($images): ?>

	    <?php foreach($images as $image):
	    
	    $row_counter++;
	    ?>
	    <div class="col-sm-<?php echo $col_md_x; ?> item">
	      <section>
		 
	    <a href="<?php echo $image['full']; ?>" data-lightbox="roadtrip" data-title="<?php echo $image['full']; ?>"><img title="<?php echo $image['full']; ?>" src="<?php echo $image['thumb']; ?>"></a>
	      
	      </section>
	    </div>
	    <?php
	    
	    
	      if ($row_counter % $row_x == 0) {
	      echo '</div><div class="items gallery-item row">';
	      }
	      
	    endforeach; ?>
	    
		<?php else: ?>
		<div id=no_images><?php echo $no_images_warning; ?></div>

    	<?php endif; ?>
    	
      </div>	
			  

	   </div>
	   
    </div><!-- /.container -->
	</div><!-- /main content -->

	
	
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="assets/js/masonry.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.js"></script>
    <script src="assets/js/classie.js"></script>
	<script src="assets/js/aos.js"></script>
	<script src="assets/js/lightbox.min.js"></script>
    <script>
    AOS.init();
    </script>

  </body>
</html>
