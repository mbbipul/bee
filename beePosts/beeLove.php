<?php
    require '../assets/beeClasses/db.php';
/* @var $postId type */
    $postId = $_POST['postId']; 
    $likeUserId = $_POST['likeUserId'];
   // postId 	likeUserId 
    $beeLove = "insert into postlikes (postId,likeUserId ) values(?,?)";  
    $beeLoved = $conn->prepare($beeLove);
    $beeLoved->bindParam(1, $postId);
    $beeLoved->bindParam(2, $likeUserId);
    $beeLoved->execute();
?>
