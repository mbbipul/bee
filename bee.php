
<?php
    include 'beePosts/includes/config.php';
    include 'beePosts/includes/smileys.php'; 
    include 'assets/beeClasses/class.php';
    include 'assets/beeClasses/beeUserDetails.php';
    session_start();
    if(!isset($_SESSION['userId']))
    {
        header("Location: index.php");
    }
    else{
        $userId = $_SESSION['userId'];
    }
    if($userId){
        $logUser = new beeUserDetails();
        $loginUser = $logUser->getBeeUsers($userId);
        //for login user profile details
    

    }
?>
<!DOCTYPE html><html lang='en' class=''>
<head>
    <link href="remote/netdna.bootstrapcdn.com_bootstrap_3.0.0_css_bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="remote/netdna.bootstrapcdn.com_bootstrap_3.0.0_js_bootstrap.min.js"></script>
    <script src="remote/code.jquery.com_jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="remote/cdnjs.cloudflare.com_ajax_libs_materialize_0.98.0_css_materialize.min.css"  />
        <!--import w3css -->
        <!--Import bootstrap-->
        <link type="text/css" rel="stylesheet" href="assets/css/bee.css"  />
        <link rel="stylesheet" href="remote/maxcdn.bootstrapcdn.com_font-awesome_4.6.0_css_font-awesome.min.css">
        <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- styles just for demo -->
		<link rel="icon" href="ICON.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
        <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css'>
         <!--Video player-->
         <link href="remote/vjs.zencdn.net_7.0.3_video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="remote/vjs.zencdn.net_ie8_ie8-version_videojs-ie8.min.js"></script>
      <link rel="stylesheet" href="assets/css/beeCard.css">
     <link href="<?php echo $base_url;?>assets/stylesheets/normalize.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>assets/stylesheets/all.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>assets/stylesheets/timeline.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>ass/stylesheets/fb-buttons.css" media="screen" rel="stylesheet" type="text/css" />
<link href="<?php echo $base_url;?>assets/stylesheets/comments.css" media="screen" rel="stylesheet" type="text/css" />

        <!-- script styles -->
        <link rel="stylesheet" href="assets/beeStories/zuck.css">
        <link rel="stylesheet" href="assets/css/beeUserHome.css">

        <link rel="stylesheet" href="assets/beeStories/skins/snapgram.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel='stylesheet prefetch' href='//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<style>
    html{
overflow-y:auto;
}
html .home{
overflow-y:hidden;
}
     .result{
        position: absolute;        
        z-index: 999;
        top: 100px;
        left: 50%;
    }
    .result{
        width: 100%;
        box-sizing: border-box;
        z-index: 3;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
   
    .modals,
.modal-box {
  z-index: 900;
}

.modal-sandbox {
  position: fixed;
  width: 800px;
  height: 100%;
  top: 0;
  left: -20px;
  background: transparent;
}

.modals {
  display: none; 
  position: fixed;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  background: rgb(0,0,0);
  background: rgba(0,0,0,.8);
  overflow: auto;
}

.modal-box {
  position: relative;
  width: 100%;
  max-width: 600px;;
  animation-name: modalbox;
  animation-duration: .3s;
  animation-timing-function: ease-out;
}

.modal-header {
  padding: 20px 40px;
  background: #546E7A;
  color: #ffffff;
}

.modal-body {
  background: #ECEFF1;
  
}

/* Close Button */
.close-modal {
  cursor: pointer;
}

/* Animation */
@-webkit-keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}

@keyframes modalbox {
  0% {
    top: -250px; 
    opacity: 0;
  }
  100% {
    top: 0; 
    opacity: 1;
  }
}



.bee-share-post-text-area {
    border: none!important;
    outline: none!important;

    -webkit-box-shadow: none!important;
    -moz-box-shadow: none!important;
    box-shadow: none!important;
      resize: none!important;
      position: absolute;
      top: -0.5px;
      left: -0.5px;
      width: 477px!important;
}
.bee-share-post-text-area:hover{
    z-index: 3;
}
textarea,
.form-control {
  border: 0;
  border-radius: 0;
  resize: none;
}
.topbar {
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  z-index: 1;
  padding: 6px 26px;
  height: 42px;
  background: #3b5e95;
  border-bottom: 1px solid #294c7b;
  overflow: hidden;
}
.topbar .right-group {
  float: right;
}
.topbar .right-group .link-group {
  position: relative;
  top: -4px;
  display: inline-block;
  padding: 0;
}
.topbar .right-group .link-group a {
  padding: 9px 8px;
  color: #fff;
  font-size: 12px;
}
.topbar .right-group .link-group a img {
  display: inline-block;
  width: 24px;
  height: 24px;
  margin-right: 9px;
}
.topbar .right-group .link-group a:hover {
  background: #355486;
  text-decoration: none;
}
.topbar .right-group .link-group:nth-child(2) a {
  margin-right: 16px;
  border-left: 1px solid #355485;
}
.topbar .right-group .notification-group {
  display: inline-block;
  position: relative;
  top: 3px;
}
.topbar .right-group .notification-group .link-group a {
  margin: 0;
  border: 0;
}
.topbar .right-group .notification-group a {
  color: #17253c;
  font-size: 21px;
}
.topbar .right-group .notification-group a:hover {
  color: #111;
  background: transparent;
}
.topbar .right-group .link-group:nth-child(4) a {
  margin-left: 16px;
  border-left: 1px solid #355485;
}
.right-group{
   margin-right: 200px!important;
}
.topbar .search-box {
  display: inline-block;
  width: calc(100vw - 72%);
}
.topbar .search-box .input-group *  {
  font-size: 12px;
  height: 25px;
  border-radius: 20px;
  background: #fff;
  outline: 0;
}
.search-box{
    width: 250px!important;
}
.search-box input[type=text]:focus{
    background-color: #fafafa!important;
    border-radius: 20px;
}

.topbar .search-box .input-group button {
  color: #7a7a7a;
  -webkit-transition: all ease 150ms;
  transition: all ease 150ms;
}
.topbar .search-box .input-group button:hover {
  color: #000;
}

