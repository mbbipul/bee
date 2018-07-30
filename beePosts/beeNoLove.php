<?php
    require '../assets/beeClasses/db.php';
/* @var $postId type */
    $postId = $_POST['postId']; 
    $likeUserId = $_POST['likeUserId'];
   // postId 	likeUserId 
    $beeNoLove = "DELETE FROM postlikes WHERE postId= :postId  AND likeUserId = :likeUserId ";  
    $beeNoLoved = $conn->prepare($beeNoLove);
    $beeNoLoved->execute(['postId' => $postId,'likeUserId' => $likeUserId]);
?>
 