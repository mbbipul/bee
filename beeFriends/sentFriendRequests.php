<?php
session_start();
$user_id = $_SESSION['userId'];
$friend_id = $_POST['toId'];
include("../assets/beeClasses/class.php");
$q->send_request_to($friend_id,$user_id);

?>
