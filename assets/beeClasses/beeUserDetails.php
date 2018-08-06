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
    
    public function showSearchResult($searchId) {
        $base_url='http://localhost/bee/beePosts/'; // with trailing slash
        ?>
    <style>
    .media{box-shadow:0px 0px 4px -2px #000; margin: 20px 0; padding:15px;}
.media-body{padding:10px;}
.media-body a{text-decoration:none;}
.media .label{padding:5px 10px;}
</style>

    <div class="row">

        <div class="col-md-12  " id="profile<?php echo $searchId;?>">
            <div class="media waves-effect">								
                <a class="pull-left" href="<?php echo $this->getUserUrl($searchId) ?>">									
                    <img class="media-object dp img-circle" src="<?php echo $base_url;?>uploads/<?php echo $this->getUserProfilePicUrl($searchId); ?>" style="width: 100px;height:100px;">								
                </a>								
                <div class="media-body">									
                    <h4 class="media-heading"><a href="<?php echo $this->getUserUrl($searchId);?>"><?php echo $this->getBeeUserFullName($searchId)?></a><small> London</small></h4>									
                    <h5>Software Developer at <a href="http://example.com">example.com</a></h5>									
                    <a href="#"><span class="label label-danger waves-effect waves-teal">ladies_man06</span></a>									
                    <a><span class="label label-default waves-effect waves-teal">Last Seen: Today</span></a>                                                                                                                                        
                    <a href="#"><span class="label label-success waves-effect waves-teal">Add friend</span></a>								
                    <a href="#"><span class="label label-success waves-effect waves-teal">Send Message</span></a>									
                    <a href="#"><span class="label label-warning waves-effect waves-teal">Remove</span></a>								
                </div>							
            </div>						
        </div>	
        

    </div>
<script>
    $('#profile<?php echo $searchId;?>').click(function() {
    window.location.href = 'http://localhost/bee/beeUserProfile.php?userId=<?php echo $searchId;?>';
    return false;
});
    </script>

   <?php }
    
}
        //for test
       // $q = new beeUserDetails();
       // echo $q->checkBeeUserLove(22, 1);
    
?>
