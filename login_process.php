<<<<<<< HEAD
<?php
    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "employee_db";

    $conn = new mysqli($server,$dbuser,$dbpass,$dbname);

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM login_tbl where username = '$username' and password = '$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $encodeuser = base64_encode("username=$username");
        header('location:home.php?'.$encodeuser);
    }else{
        header('location:login.php?error=1');
    }
=======
<?php
    $server = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "employee_db";

    $conn = new mysqli($server,$dbuser,$dbpass,$dbname);

    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql = "SELECT * FROM login_tbl where username = '$username' and password = '$password'";

    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $encodeuser = base64_encode("username=$username");
        header('location:home.php?'.$encodeuser);
    }else{
        header('location:login.php?error=1');
    }
>>>>>>> 6dcb466f4919ddb3946a6d4d9160b97d548b566d
?>