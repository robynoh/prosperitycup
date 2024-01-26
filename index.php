<?php require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();




    $query= "SELECT * FROM `today_match` order by match_id ASC ";
	$result=$connection->retrieve($query);
	$rows=$connection->arrayFetch($result);
	
	$queryfix= "SELECT * FROM `fixtures` order by fix_id ASC limit 6 ";
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
    <title>Home | Bayelsa Governor's Tournament - Prosperity Cup</title>
 <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!-- Css Files -->
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

		<!--// Main Banner \\-->
		<div class="sportsmagazine-banner">

            <!--// Slider \\-->
            <div class="sportsmagazine-banner-one">
                <div class="sportsmagazine-banner-one-layer">
                    <img src="extra-images/banner-1.jpg" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Discovering</span>Talents <strong class="sportsmagazine-color">In Football</strong> </h1>
                                        <p>Over 160 teams will battle to be champion of the 2022 edition of the prosperity cup.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-2.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Discovering</span>Talents <strong class="sportsmagazine-color">In Football</strong> </h1>
                                        <p>Over 160 teams will battle to be champion of the 2022 edition of the prsperity cup.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-3.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Discovering</span>Talents <strong class="sportsmagazine-color">In Football</strong> </h1>
                                        <p>Over 160 teams will battle to be champion of the 2022 edition of the prsperity cup.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-4.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Discovering</span>Talents <strong class="sportsmagazine-color">In Football</strong> </h1>
                                        <p>Over 160 teams will battle to be champion of the 2022 edition of the prsperity cup.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-5.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Discovering</span>Talents <strong class="sportsmagazine-color">In Football</strong> </h1>
                                        <p>Over 160 teams will battle to be champion of the 2022 edition of the prsperity cup.</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-7.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Participation</span>  cut Accross<strong class="sportsmagazine-color"> borders</strong></h1>
                                        <p>Team comprises of one hundred and fifteen (115) communities, thirty(30) churches, and thirteen (13) other institutions</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
				 <div class="sportsmagazine-banner-one-layer">
                    <img src="images/banner-6.png" alt="">
                    <span class="sportsmagazine-banner-pattren"></span>
                    <div class="sportsmagazine-banner-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="sportsmagazine-banner-wrap">
                                        <h1><span>Participation</span>  cut Accross<strong class="sportsmagazine-color"> borders</strong></h1>
                                        <p>Team comprises of one hundred and fifteen (115) communities, thirty(30) churches, and thirteen (13) other institutions</p>
                                        <a href="#" class="sportsmagazine-banner-btn">Read More <span></span></a>
                                    </div>
                                    <div class="sportsmagazine-banner-thumb"> <img src="extra-images/banner-thumb-1.png" alt=""> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Slider \\-->
            
        </div>
		<!--// Main Banner \\-->

		<!--// Main Content \\-->
		<div class="sportsmagazine-main-content">
		
		
						

			<!--// Main Section \\-->
			<div class="sportsmagazine-main-section">
				<div class="container">
					<div class="row">
					
						 <div class="sportsmagazine-fancy-title-two"><h2>MATCH CENTERS <span></span></h2></div>
						
                        <!--// Fixture Slider \\-->
						<div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">
                                
                            
                              
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>BDGS <br/>CENTER</span></li>      
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>OPOLO <br/>CENTER</span></li>   
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>OGBOLOMA <br/>CENTER</span></li> 
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>OKORDIA/ZARAMA <br/>CENTER</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>OPOROMA <br/> CENTRE</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>TWON-BRASS/OKPOAMA <br/> CENTRE</span></li>
									 </ul>
                                </div>
								
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>ODI <br/> CENTRE</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                     <li class="first-child"><span>AKASSA-OKPOKIRI <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                      <li class="first-child"><span>AMASSOMA <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                      <li class="first-child"><span>KAIAMA <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>OTUOKPOTI <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                      <li class="first-child"><span>OTUASEGA <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>SAGBAMA <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>AGGE <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                        <li class="first-child"><span>ANGALABIRI <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>ISAMPOU <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>EBEDEBIRI <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>AZUZUAMA <br/>CENTRE</span></li>
									 </ul>
                                </div>
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <ul class="sportsmagazine-bgcolor">
                                       <li class="first-child"><span>NEMBE CITY STADIUM</span></li>
									 </ul>
                                </div>
								
								
								
			
							
                                

                            </div>
                        </div>
                        
                        
                        
                        
                         <div class="sportsmagazine-fancy-title-two"><h2>MATCH CENTERS <span></span></h2></div>
						
                        <!--// Fixture Slider \\-->
						<div class="col-md-12">
                            <div class="sportsmagazine-fixture-slider">
                                
                            
                              
                                <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Agbia%20center.jpeg" />
                                </div>
								
								
								
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Agge%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Azuzuama%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/BDGS%20Center.jpeg" />
                                </div>
								
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <img src="/playingCenters/Ebedebiri%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                  <img src="/playingCenters/Egbema-Angalabiri%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Imiringi%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <img src="/playingCenters/Kaiama%20center.jpeg" />
                                </div>
								
								 <div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Kolocenter.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <img src="/playingCenters/Kpansia%20center.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <img src="/playingCenters/Ogboloma%20center.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Ogbolomabiri%20center.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Okodia%20center.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Okpokiri%20field%20akassa%20center.jpeg" />
                                </div>
								
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Opokuma%20center.jpeg" />
                                </div>
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                    <img src="/playingCenters/Opolo%20center.jpeg" />
                                </div>
								
								<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Otuokpoti%20center.jpeg" />
                                </div>
                                
                                
                                	<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Sagbama%20center.jpeg" />
                                </div>
                                
                                	<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/swali%20center.jpeg" />
                                </div>
                                
                                	<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Tombia%20center.jpeg" />
                                </div>
                                
                                
                                	<div class="sportsmagazine-fixture-slider-layer sportsmagazine-fixture-booked">
                                   <img src="/playingCenters/Twon%20brasss%20center.jpeg" />
                                </div>
                                
                                
								
								
								
			
							
                                

                            </div>
                        </div>
                        
                        
                        
                        
                        <div style="padding:10px">
									 <p> <a  target="blank" href="/playingCenters"><u><b style="color:#090"> View Visuals of Play Centers </b></u></a></p>
