<?php include("dao.php");?>
<?php    
    $username = $_GET['username'];
    
    $sql = "SELECT * FROM login_tbl where username = '$username'";
    $result = $conn->query($sql);
    
    if($result->num_rows > 0){
        echo "User Already Exits.";
    }else{
        echo "Go Ahead..";
    }
?>