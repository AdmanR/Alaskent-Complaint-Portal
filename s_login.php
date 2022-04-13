<?php

    session_start();

    if ( isset($_SESSION['id']) ) {
        header("Location: s_login.php ");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaint Portal</title>
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani:600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="logo" id="logo">
    <a href="./complaintportal.php">
        <img src=img/logo.png alt="nmims" style="height: 140px; width: 200px; object-fit: contain; padding: 0px;">
    </a>
</div>
    <div class="welcome">
        WELCOME
    </div>
    <form action="login2.php" class="container" method="POST">
        <p style="font-family: 'Rajdhani', sans-serif; font-size: 10mm; margin:0px">EMPLOYEE LOGIN</p>

        <?php
            if(isset($_REQUEST['activity'])){
                if($_REQUEST["activity"] == "error"){
         ?>
                <div style="display: flex; padding: 20px; flex-direction:column">
                    <label style='color:red;'>Username and Password didn't match</label>
                </div>

         <?php           

                }
                if($_REQUEST["activity"] == "loggedout"){
                    ?>
                           <div style="display: flex; padding: 20px; flex-direction:column">
                               <label style='color:green;'>You are successfully logged out.</label>
                           </div>
           
                    <?php           
           
                    }

                    if($_REQUEST["activity"] == "expired"){
                    ?>
                            <div style="display: flex; padding: 20px; flex-direction:column">
                                <label style='color:green;'>You session is expired. Login again</label>
                            </div>
            
                    <?php           
            
                            }           
            }
        ?>
        
        
        <div style="display: flex; padding: 20px; flex-direction:column">
            <label>Emp Id:</label>
            <input type="text" name="a_user" class="input" required>
        </div>
        <div style="display:flex; padding: 20px; padding-top: 0px; flex-direction:column">
            <label>Password:</label>
            <input type="password" name="a_pwd" class="input" required>
        </div>
        <button class="btn" type="submit">Sign In</button>
        <a href="complaintportal.php">
        <input type="button" class="btn" value="Cancel">
        </a>      
    </form>
</body>
</html>