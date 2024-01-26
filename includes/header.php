 <?php
require_once("classes/class.php");


$connect = new country_particular();
$connection = new connection();
$connection->connectTodatabase();
$connection->selectDatabase();

 ?>
 
 
 
 <header id="sportsmagazine-header" class="sportsmagazine-header-one">
            
            <!--// TopStrip \\-->
            <div class="sportsmagazine-topstrip">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-8" style="float:left;color:#090">
                          
						  Welcome to the official website of the Governor's Tournament- Prosperity Cup. <a style="color:#fff" href="<?php echo $connection->url(); ?>scores">View Scores Sheet</a>
                        </aside>
                        <aside class="" style="float:right">
                            <ul class="sportsmagazine-social-network">
                                <li><a href="https://www.facebook.com/prosperitycuptournament" class="sportsmagazine-colorhover fa fa-facebook-official"></a></li>
                                <li><a href="https://www.youtube.com/channel/UCDc0pLBxWEGEIlRT3Y07GoA/videos" class="sportsmagazine-colorhover fa fa-youtube"></a></li>

                               
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
            <!--// TopStrip \\-->

            <!--// MainSection \\-->
            <div class="sportsmagazine-main-header">
                <div class="container">
                    <div class="row">
                        <aside class="col-md-2"><a href="<?php echo $connection->url(); ?>" class="sportsmagazine-logo"><img src="<?php echo $connection->url(); ?>images/logo-1.png" alt=""></a></aside>
                        <div class="col-md-10">
                            <div class="sportsmagazine-right-section">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="true">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                      </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                      <ul class="nav navbar-nav">
                                        <li class="active"><a href="<?php echo $connection->url(); ?>">Home</a>
                                            
                                        </li>
										 <li class=""><a href="<?php echo $connection->url(); ?>news">News</a>
                                            
                                        </li>
										 <li class=""><a href="https://www.youtube.com/channel/UCDc0pLBxWEGEIlRT3Y07GoA/videos">Videos</a>
                                            
                                        </li>
                                         <li class=""><a href="<?php echo $connection->url(); ?>gallery">Gallery</a>
                                            
                                        </li>
                                        
                                        	<li class="sportsmagazine-megamenu-li"><a href="<?php echo $connection->url(); ?>scores">scores</a>
                                        	
                                        		<!--<li class="sportsmagazine-megamenu-li"><a href="<?php echo $connection->url(); ?>scores">scores</a>-->
										
                                           
                                        </li>
                                        
									
                                        <li class="sportsmagazine-megamenu-li"><a href="<?php echo $connection->url(); ?>fixture">Fixtures</a>
                                           
                                        </li>
                                        
                                         <li class="sportsmagazine-megamenu-li"><a href="contact-us">Contact Us</a>
                                           
                                        </li>
                                      
                                       
                                      </ul>
                                    </div>
                                </nav>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// MainSection \\-->

        </header>