</div>
            
						
						 <div class="sportsmagazine-main-section sportsmagazine-section-post">
               
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
			
			<div class="sportsmagazine-fancy-title-two"><h2> NEWS <span></span></h2></div>
						
						 <div class="sportsmagazine-blog sportsmagazine-blog-grid">
                                <ul class="row">
                                   <?php echo $connect->show_three_news(); ?>
                                  
                                  
                                  
                                </ul>
                            </div>
						
							 <div style="padding:10px">
									 <p> <a  target="blank" href="<?php echo $connection->url(); ?>news"><u><b style="color:#090">CLICK HERE TO VIEW ALL NEWS</b></u></a></p>
</div>
						
						<div class="col-md-6">
                            <div class="sportsmagazine-match-fixture">
                                <div class="sportsmagazine-classic-heading">
                                    <h2>Match Fixtures</h2>
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
                                        <td><span>VS</span></td>
                                        <td>
                                            <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6><?php echo $rowfix['teamb']; ?></h6>
                                                <span><b>Team 2</b></span>
                                            </div>
                                        </td>
                                    </tr>
									
								<?php }?>
                                   
                                </table>
								 <div style="padding:10px">
									 <p> <a  target="blank" href="<?php echo $connection->url(); ?>/matchfixtures/MATCH-FIXTURES-AND-SCHEDULES.pdf"><u><b style="color:#090">VIEW AND DOWNLOAD ALL MATCH FIXTURES and  SCHEDULES TO QUALIFY FOR THE SECOND ROUND (32 TEAMS) 2023”.</b></u></a></p>
</div>

	 <div style="padding:10px">
									 <p> <a  target="blank" href="<?php echo $connection->url(); ?>/matchfixtures/MATCH-FIXTURES-AND-SCHEDULES2.pdf"><u><b style="color:#090">VIEW AND DOWNLOAD ALL MATCH FIXTURES and  SCHEDULES FOR THE PRELIMINARIES TO QUALIFY 16
TEAMS FOR THE NEXT “ROUND OF 16 2022”.</b></u></a></p>
</div>

 <div style="padding:10px">
									 <p> <a  target="blank" href="<?php echo $connection->url(); ?>/matchfixtures/PLAYERS-FOR-THE-PROSPERITY-CUP-TRIALS.pdf"><u><b style="color:#090"> LIST OF FIRST BATCH OF SELECTED  PLAYERS FOR THE PROSPERITY CUP TRIALS </b></u></a></p>
</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="sportsmagazine-match-fixture sportsmagazine-team-ranking">
                                <div class="sportsmagazine-classic-heading">
                                    <h2>Today's Matches</h2>
                                </div>
                                <table class="sportsmagazine-client-detail">
								  <?php foreach($rows as $row){?>
                                    <tr>
                                        <td><?php echo $row['matchDate']; ?></td>
                                        <td>
                                            <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6><?php echo $row['teama']; ?></h6>
                                                <span><b>Team 1</b></span>
                                            </div>
                                        </td>
                                        <td><span>VS</span></td>
                                        <td>
                                            <figure><img src="extra-images/team-match-img1.png" alt=""></figure>
                                            <div class="player-stats-text">
                                                <h6><?php echo $row['teamb']; ?></h6>
                                                <span><b>Team 2</b></span>
                                            </div>
                                        </td>
										<td><b><?php echo $row['center']; ?></b><br/><?php echo $row['matchTime']; ?></b></td>
                                    </tr>
								  <?php }?>
                                </table>
								
								
								
                            </div>
							
							
							
							
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