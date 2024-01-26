<?php
ob_start();
 session_start ();
 require_once("scripts/config.php"); ?>
<?php require_once("scripts/functions.php"); 

$result  =  ExecuteQuery("SELECT * FROM gallery ");


							  
							   $num=NumOfRows($result);

?>

<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>Gallery</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="assets/styles.css" rel="stylesheet" media="screen">
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
                  <div class="row-fluid">
                      <!-- block --><!-- /block -->
                  </div>
                    <div class="row-fluid"></div>
                    <div class="row-fluid"></div>
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><b style="font-size:14px; color:#000">Gallery Photos</b></div>
                                <div class="pull-right"><span class="badge badge-info"><?php echo $num; ?></span>

                                </div>
                            </div><br/>
                             
                            <div class="block-content collapse in">
                               <div class="btn-group">
                                         <a href="add_photo_gallery.php">
                                         <button class="btn btn-success">Add New Photo<i class="icon-plus icon-white"></i></button></a>
                                      </div> <div class="row-fluid padd-bottom">
                                   <?php while($rows=SqlArray($result)){  ?>
                                  <div class="span3" >
                                      <a href="#" class="thumbnail"><img src="gallery/<?php echo $rows['filename'];?>" style="width: 260px; height: 180px;">
                                       
                                      </a><div class="imageSet"><div class="imageSet"><a href="delete?img_id=<?php echo $rows['photo_id'];?>" class="btn btn-danger btn-mini"><i class="icon-remove icon-white"></i>Delete</a></div><div class="imageSet"><a href="gallery_view?id=<?php echo $rows['photo_id'];?>" class="btn btn-mini"><i class="icon-eye-open"></i> View</a></div></div>
                                  </div><?php ;}?>
                                 
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
                </div>
            </div>
            <hr>
             <?php include('includes/footer.php');?>
        </div>
        <!--/.fluid-container-->
        <script src="vendors/jquery-1.9.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>