<?php
session_start('cafetaria');
$message="";
// var_dump(count($_POST));
// var_dump($_SESSION);
if (!empty($_POST['signinsubmit'])) {
  if(count($_POST)>0) {
    $link = mysqli_connect("localhost","root","","se");
    $result = mysqli_query($link, "SELECT * FROM user_list WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if(is_array($row)){
      $_SESSION["user_id"] = $row['id'];
      $_SESSION["user_name"] = $row['email'];
      $_SESSION["cart"] = array();
    }
    else {
      $message = "Invalid Username or Password!";
    }
  }
}

if (!empty($_POST['registersubmit'])) {
  if(count($_POST)>0) {
    $link = mysqli_connect("localhost","root","","se");
    $r_username = $_POST["rusername"];
    $r_email = $_POST["remail"];
    $r_password = $_POST["rpassword"];

    $send = mysqli_query($link,"INSERT INTO user_list (username,email, password ) VALUES('$r_username',  '$r_email','$r_password');");
    //var_dump($send);
  }
}

if(isset($_SESSION["user_id"])) {
  header("Location:home.php");
}
?>


<!DOCTYPE html>
<html>
<head>

  <!-- Title -->
  <title>Eat and Chill</title>

  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta charset="UTF-8">
  <meta name="description" content="Admin Dashboard Template" />
  <meta name="keywords" content="admin,dashboard" />
  <meta name="author" content="Callatech"/>

  <link type="text/css" rel="stylesheet" href="bootstrap/css/font-awesome.min.css" />
  <!--link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/-->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/signin.css" rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
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
    background: rgba(0,0,0,0.80);
  }
  h2{
    font-size: 25px;
    font-weight: 300;
  }
  .card {
    float: right;;
    width: auto;;
    height: auto;
    padding: 4px;
    padding-top: 10px;
    margin-bottom: 10px;
    margin-left: 10px;
    margin-right: auto;
    margin-top: 50px;
    border: 0;
  }

  .card > img {
    margin-bottom: .75rem;
  }

  .card-text {
    font-size: 85%;
  }
  .logintext{
    padding-right: 20px
    margin-right: 20px;
  }
  #brandcolor{
    color:white;
  }
  .message {
    color: #FF0000;
    font-weight: bold;
    text-align: center;
    width: 100%;
  }

  </style>
</head>
<body>
  <!--?php
  if (isset($error)) {
  echo("<p style='color:red'>".$error."</p>");
}
?>
</div-->
<div class="container" >
  <div class="overlay">
    <div class="navbar navbar-static-top navbar-dark">
      <div class="container-fluid">
        <a href="#" class="navbar-brand" id="brandcolor">Eat and Chill</a>

      </div>
    </div>
  </div>

  <div class="card">

    <form action="" method="post" class="form-signin" style="padding:10px;padding-top:7px">
      <h5 style="text-align:center; color:black;margin-bottom:10px" class="form-signin-heading">Sign in</h5>
      <div class="input-group margin-bottom-xs">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input name="email" type="email" id="inputEmail" class="form-control " placeholder="Email" required autofocus>
      </div>
      <br/>
      <div class="input-group margin-bottom-xs">
        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
        <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      </div>
      <br/>

      <input name="signinsubmit" class="btn btn-md btn-primary btn-block" type="submit" value="Sign in">
      <div class="message"><?php if($message!="") { echo $message; } ?></div>
    </form>

    <form action="" method="post" class="form-signin" style="padding:10px;padding-top:7px">
      <h5 style="text-align:center; color:black"class="form-signin-heading">New User ? <span style="font-size: 16pt">Sign Up</span></h5>
      <label for="inputEmail" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Email</label>
      <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input name="remail" type="email" id="inputEmail" class="form-control " placeholder="Email" required autofocus>
      </div>
    </br>
    <label for="inputName" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Username</label>
    <div class="input-group margin-bottom-sm">
      <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
      <input name="rusername" type="text" id="inputUsername" class="form-control " placeholder="Username" required >
    </div>
    <br/>
    <label name="password" for="inputPassword" class="sr-only">Password</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
      <input name="rpassword" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
    <br/>

    <input name="registersubmit" class="btn btn-md btn-success btn-block" type="submit" value="Register">
  </form>
</div>

</div>



</div>


<script src="bootstrap/js/jquery-2.1.4.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
