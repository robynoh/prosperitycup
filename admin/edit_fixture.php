<?php 
ob_start();
 session_start ();
require_once("scripts/config.php"); ?>
<?php require_once("scripts/functions.php"); ?>

<?php
$message="";


if(isset($_GET['fixid'])){

	
	
	
	
	$resultEdit=ExecuteQuery("select * from fixturesbk  where fix_id='".$_GET['fixid']."'");
		
		$rows_Edit = SqlArray($resultEdit);
		
	
	
	
}


if(isset($_POST['update'])){

	

	
	
	
	$date = date("Y-m-d");
	if(ExecuteQuery("update fixturesbk set teama='".addslashes($_POST['teama'])."',teamb='".addslashes($_POST['teamb'])."',scoreA='".$_POST['scorea']."',scoreB='".$_POST['scoreb']."',center='".$_POST['center']."',matchDate='".$_POST['date']."' where fix_id='".$_GET['fixid']."'")){
		copy($_FILES['fileField']['tmp_name'],$folder.$Filename);
		
		header("location: ".$_SERVER['PHP_SELF']."?fixid=".$_GET['fixid']."&&confirmation=updated");
		
	
}
}
?>

<?php 
if(isset($_GET['confirmation'])&& $_GET['confirmation']="updated"){
	
	
	$resultEdit=ExecuteQuery("select * from fixturesbk  where fix_id='".$_GET['fixid']."'");
		
		$rows_Edit = SqlArray($resultEdit);
		$message=successMsg('News updated succesfully');
	}
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Edit Fixture</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="vendors/flot/excanvas.min.js"></script><![endif]-->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    
    <body style="font-size:13px">
         <?php  include("tools/admin_header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                 <?php  include("tools/leftbar.php");?>
                <!--/span-->
                <div class="span9" id="content" style="width:80%">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <div class="row-fluid">
                        <!-- block --><!-- /block -->
                 </div>

                     <!-- wizard -->
                    <div class="row-fluid section">
                         <!-- block --><!-- /block -->
                    </div>
	            <!-- /wizard -->

                     <!-- validation -->
                    <div class="row-fluid">
                         <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><b style="font-size:14px; color:#000">Fixture Edit</b></div>
                            </div>
                            <div class="block-content collapse in">
                              <?php echo $message;?>  <br/><br/><div class="span12">
                                
                                
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="post">
						<fieldset>
							
                           
  						
  							
  							
								<div class="control-group">
  								<label class="control-label">Team A<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="teama" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['teama'];?>" required />
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Score A<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="scorea" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['scoreA'];?>"/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Team B<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="teamb" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['teamb'];?>" required/>
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Score B<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="scoreb" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['scoreB'];?>" />
  								</div>
  							</div>
							
								<div class="control-group">
  								<label class="control-label">Center<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="center" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['center'];?>" required />
  								</div>
  							</div>
							
							<div class="control-group">
  								<label class="control-label">Date<span class="required">*</span></label>
  								<div class="controls">
  									<input type="text" name="date" data-required="1" class="span6 m-wrap" value="<?php echo $rows_Edit['matchDate'];?>" required />
  								</div>
  							</div>
  							
  							
                           
  							
  							
  							
  							<div class="form-actions">
  								<button name="update" type="submit" class="btn btn-inverse"><i class="icon-refresh icon-white" ></i> Update</button>&nbsp;&nbsp;
  								
  							</div> 
						</fieldset>
					</form>
					<!-- END FORM-->
				</div>
			    </div>
			</div>
                     	<!-- /block -->
		    </div>
                     <!-- /validation -->


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
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/jquery.uniform.min.js"></script>
        <script src="vendors/chosen.jquery.min.js"></script>
        <script src="vendors/bootstrap-datepicker.js"></script>

        <script src="vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

	<script type="text/javascript" src="vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="assets/form-validation.js"></script>
        
	<script src="assets/scripts.js"></script>
        <script>

	jQuery(document).ready(function() {   
	  /* FormValidation.init();*/
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
        </script>
    </body>

</html>