.left-content {
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 300px;
  background: #e9ebee;
  overflow-y: scroll;
}
.left-content .global-links {
  padding: 10px;
  margin-left: 10px;
}
.left-content .global-links a {
  display: inline-block;
  color: #000;
  font-size: 12px;
  width: 100%;
  padding: 2px 8px;
}
.left-content .global-links a img {
  width: 20px;
  height: 20px;
  margin-right: 6px;
}
.left-content .global-links .counter {
  float: right;
  color: #90949c;
}
.left-content .global-links .counter .fa-ellipsis-h {
  font-size: 20px;
}
.left-content .global-links .activepage {
  padding-top: 5px;
  background: #fff;
  border-radius: 2px;
  border: 1px solid #dddfe2;
}
.left-content .group-content h4 {
  margin: 20px 0 8px 0;
  font-size: 13px;
  color: #444;
  text-transform: uppercase;
}
.left-content a:last-child .fa-caret-down {
  margin-right: 12px;
}
.feed-content {
    width: 630px;
  position: absolute;
  top: 42px;
  bottom: 0;
  left: 285px;
  right: 0;
  padding: 12px 7px;
  background: #e9ebee;
  overflow: auto;
}
.feed-content .recentcontainer {
  border-radius: 2px;
  border: 1px solid #dddfe2;
  margin-bottom: 15px;
  overflow: hidden;
}
.feed-content .recentcontainer .newpostheader,
.feed-content .recentcontainer .newpostfooter {
  padding: 4px 5px;
  background: #f6f7f9;
}
.feed-content .recentcontainer .newpostheader li,
.feed-content .recentcontainer .newpostfooter li {
  display: inline-block;
  width: 100%;
  text-align: center;
}
.feed-content .recentcontainer .newpostheader li:first-child,
.feed-content .recentcontainer .newpostfooter li:first-child {
  float: left;
}
.feed-content .recentcontainer .newpostheader li:last-child,
.feed-content .recentcontainer .newpostfooter li:last-child {
  float: right;
}
.feed-content .recentcontainer .newpostheader h4,
.feed-content .recentcontainer .newpostfooter h4 {
  font-size: 14px;
  margin: 10px 5px;
  color: #666;
}
.feed-content .recentcontainer .newpostheader a:first-child,
.feed-content .recentcontainer .newpostfooter a:first-child {
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader a,
.feed-content .recentcontainer .newpostfooter a {
  font-size: 14px;
}
.feed-content .recentcontainer .newpostheader a img,
.feed-content .recentcontainer .newpostfooter a img {
  width: 40px;
  height: 40px;
  margin: 5px 5px 0 5px;
}
.feed-content .recentcontainer .newpostheader a .name,
.feed-content .recentcontainer .newpostfooter a .name {
  position: relative;
  top: -6px;
}
.feed-content .recentcontainer .newpostheader a .fa,
.feed-content .recentcontainer .newpostfooter a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .newpostheader > span,
.feed-content .recentcontainer .newpostfooter > span {
  position: relative;
  top: -6px;
  left: -4px;
  font-size: 14px;
}
.feed-content .recentcontainer .newpostheader p,
.feed-content .recentcontainer .newpostfooter p {
  position: relative;
  top: -22px;
  left: 55px;
  font-size: 12px;
}
.feed-content .recentcontainer .newpostheader p a,
.feed-content .recentcontainer .newpostfooter p a {
  font-size: 12px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader .rightsideofpost,
.feed-content .recentcontainer .newpostfooter .rightsideofpost {
  position: relative;
  top: -73px;
  float: right;
}
.feed-content .recentcontainer .newpostheader .rightsideofpost .personpostmenu,
.feed-content .recentcontainer .newpostfooter .rightsideofpost .personpostmenu {
  color: #4b4f56;
}
.feed-content .recentcontainer .newpostheader li a,
.feed-content .recentcontainer .newpostfooter li a {
  font-size: 14px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .newpostheader li a .fa,
.feed-content .recentcontainer .newpostfooter li a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .community-counter {
  padding: 4px 5px;
  background: #f6f7f9;
}
.feed-content .recentcontainer .community-counter li a {
  font-size: 14px;
  color: #4b4f56;
  margin-right: 5px;
}
.feed-content .recentcontainer .community-counter li a .fa {
  display: inline-block;
  margin: 5px;
}
.feed-content .recentcontainer .newpost textarea,
.feed-content .recentcontainer .newpost .postcontent {
  display: inherit;
  padding: 10px;
  width: 100%;
  height: 100%;
  background: #f6f7f9;
}
.feed-content .recentcontainer .newpost .postcontent {
  position: relative;
  margin-top: -40px;
  padding-bottom: 40px;
  white-space: pre-line;
}
.feed-content .recentcontainer .newpostfooter {
  margin-top: 1px;
}
.feed-content .recentcontainer .commentpost {
  display: inherit;
  background: #f6f7f9;
  margin-top: -1px;
}
.feed-content .recentcontainer .commentpost img {
  margin: 10px;
  height: 40px;
}
.feed-content .recentcontainer .commentpost .input-group-btn {
  display: inline-block;
  background: #fff;
}
.feed-content .recentcontainer .commentpost .input-group-btn a {
  margin-top: 10px;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:first-child .fa {
  color: #96b756;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:nth-child(2) .fa {
  color: #f1c04e;
}
.feed-content .recentcontainer:nth-child(1) .newpostfooter li:last-child a:last-child {
  font-size: 20px;
}
.thirdcol-content {
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 250px;
  background: #e9ebee;
  right: 0;
  display: block;
  width: 300px;
  padding: 12px 7px;
  background: #e9ebee;
  overflow-x: auto;
}
.thirdcol-content > div > a,
.thirdcol-content > div > p {
  font-size: 12px;
}
.thirdcol-content .section-content {
  border-radius: 2px;
  border: 1px solid #dddfe2;
  margin: 0 0 15px 0;
  overflow-y: hidden;
  padding: 4px 5px;
  background: #f6f7f9;
}
.thirdcol-content .section-content h4:nth-child(1) {
  font-size: 14px;
  margin: 6px;
  padding: 6px;
  color: #888;
}
.thirdcol-content .section-content h4:nth-child(1) a {
  float: right;
  color: #8a8a8a;
}
.thirdcol-content .section-content p a {
  display: block;
}
.thirdcol-content .section-content p a span:not(:first-child) {
  display: inline-block;
  margin-left: 4px;
  font-size: 9px;
  padding: 1px 2px;
  color: #545454;
  background: #fff;
  border: 1px solid #b8b8b8;
}
.thirdcol-content .section-content a {
  font-size: 14px;
  margin-right: 5px;
}
.thirdcol-content .section-content a img {
  width: 64px;
  height: 64px;
  margin: 5px 5px 0 5px;
}
.thirdcol-content .section-content a .fa {
  display: inline-block;
  margin: 5px;
}
.thirdcol-content .section-content p:nth-child(3) {
  text-align: right;
  margin: -20px 0 4px 0;
  padding: 2px;
  width: 80%;
}
.thirdcol-content .section-content p:nth-child(3) a {
  display: inline-block;
  position: relative;
  top: -18px;
}
.thirdcol-content .section-content p:nth-child(4) {
  margin-top: -64px;
  margin-left: 75px;
  font-size: 12px;
}
.thirdcol-content .section-content p:nth-child(4) a:not(:nth-child(1)) {
  font-size: 12px;
  color: #4b4f56;
  margin-right: 5px;
}
.thirdcol-content .section-content p:nth-child(7) {
  text-align: center;
}
.thirdcol-content .section-content p:nth-child(7) a {
  width: 20%;
  display: inline-block;
  color: #333;
}
.thirdcol-content .section-content p:nth-child(7) .fa {
  display: block;
}
.thirdcol-content .section-content .activetrend,
.thirdcol-content .section-content .activetrend .fa {
  color: #1273b8;
}
.thirdcol-content .section-content .trend-feed ul {
  margin: 0 30px;
  padding: 0;
  list-style: square url("http://i.imgur.com/Etzny0O.png");
}
.thirdcol-content .section-content .trend-feed ul li {
  font-size: 12px;
}
.thirdcol-content .section-content .trend-feed ul li span:nth-child(1) {
  color: #999;
}
.thirdcol-content .section-content .trend-feed div a {
  float: left;
  font-size: 12px;
  margin-top: 4px;
}
.thirdcol-content .section-content .trend-feed div a:first-child {
  padding: 4px 0 0 4px;
}
.thirdcol-content .section-content .trend-feed div a:last-child {
  float: right;
  padding: 4px 0 0 4px;
}
.thirdcol-content .section-content:nth-child(1) > a:nth-child(2) {
  float: right;
  color: #8a8a8a;
}
.thirdcol-content .section-content:nth-child(4) {
  font-size: 12px;
}
.thirdcol-content .section-content:nth-child(4) h4 {
  float: left;
}
.thirdcol-content .section-content:nth-child(4) a:nth-child(2) {
  margin-top: 10px;
  float: right;
}
.thirdcol-content .section-content:nth-child(4) div {
  padding: 5px;
}
.thirdcol-content .section-content:nth-child(4) div a {
  display: block;
}
.thirdcol-content .section-content:nth-child(4) div a img {
  width: 100%;
  height: auto;
}
.thirdcol-content .section-content:nth-child(4) div a:hover {
  text-decoration: none;
}
.thirdcol-content .section-content:nth-child(4) div div {
  padding: 5px 5px 0 5px;
  font-size: 12px;
}
.thirdcol-content .section-content:nth-child(4) div div div {
  padding: 0;
}
.thirdcol-content .section-content:nth-child(4) div div:nth-child(3) {
  color: #878787;
}
.thirdcol-content .section-content:nth-child(5) a {
  font-size: 12px;
}
.feed-content {
  right: 300px;
}
.right-content {
  display: none;
  position: fixed;
  top: 42px;
  bottom: 0;
  width: 450px;
  background: #e9ebee;
  right: 0;
  width: 450px;
  padding: 12px 7px;
  background: #e9ebee;
  overflow-x: auto;
  border-left: 1px solid #a3a3a3;
}
.right-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  cursor: pointer;
}
.right-content ul:first-child {
  list-style: none;
  padding: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul:first-child li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  border-bottom: none!important;
  cursor: pointer;
}

.right-content ul:first-child li a:hover {
  text-decoration: none;
}


.right-content ul:nth-child(3) {
  list-style: none;
  padding: 0;
  height: 50%;
  overflow: auto;
}
.right-content ul:nth-child(3) h4 {
  font-size: 12px;
  margin-top: 15px;
  color: #474747;
  text-transform: uppercase;
}
.right-content ul:nth-child(3) li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 100%;
  border-bottom: 1px solid #a3a3a3;
  cursor: pointer;
}
.right-content ul:nth-child(3) li a {
  padding: 5px;
  font-size: 12px;
}
.right-content ul:nth-child(3) li img {
  display: inline-block;
  width: 32px;
  height: 32px;
}
.right-content ul:nth-child(3) li b,
.right-content ul:nth-child(3) li span {
  color: #000;
}
.right-content ul:nth-child(3) li span {
  display: block;
  float: right;
  position: relative;
  top: 8px;
  font-size: 9px;
  padding: 1px 2px;
  color: #545454;
  background: #fff;
  border: 1px solid #b8b8b8;
}
.right-content ul:nth-child(3) li .fa {
  float: right;
  position: relative;
  top: 8px;
  color: #1f0;
}
.right-content ul:nth-child(3) li a:hover {
  text-decoration: none;
}
.right-content ul:nth-child(3) li:hover {
  background: #ccc;
}
@media all and (max-width: 700px) {
  .left-content {
    display: none;
  }
  .feed-content {
    left: 0;
  }
  .topbar .right-group > .link-group {
    display: none;
  }
}
@media all and (max-width: 1000px) {
  .thirdcol-content {
    display: none;
  }
  .feed-content {
    right: 0;
  }
}
@media all and (min-width: 1260px) {
  .feed-content {
    right: 250px;
  }
  .right-content {
    right: 0;
  }
}
@media all and (min-width: 1260px) {
  .feed-content {
    right: 575px;
  }
  .thirdcol-content {
    right: 275px;
  }
  .right-content {
    display: block;
  }
}
.pointer {
  cursor: pointer;
}
.ib {
  display: inline-block;
}
.fl {
  float: left;
}
.fr {
  float: right;
}
.tc {
  text-align: center;
}
.list-inlines {
  padding-left: 0;
  margin-left: -5px;
  list-style: none;
}
.list-inlines > li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px;
}
.global-links{
    margin-top: 20px!important;
    margin-left: 90px!important;

}
.noUnderline{
     text-decoration: none!important;
     margin-bottom: 10px;
     
}
.noUnderline:hover{
    border: 1px solid whitesmoke;
    background-color: #e0e0e0 ;
    z-index: 5!important;
}
</style>
<style>
    
            .popup-box
            {
                display: none;
                position: fixed;
                bottom: 0px;
                right: 220px;
                height: 285px;
                background-color: rgb(237, 239, 244);
                width: 300px;
                border: 1px solid rgba(29, 49, 91, .3);
            }
           
            .popup-box .popup-head
            {
                background-color: #6d84b4;
                padding: 5px;
                color: white;
                font-weight: bold;
                font-size: 14px;
                clear: both;
            }
           
            .popup-box .popup-head .popup-head-left
            {
                float: left;
            }
           
            .popup-box .popup-head .popup-head-right
            {
                float: right;
                opacity: 0.5;
            }
           
            .popup-box .popup-head .popup-head-right a
            {
                text-decoration: none;
                color: inherit;
            }
           
            .popup-box .popup-messages
            {
                height: 100%;
                overflow-y: scroll;
            }
            </style>
            <style>
                @import url(https://fonts.googleapis.com/css?family=Oswald:400,300);
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
body
{
font-family: 'Open Sans', sans-serif;
}
.chat_box .chat_message_wrapper ul.chat_message > li + li {
    margin-top: 4px;
}
.popup-box-on {
    display: block !important;
}
a:focus {
    outline: none;
    outline-offset: 0px;
}
.popup-head-left.pull-left h1 {
    color: #fff;
    float: left;
    font-family: oswald;
    font-size: 18px;
    margin: 2px 0 0 5px;
   
}
.popup-head-left a small {
    display: table;
    font-size: 11px;
    color: #fff;
    line-height: 4px;
    opacity: 0.5;
    padding: 0 0 0 7px;
}
.chat-header-button {
    background: transparent none repeat scroll 0 0;
    border: 1px solid #fff;
    border-radius: 7px;
    font-size: 15px;
    height: 26px;
    opacity: 0.9;
    padding: 0;
    text-align: center;
    width: 26px;
}
.popup-head-right {
    margin: 9px 0 0;
}
.popup-head .btn-group {
    margin: -5px 3px 0 -1px;
}
.gurdeepoushan .dropdown-menu {
    padding: 6px;
}
.gurdeepoushan .dropdown-menu li a span {
    border: 1px solid;
    border-radius: 50px;
    display: list-item;
    font-size: 19px;
    height: 40px;
    line-height: 36px;
    margin: auto;
    text-align: center;
    width: 40px;
}
.gurdeepoushan .dropdown-menu li {
    float: left;
    text-align: center;
    width: 33%;
}
.gurdeepoushan .dropdown-menu li a {
    border-radius: 7px;
    font-family: oswald;
    padding: 3px;
   transition: all 0.3s ease-in-out 0s;
}
.gurdeepoushan .dropdown-menu li a:hover {
    background:#304445 none repeat scroll 0 0 !important;
    color: #fff;
}
.popup-head {
    background: #304445 none repeat scroll 0 0 !important;
    border-bottom: 3px solid #ccc;
    color: #fff;
    display: table;
    width: 100%;
    padding: 8px;
}
.popup-head .md-user-image {
    border: 2px solid #5a7172;
    border-radius: 12px;
    float: left;
    width: 44px;
}
.uk-input-group-addon .glyphicon.glyphicon-send {
    color: #ffffff;
    font-size: 21px;
    line-height: 36px;
    padding: 0 6px;
}
.chat_box_wrapper.chat_box_small.chat_box_active {
    
    height: 342px;
    overflow-y: scroll;
    width: 316px;
}
aside {
     background-attachment: fixed;
    background-clip: border-box;
    background-color: rgba(0, 0, 0, 0);
    background-image: url("https://scontent.fluh1-1.fna.fbcdn.net/v/t1.0-9/12670232_624826600991767_3547881030871377118_n.jpg?oh=226475bcd22faf19705858eb58e776cd&oe=59CE39E7");
    background-origin: padding-box;
    background-position: center top;
    background-repeat: repeat;
    border: 1px solid #304445;
    bottom: 0;
    display: none;
    height: 466px;
    position: fixed;
    right: 70px;
    width: 300px;
    font-family: 'Open Sans', sans-serif;
}
.chat_box {
    padding: 16px;
    background: rgb(24, 97, 44) none repeat scroll 0 0;
}
.chat_box .chat_message_wrapper::after {
    clear: both;
}
.chat_box .chat_message_wrapper::after, .chat_box .chat_message_wrapper::before {
    content: " ";
    display: table;
}
.chat_box .chat_message_wrapper .chat_user_avatar {
    float: left;
}
.chat_box .chat_message_wrapper {
    margin-bottom: 32px;
}
.md-user-image {
    border-radius: 50%;
    width: 34px;
}
img {
    border: 0 none;
    box-sizing: border-box;
    height: auto;
    max-width: 100%;
    vertical-align: middle;
}
.chat_box .chat_message_wrapper ul.chat_message, .chat_box .chat_message_wrapper ul.chat_message > li {
    list-style: outside none none;
    padding: 0;
}
.chat_box .chat_message_wrapper ul.chat_message {
    float: left;
    margin: 0 0 0 20px;
    max-width: 77%;
}
.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li:first-child::before {
    border-right-color: #616161;
}
.chat_box .chat_message_wrapper ul.chat_message > li:first-child::before {
    border-color: transparent #ededed transparent transparent;
    border-style: solid;
    border-width: 0 16px 16px 0;
    content: "";
    height: 0;
    left: -14px;
    position: absolute;
    top: 0;
    width: 0;
}
.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li {
    background: #FCFBF6 none repeat scroll 0 0;
    color: #000000;
}
.open-btn {
    border: 2px solid #189d0e;
    border-radius: 32px;
    color: #189d0e !important;
    display: inline-block;
    margin: 10px 0 0;
    padding: 9px 16px;
    text-decoration: none !important;
    text-transform: uppercase;
}
.chat_box .chat_message_wrapper ul.chat_message > li {
    background: #ededed none repeat scroll 0 0;
    border-radius: 4px;
    clear: both;
    color: #212121;
    display: block;
    float: left;
    font-size: 13px;
    padding: 8px 16px;
    position: relative;
    word-break: break-all;
}
.chat_box .chat_message_wrapper ul.chat_message, .chat_box .chat_message_wrapper ul.chat_message > li {
    list-style: outside none none;
    padding: 0;
}
.chat_box .chat_message_wrapper ul.chat_message > li {
    margin: 0;
}
.chat_box .chat_message_wrapper ul.chat_message > li p {
    margin: 0;
}
.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li .chat_message_time {
    color: rgba(185, 186, 180, 0.9);
}
.chat_box .chat_message_wrapper ul.chat_message > li .chat_message_time {
    color: #727272;
    display: block;
    font-size: 11px;
    padding-top: 2px;
    text-transform: uppercase;
}
.chat_box .chat_message_wrapper.chat_message_right .chat_user_avatar {
    float: right;
}
.chat_box .chat_message_wrapper.chat_message_right ul.chat_message {
    float: right;
    margin-left: 0 !important;
    margin-right: 24px !important;
}
.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message > li:first-child::before {
    border-left-color: #E8FFD4;
}
.chat_box.chat_box_colors_a .chat_message_wrapper ul.chat_message > li:first-child::before {
    border-right-color: #FCFBF6;
}
.chat_box .chat_message_wrapper.chat_message_right ul.chat_message > li:first-child::before {
    border-color: transparent transparent transparent #ededed;
    border-width: 0 0 29px 29px;
    left: auto;
    right: -14px;
}
.chat_box .chat_message_wrapper ul.chat_message > li:first-child::before {
    border-color: transparent #ededed transparent transparent;
    border-style: solid;
    border-width: 0 29px 29px 0;
    content: "";
    height: 0;
    left: -14px;
    position: absolute;
    top: 0;
    width: 0;
}
.chat_box.chat_box_colors_a .chat_message_wrapper.chat_message_right ul.chat_message > li {
    background: #E8FFD4 none repeat scroll 0 0;
}
.chat_box .chat_message_wrapper ul.chat_message > li {
    background: #ededed none repeat scroll 0 0;
    border-radius: 12px;
    clear: both;
    color: #212121;
    display: block;
    float: left;
    font-size: 13px;
    padding: 8px 16px;
    position: relative;
}
.gurdeep-chat-box {
    background: #fff none repeat scroll 0 0;
    border-radius: 5px;
    float: left;
    padding: 3px;
}
#submit_message {
    background: transparent none repeat scroll 0 0;
    border: medium none;
    padding: 4px;
}
.gurdeep-chat-box i {
    color: #333;
    font-size: 21px;
    line-height: 1px;
}
.chat_submit_box {
    bottom: 0;
    box-sizing: border-box;
    left: 0;
    overflow: hidden;
    padding: 10px;
    position: absolute;
    width: 100%;
}
.uk-input-group {
    border-collapse: separate;
    display: table;
    position: relative;
}
</style>

<style class="cp-pen-styles">/**
 * Oscuro: #283035
 * Azul: #03658c
 * Detalle: #c7cacb
 * Fondo: #dee1e3
 ----------------------------------*/
 * {
 	margin: 0;
 	padding: 0;
 	-webkit-box-sizing: border-box;
 	-moz-box-sizing: border-box;
 	box-sizing: border-box;
 }

 a {
 	color: #03658c;
 	text-decoration: none;
 }

ul {
	list-style-type: none;
}

body {
	font-family: 'Roboto', Arial, Helvetica, Sans-serif, Verdana;
	background: #dee1e3;
}

/** ====================
 * Lista de Comentarios
 =======================*/
.comments-container {
	margin: 60px auto 15px;
	width: 768px;
}

.comments-container h1 {
	font-size: 36px;
	color: #283035;
	font-weight: 400;
}

.comments-container h1 a {
	font-size: 18px;
	font-weight: 700;
}

.comments-list {
	margin-top: 30px;
	position: relative;
}

/**
 * Lineas / Detalles
 -----------------------*/
.comments-list:before {
	content: '';
	width: 2px;
	height: 100%;
	background: #c7cacb;
	position: absolute;
	left: 32px;
	top: 0;
}

.comments-list:after {
	content: '';
	position: absolute;
	background: #c7cacb;
	bottom: 0;
	left: 27px;
	width: 7px;
	height: 7px;
	border: 3px solid #dee1e3;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border-radius: 50%;
}

.reply-list:before, .reply-list:after {display: none;}
.reply-list li:before {
	content: '';
	width: 60px;
	height: 2px;
	background: #c7cacb;
	position: absolute;
	top: 25px;
	left: -55px;
}


.comments-list li {
	margin-bottom: 15px;
	display: block;
	position: relative;
}

.comments-list li:after {
	content: '';
	display: block;
	clear: both;
	height: 0;
	width: 0;
}

.reply-list {
	padding-left: 88px;
	clear: both;
	margin-top: 15px;
}
/**
 * Avatar
 ---------------------------*/
.comments-list .comment-avatar {
	width: 65px;
	height: 65px;
	position: relative;
	z-index: 99;
	float: left;
	border: 3px solid #FFF;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	-moz-box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	box-shadow: 0 1px 2px rgba(0,0,0,0.2);
	overflow: hidden;
}

.comments-list .comment-avatar img {
	width: 100%;
	height: 100%;
}

.reply-list .comment-avatar {
	width: 50px;
	height: 50px;
}

.comment-main-level:after {
	content: '';
	width: 0;
	height: 0;
	display: block;
	clear: both;
}
/**
 * Caja del Comentario
 ---------------------------*/
.comments-list .comment-box {
	width: 680px;
	float: right;
	position: relative;
	-webkit-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	-moz-box-shadow: 0 1px 1px rgba(0,0,0,0.15);
	box-shadow: 0 1px 1px rgba(0,0,0,0.15);
}

.comments-list .comment-box:before, .comments-list .comment-box:after {
	content: '';
	height: 0;
	width: 0;
	position: absolute;
	display: block;
	border-width: 10px 12px 10px 0;
	border-style: solid;
	border-color: transparent #FCFCFC;
	top: 8px;
	left: -11px;
}

.comments-list .comment-box:before {
	border-width: 11px 13px 11px 0;
	border-color: transparent rgba(0,0,0,0.05);
	left: -12px;
}

.reply-list .comment-box {
	width: 610px;
}
.comment-box .comment-head {
	background: #FCFCFC;
	padding: 10px 12px;
	border-bottom: 1px solid #E5E5E5;
	overflow: hidden;
	-webkit-border-radius: 4px 4px 0 0;
	-moz-border-radius: 4px 4px 0 0;
	border-radius: 4px 4px 0 0;
}

.comment-box .comment-head i {
	float: right;
	margin-left: 14px;
	position: relative;
	top: 2px;
	color: #A6A6A6;
	cursor: pointer;
	-webkit-transition: color 0.3s ease;
	-o-transition: color 0.3s ease;
	transition: color 0.3s ease;
}

.comment-box .comment-head i:hover {
	color: #03658c;
}

.comment-box .comment-name {
	color: #283035;
	font-size: 14px;
	font-weight: 700;
	float: left;
	margin-right: 10px;
}

.comment-box .comment-name a {
	color: #283035;
}

.comment-box .comment-head span {
	float: left;
	color: #999;
	font-size: 13px;
	position: relative;
	top: 1px;
}

.comment-box .comment-content {
	background: #FFF;
	padding: 12px;
	font-size: 15px;
	color: #595959;
	-webkit-border-radius: 0 0 4px 4px;
	-moz-border-radius: 0 0 4px 4px;
	border-radius: 0 0 4px 4px;
}

.comment-box .comment-name.by-author, .comment-box .comment-name.by-author a {color: #03658c;}
.comment-box .comment-name.by-author:after {
	content: 'autor';
	background: #03658c;
	color: #FFF;
	font-size: 12px;
	padding: 3px 5px;
	font-weight: 700;
	margin-left: 10px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border-radius: 3px;
}

/** =====================
 * Responsive
 ========================*/
@media only screen and (max-width: 766px) {
	.comments-container {
		width: 480px;
	}

	.comments-list .comment-box {
		width: 390px;
	}

	.reply-list .comment-box {
		width: 320px;
	}
}</style>
</head>
<body>
<div class="topbar cyan darken-4 navbar-fixed">
    <a class="navbar-brand bee-margin-left-168 brand-logo bee-zero"  href="#">
                        <img src="assets/beeImage/beeLogo1.png" width="70px" height="30px" alt="">
  </a>
  <div class="search-box">
    <div class="input-group ">
        <input aria-describedby="basic-addon2" id="search" class="form-control cyan darken-3" placeholder="Search " type="text" />

        </div>
    </div>
    
  <div class="right-group">
    <div class="link-group">
      <a href="beeUserProfile.php?userId=<?php echo $loginUser['userId']?>">
          <img class="img-circle bee-user-nav-pic" src="<?php echo $base_url;?>uploads/<?php echo $logUser->getUserProfilePicUrl($userId);?>"><?php echo $loginUser['userFirstName']?>
      </a>
    </div>
    <div class="link-group">
        <a href="bee.php">Home</a>
    </div>
    <div class="link-group">
        <a href=""><b>Class Management</b></a>
    </div>
    <div class="link-group">
      <a href="">My Dairy</a>
    </div>
      <div class="link-group">
      <a href="javascript:void(0)">Take Part</a>
    </div>
    <div class="notification-group">
      <div class="link-group">
        <a class="freqnotif" href="javascript:void(0)">
          <i class="fa fa-group"></i>
        </a>
      </div>
      <div class="link-group">
          <a class="msgnotif" href="chatbox.php">
          <i class="fa fa-comment"></i>
        </a>
      </div>
      <div class="link-group">
        <a class="notif" href="javascript:void(0)">
          <i class="fa fa-globe"></i>
        </a>
      </div>

    </div>
  </div>
</div>
   
<div class="left-content" >
  <div class="global-links">
    <a class="noUnderline" href="beeUserProfile.php?userId=<?php echo $userId;?>" >
        <img class="img-circle" src="<?php echo $base_url;?>uploads/<?php echo $logUser->getUserProfilePicUrl($userId);?>">
        <?php echo $logUser->getBeeUserFullName($userId);?>
    </a>

      <a class="noUnderline" href="bee.php">
      <img src="https://png.icons8.com/ios/2x/activity-feed-2.png" /> News Feed
      
    </a>
      <a class="noUnderline" href="chatbox.php">
      <img src="https://png.icons8.com/ios/2x/chat.png" /> Chat Box
     
    </a>
       </a>
      <a class="noUnderline " href="">
      <img src="https://png.icons8.com/ios/2x/groups.png" /> Find Friends
     
    </a>
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/2x/collaboration.png" /> Take Part
     
    </a>
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/2x/todo-list-filled.png" /> My Dairy
     
    </a>
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/2x/selfie.png" /> Selfie Event
     
    </a>
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/1600/google-photos.png" /> Photos
     
    </a>
   
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/2x/musical-notes-filled.png" /> Musics
     
    </a>
   <a class="noUnderline" href="">
      <img src="https://png.icons8.com/ios/2x/movies-folder.png" /> Videos
     
    </a>
   

  </div>
</div>
    <div id="display" style="position:absolute;left: 300px;width: 1200px;z-index: 0;">
        
       </div>
<div class="feed-content"  id="feedContent">
       
    <div class="recentcontainer">
       <div class="unit" id="tabs">
        <ul class="actions">
          <li><a href="#tabs-1"><i class="icon icon-status"></i>Status</a></li>
          <li><a href="#tabs-2"><i class="icon icon-photo"></i>Add Picture</a></li>
          <li><a href="#tabs-3"><i class="icon icon-video"></i>Add Video</a></li>
         
        </ul>
        <span class="ajax_indi"><img src="<?php echo $base_url;?>assets/images/loader.gif"></span>
        <!-- Units -->
        <div class="actionUnits" id="tabs-1">
         <form id="npost" name="npost">
          <p class="formUnit" id="Status"> <i class="active"></i>
            <textarea name="message" placeholder="What's on your mind?" id="message" cols="30" rows="3"></textarea>
          <ol class="controls clearfix">
            <li class="post">
               <input type="hidden" name="loginUserId" value="<?php echo $loginUser['userId']?>"/>
              <input class="uibutton confirm fb_submit  btn   cyan darken-4" type="button" title="npost" value="Post">
            </li>
          </ol>
          </p>
          </form>
        </div>
        <div class="actionUnits" id="tabs-2">
         <form id="picpost" name="picpost">
          <p class="formUnit"> <i class="active_pic"></i>
            <textarea name="message" placeholder="What's on your mind?" id="pmessage" cols="30" rows="3"></textarea>
            <input type="hidden" name="pic_url" id="pic_url">
            <button class="uibutton  btn  cyan darken-4" type="button" id="upload_pic">Upload Picture</button><span id="statuss"></span>
          <ol class="controls clearfix">
            <li class="post">
                <input class="uibutton confirm fb_submit  btn  cyan darken-4"  type="button" value="Post" title="picpost">
                <input type="hidden" name="loginUserId" value="<?php echo $userId;?>"/>
            </li>
          </ol>
          </p>
          <p id="files"></p>
          </form>
        </div>
        <div class="actionUnits" id="tabs-3">
         <form id="vidpost" name="vidpost">
          <p class="formUnit" id="Status"> <i class="active_vid"></i>
            <textarea name="message" placeholder="Video Description" id="vmessage" cols="30" rows="3"></textarea>
            <input type="text" name="y_link" style="width:100%" id="y_link" placeholder="Enter Youtube Url - www.youtube.com/watch?v=rdmycu13Png">
          <ol class="controls clearfix">
            <li class="post">
                <input class="uibutton btn cyan darken-4 confirm fb_submit" type="button" value="Post" title="vidpost">
                <input type="hidden" name="loginUserId" value="<?php echo $userId;?>"/>
            </li>
          </ol>
          </p>
         </form>
        </div>
        <!-- / Units -->
      </div>
<style>
p.msg_wrap { word-wrap:break-word; }
</style>
 <?php
include 'beePosts/includes/security.php';
    $result = mysqli_query($connection,"SELECT * FROM posts ORDER BY postId DESC ");
    while($row = mysqli_fetch_array($result)) { 
        $post_id = $row['postId']; 
        $postUserId = $row['postUserId'];
        $postUser = new beeUserDetails;
       
?>
    <div class="row" id="tupdate">
    <div class="[ col-xs-12  ]" id="post-<?php echo $post_id; ?>"> <i class="pointer" id="pagination-<?php echo $post_id;?>"></i>
      <div class="[ panel panel-default ] panel-google-plus">
        <!-- Story -->
        <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
        </div>
        
          <div class="panel-heading">
             <img class="[ img-circle pull-left ]" src="<?php echo $base_url;?>uploads/<?php echo $postUser->getUserProfilePicUrl($postUserId);?>" height="50px" width="50px" alt="<?php echo $postUser->getBeeUserFullName($postUserId);?>" />
              <h3><a href="<?php echo $postUser->getUserUrl($postUserId);?>"><?php echo $postUser->getBeeUserFullName($postUserId);?></a></h3>
              <h5 style="padding-top:10px;"><span>Shared publicly</span> - <span><?php echo timeAgo($row['postDate']);?> </span> </h5>
           </div>
        <div class="panel-body">
          <p class="msg_wrap">
              <?php echo parse_smileys(make_clickable(nl2br(stripslashes($row['postCap']))), $smiley_folder); ?>
          </p>
          </div>
          <?php if(!empty($row['videoUrl'])) { ?>
          <iframe width="400" height="300" src="http://www.youtube.com/embed/<?php echo get_youtubeid($row['videoUrl']);?>" frameborder="0" allowfullscreen></iframe>
          <?php } elseif(!empty($row['imageUrl'])) { ?>
          <img class="panel-google-plus-image" src="<?php echo $base_url;?>image.php/<?php echo $row['imageUrl'];?>?width=595&nocache&quality=100&image=/<?php echo $base_folder;?>uploads/<?php echo $row['imageUrl'];?>">
          <?php } 
          $love = $postUser->checkBeeUserLove($post_id, $userId);
          ?>
            
          <i class="fa  <?php if($love===1){echo 'fa-heart bee-red-love';}elseif ($love===0) {echo 'fa-heart-o';}?> bee-box" id="beelove<?php echo $post_id?>" style="font-size:30px;display: inline-block;width:200px;padding: 10px 20px 10px 80px;cursor: pointer"><span class="changeNumber<?php echo $post_id?>" style="font-size:20px;padding-left: 10px;"><?php 
            $loveCount=$postUser->countBeePostLove($post_id);
            if($loveCount===''){
                
            } 
            else{ 
                echo $loveCount;
                
            }?>
              </span>
          </i>      
          <i class="fa fa-share bee-box bee-modal" data-modal="modal-name<?php echo $post_id;?>" style="font-size:30px;display: inline-block;width:200px;padding: 10px 20px 10px 80px"></i>
           <a href="" class="acomment-reply w3-hover-opacity  beesss " style="display: inline;width:200px;padding: 10px 20px 10px 80px" title="" id="acomment-comment-<?php echo $post_id; ?>">
                      <i class="fa fa-comment-o " style="font-size:30px;"></i>
</a>
           
               

   <!-- Trigger Modal. -->

<!-- Modal -->
<div class="modals" id="modal-name<?php echo $post_id;?>">
  <div class="modal-sandbox"></div>
  <div class="modal-box">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="media">
                            <div class="media-left">
                                <img class="media-object img-circle" src="http://localhost/bee/beePosts/uploads/yf5m60lmz6bh0qg6udpoy2a1nsog3fkcaz1ff2w4270dq5ghe8.png" height="40px" width="40px" alt="Food Portfolio" />              </a>
                            </div>
                            <div class="media-right" style="padding-left:10px;">Bipul Mandol
                                <br> <span>Publically</span>
                            </div>
                            
                        </div>
      </div>
      <div class="modal-body" style="padding:0px!important;">
          <form>
      <div class="form-group" style="border: none!important">
      <label for="comment"></label>
      <textarea class="form-control bee-share-post-text-area" rows="5" id="comment" placeholder="say something"></textarea>
    </div>
  </form>
                        
                        
          <div class="media" >
                <div class="media-left">
                      <?php if(!empty($row['videoUrl'])) { ?>
          <iframe width="400" height="300" src="http://www.youtube.com/embed/<?php echo get_youtubeid($row['videoUrl']);?>" frameborder="0" allowfullscreen></iframe>
          <?php } elseif(!empty($row['imageUrl'])) { ?>
          <img class="media-object" style="width: 500px;margin-top: 110px;" src="<?php echo $base_url;?>image.php/<?php echo $row['imageUrl'];?>?width=600&nocache&quality=100&image=/<?php echo $base_folder;?>uploads/<?php echo $row['imageUrl'];?>">
          <?php }?>
                </div>
                           
                            
           </div>
          <div style="padding-left: 10px;border-left: 10px solid #a6adff;z-index: -9;">
          <div class="panel-heading">
             <img class="[ img-circle pull-left ]" src="<?php echo $base_url;?>uploads/<?php echo $postUser->getUserProfilePicUrl($postUserId);?>" height="50px" width="50px" alt="<?php echo $postUser->getBeeUserFullName($postUserId);?>" />
             <div style="margin-left:35px!important;">
             <h6><a href="<?php echo $postUser->getUserUrl($postUserId);?>"><?php echo $postUser->getBeeUserFullName($postUserId);?></a></h6>
              <h6 style="padding-left: 5px;"><span>Shared publicly</span> - <span><?php echo timeAgo($row['postDate']);?> </span> </h6>
             </div>
             </div>
          <div class="panel-body" style="padding:5px!important;">
              <p >
              <?php echo parse_smileys(make_clickable(nl2br(stripslashes($row['postCap']))), $smiley_folder); ?>
          </p>
          </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default close-modal" >Cancel</button>
        <button type="button" class="btn btn-primary">Share Post</button>
      </div>
    </div>
  </div>
  </div>
</div>

<!-- Aditional Styles -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">

           <script>
               document.querySelector('#beelove<?php echo $post_id?>').addEventListener('click', function() {
    var likeUserId = "<?php echo $userId;?>";
    var postId = "<?php echo $post_id?>";
        var dataString = 'postId=' + postId + '&likeUserId=' + likeUserId ;
         if(!$(this).hasClass('bee-red-love')){
             $('.changeNumber<?php echo $post_id?>').html(parseInt($('.changeNumber<?php echo $post_id?>').html(), 10)+1);
             $.ajax({
                type: "POST",
                url: "<?php echo $base_url;?>beeLove.php",
                data: dataString,
                cache: false,
                success: function() {

                }
                });
          }
          if($(this).hasClass('bee-red-love')){
             $('.changeNumber<?php echo $post_id?>').html(parseInt($('.changeNumber<?php echo $post_id?>').html(), 10)-1);
             $.ajax({
                type: "POST",
                url: "<?php echo $base_url;?>beeNoLove.php",
                data: dataString,
                cache: false,
                success: function() {

                }
                });
          }
});

               
               document.querySelector('#beelove<?php echo $post_id?>').addEventListener('click', function() { 
            $(this).toggleClass('fa-heart');
            $(this).toggleClass('fa-heart-o');
            $(this).toggleClass('bee-red-love');
});
   </script>
        <div class="activity-comments">
            
            <ul id="CommentPosted<?php echo $post_id; ?>" >
<?php 
//fetch comments from comments table using post id
$comments = mysqli_query($connection,"SELECT * FROM `comments` WHERE `post_id`=$post_id ORDER BY `comment_id` ASC ");
$total_comments = mysqli_num_rows($comments);
?>
<li class="show-all" id="show-all-<?php echo $post_id; ?>" <?php if($total_comments == 0) { ?> style="display:none" <?php } ?>><a href="javascript:;"><span id="comment_count_<?php echo $post_id;?>"><?php echo $total_comments;?></span> comments</a></li>

 <?php while($comt = mysqli_fetch_array($comments)) { $comment_id = $comt['comment_id']; $commentUserId= $comt['userId'];?>
<li id="li-comment-<?php echo $comment_id; ?>" >
<div class="acomment-avatar ">
    <a href="<?php echo $postUser->getUserUrl($commentUserId);?>" rel="nofollow" >
        <img src="<?php echo $base_url;?>uploads/<?php echo $postUser->getUserProfilePicUrl($commentUserId);?>" class="img-circle " alt="Avatar Image" >
    </a>
    <p style="float:right; text-align:right; font-size:10px;"><a href="javascript:;" rel="<?php echo $post_id; ?>" class="comment-delete" id="comment_delete_<?php echo $comment_id; ?>">X</a></p>
</div>
<div class="acomment-meta">
    <a href="<?php echo $postUser->getUserUrl($commentUserId);?>"><?php echo $postUser->getBeeUserFullName($commentUserId);?></a> <br> <?php echo timeAgo($comt['commented_date']);?> 
</div>
<div class="acomment-content">
    <p class="msg_wrap" style="padding-left:30px;margin-bottom: 10px!important"><?php echo parse_smileys(make_clickable(nl2br(stripslashes($comt['comment']))), $smiley_folder); ?></p>
  <?php if(!empty($comt['picture'])) { ?>
  <p class="msg_image"><img src="<?php echo $base_url;?>uploads/<?php echo $comt['picture'];?>"></p>
  <?php } ?>
</div></li>
<?php } ?>
</ul>

        <form  method="post" id="fb-<?php echo $post_id; ?>" class="ac-form">
        <div class="panel-google-plus-comment ac-reply-avatar">
            <img class="img-circle" src="<?php echo $base_url;?>uploads/<?php echo $postUser->getUserProfilePicUrl($postUserId);?>" alt="User Image" />
        </div>
        <div class="ac-reply-content">
        <div class="ac-textarea panel-google-plus-textarea">
        <textarea id="ac-input-<?php echo $post_id; ?>" class="ac-input" name="comment" style="height:40px;"></textarea>
        <input type="hidden" id="act-id-<?php echo $post_id; ?>" name="act_id" value="<?php echo $post_id; ?>" />
        </div>
            <input type="hidden" name="logUserId" value="<?php echo $userId;?>">
        <input name="ac_form_submit" class=" confirm live_comment_submit btn btn-success" title="fb-<?php echo $post_id; ?>" id="comment_id_<?php echo $post_id; ?>" type="button" value="Submit"> &nbsp; or <a href="javascript:;" class="comment_cancel btn-danger btn" id="<?php echo $post_id; ?>">Cancel</a>			
        </div>
        </form>
     
</div>
        <!-- / Units -->
      </div>
    </li>
    <?php 
		
	} ?>
  </div>
    </div>
    <div class="row">
        <div class="[ col-xs-12  ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="[ glyphicon glyphicon-chevron-down ]"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>Do people born in 2000 get to choose if they are Generation Y or Generation Z? How do you decide what generation you want to belong to?</p>
                </div>
                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]">+1</button>
                    
                    <button type="button" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-share-alt ]"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
       
    </div>
    <div class="row">
        <div class="[ col-xs-12  ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="[ glyphicon glyphicon-chevron-down ]"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <p>Just created a new snippet inspired by the Svbtle Menu. Find it here: <a href="http://bootsnipp.com/snippets/MaWrA">http://bootsnipp.com/snippets/MaWrA</a></p>
                  
                    <img class="panel-google-plus-image" src="https://lh4.googleusercontent.com/-6oO7re5XALY/U6ssH6ijb_I/AAAAAAAAARQ/CeqYilQH7dI/w426-h428/svbtle-inspired-menu.PNG" width="100%"/>
                    
                </div>

                <div class="panel-footer">
                    <button type="button" class="[ btn btn-default ]">+1</button>
                    
                    <button type="button" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-share-alt ]"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
       
    </div>
     <div class="row">
        <div class="[ col-xs-12  ]">
            <div class="[ panel panel-default ] panel-google-plus">
                <div class="dropdown">
                    <span class="dropdown-toggle" type="button" data-toggle="dropdown">
                        <span class="[ glyphicon glyphicon-chevron-down ]"></span>
                    </span>
                    <ul class="dropdown-menu" role="menu">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                        <li role="presentation" class="divider"></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                    </ul>
                </div>
                <div class="panel-google-plus-tags">
                    <ul>
                        <li>#Millennials</li>
                        <li>#Generation</li>
                    </ul>
                </div>
                <div class="panel-heading">
                    <img class="[ img-circle pull-left ]" src="https://lh3.googleusercontent.com/-CxXg7_7ylq4/AAAAAAAAAAI/AAAAAAAAAQ8/LhCIKQC5Aq4/s46-c-k-no/photo.jpg" alt="Mouse0270" />
                    <h3>Robert McIntosh</h3>
                    <h5><span>Shared publicly</span> - <span>Jun 27, 2014</span> </h5>
                </div>
                <div class="panel-body">
                    <div id="instructions">

                        <video id="my_video_1" class="video-js vjs-default-skin panel-google-plus-image" width="100%" height="400px"
                            controls preload="none" poster='http://video-js.zencoder.com/oceans-clip.jpg'
                            data-setup='{ "aspectRatio":"640:267", "playbackRates": [1, 1.5, 2] }'>
                          <source src="https://vjs.zencdn.net/v/oceans.mp4" type='video/mp4' />
                          <source src="https://vjs.zencdn.net/v/oceans.webm" type='video/webm' />
                        </video>

                    
                </div>

                <div class="panel-footer" margin-top="50px">
                    <button type="button" class="btn white black-text">+1</button>
                    
                    <button type="button" class="[ btn btn-default white black-text]">
                        <span class="[ glyphicon glyphicon-share-alt ]"></span>
                    </button>
                    <div class="input-placeholder">Add a comment...</div>
                </div>
                <div class="panel-google-plus-comment">
                    <img class="img-circle" src="https://lh3.googleusercontent.com/uFp_tsTJboUY7kue5XAsGA=s46" alt="User Image" />
                    <div class="panel-google-plus-textarea">
                        <textarea rows="4"></textarea>
                        <button type="submit" class="[ btn btn-success disabled ]">Post comment</button>
                        <button type="reset" class="[ btn btn-default ]">Cancel</button>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        
       
    </div>
    </div>
    
    </div>
    </div>    
