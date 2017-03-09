

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alvyo Designer Studio</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">
    .giveboxshadow
    {       

        box-shadow: 2px 3px 14px rgba(0,0,0,0.2);
        width:50%;
        color:black;
        text-align: center;
    }

    @media screen and (max-width: 768px) and (min-width: 0px)
    {
        #makeres
        {
            width:100% !important;
        }    
    }
    .affix
    {
        background-color: #131212 !important;
    }

</style>

</head>
<?php
    ini_set('mysql.connection_timeout', 300);
    ini_set('default_socket_timmeout', 300);
?>
<body id="page-top" class="index">
    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top affix-top" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                
                <!-- my edit -->
                <!-- <p class="navbar-brand page-scroll" style="color: #680202;">Alvyo DS</p><br> -->


                <a class="navbar-brand page-scroll" href="#page-top">Alvyo DS</a>
                
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">Portfolio</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#aboutus">About Us</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
            <div style="background-color: rgba(0,0,0,0.17);">
                <div class="intro-lead-in">Welcome To Alvyo Designer Studio..!!</div>
                <div class="intro-heading"><em>Redesign Your Personality..!!</em></div>
            </div>
                <a href="#services" class="page-scroll btn btn-xl">Know More</a>
            </div>
            
        </div>
    </header>

    <!-- Services Section -->
    <section id="services"  style="background-color: #e3f2fd">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">What do we do...</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <!-- <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span> --> 
                    <span>
                    	<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal"><img src="img\service\select.png" style="height:8em;border-radius: 20%;"></a>
                    </span>

                    <h4 class="service-heading">Select From Our Range</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
                <div class="col-md-4">
                    <!-- <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <span>
                    	<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal"><img src="img\service\images-customize.jpg" style="width: 8em;border-radius: 20%;"></a>
                    </span>
                    <h4 class="service-heading">Customize</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>

                <div class="col-md-4">
                    <!-- <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span> -->
                    <span>
                    	<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal"><img src="img\service\search2.jpg" style="width: 8em;border-radius: 20%;"></a>
                    </span>
                    <h4 class="service-heading">Find What Suits You</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray"  style="background-color: #bbdefb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal" style="border:2px solid #ffd600">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/design2.jpg" style="height:250px; width:400px" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="border-right:2px solid #ffd600;border-left:2px solid #ffd600;border-bottom:2px solid #ffd600">
                        <h4>Designs</h4>
                        <p class="text-muted">Outfit Sketches</p>
                    </div>

                </div>
                <div class="col-md-4 col-sm-6 portfolio-item" >
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal" style="border:2px solid #ffd600">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/wardrobe.jpg" style="height:250px; width:400px" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="border-right:2px solid #ffd600;border-left:2px solid #ffd600;border-bottom:2px solid #ffd600">
                        <h4>Wardrobe</h4>
                        <p class="text-muted">Exclusive Creations</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal" style="border:2px solid #ffd600">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-eye fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/creations.jpg" style="height:250px; width:400px" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="border-right:2px solid #ffd600;border-left:2px solid #ffd600;border-bottom:2px solid #ffd600">
                        <h4>Creations</h4>
                        <p class="text-muted">Client Diaries</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--    	<section id="portfolio" class="bg-light-gray"  style="background-color: #000">
   		<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><a href="upload.php">P</a>ortfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>

                        
   			<div style="background-color: #fff" id="picsDesign">
   				
   			</div>

   			<script>
				var fruits, text, fLen, i;

				text = "<marquee  behavior=\"scroll\" direction=\"left\" onmouseover=\"this.stop();\" onmouseout=\"this.start();\" id=\"picsDesign\">";
				for (i = 1; i < 5; i++) {
	    			text += "<img src=\"img\\team\\"+i+".jpg\" height=\"50%\" style=\"margin-right:20px\">";
				}
				
				text += "</marquee>";
				document.getElementById("picsDesign").innerHTML = text;
			</script>

            

   		</div>
   	</section> -->

    <!-- About Section -->
    <!-- <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2009-2011</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">An Agency is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/3.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">Transition to Full Service</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/4.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">Phase Two Expansion</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
 -->
    <!-- Team Section -->
    <section id="aboutus" style="background-color: #90caf9">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="margin-top: -40px">Our Amazing Team</h2>                   
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/1.jpg" class="img-responsive img-circle" alt="Vyoma Shah" width="50%">
                        <h4>Vyoma Shah</h4>
                        <p class="text-muted">Designer & Founder</p>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="Alpa Shah" width="50%"> 
                        <h4>Alpa Shah</h4>
                        <p class="text-muted">Co-Founder</p>
                    </div>
                </div>
                <!-- <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/3.jpg" class="img-responsive img-circle" alt="">
                        <h4>Utsav Shah</h4>
                        <p class="text-muted">Tech Support</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> -->
            </div>
            	<center>

                	<a href="http://www.facebook.com/alvyods" target="_blank"><span class="fa-stack fa-2x" style="height: 2em">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                    </span></a>
                                        
                    <a href="http://www.instagram.com/alvyodesignerstudio_" target="_blank">
                    <span class="fa-stack fa-2x" style="margin: 10px">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                    </span>

                    <a href="http://www.twitter.com/Alvyo0918" target="_blank">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                    </span></a>
                   

                </center>
        </div>
    </section>

    
    <!-- Contact Section -->
    <section id="contact"  style="background-color: #64b5f6">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We will get back to you as soon as possible...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Location * (Eg. Kandivali)" id="location" name="location" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Contact Number *" id="phone" name="contact" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message/Enquiry *" id="message" name="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" name="customer" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form><br>
                </div>
            </div>
        </div>
    </section>

