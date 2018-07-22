<?php
    require '../assets/beeClasses/db.php';
    $userId = $_POST['userId'];
    include('includes/SimpleImage.php');
    include('includes/config.php'); 
    
        
    $uploaddir = $_SERVER['DOCUMENT_ROOT'].'/'.$base_folder.'uploads/'; 
    $croppedImage = $_FILES['profilePic'];
    $to_be_upload = $croppedImage['tmp_name'];
    //function for rand filename
    function random_filename($length, $directory = '', $extension = '')
    {
        // default to this files directory if empty...
        $dir = !empty($directory) && is_dir($directory) ? $directory : dirname(__FILE__);

        do {
            $key = '';
            $keys = array_merge(range(0, 9), range('a', 'z'));

            for ($i = 0; $i < $length; $i++) {
                $key .= $keys[array_rand($keys)];
            }
        } while (file_exists($dir . '/' . $key . (!empty($extension) ? '.' . $extension : '')));

        return $key . (!empty($extension) ? '.' . $extension : '');
    }


// Checks in current directory of php file, with zip extension...
    $new_file =  random_filename(50, $uploaddir, '.png');

    
    

    $ps = $uploaddir . $new_file;
    move_uploaded_file($to_be_upload,$ps);
   
    $table = 'userprofilepic';
    $sqlQuery = "insert into $table (imageUrl,updateTime,userId ) values(?,?,?)";  
    $time = date("y-d-m");
    $query = $conn->prepare($sqlQuery);
    $query->bindParam(1, $new_file);
    $query->bindParam(2, $time);
    $query->bindParam(3, $userId);
    $query->execute();
    
    $sqlFindid = "select MAX(userProfilePicId) as userProfilePicId from $table where userId= $userId ";
    $proLastId = mysqli_query($connection, $sqlFindid);
    $userProfilePicLastInsert=mysqli_fetch_row($proLastId);
    $userProfilePicLastInsertId = $userProfilePicLastInsert[0];
    
    $updateProPicId_to_userDes = "UPDATE userdescription SET userProfilePicId = "
            . "$userProfilePicLastInsertId WHERE userId = $userId;  ";
    $updateProId = mysqli_query($connection, $updateProPicId_to_userDes);
?>