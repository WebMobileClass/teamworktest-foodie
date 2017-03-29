<?php
$link = mysqli_connect("localhost","root","","se");
$login = "SELECT * FROM user_list";
$register= "INSERT INTO `user_list` (`id`, `username`, `email`, `password`) VALUES (NULL, $username, $email, $password)";

$result = mysqli_query($link,$login);
$result2 = mysqli_query($link,$register);

    if($result = mysqli_query($link,"Select * from user_list where `email` = '$email' and `password` = '$password'")){
      header("location:./index.php");
    }

?>





<?
    $link = mysqli_connect("localhost","root","","rmos");

    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    if(isset($_POST['Submit'])){
        $email = $_POST['username'];
        $pass = $_POST['password'];

        if($email == "admin@admin.com" && $pass = "admin"){
            header("location:admin.php");
        }
        else{
            $sql1 = "Select * from register where `email` = '$email' and `password` = '$pass'";
            $query = mysqli_query($sql1) or die(mysqli_error());
            $result = mysql_fetch_array($query);
            $count = mysql_num_rows($query);
            if ($count == 1) {
                session_start("quickChaw");
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
                if (isset($_SESSION['id'])) {
                    header("location:./order.php");
                }
            }
            else {
                $error = "Invalid Username or Password";
            }
        }


    }


?>

<!DOCTYPE html>
<html>
    <head>

        <!-- Title -->
        <title>Quick Chaw</title>

        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Callatech"/>

        <!-- Styles -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:700,400" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Raleway:500,400,300' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="bootstrap/css/font-awesome.min.css" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Styles -->
        <style>
            body{
                /*font-family: 'Montserrat',sans-serif;*/
                font-family: 'Raleway',sans-serif;
                padding:0px!important;
                overflow: hidden;
                background:url('bootstrap/img/bg.jpg')  no-repeat center center fixed ;
                background-size: 100%;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                overflow: hidden;
                color:white;
                font-weight: 300;
            }
            .container{
                padding: 0px!important;
                margin: 0px!important;
            }
            .overlay{
                position: absolute;
                width: 100%;
                height: 100%;
                background: rgba(0,0,0,0.95);
            }
            h1{
                font-size: 50px;
                font-weight: 300;
            }
        </style>
    </head>
    <body>
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-2" style="text-align:right">
                    <br><br><br><br><br><br><br>
                    <h1>Quick Chaw</h1>
                    <h2>Get Dishes As Quick As Wishes</h2>
                </div>
                <div class="col-xs-4" style="padding-top:120px;color:#2e6da4">
                    <div style="background: rgba(255,255,255,1);height:400px">
                        <div style="background-color:#a8a8a8;padding:3px">
                            <h3 style="text-align:center;">Login</h3>
                        </div>
                        <form action="" method="post" class="form-signin" style="padding:15px">
                            <br/><br/>
                            <label for="inputEmail" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Username</label>
                            <input name="username" type="email" id="inputEmail" class="form-control " placeholder="Username" required autofocus>
                            <br/>
                            <label name="password" for="inputPassword" class="sr-only">Password</label>
                            <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <br/><br/>
                            <input name="Submit" class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
                            <p style="text-align:center">OR</p>
                            <input name="Register" class="btn btn-lg btn-success btn-block" type="submit" value="Register">
                            <?php
                                if (isset($error)) {
                                    echo("<p style='color:red'>".$error."</p>");
                                }
                            ?>

                        </form>
                    </div>
                </div>
            </div>
        </div>


        <script src="bootstrap/js/jquery-2.1.4.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
