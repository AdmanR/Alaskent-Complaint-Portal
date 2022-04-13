<?php
include "connection.php";
if ( isset($_POST['a_user']) && isset($_POST['a_pwd']) ) {
    
    $entered_username = $_POST['a_user'];
    $entered_password = $_POST['a_pwd'];
    
    $sql = "SELECT * FROM admin WHERE admin_name = '$entered_username' AND admin_pass ='$entered_password'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['uname'] = $res['admin_name'];
        $_SESSION['id'] = $res['admin_id'];
        header("Location: a_posts.php");
    } 
    else {
        header("location:a_login.php?activity=error");
    }
}

?>