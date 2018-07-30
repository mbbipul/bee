<?php
    include('db.php');
    global $conn;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of beeUserDetails
 *
 * @author bb
 */
class beeUserDetails {
    
    //put your code here
    //each function name start with get then db then table name
    public function getBeeUsers($userId) {
        global $conn;
        $loginUserQuery = $conn->prepare('SELECT * FROM users WHERE userId = :userId  LIMIT 1');
        $loginUserQuery->execute(['userId' => $userId]);
        $loginUser = $loginUserQuery->fetch();
        return $loginUser;
    }
    
    public function getBeeUserFullName($userId) {
        $user = $this->getBeeUsers($userId);
        return $user[4].' '.$user[5];
    }
    
    public function getBeeUserDescription($userId) {
        global $conn;
        $loginUserDesQuery = $conn->prepare("SELECT * FROM userdescription where userId = :userId  LIMIT 1");
        $loginUserDesQuery->execute(['userId' => $userId]);
        $loginUserDes = $loginUserDesQuery->fetch();
        return $loginUserDes;
    }
    
    public function getBeeUserProfilePicId($userId) {
        /* @var $userDescriptionProPicId type */
        $userProfileDes = $this->getBeeUserDescription($userId);
        $userProfilePicId = $userProfileDes[1];
        return $userProfilePicId;
    }
    
    public function getUserProfilePicUrl($userId) {
        $userProfilePicRes = $this->getBeeUserProfilePic($this->getBeeUserProfilePicId($userId));
        $userProfilePicUrl = $userProfilePicRes[1];
        return $userProfilePicUrl;
    }
    
    public function getBeeUserProfilePic($userDescriptionProPicId) {
        global $conn;
        $loginUserProPicQuery = $conn->prepare("SELECT * FROM userprofilepic where userProfilePicId = :userProPicId");
        $loginUserProPicQuery->execute(['userProPicId' => $userDescriptionProPicId]);
        $loginUserProfilePicRes = $loginUserProPicQuery->fetch();
        return $loginUserProfilePicRes;
    }
    public function getBaseUrl() {
        return 'http://localhost/bee/';
    }
    public function getUserUrl($userId) {
        return $this->getBaseUrl().'beeUserProfile.php?userId='.$userId;
    }
    
    public function checkBeeUserLove($postId,$likeUserId) {
        global $conn;
        $beeLoveCheck = $conn->prepare('SELECT likeId FROM postlikes WHERE  '
                . ' postId= :postId  AND likeUserId = :likeUserId '
                . 'LIMIT 1');
        $beeLoveCheck->execute(['postId' => $postId,'likeUserId' => $likeUserId]);
        $beeLoveChecked = $beeLoveCheck->fetch();
        if($beeLoveChecked[0]===NULL){
            return 0;
        }
        else{
            return 1;
        }
    }
    
    public function countBeePostLove($postId) {
        global $conn;
        $beeNoLoveCheck = $conn->prepare('SELECT COUNT(*) AS beeLove FROM postlikes WHERE  postId= :postId');
        $beeNoLoveCheck->execute(['postId' => $postId]);
        $beeNoLoveChecked = $beeNoLoveCheck->fetch();
        return $beeNoLoveChecked['beeLove'];
    }
    
}
        $q = new beeUserDetails();
        echo $q->checkBeeUserLove(22, 1);
    
?>
