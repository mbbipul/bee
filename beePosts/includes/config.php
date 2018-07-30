<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'bee');
define('ImageUploadPath', 'uploads/');
$post_limit = 10; 
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysqli_select_db($connection,DB_DATABASE) or die(mysql_error());
mysqli_query ($connection,"set character_set_results='utf8'");   
$base_url='http://localhost/bee/beePosts/'; // with trailing slash
$bee_base_url = 'http://localhost/bee/';
$base_folder = "bee/beePosts/"; //leave empty if you using root folder 
$smiley_folder = $base_url.'assets/smileys/';
?>