<div class="right-content">
    <ul>
        <li>
            <h1 id="header">&nbsp;</h1>
	<div id="stories" style="height:145px;position: absolute;top: -.099px;"></div>
        </li>
        
    </ul> 
    <ul>
        <li style="position: absolute;top: 140px;">
            <div class="row" >
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
 <div class="carousel carousel-slider center" data-indicators="true">
    <div class="carousel-fixed-item center">
      
        <a class="btn waves-effect white grey-text darken-text-2" style="top:40px!important;">button</a>
    </div>
    <div class="carousel-item red white-text" href="#one!">
                      <div class="profile-usertitle-name"> MATH-2202 </div>

      <div ><div class="circles" style="background-image: 
        url('assets/img/IMG_20171205_122322.jpg')"><p class="class-card-pro-name" style="margin-left:50px;">Beesir</p></div>
        
</div>
      

     <div class="card-content" style="margin:0px!important;padding:0px!important;top:2px!important;">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require </p>
       <p style="display: inline-block;" class="waves-effect waves-light tag">class starting time: 2:12:90</p>
       <span class="tag waves-effect waves-light">Room: room212</span>
            </div>
            <div class="">
              <ul class="list-inlines " >
  <li class=" tag card-tag-list waves-effect waves-light" >Assignment: bee</li>
  <li  class=" tag card-tag-list waves-effect waves-light">Class test: </li>
  <li  class="waves-effect waves-light tag card-tag-list">Item 3 fhj hgjgjh</li>
