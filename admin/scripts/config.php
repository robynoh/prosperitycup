 <?php
define("SERVER","localhost");
define("PASSWORD","[L42l9UKW(hyg7");
define("USERNAME","prospe");
define("DB","prospe_prosperity_cup");
define("SITE_URL","http://localhost/corner-pocket/");
$connection = mysqli_connect(SERVER,USERNAME,PASSWORD) or die ("Could not connect to database server");
$db = mysqli_select_db($connection,DB) or die ("Could not select to database");
?>