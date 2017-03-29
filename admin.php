<?php
$message="";
// var_dump(count($_POST));
// var_dump($_SESSION);
if (!empty($_POST['signinsubmit'])) {
  if(count($_POST)>0) {
    $link = mysqli_connect("localhost","root","","se");
    $result = mysqli_query($link, "SELECT * FROM user_list WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
    $row  = mysqli_fetch_array($result);
    if($row['email'] == "admin@admin.com"){
      header("Location:dashboard.php");
    }
    else {
      $message = "Invalid Username or Password!";
    }
  }
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
    background:url('./img/food-kitchen-cutting-board-cooking.jpg')  no-repeat center center fixed ;
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
    margin-top: 200px;
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

  <div class="card" style="position:relative;left:-25%">

    <form action="" method="post" class="form-signin" style="padding:10px;padding-top:7px">
      <h5 style="text-align:center; color:black;margin-bottom:10px" class="form-signin-heading">Admin</h5>
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
</div>

</div>



</div>


<script src="bootstrap/js/jquery-2.1.4.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