</ul>
            </div>
    </div>

    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item amber white-text" href="#two!">
      <h2>Second Panel</h2>
      <p class="white-text">This is your second panel</p>
    </div>
    <div class="carousel-item green white-text" href="#three!">
      <h2>Third Panel</h2>
      <p class="white-text">This is your third panel</p>
    </div>
    <div class="carousel-item blue white-text" href="#four!">
      <h2>Fourth Panel</h2>
      <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>

    </div>
  </div>
            </div>
            
          </div>
        </div>
      </div>

        </li>
    </ul>
  <ul>
    <h4>Your Pages</h4>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>Page Name</b> <span>1</span>
      </a>
    </li>
    <a href="javascript:register_popup('narayan-prusty', 'Narayan Prusty');">
        <li>
       
                    <img width="30" height="30" src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-xap1/v/t1.0-1/p50x50/1510656_10203002897620130_521137935_n.jpg?oh=572eaca929315b26c58852d24bb73310&oe=54BEE7DA&__gda__=1418131725_c7fb34dd0f499751e94e77b1dd067f4c" />
                    <b>Narayan Prusty</b>
                
    </li></a>
    	
         
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>Page Name</b> <span>2</span>
      </a>
    </li>
    <h4>Contacts</h4>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
    <li>
      <a href="javascript:void(0)">
        <img src="https://i.imgur.com/5jInimY.jpg" align="left"> 
        <b>First Name</b> <i class="fa fa-circle"></i>
      </a>
    </li>
  </ul>
