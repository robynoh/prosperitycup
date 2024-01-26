<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

	
	$querypro= "SELECT * FROM `news` where news_id=".$_GET['newsid'];
	$resultpro=$connection->retrieve($querypro);
	$rows=$connection->arrayFetch($resultpro);
	
	
	
foreach($rows as $row){?>	

	

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bayelsa Governor's Tournament -  <?php echo $connect->show_news_title($_GET['newsid']);?></title>
    
    <meta property="og:url"  content="https://www.prosperitycup.com/news" />
<meta property="og:type"     content="article" />
<meta property="og:title"    content="<?php echo $row['title'];?>" />
<meta property="og:description" content="<?php echo strip_tags( substr( $row['content'],0,300)) ;?>" />
<meta property="og:image"  content="<?php echo $connection->url(); ?>admin/news_photos/<?php echo $row['filename'] ?>" />

    <!-- Css Files -->
    <link href="<?php echo $connection->url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/flaticon.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/slick-slider.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/fancybox.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>style.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/color.css" rel="stylesheet">
    <link href="<?php echo $connection->url(); ?>css/responsive.css" rel="stylesheet">
    <!--/!--[if lte IE 9]--> <link rel="stylesheet" href="../../css/chosen.html"> <!--[endif]--//-->
    
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=627912d213a3a7001900bb09&product=sticky-share-buttons" async="async"></script>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	
    <!--// Main Wrapper \\-->
    <div class="sportsmagazine-main-wrapper">

        <!--// Header \\-->
       <?php include('includes/header.php'); ?>
        <!--// Header \\-->

		

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">
		
		
						

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
					
						
                        <!--// Fixture Slider \\-->
					
						
						
						
						<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
          
            <!--// Main Section \\-->

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
					
					
					
					

                        <div class="col-md-9">
						
						
                            <div class="sportsmagazine-rich-editor">
							
							 <figure>
							 
							 <img src="<?php echo $connection->url(); ?>admin/news_photos/<?php echo $row['filename'] ?>" width="849px" alt="">
							 </figure>
                                        <div class="sportsmagazine-bloglarge-text">
                                            <time datetime="2008-02-14 20:00" style="color:#fff"><?php echo $row['month'];?>  <?php echo $row['day'];?> , <?php echo $row['year'];?></time>
                                            <h3><a href="blog-detail.html"> <?php echo $row['title'];?> </a></h3>
                                       </div>
							
							
							 <div class="sportsmagazine-rich-editor">
                             <?php echo $row['content'];?>      
                              </div>
                                 </div>
                           <div class="sharethis-sticky-share-buttons"></div>
                           

                        </div>
                        
                        <!--// SideBar \\-->
                        <aside class="col-md-3">
                            
                            <!--// Widget Popular Post \\-->
                           
                            <!--// Widget Popular Post \\-->

                            <!--// Widget Cetagories \\-->
                           
                            <!--// Widget Cetagories \\-->

                            <!--// Widget Upcoming Matches \\-->
                           
                            <!--// Widget Upcoming Matches \\-->

                            <!--// Widget Flicker Images \\-->
                            <div class="sportsmagazine-widget-heading"><h2>Latest Post</h2></div>
                          <div class="widget widget_popular_post">
                                <ul>
                                <?php echo $connect->recent_news();?>
								</ul>
                            </div>
                            <!--// Widget Flicker Images \\-->

                        </aside>
                        <!--// SideBar \\-->


					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
							
							
							
							
							
						
                        <!--// Fixture Slider \\-->



                        <!--// Content \\-->
                     
                        <!--// Content \\-->
						
						
                        <!--// SideBaar \\-->

                     
                        <!--// SideBaar \\-->

					</div>
				</div>
			</div>
			
			
			<!--// Main Section \\-->
 <div class="sportsmagazine-main-section sportsmagazine-section-post">
                <span class="section-post-transparent"></span>
                <div class="container">
                    <div class="row">
                        
                        <div class="col-md-12">
                            <div class="sportsmagazine-section-post-text">
                                <h3>The Propserity Admnistration is committed to the grassroots football competition </h3>
                                <p> to discover new talents across the eight local government areas</p>
                                <a href="404.html" class="sportsmagazine-banner-btn" tabindex="-1">Read More <span></span></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
		</div>
		
<?php }?>
		<!--// Main Content \\-->

		<!--// Footer \\-->
		<?php include('includes/footer.php'); ?>
            <!--// CopyRight \\-->

		</footer>
		<!--// Footer \\-->

	<div class="clearfix"></div>
    </div>
    <!--// Main Wrapper \\-->

    <!-- SearchModal -->
    <div class="searchmodal modal fade" id="searchModal" tabindex="-1" role="dialog">
        <a href="#" data-dismiss="modal" class="sportsmagazine-modal-close"><i class="icon-uniF106"></i></a>
        <div class="modal-dialog" role="document">
            <div class="container">
                <div class="row">
                    <form class="sportsmagazine-search-box">
                        <input type="text" value="Search Your Keyword" onblur="if(this.value == '') { this.value ='Search Your Keyword'; }" onfocus="if(this.value =='Search Your Keyword') { this.value = ''; }">
                        <input type="submit" value="">
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- LoginModal -->
    <div class="loginmodal modal fade" id="loginModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Login To Your Account</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="password" value="Password*" onblur="if(this.value == '') { this.value ='Password*'; }" onfocus="if(this.value =='Password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign In" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Sign - Up Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>

    <!-- SignupModal -->
    <div class="loginmodal modal fade" id="signupModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="sportsmagazine-login-box">
                <a href="#" data-dismiss="modal" class="sportsmagazine-login-close sportsmagazine-color"><i class="icon-uniF106"></i></a>
                <h4>Sign Up Now</h4>
                <form>
                    <input type="text" value="Enter username*" onblur="if(this.value == '') { this.value ='Enter username*'; }" onfocus="if(this.value =='Enter username*') { this.value = ''; }">
                    <input type="text" value="Type your password*" onblur="if(this.value == '') { this.value ='Type your password*'; }" onfocus="if(this.value =='Type your password*') { this.value = ''; }">
                    <input type="text" value="Confirm your password*" onblur="if(this.value == '') { this.value ='Confirm your password*'; }" onfocus="if(this.value =='Confirm your password*') { this.value = ''; }">
                    <a href="#" class="sportsmagazine-colorhover">Forget Password?</a>
                    <div class="clearfix"></div>
                    <label><input type="submit" value="Sign Up" class="sportsmagazine-bordercolor sportsmagazine-color"></label>
                </form>
                <h4>Try Our Socials Also</h4>
                <ul class="login-network">
                    <li><a href="#"><i class="fa fa-facebook-square"></i> Facebook</a></li>
                    <li class="sportsmagazine-twitter"><a href="#"><i class="fa fa-twitter-square"></i> Twitter</a></li>
                    <li class="sportsmagazine-google-plus"><a href="#"><i class="fa fa-google-plus-square"></i> Google+</a></li>
                </ul>
                <p>Not A Member Yet ? <a href="#" class="sportsmagazine-color">Login - Now !</a></p>
            </div>
        <div class="clearfix"></div>
        </div>
    </div>


	<!-- jQuery (necessary for JavaScript plugins) -->
	<script type="text/javascript" src="<?php echo $connection->url(); ?>/script/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/slick.slider.min.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/isotope.min.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/progressbar.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/counter.js"></script>
    <script type="text/javascript" src="<?php echo $connection->url(); ?>/script/functions.js"></script>

  </body>

</html>