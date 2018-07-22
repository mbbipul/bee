
<!DOCTYPE html><html lang='en' class=''>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="assets/css/materialize.min.css"  />
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
        <link href="https://vjs.zencdn.net/7.0.3/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="http://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
      <link rel="stylesheet" href="http://localhost/bee/assets/css/beeCard.css">
      <link rel="stylesheet" href="http://localhost/bee/assets/css/beeUserProfile.css">

        <!-- script styles -->
        <link rel="stylesheet" href="http://localhost/bee//assets/beeStories/zuck.css">
        <link rel="stylesheet" href="http://localhost/bee/assets/beeStories/skins/snapgram.css">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel='stylesheet prefetch' href='//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel="stylesheet" href="http://localhost/bee/beeCropper/dist/cropper.css">
  <style>
    .label {
      cursor: pointer;
    }

    .progress {
      display: none;
      margin-bottom: 1rem;
    }

    .alert {
      display: none;
    }

    .img-container img {
      max-width: 100%;
    }
  </style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

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
    <div class="feed-content bee-container" >
          <div class="row bee_userprofile_image">
                      <label class="label" data-toggle="tooltip" title="Change your avatar">
<input type="file" class="sr-only" id="input" name="image" accept="image/*"><i class="far fa-edit"></i>
    </label>
            <img id="avatar" class="img-circle bee-user-pic-position z-depth-5"  src="assets/beeImage/received_559295534453679.jpeg" alt="Bipul Mandol" />
        </div> 
        

    

    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
    </div>
    <div class="alert" role="alert"></div>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Crop the image</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="img-container">
              <img id="image" src="https://avatars0.githubusercontent.com/u/3456749">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary" id="crop">Crop</button>
          </div>
        </div>
      </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.bundle.min.js"></script>
  <script src="http://localhost/bee/beeCropper/dist/cropper.js"></script>
  <script>
    window.addEventListener('DOMContentLoaded', function () {
      var avatar = document.getElementById('avatar');
      var image = document.getElementById('image');
      var input = document.getElementById('input');
      var $progress = $('.progress');
      var $progressBar = $('.progress-bar');
      var $alert = $('.alert');
      var $modal = $('#modal');
      var cropper;

      $('[data-toggle="tooltip"]').tooltip();

      input.addEventListener('change', function (e) {
        var files = e.target.files;
        var done = function (url) {
          input.value = '';
          image.src = url;
          $alert.hide();
          $modal.modal('show');
        };
        var reader;
        var file;
        var url;

        if (files && files.length > 0) {
          file = files[0];

          if (URL) {
            done(URL.createObjectURL(file));
          } else if (FileReader) {
            reader = new FileReader();
            reader.onload = function (e) {
              done(reader.result);
            };
            reader.readAsDataURL(file);
          }
        }
      });

      $modal.on('shown.bs.modal', function () {
        cropper = new Cropper(image, {
          aspectRatio: 1,
        });
          viewMode: 3,
      }).on('hidden.bs.modal', function () {
        cropper.destroy();
        cropper = null;
      });

      document.getElementById('crop').addEventListener('click', function () {
        var initialAvatarURL;
        var canvas;

        $modal.modal('hide');

        if (cropper) {
          canvas = cropper.getCroppedCanvas({
            width: 160,
            height: 160,
          });
          initialAvatarURL = avatar.src;
          avatar.src = canvas.toDataURL();
          $progress.show();
          $alert.removeClass('alert-success alert-warning');
          canvas.toBlob(function (blob) {
            var formData = new FormData();

            formData.append('profilePic', blob);
            $.ajax('http://localhost/bee/beePosts/upload-img.php', {
              method: 'POST',
              data: formData,
              processData: false,
              contentType: false,

              xhr: function () {
                var xhr = new XMLHttpRequest();

                xhr.upload.onprogress = function (e) {
                  var percent = '0';
                  var percentage = '0%';

                  if (e.lengthComputable) {
                    percent = Math.round((e.loaded / e.total) * 100);
                    percentage = percent + '%';
                    $progressBar.width(percentage).attr('aria-valuenow', percent).text(percentage);
                  }
                };

                return xhr;
              },

              success: function () {
                $alert.show().addClass('alert-success').text('Upload success');
                setTimeout(function() {
							$alert.fadeOut();
						}, 3000);
              },

              error: function () {
                avatar.src = initialAvatarURL;
                $alert.show().addClass('alert-warning').text('Upload error');
                setTimeout(function() {
							$alert.fadeOut();
						}, 3000);
              },

              complete: function () {
                $progress.hide();
               
              },
            });
          });
        }
      });
    });
  </script>
  
  
     
        <div class="collection bee-user-menu left">
            <style>
                ::-webkit-scrollbar {
    width: 2px;
}
#ab {
    display: none;
    position: absolute;
    top: 210px;
    left: 58px;
    cursor: pointer;
    background-color: transparent;
    border-radius: 15px;
    border-color: blue ;
    border-top-color: blue;
    border: 3px solid;
    
}

#blah:hover~#ab{
    display: block;
    color: blue;
    
}
            </style>
            <div style="height:680px;" >
                <a href="#!" class="collection-item bee-collection-item "><strong>About</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Timeline</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Friends</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Find Friend</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Take Part</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Selfie Event</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Photos</strong></a>
                <a href="#!" class="collection-item bee-collection-item"><strong>Musics</strong></a>
                <a href="#!" class="collection-item bee-collection-item "><strong>Videos</strong></a>
            </div>
        </div>
        
        <div class="right-content">
            <div class=" border-success mb-3 bee-user-feed" >
                <div class=" bg-transparent border-success">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                Overview
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link " id="bascic_info-tab" data-toggle="tab" href="#basicInfo" role="tab" aria-controls="basicInfo" aria-selected="false">
                                Basic Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-info-tab" data-toggle="tab" href="#contactInfo" role="tab" aria-controls="contactInfo" aria-selected="false">
                                Contact Info
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="interests-tab" data-toggle="tab" href="#interests" role="tab" aria-controls="interests" aria-selected="false">
                                Interests
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">
                                Education
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="work-tab" data-toggle="tab" href="#work" role="tab" aria-controls="work" aria-selected="false">
                                Work
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="personal-views-tab" data-toggle="tab" href="#personalViews" role="tab" aria-controls="personalViews" aria-selected="false">
                                Personal Views
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="tab-content " id="myTabContent">
                    <div class="tab-pane fade show active white " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="bee-tab-pane-header w3-display-container ">
                            <div class="">
                            <h3>Bipul Mandol</h3>
                            <p>সময়কে খুঁজি সময়কে কাজে লাগানোর জন্য । সময়কে খুঁজি সময়কে কাজে লাগানোর জন্য ।</p>
                            </div>
                            <div class="green-text w3-display-right" style="top:50px;right: 40px;"><b >Online</b> <i class="fa fa-circle"></i></div>
                        </div>
                        <ul class="collection with-header">
                            <li class="collection-item ">
                                <div class="w3-display-container" style="left:5px;right: 40px;">
                                    Gender: 
                                    <p class="w3-display-right">male</p>
                                </div>
                            </li>
                            <li class="collection-item">Hometown: <p>Jessore</p></li>
                            <li class="collection-item">Phone: <p>01848989489</p></li>
                            <li class="collection-item">University: <p>University Of Barisal</p></li>
                        </ul>
                    </div>
                    <div class="tab-pane fade white bee-tab-pane" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">
                        <h1 class="bee-tab-pane-header">Home</h1>
                        <ul class="collection with-header">
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                            <li class="collection-item">Alvin</li>
                        </ul>
                    </div>
                          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
            function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>