</div>
    
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="assets/beeStories/zuck.js"></script>
<script>
    $(".bee-modal").click(function(e){
  e.preventDefault();
  dataModal = $(this).attr("data-modal");
  $("#" + dataModal).css({"display":"block"});
});

$(".close-modal, .modal-sandbox").click(function(){
  $(".modals").css({"display":"none"});
});
</script>
         
<script>
            function buildItem(id, type, length, src, preview, link, linkText, seen, time){
                return {
                            "id": id,
                            "type": type,
                            "length": length,
                            "src": src,
                            "preview": preview,
                            "link": link,
                            "linkText": linkText,
                            "seen": seen,
							"time": time
                        };
            }

			var initDemo = function(){
				var header = document.getElementById("header");
				var skin = location.href.split('skin=')[1];
				
				if(!skin) {
					skin = 'Snapgram';
				} 

				if(skin.indexOf('#')!==-1){
				   skin = skin.split('#')[0];
				}

				var skins = {
					'Snapgram': {
						'avatars': true,
						'list': false,
						'autoFullScreen': false,
                        'cubeEffect': true
					},

					'VemDeZAP': {
						'avatars': false,
						'list': true,
						'autoFullScreen': false,
                        'cubeEffect': false
					},

					'FaceSnap': {
						'avatars': true,
						'list': false,
						'autoFullScreen': true,
                        'cubeEffect': false
					},

					'Snapssenger': {
						'avatars': false,
						'list': false,
						'autoFullScreen': false,
                        'cubeEffect': false
					}
				};
				
				var timeIndex = 0;
				var shifts = [35, 60, 60*3, 60*60*2, 60*60*25, 60*60*24*4, 60*60*24*10];
				var timestamp = function() {
				    var now = new Date();
				    var shift = shifts[timeIndex++] || 0;
				    var date = new Date( now - shift*1000);

				    return date.getTime() / 1000;
				};

				var stories = new Zuck('stories', {
					backNative: true,
                    previousTap: true,
					autoFullScreen: skins[skin]['autoFullScreen'],
					skin: skin,
					avatars: skins[skin]['avatars'],
					list: skins[skin]['list'],
                    cubeEffect: skins[skin]['cubeEffect'],
					localStorage: true,
					stories: [
						{
							id: "ramon",
							photo: "https://avatars1.githubusercontent.com/u/2271175?v=3&s=460",
							name: "Ramon",
							link: "https://ramon.codes",
							lastUpdated: timestamp(),
							items: [
								buildItem("ramon-1", "photo", 3, "https://instagram.fcpq1-1.fna.fbcdn.net/vp/58d0a550c53088cdb35b35df264b08dd/5B71DD99/t51.2885-15/s750x750/sh0.08/e35/30087632_1840683112891500_5841478972252094464_n.jpg", "https://instagram.fcpq1-1.fna.fbcdn.net/vp/58d0a550c53088cdb35b35df264b08dd/5B71DD99/t51.2885-15/s750x750/sh0.08/e35/30087632_1840683112891500_5841478972252094464_n.jpg", '', false, false, timestamp()),
								buildItem("ramon-2", "video", 0, "https://instagram.fcpq1-1.fna.fbcdn.net/vp/9eeb88fc715827f48548e13c29bbf5f2/5ADB46A4/t50.2886-16/30746685_2117671735183416_1093170958966980608_n.mp4", "https://instagram.fcpq1-1.fna.fbcdn.net/vp/84bf84eed18f43cbd25314c4fc785c65/5ADB83C2/t51.2885-15/s1080x1080/e15/fr/30602505_193116778164680_1241426731739381760_n.jpg", '', false,  false, timestamp()),
								buildItem("ramon-3", "photo", 3, "https://ramon.codes/ICON.png", "https://ramon.codes/ICON.png", 'https://ramon.codes', 'Visit my Portfolio', false, timestamp())
							]
						},
						{
							id: "gorillaz",
							photo: "https://lh3.googleusercontent.com/xYFz6B9FHMQq7fDOI_MA61gf0sNdzGBbdR7-mZ7i4rEVvE_N-kZEY_A4eP74Imcf8Sq3FYxAgd4eJA=w200",
							name: "Gorillaz",
							link: "",
							lastUpdated: timestamp(),
							items: [
								buildItem("gorillaz-1", "video", 0, "https://instagram.frao1-1.fna.fbcdn.net/t50.2886-16/17886251_1128605603951544_572796556789415936_n.mp4", "https://pbs.twimg.com/media/C8VgMQ8WAAE5i9M.jpg:small", '', false, false, timestamp()),
								buildItem("gorillaz-2", "photo", 3, "https://pbs.twimg.com/media/C8VgMQ8WAAE5i9M.jpg:large","https://pbs.twimg.com/media/C8VgMQ8WAAE5i9M.jpg:small", '', false, false, timestamp()),
							]
						},
						{
							id: "ladygaga",
							photo: "https://lh3.googleusercontent.com/VkANYSL1HOzINPSnzBJRM879b302ShsRwLoKD7mLezgTLvlpHPm_dIVop7mkAQfepze6O5N8rw8l4yM=w200",
							name: "Lady Gaga",
							link: "",
							lastUpdated: timestamp(),
							items: [
								buildItem("ladygaga-1", "photo", 5, "https://pbs.twimg.com/media/C8mtrEMXcAA9KKM.jpg:large", "https://pbs.twimg.com/media/C8mtrEMXcAA9KKM.jpg:small", '', false, false, timestamp()),
								buildItem("ladygaga-2", "photo", 3, "https://pbs.twimg.com/media/C4t_bxcXAAE3Hwb.jpg:large", "https://pbs.twimg.com/media/C4t_bxcXAAE3Hwb.jpg:small", 'http://ladygaga.com', false, false, timestamp()),
							]
						},
						{
							id: "starboy",
							photo: "https://lh3.googleusercontent.com/nMxfllzaAmaCCZJEMiKe2EARjyUNItQ-mdgAq6he-LWXwkIWbiiBIHyC3rGiqDu6fgyVK6NnjcgueA=w200",
							name: "The Weeknd",
							link: "",
							lastUpdated: timestamp(),
							items: [
								buildItem("starboy-1", "photo", 5, "https://pbs.twimg.com/media/C6f-dTqVQAAiy1K.jpg:large", "https://pbs.twimg.com/media/C6f-dTqVQAAiy1K.jpg:small", '', false, false, timestamp())
							]
						},
						{
							id: "qotsa",
							photo: "https://lh3.googleusercontent.com/nE4grkY8s88P_1mFFA06mGCNshhqtIz4C4y2dV7AZbm0360zopRKDMCYtUHR0uQR2DAfYMRZdA=s180-p-e100-rwu-v1",
							name: "QOTSA",
							link: "",
							lastUpdated: timestamp(),
							items: [
								buildItem("qotsa-1", "photo", 10, "https://pbs.twimg.com/media/C8wTxgUVoAALPGA.jpg:large", "https://pbs.twimg.com/media/C8wTxgUVoAALPGA.jpg:small", '', false, false, timestamp())
							]
						}
					]
				});
                
                var el = document.querySelectorAll('#skin option');
                var total = el.length;
                for (var i = 0; i < total; i++) {
					var what = (skin==el[i].value)?true:false;
                    
					if(what){
						el[i].setAttribute('selected', what);

						header.innerHTML = skin;
						header.className = skin;
					} else {
						el[i].removeAttribute('selected');
					}
                }

				document.body.style.display = 'block';
			};
			
			initDemo();
        </script>
 <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="assets/js/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>

