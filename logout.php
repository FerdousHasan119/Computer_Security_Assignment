<?php
    session_start();
    include '_dbconnect.php';
    $email = $_SESSION['email'];

    $sql = "INSERT INTO log VALUES ('','$email','Logs Out',NOW())";
    $result = mysqli_query($con,$sql);
    
    session_destroy();
    header('location:login2.php');
?>