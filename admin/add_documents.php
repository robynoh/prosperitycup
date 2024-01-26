<?php 
ob_start();
 session_start ();
require_once("scripts/config.php"); ?>
<?php require_once("scripts/functions.php");
require_once('../classes/class.php');

$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
 ?>

<?php
$msg="";
$errors = array();
$lastinserted_id="";



	
if(isset($_POST['add'])){
	
	
	
	 
	 
	 if(empty($_POST['name'])) $errors[] ="Enter title of assignment";
	if(empty($_FILES['filename']['name']))$errors[] ="Please select file you want student to download";
	
	
	 if(count($errors) > 0){
		// print all accumulated errors
		$msg = ErrorCall($errors);
	}
	else{
		
		if(!empty($_FILES['filename']['name'])){
		$Filename = $_FILES['filename']['name'];
	$type = $_FILES['filename']['type'];
	$size = $_FILES['filename']['size'];
	$file_cv =$connect-> random(20);
	$ext_cv = substr(strrchr($Filename, "."), 1); 

	
	$name = $connect->random(20).md5($_FILES['filename']['tmp_name']);
	$ext = substr(strrchr($_FILES['filename']['name'], "."), 1);
	
	$pass = "../document_archive/".$name.".$ext";
	move_uploaded_file($_FILES['filename']['tmp_name'],$pass);
	$file= $name.".$ext";
	$date=date('d-m-y');
	$month=date('M');
	$day=date('d');
	
	$queryPASS="INSERT INTO `documents` (`doc_id`,`filename`,`name`,`upload_date`,`month`,`day`)
VALUES (NULL,'".$file."','".$_POST['name']."','".$date."','".$month."','".$day."')";
	$connect->insertion($queryPASS);	
	
	}
	$msg=successMsg('Your have added a document sucessfully');	
}
}
?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Add user</title>
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
    
    <body>
         <?php  include("tools/admin_header.php");?>
        <div class="container-fluid">
            <div class="row-fluid">
                 <?php  include("tools/leftbar.php");?>
                <!--/span-->
                <div class="span9" id="content">
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
                                <div class="muted pull-left"><b style="font-size:18px; color:#000">Add Documents</b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="POST">
						<fieldset>
							<?php echo $msg;?>
							
							<div class="control-group">
  								
  								<div class="controls" style="border-radius:10px">
  									 <input name="filename" type='file'  />
  								</div>
								
                  
                
  							</div>
							<div class="control-group">
  								<label class="control-label">document name<span class="required">*</span></label>
  								<div class="controls">
  									<input name="name" type="text" data-required="1" class="span6 m-wrap" />
  								</div>
  							</div>
                            
  							
                            
  							<div class="form-actions">
  								<button type="submit" name="add" class="btn btn-primary">Add </button>
  								<button type="button" class="btn">Cancel</button>
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

$("input[name='parent-exist']").on("click", function() {
		 
            if($(this).val()=="yes"){
				 $('#existing-parent').show();
				 $('#new_parent_entry').hide();
				}
				else if($(this).val()!="yes"){
				 $('#existing-parent').hide();
				 $('#new_parent_entry').show();
				}
        });

	
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
		
		
		function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(90)
                        .height(100);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
    </body>

</html>