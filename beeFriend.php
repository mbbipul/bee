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
<!DOCTYPE html>
<html lang='en' style="overflow-x: hidden;">
<head>
    <link href="remote/netdna.bootstrapcdn.com_bootstrap_3.0.0_css_bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="remote/netdna.bootstrapcdn.com_bootstrap_3.0.0_js_bootstrap.min.js"></script>
    <script src="remote/code.jquery.com_jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>        <!--import w3css -->
        <!--Import bootstrap-->
        <link type="text/css" rel="stylesheet" href="assets/css/bee.css"  />
        <link rel="stylesheet" href="remote/maxcdn.bootstrapcdn.com_font-awesome_4.6.0_css_font-awesome.min.css">
        <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <!-- styles just for demo -->

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->

        <!-- script styles -->
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
    width: 900px;
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
  margin-bottom: 15px;
  margin-left: 5px;

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
  position: fixed;
  top: 45px;
  bottom: 0;
  right: 0;
  width: 360px;
  background: #e9ebee;
  overflow-x: auto;
  -webkit-box-shadow: -4px 0px 5px 0px rgba(133,113,133,0.91);
-moz-box-shadow: -4px 0px 5px 0px rgba(133,113,133,0.91);
box-shadow: -4px 0px 5px 0px rgba(133,113,133,0.91);
}
.right-content ul {
  list-style: none;
  padding: 0;
  margin: 0;
  height: 100%;
  
}
.right-content ul li {
  display: block;
  padding: 5px 5px 15px 5px;
  width: 360px!important;
  cursor: pointer;
}


.right-content ul {
  list-style: none;
  padding: 0px!important;
  height: 100%;
}
.right-content ul h4 {
  font-size: 20px;
  color: #474747;
}
.right-content ul li {
  display: block;
  padding: 15px 5px 15px 15px;
  width: 100%;
  border-bottom: 1px solid rgba(221,223,226,0.5);
  cursor: pointer;
}