<script>
    $(function(){
  var $refreshButton = $('#refresh');
  var $results = $('#css_result');
  
  function refresh(){
    var css = $('style.cp-pen-styles').text();
    $results.html(css);
  }

  refresh();
  $refreshButton.click(refresh);
  
  // Select all the contents when clicked
  $results.click(function(){
    $(this).select();
  });
});

    </script>
<script>
    $(function () {
   $('.panel-google-plus > .panel-footer > .input-placeholder, .panel-google-plus > .panel-google-plus-comment > .panel-google-plus-textarea > button[type="reset"]').on('click', function(event) {
        var $panel = $(this).closest('.panel-google-plus');
            $comment = $panel.find('.panel-google-plus-comment');
            
        $comment.find('.btn:first-child').addClass('disabled');
        $comment.find('textarea').val('');
        
        $panel.toggleClass('panel-google-plus-show-comment');
        
        if ($panel.hasClass('panel-google-plus-show-comment')) {
            $comment.find('textarea').focus();
        }
   });
   $('.panel-google-plus-comment > .panel-google-plus-textarea > textarea').on('keyup', function(event) {
        var $comment = $(this).closest('.panel-google-plus-comment');
        
        $comment.find('button[type="submit"]').addClass('disabled');
        if ($(this).val().length >= 1) {
            $comment.find('button[type="submit"]').removeClass('disabled');
        }
   });
});
</script>
  <script src="https://vjs.zencdn.net/7.0.3/video.js"></script>
