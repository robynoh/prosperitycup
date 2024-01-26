<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

$recordperpage = 9;
	$pagenum = 1;
	if(isset($_GET['page'])){
	$pagenum = $_GET['page'];
	}
	$offset = ($pagenum - 1) * $recordperpage;
	
	
	
		if (isset($_GET['pageno'])) {
    $page_number = $_GET['pageno'];
} else {
     $page_number = 1;
}

$no_of_records_per_page = 9;
$offset = ($page_number-1) * $no_of_records_per_page; 


    $querypro= "SELECT * FROM `gallery` order by photo_id desc limit $offset ,$no_of_records_per_page ";
	$resultpro=$connection->retrieve($querypro);
	$rowspro=$connection->arrayFetch($resultpro);
	
	
	 $querypro1= "SELECT * FROM `gallery` ";
	 $resultpro1=$connection->retrieve($querypro1);
	$countrows=$connection->numRows($resultpro1);
	$total_pages = ceil($countrows/$no_of_records_per_page);
	$to = min( ($page_number * $no_of_records_per_page), $countrows );
	$from = (($page_number * $no_of_records_per_page) - $no_of_records_per_page + 1);
	
	$previous_page = $page_number - 1;
    $next_page = $page_number + 1;
	
	
	$queryfix= "SELECT * FROM `fixturesbk` order by fix_id DESC";
	$resultfix=$connection->retrieve($queryfix);
	$rowsfix=$connection->arrayFetch($resultfix);
	
	
	$queryfix= "SELECT * FROM `fixturesbk` where scoreA !='' and scoreB !='' order by fix_id DESC ";
	$resultfix=$connection->retrieve($queryfix);
	$rowsfix=$connection->arrayFetch($resultfix);
	
	
	
?>
	

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Gallery | Bayelsa Governor's Tournament - Prosperity Cup</title>
    
    <meta property="og:url"  content="https://www.prosperitycup.com/scores" />
<meta property="og:type"     content="article" />
<meta property="og:title"    content="Check match scores for each day" />
<meta property="og:description" content="Get the score of all matches that took place in the prosperity Tournament" />
<meta property="og:image"  content="http://www.prosperitycup.com/images/match_results.png" />

    <!-- Css Files -->
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/flaticon.css" rel="stylesheet">
    <link href="css/slick-slider.css" rel="stylesheet">
    <link href="css/fancybox.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--/!--[if lte IE 9]--> <link rel="stylesheet" href="../../css/chosen.html"> <!--[endif]--//-->
    

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
		<div class="sportsmagazine-main-content sportsmagazine-main-contentminus">
            
            <!--// Main Section \\-->
            
            <!--// Main Section \\-->
<br/><br/>
			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
					
					 <div class="sportsmagazine-fancy-title-two"><h2>Scores <span></span></h2></div>
					
					 
	
                   
							<div class="col-md-12">
                            <div class="sportsmagazine-match-fixture">
                                <div class="sportsmagazine-classic-heading">
                                    <h2>Match Scores</h2>
                                </div>
                                <table class="sportsmagazine-client-detail">
								
								<?php foreach($rowsfix as $rowfix){?>
                                    <tr>
                                        <td><?php echo $rowfix['matchDate']; ?></td>
                                        <td>
                                            <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6><?php echo $rowfix['teama']; ?></h6>
                                                <span><b>Team 1</b></span>
                                            </div>
                                        </td>
										 <td>
                                           
                                          
                                                <h6><b><?php echo $rowfix['scoreA']; ?></b></h6>
                                               
                                         
                                        </td>
                                        <td><span>VS</span></td>
										<td>
                                           
                                         
                                                <h6><b><?php echo $rowfix['scoreB']; ?></b></h6>
                                               
                                           
                                        </td>
                                        <td>
                                            <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6><?php echo $rowfix['teamb']; ?></h6>
                                                <span><b>Team 2</b></span>
                                            </div>
                                        </td>
										 
										
										 <td>
                                           
                                            <div class="player-stats-text">
                                                <h6><?php echo $rowfix['center']; ?></h6>
                                                <span><b><?php echo $rowfix['matchTime']; ?></b></span>
                                            </div>
                                        </td>
                                    </tr>
									
								<?php }?>
                                   
                                </table>
							 <div style="padding:10px">
									 <p> <a  target="blank" href="<?php echo $connection->url(); ?>/matchfixtures/MATCH-FIXTURES-AND-SCHEDULES.pdf"><u><b style="color:#090">VIEW AND DOWNLOAD ALL MATCH FIXTURES and  SCHEDULES FOR THE PRELIMINARIES TO QUALIFY 16
TEAMS FOR THE NEXT “ROUND OF 16”.</b></u></a></p>
</div>
                            </div>
							
                        </div>

                        <!--// SideBar \\-->
                      
                        <!--// SideBar \\-->

                        <div class="col-md-9">
                            
                           
                           
                          
							
							
                           
                          

                        </div>
						
						 <!--<div class="sportsmagazine-pagination">-->
       <!--                       <ul class="page-numbers">-->
       <!--                          <li><a class="previous page-numbers"  <?php //if(isset($_GET['pageno']) && $_GET['pageno'] > 1){?> href="?pageno=<?php // echo $previous_page;?>" <?php // }?> aria-label="Previous">-->
										
							<!--	 <span aria-label="Next"><i class="fa fa-angle-left"></i></span></a></li>-->
                                 
							<!--	 <?php // for($page_number = 1; $page_number<= $total_pages; $page_number++){?>-->
							<!--			<li class="page-numbers<?php // if(isset($_GET['pageno'])&& $_GET['pageno']==$page_number){?> active <?php //}?>" ><a class="page-link" href="gallery?pageno=<?php // echo $page_number; ?>"><?php // echo $page_number; ?></a></li>-->
										
							<!--			<?php // }?>-->
								 
								 
       <!--                          <li><a class="next page-numbers" <?php // if(isset($_GET['pageno']) && $_GET['pageno'] < $total_pages){?> href="?pageno=<?php // echo $next_page;?>" <?php // }?> aria-label="Next">-->
							<!--	 <span aria-label="Next"><i class="fa fa-angle-right"></i></span></a></li>-->
       <!--                       </ul>-->
       <!--                     </div>-->
						

					</div>
				</div>
			</div>
			<!--// Main Section \\-->

		</div>
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
	<script type="text/javascript" src="script/jquery.js"></script>
    <script type="text/javascript" src="script/bootstrap.min.js"></script>
    <script type="text/javascript" src="script/slick.slider.min.js"></script>
    <script type="text/javascript" src="script/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="script/fancybox.pack.js"></script>
    <script type="text/javascript" src="script/isotope.min.js"></script>
    <script type="text/javascript" src="script/progressbar.js"></script>
    <script type="text/javascript" src="script/counter.js"></script>
    <script type="text/javascript" src="script/functions.js"></script>

  </body>

</html>