<?php 
require_once("../scripts/config.php"); ?>
<?php require_once("../scripts/functions.php");
require_once('../classes/class.php');

$connect =new connection();
$classdetail=new country_particular();
 	$connect->connectTodatabase();
	$connect->selectDatabase();
	
	
	
$result  =  ExecuteQuery("SELECT * FROM publication  where pub_id='".$_GET['id']."' ");
	$rows=SqlArray($result);	
	
	

 ?>

<?php
$msg="";
$errors = array();
$lastinserted_id="";
$lastinserted_id2="";
$lastinsertedparent_id1='';
$lastinsertedparent_id2="";


	
if(isset($_POST['update'])){
	 
	 if(empty($_POST['title'])) $errors[] ="Enter article title";
	if(empty($_POST['text'])) $errors[] ="Enter content of publication";
	
	
	 if(count($errors) > 0){
		// print all accumulated errors
		$msg = ErrorCall($errors);
	}
	else{
	///////////////////////////////////////// update events table ////////////////////////////////////////////////////////////////////////////////////	
		
	$updatequery="update publication set title='".$_POST['title']."',text='".$_POST['text']."' where pub_id='".$_GET['id']."'";
	$connect->insertion($updatequery);	
	
	
	
	 
	 $msg=successMsg('Your have updated article sucessfully');
	}
}

?>

<!DOCTYPE html>
<html>
    
    <head>
        <title>Publication</title>
        <!-- Bootstrap -->
         <link rel="stylesheet" type="text/css" href="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"></link>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
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
                                <div class="muted pull-left"><b style="font-size:18px; color:#000">Edit Article</b></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
					<!-- BEGIN FORM-->
					<form action="" id="form_sample_1" class="form-horizontal" enctype="multipart/form-data" method="POST">
						<fieldset>
							<?php echo $msg;?>
							<div class="control-group">
  								<label class="control-label">Title<span class="required">*</span></label>
  								<div class="controls">
  									 <input type="text" name="title" class="" value="<?php echo $rows['title']; ?>" >
  								</div>
  							</div>
							
							<div class="span12" id="content">
		                    <div class="row-fluid">
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Article</div>
		                            </div>
		                            <div class="block-content collapse in">
		                               <textarea id="ckeditor_full" name="text"><?php echo $rows['text']; ?></textarea>
		                            </div>
		                        </div>
		                        <!-- /block -->
		                    </div>
		                </div>

                            
  							
  							
							
							
							
							
  							
  							
                            
							
  							<div class="form-actions">
  								<button type="submit" name="update" class="btn btn-primary">Update Publication</button>
  								
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
            
             <p>&copy; Ijaw Youth Council <?php echo date('Y');?></p>   
           
               
        </div>
        <!--/.fluid-container-->
       <script src="vendors/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.js"></script>
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.js"></script>

		<script src="vendors/ckeditor/ckeditor.js"></script>
		<script src="vendors/ckeditor/adapters/jquery.js"></script>

		<script type="text/javascript" src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>

        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Bootstrap
            $('#bootstrap-editor').wysihtml5();

            // Ckeditor standard
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
				{ name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] },	// Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
				[ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],			// Defines toolbar group without name.
				{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
			]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });

        // Tiny MCE
        tinymce.init({
		    selector: "#tinymce_basic",
		    plugins: [
		        "advlist autolink lists link image charmap print preview anchor",
		        "searchreplace visualblocks code fullscreen",
		        "insertdatetime media table contextmenu paste"
		    ],
		    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
		});

		// Tiny MCE
        tinymce.init({
		    selector: "#tinymce_full",
		    plugins: [
		        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		    toolbar2: "print preview media | forecolor backcolor emoticons",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
		    ]
		});
      </script>
    </body>

</html>