<?php

    

/**
 * Simple string encryption/decryption function.
 * CHANGE $secret_key and $secret_iv !!!
**/
function stringEncryption($action, $string){
  $output = false;
  
  $encrypt_method = 'AES-256-CBC';                // Default
  $secret_key = 'Some#Random_Key!';               // Change the key!
  $secret_iv = '!IV@_$2';  // Change the init vector!
  
  // hash
  $key = hash('sha256', $secret_key);
  
  // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
  $iv = substr(hash('sha256', $secret_iv), 0, 16);
  
  if( $action == 'encrypt' ) {
      $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
      $output = base64_encode($string);
  }
 
  
  return $output;
}


    if (isset($_POST['customer'])) 
        {
                echo phpversion();

                $con=mysql_connect("localhost","root","");
                mysql_select_db("alvyodsdb",$con);
            
                $name=$_POST['name'];
                $location=$_POST['location'];
                
                $contact=$_POST['contact'];
                $message=$_POST['message'];
                #$cont = hash('sha256', $contact);
                $encryptedcon = stringEncryption('encrypt', $contact);

                if (strlen($contact)==10 && is_numeric($contact)) 
                {
                    $contact='+91-'.$contact;
                    $encryptedcon = stringEncryption('encrypt', $contact);                                    
                    $qry="insert into customer (name,location,contact,message) values ('$name','$location','$encryptedcon','$message')";
                
                }
                
                else 
                {
                    $qry="";
                    echo "<script type='text/javascript'>alert('mobile number incorrec.. Please enter a valid mobile number');</script>";
                
                }


                
                
                $result=mysql_query($qry,$con);
                
                if ($result) {
                    
                    echo "<script type='text/javascript'>alert('Request sent.');</script>";
                    
                }
                else{
                    echo "<script type='text/javascript'>alert('Request not sent.');</script>";
                }
            }