<script  src="assets/js/index.js"></script>
<script>
            //this function can remove a array element.
            Array.remove = function(array, from, to) {
                var rest = array.slice((to || from) + 1 || array.length);
                array.length = from < 0 ? array.length + from : from;
                return array.push.apply(array, rest);
            };
       
            //this variable represents the total number of popups can be displayed according to the viewport width
            var total_popups = 0;
           
            //arrays of popups ids
            var popups = [];
       
            //this is used to close a popup
            function close_popup(id)
            {
                for(var iii = 0; iii < popups.length; iii++)
                {
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                       
                        document.getElementById(id).style.display = "none";
                       
                        calculate_popups();
                       
                        return;
                    }
                }  
            }
       
            //displays the popups. Displays based on the maximum number of popups that can be displayed on the current viewport width
            function display_popups()
            {
                var right = 220;
               
                var iii = 0;
                for(iii; iii < total_popups; iii++)
                {
                    if(popups[iii] != undefined)
                    {
                        var element = document.getElementById(popups[iii]);
                        element.style.right = right + "px";
                        right = right + 320;
                        element.style.display = "block";
                    }
                }
               
                for(var jjj = iii; jjj < popups.length; jjj++)
                {
                    var element = document.getElementById(popups[jjj]);
                    element.style.display = "none";
                }
            }
           
            //creates markup for a new popup. Adds the id to popups array.
            function register_popup(id, name)
            {
               
                for(var iii = 0; iii < popups.length; iii++)
                {  
                    //already registered. Bring it to front.
                    if(id == popups[iii])
                    {
                        Array.remove(popups, iii);
                   
                        popups.unshift(id);
                       
                        calculate_popups();
                       
                       
                        return;
                    }
                }              
               
                var element = '<div class="popup-box chat-popup" id="'+ id +'">';
                element = element + '<div class="popup-head">\n\
                ';
                element = element + '<div class="popup-head-left">'+ name +'</div>';
                element = element + '<div class="popup-head-right"><a href="javascript:close_popup(\''+ id +'\');">&#10005;</a></div>';
                element = element + '<div style="clear: both"></div></div><div class="popup-messages"></div></div>';
               
                document.getElementsByTagName("body")[0].innerHTML = document.getElementsByTagName("body")[0].innerHTML + element; 
       
                popups.unshift(id);
                       
                calculate_popups();
               
            }
           
            //calculate the total number of popups suitable and then populate the toatal_popups variable.
            function calculate_popups()
            {
                var width = window.innerWidth;
                if(width < 540)
                {
                    total_popups = 0;
                }
                else
                {
                    width = width - 200;
                    //320 is width of a single popup box
                    total_popups = parseInt(width/320);
                }
               
                display_popups();
               
            }
           
            //recalculate when window is loaded and also when window is resized.
            window.addEventListener("resize", calculate_popups);
            window.addEventListener("load", calculate_popups);
           
        </script>
        <script>
            //Getting value from "ajax.php".
