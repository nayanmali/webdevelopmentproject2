<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=="nayan" and $password == "123456"){
        echo "Welcome ".$username;
    }else{
        header('location:login.php?error=1');
    }
?>