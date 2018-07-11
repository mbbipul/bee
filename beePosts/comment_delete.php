<?php
if(!empty($_POST['cid'])) {
	include_once 'includes/config.php';
	$cid = $_POST['cid'];
	$query = mysql_query("DELETE FROM `comments` WHERE `comment_id` = $cid ") or die(mysql_error());
} ?>