?>
    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
               <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Our Designs</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                          <!--      <img class="img-responsive img-centered" src="img/portfolio/roundicons-free.png" alt="">
                                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                <p>
                                    <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                <ul class="list-inline">
                                    <li>Date: July 2014</li>
                                    <li>Client: Round Icons</li>
                                    <li>Category: Graphic Design</li>
                                </ul>-->

					                <?php
										ini_set('mysql.connection_timeout', 300);
										ini_set('default_socket_timmeout', 300);
									?>

									<?php
										
											$con=mysql_connect("localhost","root","");
											mysql_select_db("alvyodsdb",$con);

											$qry="SELECT * FROM `images` WHERE type='designs' Order By id DESC";

											$result=mysql_query($qry,$con);

											while ($row = mysql_fetch_array($result))
											{
												echo '<div class="col-sm-6" style="float:left;border:1px solid black;margin:8px;background-color:#f4f5fc;height:350px;width:350px">';
												
												echo '<img height="260" src="uploads/'.$row[1].' "  style="margin: 16px;max-width:260px" alt="'.$row[2].'" class="image-hover">';
												
												echo "<p>";
												echo "$row[2]";
												echo "</p>";
												
												echo "</div>";

											}
											
											

											mysql_close($con);
										
									?>								
                                
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
        </div> 




    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <h2>Our Wardrobe</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                              		
                                	<?php
										ini_set('mysql.connection_timeout', 300);
										ini_set('default_socket_timmeout', 300);
									?>

									<?php
										
											$con=mysql_connect("localhost","root","");
											mysql_select_db("alvyodsdb",$con);

											$qry="select * from images where type='wardrobe' Order By id DESC";

											$result=mysql_query($qry,$con);

											while ($row = mysql_fetch_array($result))
											{
												
												echo '<div class="col-sm-6" style="float:left;border:1px solid black;margin:8px;background-color:#f4f5fc;height:350px;width:350px">';
												
												echo '<img height="260" src="uploads/'.$row[1].' " style="margin: 16px;max-width:260px" alt="'.$row[2].'" >';
												echo "<p>";
												echo "$row[2]";
												echo "</p>";
												
												echo "</div>";

											}
											mysql_close($con);
										
									?>
								
                            </div>


                        </div>
                    </div>
                </div>
                <br>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
        </div>

    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Our Creations</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                		
                                	<?php
										ini_set('mysql.connection_timeout', 300);
										ini_set('default_socket_timmeout', 300);
									?>

									<?php
										
											$con=mysql_connect("localhost","root","");
											mysql_select_db("alvyodsdb",$con);

											$qry="select * from images where type='creations' Order By id DESC";

											$result=mysql_query($qry,$con);

											while ($row = mysql_fetch_array($result))
											{
												echo '<div class="col-sm-6" style="float:left;border:1px solid black;margin:8px;background-color:#f4f5fc;height:350px;width:350px">';
												
												echo '<img height="260"  src="uploads/'.$row[1].' " style="margin: 16px;max-width:260px" alt="'.$row[2].'" >';		
																						
												echo '<p>';
												echo "$row[2]";
												echo "</p>";
												
												echo "</div>";

											}
											mysql_close($con);
										
									?>
									
								
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal" onclick="port(this.id);" id="close">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Search and Suit Up</h2>
                                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>

                                <center><div >
                                <form method="post" >
									
									<textarea  cols="20" class="giveboxshadow" rows="1" name="searcht" class="shadow" id="searcht" placeholder="Search here.." required></textarea>	
                                    <br><br>								
                                    <input type="button" name="search" class="btn btn-primary" value="GO" style="background-position: 10px 10px;font-size:18px;" onclick="port2();" >

								</form>
								</div></center>
								<script type="text/javascript">
									    
									    function port2(){
                                
									    //event.preventDefault();
                                        var searchString = document.getElementById("searcht").value;
                                        
                                        $.ajax({
                                            type: 'POST',
                                            url: 'uploadback.php',
                                            data: { searcht: searchString },
                                            success: function(data) {
                                                
                                                //console.log(data);
                                                //console.log(document.getElementById('replace').innerHTML);
                                                    var txt;                                            
                                                if (!$.trim(data)){   
                                                
                                                    
                                                    txt='<p><br>We have got some other exciting stuff for you !!</p>';
                                                    document.getElementById('replacetext').innerHTML=txt;
                                                    port('go');
                                                }
                                                else{
                                                    
                                                    txt='<p><br>We have your choice in our range!!</p>';
                                                    document.getElementById('replacetext').innerHTML=txt;
                                                    document.getElementById('replace').innerHTML=data;
                                                }
                                            }
                                        });
                                        
                                        
                                        return false;


                                        }

                                        function port(button_id){
                                           
                                        var searchString = '';
                                    
                                        $.ajax({
                                            type: 'POST',
                                            url: 'uploadbackflood.php',
                                            data: {  },
                                            success: function(data) {
                                            
                                                //console.log(data);
                                                //console.log(document.getElementById('replace').innerHTML);
                                                if (button_id=='close'|| button_id=='all') {document.getElementById('replacetext').innerHTML='';}
                                                document.getElementById('replace').innerHTML=data;
                                                //console.log(document.getElementById('replace').innerHTML);
                                            }
                                        });
                                        
                                        document.getElementById('searcht').value="";

                                        }
									    
								</script>
								    
                                                                    		
                                	

									<?php
										
											$con=mysql_connect("localhost","root","");
											mysql_select_db("alvyodsdb",$con);

											$qry='select * from images Order By id DESC';

											$result=mysql_query($qry,$con);
                                            echo "<p id='replacetext'>";

                                            echo "</p>";
                                            echo "<div id='replace'>";
											while ($row = mysql_fetch_array($result))
											{
                                                echo "<center>";
												echo '<div class="col-sm-6" style="float:left;border:1px solid black;margin:8px;background-color:#f4f5fc;height:350px;width:350px">';
												
												echo '<img height="260" src="uploads/'.$row[1].' " style="margin: 16px;max-width:260px" alt="'.$row[2].'" >';		
																						
												echo "<p>";
												echo "$row[2]";
												echo "</p>";
												
												echo "</div>";
                                                echo "</center>";
											}
											mysql_close($con);
                                            echo "</div>"
										
									?>
									
								
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                                 <button type="button" id="all" class="btn btn-primary" onclick="port('all');"> Show All </button>
                                 <br>
                                 <br>
                                <button type="button" id="close" class="btn btn-primary" data-dismiss="modal" onclick="port(this.id);"><i class="fa fa-times" ></i> Close Project </button>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <footer style="background-color:#2196f3 ">Website Designed and Maintained by Utsav B. Shah<br>email id: shahutsavab19596@gmail.com</footer>

</body>

</html>
