<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Login - php inventory management system</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css"/>
    <link rel="stylesheet" href="css/matrix-login.css"/>
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>

<body style="background-color:white;">
<div style=""><img src="logo.png" height="500px;" width="500px;" style="margin-top:-300px; margin-left:50px;"></div>

<div style="margin-top:-50px; margin-left:50px;">
<h2>Involutics Small business Suite(ISBs)</h2>
<h3 style="color:black;">Market Trusted Web-Based Enterprise Application, to Amplify your <br>General Equipments Business Operations and Capabilities</h3>
</div>




<div id="loginbox" style="margin-right:50px; margin-top:-230px;" >
    <form name="form1" class="form-vertical" action="" method="post" style="background-color:#1A5276;">
        <div class="control-group normal_text" style="background-color:#1A5276;"><h3>User Portal Login</h3><hr></div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text"
                                                                                       placeholder="Username"
                                                                                       name="username" required/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password"
                                                                                      placeholder="Password"
                                                                                      name="password" required/>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <center>
                <input type="submit" name="submit1" value="Login" class="btn btn-success"/>
            </center>
        </div>
    </form>

    <?php
    if (isset($_POST["submit1"])) {
        $username = mysqli_real_escape_string($link, $_POST["username"]);
        $password = mysqli_real_escape_string($link, $_POST["password"]);

        $count = 0;
        $res = mysqli_query($link, "select * from user_registration where username='$username' && password='$password' && role='user' && status='active'");
        $count = mysqli_num_rows($res);
        if ($count > 0) {
            $_SESSION["user"]=$username;
            ?>
            <script type="text/javascript">
                window.location = "dashboard.php";
            </script>
        <?php
        }
        else{
        ?>
            <div class="alert alert-danger">
                Invalid username or password, or account blocked by admin.
            </div>
            <?php

        }

    }


    ?>


</div>

<div style="margin-left:600px;"><br><br>
<h5 style="float:left; margin-right:20px;"><a href="">ABOUT</a></h5><h5 STYLE="float:left; margin-right:20px;"><a href=""> SUPPORT</a></h5><h5><a href="">SALES</a></h5>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/matrix.login.js"></script>
</body>

</html>
