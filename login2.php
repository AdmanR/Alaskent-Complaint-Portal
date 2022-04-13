<?php
include "connection.php";

if ( isset($_POST['a_user']) && isset($_POST['a_pwd']) ) {
    
    $entered_username = $_POST['a_user'];
    $entered_password = $_POST['a_pwd'];
    
    $sql = "SELECT * FROM employee WHERE e_emp = '$entered_username' AND pass ='$entered_password'";
    $result = mysqli_query($conn, $sql);
    $res = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0) {
        session_start();
        $_SESSION['uname'] = $res['e_emp'];
        $_SESSION['id'] = $res['e_id'];
        header("Location: complaintform.php");
    } 
    else {
        header("location:s_login.php?activity=error");
    }
}

?>