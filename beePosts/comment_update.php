<?php
if(!empty($_POST['comment']) && !empty($_POST['act_id'])) {
	include_once 'includes/config.php';
	include_once 'includes/security.php';
	include_once 'includes/smileys.php';
        include_once '../assets/beeClasses/beeUserDetails.php';
        $logUserCom = new beeUserDetails();
	/*$pic_name = '';
	if(isset($_FILES))
	{
		//valid file formats
		$valid_file_formats = array("jpg", "png", "gif", "bmp","jpeg","PNG","JPG","JPEG","GIF","BMP");
		$filename = $_FILES['file']['name'];
		$tmp_filename = $_FILES['file']['tmp_name'];

		$filetype = strtolower($_FILES['file']['type']); 
		$extension = get_file_extension($filename); //getting file extension
		if(in_array($extension,$valid_file_formats))
		{
			//check file size
			if($_FILES["file"]["size"] < 100000) //100kb in size
			{
				//upload file

				$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/'.$base_folder.'uploads/'; 
				$pic_name = time().'.'.$extension;
				$sourcePath = $_FILES['file']['tmp_name']; // Storing source path of the file in a variable
				$targetPath = $uploaddir . $pic_name; // Target path where file is to be stored
				move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
			} else {
				echo "0-Image Size Should be less than 100kb";
				die;
			}

		} else {
			echo "0-Invalid File Format";
			die;
		}

	}
	*/
	//clean the comment message
	$comment = clean(mysqli_real_escape_string($connection,$_POST['comment']));
	$comment = special_chars($comment); 
	$time = time();
	$post_id = $_POST['act_id'];
        $logUserId = $_POST['logUserId'];
	
	//insert into wall table
	 $query = mysqli_query($connection,"INSERT INTO comments (comment, post_id,commented_date,userId) VALUES ('$comment', '$post_id','$time','$logUserId')") or die(mysql_error());
	 $ins_id = mysqli_insert_id($connection);
	?>
	<style>
p.msg_wrap { word-wrap:break-word; }

</style>
        <li id="li-comment-<?php echo $ins_id; ?>">
            <div class="acomment-avatar">
                <a href="<?php $logUserCom->getUserUrl($logUserId)?>" rel="nofollow">
                    <img class="img-circle" src="<?php echo $base_url;?>uploads/<?php echo $logUserCom->getUserProfilePicUrl($logUserId);?>" alt="<?php echo $logUserCom->getBeeUserFullName($logUserId);?>" >
                </a>
                <p style="float:right; text-align:right; font-size:10px;"><a href="javascript:;" rel="<?php echo $post_id; ?>" class="comment-delete" id="comment_delete_<?php echo $ins_id; ?>">X</a></p>
            </div>
            <div class="acomment-meta">
                <a href="<?php echo $logUserCom->getUserUrl($logUserId);?>" ><?php echo $logUserCom->getBeeUserFullName($logUserId);?></a>  0 sec ago 
            </div>
            <div class="acomment-content">
                    <p class="msg_wrap"><?php echo parse_smileys(make_clickable(nl2br(stripslashes($comment))), $smiley_folder); ?></p>
                    <?php if(!empty($pic_name)) { ?>
              <!--<p class="msg_image"><img src="<?php echo $base_url;?>uploads/<?php echo $pic_name;?>"></p>-->
              <?php } ?>

            </div>
        </li>
<?php } ?>