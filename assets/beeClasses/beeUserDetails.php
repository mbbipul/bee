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
    
    public function getBeeUserDescription($userId) {
        global $conn;
        $loginUserDesQuery = $conn->prepare("SELECT * FROM userdescription where userId = :userId  LIMIT 1");
        $loginUserDesQuery->execute(['userId' => $userId]);
        $loginUserDes = $loginUserDesQuery->fetch();
        return $loginUserDes;
    }
    
    public function getBeeUserProfilePic($userDescriptionProPicId) {
        global $conn;
        $loginUserProPicQuery = $conn->prepare("SELECT * FROM userprofilepic where userProfilePicId = :userProPicId");
        $loginUserProPicQuery->execute(['userProPicId' => $userDescriptionProPicId]);
        $loginUserProfilePicRes = $loginUserProPicQuery->fetch();
        return $loginUserProfilePicRes;
    }
}
?>
