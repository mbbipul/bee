<?php
if(!empty($_POST['pid'])) {
	include_once 'includes/config.php';
	$pid = $_POST['pid'];
	 $query = mysql_query("DELETE FROM `posts` WHERE `post_id` = $pid ") or die(mysql_error());
} ?>