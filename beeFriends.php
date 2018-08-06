

<!DOCTYPE html><html lang='en' class=''>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="js.js"></script>

<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.css"  />
        <!--import w3css -->
        <!--Import bootstrap-->
        <link type="text/css" rel="stylesheet" href="assets/css/bee.css"  />
        <link type="text/css" rel="stylesheet" href="assets/css/w3.css"  />

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
        <!-- Bootstrap core CSS -->

  <!-- styles just for demo -->
		<link rel="icon" href="ICON.png">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
         <!--Video player-->

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
      <link rel="stylesheet" href="assets/css/beeCard.css">
      <link rel="stylesheet" href="assets/css/beeUserProfile.css">

        <!-- script styles -->
  
<style>
    .button {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
}


    body{
    }
          @import url(https://fonts.googleapis.com/css?family=Lato:400,700,900);
*, *:before, *:after {
  box-sizing: border-box;
  
}

.rights {
  background: linear-gradient(to bottom, #8c7a7a 0%, #af877c 65%, #af877c 100%) fixed;
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/coc-background.jpg") no-repeat  fixed;
  background-size: 1023px 100%;
  font: 14px/20px "Lato", Arial, sans-serif;
  color: #9E9E9E;
  margin-top: 30px;
            overflow: scroll;
}

.slide-container {
  margin: auto;
  width: 600px;
  text-align: center;
}

.wrapper {
  padding-top: 20px;
  width: 500px !important;
}
.wrapper:focus {
  outline: 0;
}

.clash-card {
  background: white;
  width: 600px;
  display: inline-block;
  margin: auto;
  border-radius: 19px;
  position: relative;
  text-align: center;
}

.clash-card__image {
  position: relative;
  height: 80px;
  border-top-left-radius: 14px;
  border-top-right-radius: 14px;
}

.clash-card__image--barbarian {
  background: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/barbarian-bg.jpg");
  background-repeat: no-repeat;
  background-size: 600px 50px;
}
.clash-card__image--barbarian img {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  position: absolute;
  left: 240px;
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

.clearfix:after {
  visibility: hidden;
  display: block;
  font-size: 0;
  content: " ";
  clear: both;
  height: 0;
}
:root {
  --color-dark: #161616;
  --color-ocean: #416dea;
  --color-grass: #3dd28d;
  --color-snow: #FFFFFF;
  --color-salmon: #F32C52;
  --color-sun: #feee7d;
  --color-alge: #7999a9;
  --color-flower: #353866;
  --color-smoke: #e4e4e4;
  --font-face: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
}


.button-container {
    position: absolute;
  display: flex;
  margin-left: 5px;
  top: -1px;
  margin-top: 15px;
}

.button {
  display: flex;
  overflow: hidden;
  padding: 5px 5px;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  transition: all 150ms linear;
  text-align: center;
  white-space: nowrap;
  text-decoration: none !important;
  text-transform: none;
  text-transform: capitalize;
  color: #fff;
  border: 0 none;
  border-radius: 4px;
  font-size: 13px;
  font-weight: 500;
  line-height: 1.3;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  justify-content: center;
  align-items: center;
  flex: 0 0 160px;
}
.button:hover {
  transition: all 150ms linear;
  opacity: .85;
}
.button:active {
  transition: all 150ms linear;
  opacity: .75;
}
.button:focus {
  outline: 1px dotted #959595;
  outline-offset: -4px;
}

.button.-regular {
  color: #202129;
  background-color: #f2f2f2;
}
.button.-regular:hover {
  color: #202129;
  background-color: #e1e2e2;
  opacity: 1;
}
.button.-regular:active {
  background-color: #d5d6d6;
  opacity: 1;
}

.button.-dark {
  color: var(--color-snow);
  background: var(--color-dark);
}
.button.-dark:focus {
  outline: 1px dotted white;
  outline-offset: -4px;
}

.button.-green {
  color: var(--color-snow);
  background: var(--color-grass);
}

.button.-blue {
  color: var(--color-snow);
  background: var(--color-ocean);
}

.button.-salmon {
  color: var(--color-snow);
  background: var(--color-salmon);
}

.button.-sun {
  color: #f15c5c;
  background: var(--color-sun);
}

.button.-alge {
     background-color: Transparent;
    margin-left: 5px;
    color: #F32C52; 
    border: 2px solid #F32C52;
}

.button.-flower {
  color: #FE8CDF;
 background-color: Transparent;
 margin-left: 260px;
     border: 2px solid #353866;

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
.rows{
  position: fixed;
   left:1010px;
   padding-top: 20px;
}
.rowss{
  position: fixed;
   right:100px;
   padding-top: 20px;
   top:30px;
   
}
.bee-rp{
    top: 60px;
    overflow: hidden;
}
.scrollbar{
    height: 100%;
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
      <input aria-describedby="basic-addon2" class="form-control cyan darken-3" placeholder="Search " type="text" />
      
    </div>
  </div>
  <div class="right-group">
    <div class="link-group">
      <a href="javascript:void(0)">
          <img class="img-circle bee-user-nav-pic" src="assets/img/IMG_20171205_122322.jpg">bee
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
      <a class="noUnderline" href="javascript:void(0)" >
        <img class="img-circle" src="assets/img/IMG_20171205_122322.jpg"> bee bee
      
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
    <div class="rights">
        <div class="slide-container">
            <div class="wrapper">
                <h1 style="color:black">Your Circle</h1>
            </div>
        </div>
        <div class="bee-creat-circle">
            <div class="row rowss">
               <div class="col-md-12 ">
                    Grow Your Circle        
               </div>
            </div>
	<div class="row rows bee-rp">						
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>	
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
            <div class="col-md-12 ">							
                <div class="media z-depth-1">								
                    <a class="pull-left" href="#">								
                        <img class="media-object dp img-circle" src="http://pics3.pof.com/thumbnails/size220/1136/22/57/311935dd6-93d4-46f0-beda-2c9b5a1d1b06.jpg" style="width: 40px;height:40px;">								
                    </a>								
                    <div class="media-body">                                                                   
                        <h4 class="media-heading">Bipul Mandol</h4>									
                        <a href="#"><span class="label labels label-success">Send Message</span></a>									
                        <a href="#"><span class="label label-warning">Remove</span></a>								
                    </div>							
                </div>						
            </div>
        </div>   
           
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
        <div class="scrollbar">
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
    <script>
        $(".scrollbar").niceScroll();
        </script>
</body>
</html>