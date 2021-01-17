<?php
if(!empty($_GET['user_id'])){
  error_reporting(0);
$get_user = mysqli_fetch_assoc($mysqli->query("select * from registration where email = '".$_GET['user_id']."'"));
$profile = mysqli_fetch_assoc($mysqli->query("select * from profile where a_id = '".$get_user['email']."'"));
$details = mysqli_fetch_assoc($mysqli->query("select * from details where a_id = '".$get_user['email']."'"));
$achievements = mysqli_fetch_assoc($mysqli->query("select * from achievements where a_id = '".$get_user['email']."'"));
$services = mysqli_fetch_assoc($mysqli->query("select * from services where a_id = '".$get_user['email']."'"));
$skill = mysqli_fetch_assoc($mysqli->query("select * from skill where a_id = '".$get_user['email']."'"));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="The Curriculum Vitae of Joe Bloggs."/>
    <title><?php echo base64_decode($get_user['name']); ?> - Curriculum Vitae</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/bootstrap.min.css" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="frontend/assets/fonts/font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/fonts/simple-line-icons.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/slicknav.css">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/nivo-lightbox.css" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/animate.php">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/main.css">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="frontend/assets/css/responsive.css">
  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>           
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">
                  About
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#resume">
                  Resume
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">
                  Work
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#CONTACT">
                  Contact
                </a>
              </li>
            </ul>
          </div>
        </div>
        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">
          <li>
            <a href="#home">Home</a>
          </li>
          <li>
            <a href="#about">about</a>
          </li>
          <li>
            <a href="#services">Services</a>
          </li>
          <li>
            <a href="#resume">resume</a>
          </li>
          <li>
            <a href="#portfolio">Work</a>
          </li>
          <li>
            <a href="#CONTACT">Contact</a>
          </li>
        </ul>
        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">
                <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Hello everyone</h5>
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s"><?php echo base64_decode($get_user['name']); ?></h2>
                <p class="script-font wow fadeInUp" data-wow-delay="0.6s"><?php echo base64_decode($profile['job_title']); ?></p>
                <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="https://www.facebook.com/kimtiem.kim/"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href=""><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="instagram.com/q_u_a_c/"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="#"><i class="icon-social-linkedin"></i></a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="icon-social-google"></i></a>
                  </li>
                </ul>
                <div class="header-button wow fadeInUp" data-wow-delay="1s">
                  <a href="#" class="btn btn-common">Get a Free Quote</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->
    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
              
            <!-- <img class="img-fluid" src="assets/img/about/about-1.jpg" alt=""> -->

              <?php if(!empty($profile['image'])){ ?>
				<img style="height: 450px; width:450px;" src="<?php echo base64_decode($profile['image']); ?>" alt="<?php echo base64_decode($get_user['name']); ?>" />
			<?php }else{ ?>
				<img src="img/headshot.jpg" alt="<?php echo base64_decode($get_user['name']); ?>" />
			<?php } ?>
            </div>
          </div> 
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
              <h3>Hi Guys!</h3>
              <p><?php echo base64_decode($profile['summary']); ?></p>
              <div class="about-profile">
                <ul class="admin-profile">    
                  <li><span class="pro-title"> Name </span> <span class="pro-detail"><?php echo base64_decode($get_user['name']); ?></span></li>
                  <li><span class="pro-title"> Age </span> <span class="pro-detail"><?php echo ($details['age']); ?></span></li>
                  <li><span class="pro-title"> Experience </span> <span class="pro-detail"><?php echo ($details['exp']); ?></span> years</li>
                  <li><span class="pro-title"> Address </span> <span class="pro-detail"><?php echo base64_decode($profile['address']); ?></span></li>
                  <li><span class="pro-title"> e-mail </span> <a href="mailto: <?php echo base64_decode($get_user['email']); ?>">
                  <?php echo base64_decode($get_user['email']); ?></a></li>
                  <li><span class="pro-title"> Phone </span> <a href="tel: <?php echo base64_decode($profile['mobile']); ?>"><?php echo base64_decode($profile['mobile']); ?></a></li>
                  <li><span class="pro-title"> Freelance </span> <span class="pro-detail"><?php echo ($details['freelance']); ?></span></li>
                </ul>
              </div>
              <a class="btn btn-common" href="img/CV-NTT.jpg" download>
                <i class="icon-paper-clip"></i> Download Resume
              </a>              
              <a href="#CONTACT" class="btn btn-danger"><i class="icon-speech"></i> Contact Me</a>
            </div>
          </div>   
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Services Section Start -->
    <section id="services" class="services section-padding">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">What I do</h2>
      <div class="row">
        <div class="container">
          <!-- Services item -->
          <div class="col-lg-12 col-md-12 col-sm-12">
            
            <ul>              
                  <?php
				           $scan = $mysqli->query("select * from services where a_id = '".$get_user['email']."'");
                   while($ser_row = mysqli_fetch_assoc($scan)){
			              ?>
                  <li class="col-md-6 col-lg-3 col-xs-12 services-item wow fadeInDown" data-wow-delay="0.6s" >  
                  <div class="icon"><i class="icon-puzzle"></i></div>
                    <article  class="content-text">                    
					            <h3 ><?php echo base64_decode($ser_row['service']); ?></h3>				            	
				            	<p style="padding-bottom: 15px;"><?php echo base64_decode($ser_row['description']); ?></p>
                    </article>
                  </li>
                        <?php } ?>                                
              </ul>          
          </div>   
        </div>
      </div>
    </section>
    <!-- Services Section End -->

    <!-- Resume Section Start -->
    <div id="resume" class="section-padding">
      
      <div class="container">
                     <!-- Skills
----------------------------------------------- -->
<style>
.skillbar {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  height: 15px;
  border-radius: 10px 0 0 10px;
  overflow: hidden;
  background-color: #f56982;
  background-size: 100%;
  background-image: linear-gradient(to bottom, #1cdf9e, #67fa06);
}
</style>
<div class="row skill">
  <div class="three columns header-col">
  </div>
  <br>
  <div class="nine columns main-col">
    <span style="font-size: 20px; padding-left:20px;"><i class="icon-settings"></i> Skills</span><br>
    <style>
        h4, p, h3 , em{
              font-size: medium;
        }
      
        p{
            font-size: medium;
        }
    </style>
    <br>
    <ul>
    <?php
				           $skil = $mysqli->query("select * from skill where a_id = '".$get_user['email']."'");
                   while($ski_row = mysqli_fetch_assoc($skil)){
                    ?>
                    <li>
                    <div  style="width:750px; padding-left:20px;">
        
         <h4><?php echo base64_decode($ski_row['content']); ?> &ensp; <?php echo ($ski_row['proIndex']); ?>%</h4>
        <div class="<?php echo base64_decode($ski_row['content']); ?>"><span class = "skillbar" style="width:<?php echo ($ski_row['proIndex']); ?>%"></span></div>    
        </div>
                    </li>
   
        <?php } ?>
    </ul>
</div> <!-- main-col end -->
  
  </div> <!-- End skills -->
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6">
          
            <div class="education wow fadeInRight" data-wow-delay="0.3s">
              <ul  class="timeline">
                <li>
                  <i class="icon-graduation"></i>
                  <h2 class="timeline-title">EDUCATION</h2>
                </li>
                <ul>
                  <?php
				$query = $mysqli->query("select * from content where type = 'Education' and a_id = '".$get_user['email']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				<li ><article  class="content-text">
					<h3 ><?php echo base64_decode($row['content_one']); ?></h3>
					<span class="subDetails" ><?php echo base64_decode($row['content_two']); ?></span>
					<p style="padding-bottom: 15px;"><?php echo base64_decode($row['content_three']); ?></p>
        </article></li>
      <?php } ?>
        </ul>                
              </ul>
            </div>
          </div>          
          <!-- Experience -->

          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="experience wow fadeInRight" data-wow-delay="0.6s">
              <ul class="timeline">
                <li>
                  <i class="icon-briefcase"></i>
                  <h2 class="timeline-title">Experience</h2>
                </li>
                    <ul>
                  <?php
				$query = $mysqli->query("select * from content where type = 'Work Experience' and a_id = '".$get_user['email']."'");
				while($row = mysqli_fetch_assoc($query)){
			?>
				<li><article class="content-text">
					<h3 ><?php echo base64_decode($row['content_one']); ?></h3>
					<span class="subDetails" ><?php echo base64_decode($row['content_two']); ?></span>
					<p style="padding-bottom: 15px;"><?php echo base64_decode($row['content_three']); ?></p>
        </article></li>
      <?php } ?>
        </ul>                      
      </ul>
            </div>
          </div>  
        </div>
      </div>
    </div>
    <!-- Resume Section End -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section-padding">
      <!-- Container Starts -->
      <div class="container">        
        <h2 class="section-title wow flipInX" data-wow-delay="0.4s">My Remarkable Works</h2>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center">
              <a class="filter active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="filter btn btn-common" data-filter=".design">
                Design 
              </a>
              <a class="filter btn btn-common" data-filter=".development">
                Development
              </a>
              <a class="filter btn btn-common" data-filter=".print">
                Print 
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->
          </div>

          <!-- Portfolio Recent Projects -->
          <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-1.jpg" alt="" />  
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-1.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix design print">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-2.jpg" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-2.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-3.jpg" alt=""/> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-3.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-4.jpg" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-4.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix development">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-5.jpg" alt="" /> 
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-5.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix print design">
              <div class="portfolio-item">
                <div class="shot-item">
                  <img src="frontend/assets/img/gallery/img-6.jpg" alt=""/>
                  <div class="overlay">
                    <div class="icons">
                      <a class="lightbox preview" href="frontend/assets/img/gallery/img-6.jpg">
                        <i class="icon-eye"></i>
                      </a>
                      <a class="link" href="#">
                        <i class="icon-link"></i>
                      </a>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <!-- Awards area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.3s">
              <div class="icon"><i class="icon-briefcase"></i></div>
              <div class="counterUp"><?php echo ($achievements['working']); ?></div>
              <p>Project Working</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon"><i class="icon-check"></i></div>
              <div class="counterUp"><?php echo ($achievements['done']); ?></div>
              <p>Project Done</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="0.9s">
              <div class="icon"><i class="icon-diamond"></i></div>
              <div class="counterUp"><?php echo ($achievements['awards']); ?></div>
              <p>Awards Received</p>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-3 col-sm-6 work-counter-widget text-center">
            <div class="counter wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon"><i class="icon-heart"></i></div>
              <div class="counterUp"><?php echo ($achievements['clients']); ?></div>
              <p>Happy Clients</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Contact Section Start -->
  </section>
  <section class="call_to_action">
      <div class="container">
          <div class="row">
              <div class="col-md-8 wow fadeInLeft animated">
                  <div class="left">
                      <h2 style="font-family: 'Dosis', sans-serif; font-size: 18px; margin-top: 20px;
                      margin-bottom: 10px; color:black">LOOKING FOR EXCLUSIVE DIGITAL SERVICES?</h2>
                    
                  </div>
              </div>
              <div class="col-md-3 col-md-offset-1 wow fadeInRight animated">
                  <div class="baton">
                    <a href="#CONTACT">
                        <button type="button" class="btn btn-primary cs-btn">Let's Talk</button>
                    </a>    
                  </div>
              </div>
          </div>
      </div>
  </section>
  <?php
    $notice = "Your contact information is saved successfully.";
    $type = "success";
if(isset($_POST['send']))
{
	
		if($mysqli->query("insert into contact values(
			'',
			'".($_POST['Name'])."',
			'".($_POST['Email'])."',
			'".($_POST['Subject'])."',
			'".($_POST['message'])."'
		)")){     
        
         echo "<script>alert('Success!! Your contact information is saved successfully.')</script>";
		
		}else{
			$wer = '<p style="color:#f00;">Something wrong! please try again.</p>';
		}}
		else{$wer='<p style="color:#f00;">Something wrong! please try again..</p>';}
	
?>

  <section class="contact" id="CONTACT">
    
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="contact_title  wow fadeInUp animated">
                      <h1>GET IN TOUCH</h1>
                      <img src="images/shape.png" alt="">
                     <p>If you want to cooperate with me, please leave a message below</p>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-3  wow fadeInLeft animated" >
                  <div class="single_contact_info">
                      <h2>Call Me</h2>
                      <a href="tel: <?php echo base64_decode($profile['mobile']); ?>"><?php echo base64_decode($profile['mobile']); ?></a></li>
                  </div>
                  <div class="single_contact_info">
                      <h2>Email Me</h2>
                      <a href="mailto: <?php echo base64_decode($get_user['email']); ?>">
                  <?php echo base64_decode($get_user['email']); ?></a>
                  </div>
                  <div class="single_contact_info">
                      <h2>Address</h2>
                      <p><?php echo base64_decode($profile['address']); ?></p>
                  </div>
              </div>
              <div class="col-md-9  wow fadeInRight animated">
                  <form enctype="multipart/form-data" class="contact-form" action="" method="post">
                      <div class="row">
                          <div class="col-md-6">
                              <input type="text" class="form-control" name="Name" id="name" placeholder="Name" required>
                              <input type="email" class="form-control" name="Email" id="email" placeholder="Email"required>
                              <input type="text" class="form-control" name="Subject" id="subject" placeholder="Subject"required>                                
                          </div>
                          <div class="col-md-6">
                              <textarea name="message" class="form-control" id="message" rows="25" cols="10" placeholder="  Message Texts..."required></textarea>
                              <button name="send"  class="btn btn-default form_submit">SEND MESSAGE</button>                                                           
                          </div>
                      </div>               
                  </form>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-12 text-center">
                  <div class="work-with   wow fadeInUp animated">
                      <h3>I'm looking forward to hearing from you!</h3>

                  </div>
              </div>
          </div>
      </div>
  </section>
    <!-- Contact Section End -->

    <!-- Footer Section Start -->
    <footer class="footer-area section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-text text-center wow fadeInDown" data-wow-delay="0.3s">
              <ul class="social-icon">
                <li>
                  <a class="facebook" href="https://facebook.com/kimtiem.kim"><i class="icon-social-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href=""><i class="icon-social-twitter"></i></a>
                </li>
                <li>
                  <a class="instagram" href="https://www.instagram.com/q_u_a_c/"><i class="icon-social-instagram"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-linkedin"></i></a>
                </li>
                <li>
                  <a class="instagram" href="#"><i class="icon-social-google"></i></a>
                </li>
              </ul>
            
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
    	<i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="frontend/assets/js/jquery-min.js"></script>
    <script src="frontend/assets/js/popper.min.js"></script>
    <script src="frontend/assets/js/bootstrap.min.js"></script>
    <script src="frontend/assets/js/jquery.mixitup.js"></script>
    <script src="frontend/assets/js/jquery.counterup.min.js"></script>
    <script src="frontend/assets/js/waypoints.min.js"></script>
    <script src="frontend/assets/js/wow.js"></script>
    <script src="frontend/assets/js/jquery.nav.js"></script>
    <script src="frontend/assets/js/jquery.easing.min.js"></script>  
    <script src="frontend/assets/js/nivo-lightbox.js"></script>
    <script src="frontend/assets/js/jquery.slicknav.js"></script>
    <script src="frontend/assets/js/main.js"></script>
    <script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
var pageTracker = _gat._getTracker("UA-3753241-1");
pageTracker._initData();
pageTracker._trackPageview();
</script>
  </body>
</html>
<?php
}
?>