<?php 
ob_start();
session_start ();
require_once("scripts/config.php"); 
require_once("scripts/functions.php");
require_once('classes/class.php');

$msg="";
$connect =new connection();
$news =new news();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
	
	$result  =  ExecuteQuery("SELECT * FROM `fixturesbk`");

 ?>



<?php  
if(isset($_POST['activate'])){
	
	if(empty($_POST['news'])){
		
		$msg=errorMsg("Please select a News to activate.");
	
	}
		else{
			foreach($_POST['news'] as  $key => $val){
		
		ExecuteQuery("update news set status=1 where news_id='".$_POST['news'][$key]."'");
		header('location: updates');
		}
		}
	
	
	}
	
	if(isset($_POST['de-activate'])){
	
	if(empty($_POST['news'])){
		
		$msg=errorMsg("Please select a News to de-activate.");
	
	}
		else{
			foreach($_POST['news'] as  $key => $val){
		
		ExecuteQuery("update news set status=0 where news_id='".$_POST['news'][$key]."'");
		header('location: updates');
		}
		}
	
	
	}
	
	
	
	
 ?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Fixture</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <link href="assets/DT_bootstrap.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body style="font-size:12px">
        <div class="navbar navbar-fixed-top">
               <?php  include("tools/admin_header.php");?>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
              
                      <?php  include("tools/leftbar.php");?>
                
                <!--/span-->
                <div class="span9" id="content" style="width:80%">

                    
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                  </div>

                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid"><?php echo $msg;?>
                        <!-- block --><form method="post" action="">
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left" style="font-weight:bold;color:#000;font-size:14px"> Fixture</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
								<div class="table-toolbar">
                                      <div class="btn-group">
                                         
                                       <a href="add_fixtures"  class="btn " >Add Fixture </a><i class="icon-plus icon-white"></i>
                                      </div>
									
									 
                                     
                                   </div>
                                  
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
                                        <thead>
                                            <tr>
                                            <th></th>
											 <th>Match Day</th>
                                                <th>Team A</th>
												 <th>Team A score</th>
                                                <th>Team B</th>
												 <th>Team B score</th>
												
                                                <th>Center</th>
                                             
                                                <th>Date</th>
												  <th>Time</th>
												 <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                <?php  
								while($rows=SqlArray($result)){?>
                                 
                                 <tr class="gradeU">
                                            <td><input name="news[]" type="checkbox" value="<?php echo $rows['fix_id'];?>"></td>
											 <td><?php echo ucwords($rows['matchDay']);?></td>
                                                <td><?php echo ucwords($rows['teama']);?></td>
                                                <td><?php echo $rows['scoreA'];?></td>
												
                                                <td><?php echo $rows['teamb'];?></td>
												<td><?php echo $rows['scoreB'];?></td>
												
												<td><?php echo $rows['center'];?></td>
												
												<td><?php echo $rows['matchDate'];?></td>
												<td><?php echo $rows['matchTime'];?></td>
												
												 <td class="center"><div class="btn-group"><a class="btn btn-primary"  style="color:#fff" href="edit_fixture?fixid=<?php echo ucwords($rows['fix_id']);?>"><i class="icon-pencil icon-white"></i> Edit</a></div></td>
                                              
                                                 
                                                   <td class="center"><div class="btn-group"><a href="delete?fixid=<?php echo $rows['fix_id'];?>" class="btn btn-danger" style="color:#fff"><i class="icon-remove icon-white"></i> Delete</a></button></div></td>
                                            </tr>
									 
								<?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /block --></form>
                    </div>
                </div>
            </div>
            <hr>
             <?php include('includes/footer.php');?>
        </div>
        <!--/.fluid-container-->
        
         <link href="vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="vendors/jquery-1.9.1.js"></script>
       <!-- <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>
-->
	<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
		
		
		function link(){
			
			window.location="http://newgate_new/sims/admin/addNews";
			
		}
        </script>
        

        <script src="vendors/jquery-1.9.1.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/datatables/js/jquery.dataTables.min.js"></script>


        <script src="assets/scripts.js"></script>
        <script src="assets/DT_bootstrap.js"></script>
        <script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
       
    </body>

</html>