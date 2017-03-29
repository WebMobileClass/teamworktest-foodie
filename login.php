<!--?php

$link = mysqli_connect("localhost","root","","se");


if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

//$registersql= "INSERT INTO user_list (username, email, password) VALUES ('$username', '$email', '$password')";
//$login = "SELECT * FROM user_list WHERE email = '$email' AND password = '$password'";
$login = "Select * from user_list where `email` = '$email' and `password` = '$password'";
$sql = mysqli_query($link,$login);
//$result2 = mysqli_query($link,$registersql);

$result = mysqli_fetch_array($sql);
$count = mysqli_num_rows($sql);
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
mysqli_close($link)
?-->

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

      <input name="submit" class="btn btn-md btn-primary btn-block" type="submit" value="Sign in">
    </form>

    <form action="" method="post" class="form-signin" style="padding:10px;padding-top:7px">
      <h5 style="text-align:center; color:black"class="form-signin-heading">New User ? <span style="font-size: 16pt">Sign Up</span></h5>
      <label for="inputEmail" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Email</label>
      <div class="input-group margin-bottom-sm">
        <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
        <input name="email" type="email" id="inputEmail" class="form-control " placeholder="Email" required autofocus>
      </div>
    </br>
    <label for="inputName" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Username</label>
    <div class="input-group margin-bottom-sm">
      <span class="input-group-addon"><i class="fa fa-user-o fa-fw"></i></span>
      <input name="username" type="email" id="inputUsername" class="form-control " placeholder="Username" required >
    </div>
    <br/>
    <label name="password" for="inputPassword" class="sr-only">Password</label>
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
      <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
    </div>
    <br/>

    <input name="Register" class="btn btn-md btn-success btn-block" type="submit" value="Register">
  </form>
</div>

</div>



</div>


<script src="bootstrap/js/jquery-2.1.4.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
