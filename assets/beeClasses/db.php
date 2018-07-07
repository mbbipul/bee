<?php
try{
$user = 'root';
$pass = '';
$conn = new PDO('mysql:host=localhost;dbname=bee', $user, $pass);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $ex)
{
    print_r($ex);
    die();
}
?>