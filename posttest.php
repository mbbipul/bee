<?php 
    include 'assets/beeClasses/db.php';
    $stmt = $conn->prepare('SELECT * FROM users WHERE userId = :userId  LIMIT 1');
    $stmt->execute(['userId' => 1]);
    $user = $stmt->fetch();
    echo $user['loginUserEmail'];