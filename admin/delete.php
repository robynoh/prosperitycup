<?php
ob_start();
require_once("scripts/config.php");
require_once("scripts/functions.php");
require_once('classes/class.php');

$connect =new connection();
 	$connect->connectTodatabase();
	$connect->selectDatabase();

//  Developed by Robinson Agaga 
//  This notice MUST stay intact for legal use




if(isset($_GET['news_id']) && $_GET['news_id'] != ""){
	if (ExecuteQuery("delete from news where news_id='".$_GET['news_id']."'"));
	
	header("location:./updates"); 
	exit;
}

if(isset($_GET['fixid']) && $_GET['fixid'] != ""){
	if (ExecuteQuery("delete from fixturesbk where fix_id='".$_GET['fixid']."'"));
	
	header("location:./fixture"); 
	exit;
}


if(isset($_GET['matchid']) && $_GET['matchid'] != ""){
	if (ExecuteQuery("delete from today_match where match_id='".$_GET['matchid']."'"));
	
	header("location:./today_match"); 
	exit;
}

if(isset($_GET['acc_id']) && $_GET['acc_id'] != ""){
	if (ExecuteQuery("delete from account where account_id='".$_GET['acc_id']."'"));
	
	header("location:./users"); 
	exit;
}

if(isset($_GET['remark_id']) && $_GET['remark_id'] != ""){
	if (ExecuteQuery("delete from remarks where remark_id='".$_GET['remark_id']."'"));
	
	header("location:./remarks"); 
	exit;
}

if(isset($_GET['video_id']) && $_GET['video_id'] != ""){
	if (ExecuteQuery("delete from videos where video_id='".$_GET['video_id']."'"));
	
	header("location:./videos"); 
	exit;
}

if(isset($_GET['update_id']) && $_GET['update_id'] != ""){
	if (ExecuteQuery("delete from palliatives where update_id='".$_GET['update_id']."'"));
	
	header("location:./palliatives"); 
	exit;
}

if(isset($_GET['img_id']) && $_GET['img_id'] != ""){
	if (ExecuteQuery("delete from gallery where photo_id='".$_GET['img_id']."'"));
	header("location:./gallery_list"); 
	exit;
}

?>