.right-content ul li a {
  padding: 5px;
  font-size: 12px;
}
.right-content ul li img {
  display: inline-block;
  width: 32px;
  height: 32px;
}
.right-content ul li b,
.right-content ul li span {
    margin-left: 10px;
  color: #000;
}
.right-content ul li{
    background: white;
}
.right-content ul li span {
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
.right-content ul li .fa {
  float: right;
  position: relative;
  top: 8px;
  color: #1f0;
}
.right-content ul{
    margin-bottom: 0;
}
.right-content ul li a:hover {
  text-decoration: none;
}
.right-content ul li:hover {
    background: #e2fbf2;
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
    .img-circle{
        border-radius: 50%;
    }
    
/* Created by HTML-TUTS.com */
/* Global Button */
.transparent_btn {
	display: inline-block;
	padding: 10px 14px;
	color: #FFF;
	border: 1px solid #FFF;
	text-decoration: none;
	font-size: 14px;
	line-height: 120%;
	background-color: rgba(255,255,255, 0);
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	border-radius: 4px;
	-webkit-transition: background-color 300ms ease;
	-moz-transition: background-color 300ms ease;
	transition: background-color 300ms ease;
	cursor: pointer;
}
.transparent_btn:hover {
	background-color: rgba(255,255,255, 0.3);
	color: #FFF;
}

/* Orange Button */
.transparent_btn.oranges {
	color: #000;
	border-color: #ffc65d;
}
.transparent_btn.oranges:hover {
	background-color: rgba(255, 198, 93, 0.3);
}
.transparent_btn.reds {
	color: #000;
	border-color: red;
}
.transparent_btn.reds:hover {
	background-color: rgba(255, 198, 93, 0.3);
}

/* Blue Button */
.transparent_btn.blues {
	color: #000;
	border-color: #aeddf5;
}
.transparent_btn.blues:hover {
	background-color: rgba(174, 221, 245, 0.3);
}

/* Green Button */
.transparent_btn.greens {
	color: #000;
	border-color: #86ec93;
}
.transparent_btn.greens:hover {
	background-color: rgba(134, 236, 147, 0.3);
}
.bee-pro-card-button-msg{
    padding: 5px;
    text-decoration: none!important;
    float: left;
}
.bee-pro-card-button-unfrnd{
    padding: 5px;
    margin-left: 518px;
    text-decoration: none!important;
}
.padding{
    padding-left: 20px;
}
</style>
<style>
  

*, *:before, *:after {
  box-sizing: border-box;
  
}

.rights {
  font: 14px/20px "Lato", Arial, sans-serif;
  color: #9E9E9E;
}

.slide-container {
    margin-bottom: 5px;
    padding-bottom: 5px;
  text-align: center;
}

.wrapper {
  width: 500px !important;
}


.clash-card {
  background: white;
  width: 692px;
  display: inline-block;
  margin: auto;
  position: relative;
  text-align: center;
  -webkit-box-shadow: 9px 14px 26px -9px rgba(23,56,66,0.34);
-moz-box-shadow: 9px 14px 26px -9px rgba(23,56,66,0.34);
box-shadow: 9px 14px 26px -9px rgba(23,56,66,0.34);
border-radius: 18px 18px 5px 5px;
-moz-border-radius: 18px 18px 5px 5px;
-webkit-border-radius: 18px 18px 5px 5px;
border: 0px solid #000000;
}

.clash-card__image {
  position: relative;
  height: 80px;
  border-top-left-radius: 14px;
  border-top-right-radius: 14px;
}


.clash-card__image--barbarian img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: absolute;
  left: 300px;
  top:1px;
}

.clash-card__level {
  font-size: 12px;
  font-weight: 700;
}

.clash-card__level--barbarian {
  color: #EC9B3B;
}

.clash-card__unit-name {
  font-size: 26px;
  color: black;
  font-weight: 900;
  margin-left: 20px;
}

.clash-card__unit-description {
  padding: 10px;
}

.clash-card__unit-stats--barbarian {
  background: white;
}
.clash-card__unit-stats--barbarian .one-third {
  border-right: 1px solid #BD7C2F;
}

.clash-card__unit-stats {
  color: black;
  font-weight: 700;
  border-bottom-left-radius: 14px;
  border-bottom-right-radius: 14px;
}
.clash-card__unit-stats .one-third {
  width: 33%;
  float: left;
  padding: 5px 5px;
}
.clash-card__unit-stats sup {
  position: absolute;
  bottom: 4px;
  font-size: 45%;
  margin-left: 2px;
}
.clash-card__unit-stats .stat {
  position: relative;
  font-size: 24px;
  margin-bottom: 10px;
}
.clash-card__unit-stats .stat-value {
  font-weight: 400;
  font-size: 12px;
}
.clash-card__unit-stats .no-border {
  border-right: none;
}
.no-border{
    width: 235px!important;
}
.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
.button-container {
    position: absolute;
  top: -1px;
  margin-top: 15px;
}


.bee-creat-circle{
    position: fixed;
    top: 40px;
    right: 340px;
    color: black;
    border-left: 1px solid whitesmoke;
    height: 100%;
    
}
.dp{
margin-top: 10px;
}
.media{border:1px solid #c1eab0; margin: 20px 0; padding-left:15px;padding-top:5px;padding-bottom:5px}
.media-body{padding:10px;}
.media-body a{top:-3px;text-decoration:none;}
.labels{
  margin-left:5px;
}


      </style>      
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
<div class="feed-content "  id="feedContent">
       
    <div class="recentcontainer rights">
         <div class="slide-container">
  <div class="wrapper">
    <div class="clash-card barbarian alert-success">
      <div class="clash-card__image clash-card__image--barbarian">
          <img src="http://localhost/bee/assets/img/IMG_20171205_122322.jpg"  alt="barbarian" />
      </div>
        <div class="button-container">
            <a href="#" class="transparent_btn greens waves-effect alert-success bee-pro-card-button-msg" style="margin-left:20px;">Message</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger bee-pro-card-button-unfrnd">Unfriend</a>
        
  </div>
              <div class="clash-card__unit-name">Bipul Mandol</div>
      <div class="clash-card__level clash-card__level--barbarian">University Of Barisal</div>
      <div class="clash-card__unit-description">
        The Barbarian is a kilt-clad Scottish warrior with an angry, battle-ready expression, hungry for destruction. He has Killer yellow horseshoe mustache.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third waves-effect">
          
          <div class="stat-value">Followers</div>
          <div class="stat">20</div>
        </div>

        <div class="one-third waves-effect">
          <div class="stat-value">Following</div>
                    <div class="stat">16</div>

        </div>

        <div class="one-third no-border waves-effect">
          <div class="stat-value">Partner</div>
                    <div class="stat">150</div>

        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper --> 
</div>
         <div class="slide-container">
  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
          <img src="http://localhost/bee/assets/img/IMG_20171205_122322.jpg"  alt="barbarian" />
      </div>
        <div class="button-container">
                <div class='button -alge center'>Remove Friendship</div>
    <div class='button -flower center'>Message</div>
  </div>
              <div class="clash-card__unit-name">Bipul Mandol</div>
      <div class="clash-card__level clash-card__level--barbarian">University Of Barisal</div>
      <div class="clash-card__unit-description">
        The Barbarian is a kilt-clad Scottish warrior with an angry, battle-ready expression, hungry for destruction. He has Killer yellow horseshoe mustache.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          
          <div class="stat-value">Followers</div>
          <div class="stat">20</div>
        </div>

        <div class="one-third">
          <div class="stat-value">Following</div>
                    <div class="stat">16</div>

        </div>

        <div class="one-third no-border">
          <div class="stat-value">Partner</div>
                    <div class="stat">150</div>

        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper --> 
</div>
         <div class="slide-container">
  <div class="wrapper">
    <div class="clash-card barbarian">
      <div class="clash-card__image clash-card__image--barbarian">
          <img src="http://localhost/bee/assets/img/IMG_20171205_122322.jpg"  alt="barbarian" />
      </div>
        <div class="button-container">
                <div class='button -alge center'>Remove Friendship</div>
    <div class='button -flower center'>Message</div>
  </div>
              <div class="clash-card__unit-name">Bipul Mandol</div>
      <div class="clash-card__level clash-card__level--barbarian">University Of Barisal</div>
      <div class="clash-card__unit-description">
        The Barbarian is a kilt-clad Scottish warrior with an angry, battle-ready expression, hungry for destruction. He has Killer yellow horseshoe mustache.
      </div>

      <div class="clash-card__unit-stats clash-card__unit-stats--barbarian clearfix">
        <div class="one-third">
          
          <div class="stat-value">Followers</div>
          <div class="stat">20</div>
        </div>

        <div class="one-third">
          <div class="stat-value">Following</div>
                    <div class="stat">16</div>

        </div>

        <div class="one-third no-border">
          <div class="stat-value">Partner</div>
                    <div class="stat">150</div>

        </div>

      </div>

    </div> <!-- end clash-card barbarian-->
  </div> <!-- end wrapper --> 
</div>
    
    </div>
    </div>    
<div class="right-content">
    <ul>
    <h4>Friend Request</h4>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Accept Request</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
  </ul>
    <ul>
    <h4>Grow Your Circle</h4>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
    <li class="waves-effect">
        <div>
            <img class="img-circle" src="https://i.imgur.com/5jInimY.jpg"  align="left"> 
            <b>Bipul Mandol</b> 
            <a href="#" class="transparent_btn greens waves-effect alert-success" style="margin-left:20px;">Add Friend</a>
            <a href="#" class="transparent_btn reds waves-effect alert-danger">Delete</a>
        </div>
    </li>
  </ul>
</div>



</body>
</html>