function fill(Value) {
   //Assigning value to "search" div in "search.php" file.
   $('#search').val(Value);

   //Hiding "display" div in "search.php" file.

   $('#display').hide();

}

$(document).ready(function() {

   //On pressing a key on "Search box" in "search.php" file. This function will be called.

   $("#search").keyup(function() {

       //Assigning search box value to javascript variable named as "name".

       var name = $('#search').val();

       //Validating, if "name" is empty.

       if (name === "") {

           //Assigning empty value to "display" div in "search.php" file.

           $("#display").hide();
           $("#feedContent").show();

       }

       //If name is not empty.

       else {

           //AJAX is called.

           $.ajax({

               //AJAX type is "Post".

               type: "POST",

               //Data will be sent to "ajax.php".

               url: "beeSearch/search.php",

               //Data, that will be sent to "ajax.php".

               data: {

                   //Assigning value of "name" into "search" variable.

                   search: name

               },

               //If result found, this funtion will be called.

               success: function(html) {

                   //Assigning result to "display" div in "search.php" file.
                       document.getElementById("feedContent").style.display = "none";
                   $("#display").html(html).show();

               }

           });

       }

   });

});
            </script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
    var domain = "<?php echo $base_url;?>";
      // Simple infinite Scrolling
      
      $(function(){
        
          var $timeline = $('#tupdate'),
              $spinner = $('#Spinner').hide();
        
          function loadMore(){
            
            $(window).unbind('scroll.posts');
            
            $spinner.show();
            
            $.ajax({
              url: "loadmore.php?lastPost="+ $(".pointer:last").attr('id'),
              success: function(html){
                  if(html){
                      $timeline.append(html);
                      $spinner.hide();
                  }else{
                      $spinner.html('<p>No more posts to show.</p>');
                  }
                  
                  $(window).bind('scroll.posts',scrollEvent);
              }
            });
          }
        
        
          //lastAddedLiveFunc();
          $(window).bind('scroll.posts',scrollEvent);
          
          function scrollEvent(){
            var wintop = $(window).scrollTop(), docheight = $(document).height(), winheight = $(window).height();
            var  scrolltrigger = 0.95;

            if  ((wintop/(docheight-winheight)) > scrolltrigger)  loadMore();
          }
          
      });
	  
 $(function(){
	  $('#tabs div').hide();
	  $('#tabs div:first').show();
	  $('#tabs ul li:first').addClass('active');
	  $('#tabs ul li a').click(function(){ 
	  $('#tabs ul li').removeClass('active');
	  $(this).parent().addClass('active'); 
	  var currentTab = $(this).attr('href'); 
	  $('#tabs div').hide();
	  $(currentTab).show();
	  return false;
	  });
	  
	  
	  jQuery('a.acomment-reply').live("click", function(e) {
			var getpID =  jQuery(this).attr('id').replace('acomment-comment-','');
			jQuery("#acomment-comment-"+getpID).hide();
			jQuery("#fb-"+getpID).css('display','block');
			jQuery("#ac-input-"+getpID).focus();
						e.preventDefault();
								});
		
	jQuery('a.comment_cancel').live("click", function(e) {
			
			var getpID =  jQuery(this).attr('id');	
			
			jQuery("#fb-"+getpID).css('display','');
			jQuery("#acomment-comment-"+getpID).show();
			jQuery("#ac-input-"+getpID).val('');
		e.preventDefault();
	});
	  
	  
	  
});
    </script>
<script src="<?php echo $base_url;?>assets/javascripts/all.js" type="text/javascript"></script>
<script src="<?php echo $base_url;?>assets/javascripts/ajaxupload.3.5.js" type="text/javascript"></script>
<script type="text/javascript" > 
	jQuery(document).ready(function() {
		var btnUpload=jQuery('#upload_pic');
		var status=jQuery('#statuss');
		new AjaxUpload(btnUpload, {
			action: '<?php echo $base_url;?>upload-img.php',
			name: 'uploadfile',
			onSubmit: function(file, ext){
				 if (! (ext && /^(jpg|jpeg|gif|png)$/.test(ext))){ 
                    // extension is not allowed 
					status.text('Only JPG or GIF files are allowed');
					return false;
				}
				status.text('Uploading...');
			},
			onComplete: function(file, response){
				//On completion clear the status
				status.text('');
	
				//Add uploaded file to list
				if(response==="success"){
					jQuery('#pic_url').val(file);
					//jQuery('#files').empty();
					//jQuery('#files').text(file+' added').addClass('successe');
					//var ts = Math.round((new Date()).getTime() / 1000);
					jQuery('#files').html('<img src="<?php echo $base_url;?>uploads/'+file+'" height="100" width="100">');
				} else{
					//jQuery('#files').text(file+' upload failed').addClass('errore');
				}
			}
		});
		
	});
</script> 
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=133252466777552";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
<!-- AddThis Button END -->


</body>
</html>