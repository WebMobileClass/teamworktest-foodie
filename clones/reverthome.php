<?php
session_start();
$link = mysqli_connect("localhost","root","","se");
$query = "SELECT * FROM food_list";
$result = mysqli_query($link,$query);
$food = [];
while ($row = mysqli_fetch_assoc($result)){
  array_push($food,$row);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Eat and Chill</title>

  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/album.css" rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
  <style>
  #background{
    overflow: hidden;
    background:url('./img/background.jpeg')  no-repeat center center fixed ;
    background-size: 100%;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-color: transparent;
    opacity: 0.8;

  }
  #hd{
    color: white;
  }
  #brandcolor{
    color:green;

  }
  </style>
</head>

<body>
  <div class="navbar navbar-static-top navbar-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand" id="brandcolor">Eat and Chill</a>
      <form class="form-inline float-xs-right">
        <input class="form-control" type="text" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <button class="btn btn-outline-success"><i class="fa fa-shopping-bag" aria-hidden="true" id="brandcolor"> </i> Cart</button>

      </form>
    </div>
  </div>

  <section class="jumbotron text-xs-center" id="background">

    <div class="container">
      <h1 class="jumbotron-heading" id="hd">Take a break and get a good meal</h1>
      <p class="lead text-muted" id="hd">Come hungry. Leave happy.</p>
      <p>
        <a href="#" class="btn btn-primary">Buy now</a>
      </p>
    </div>
  </section>
  <nav class="navbar navbar-light bg-faded">
    <p class="lead text-muted" id="hd">Find amazing foods here! Yummmy!</p>
    <?php
    if($_SESSION["user_name"]) {
      ?>
      Welcome <?php echo $_SESSION["user_name"]; ?>. Click here to <a href="logout.php" tite="Logout">Logout.
        <?php
      }
      ?>
    </nav>

    <!--nav class="navbar navbar-light bg-faded">
    <ul class="nav navbar-nav">
    <li class="nav-item active">
    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
  </li>
  <li class="nav-item">
  <a class="nav-link" href="#">Breakfast</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Lunch</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Dinner</a>
</li>
<li class="nav-item">
<a class="nav-link" href="#">Snacks</a>
</li>
</ul>
</nav-->

<div class="album text-muted">
  <div class="container">

    <div class="row">
      <?php
      foreach($food as $key=>$value){
        ?>
        <div class="card">
          <img class="img-fluid" src="./img/<?= $value['image']?>" alt="Pork Suya">
          <p class="card-title"><?= $value['name']?></p>
          <div class="row">
            <div class="col-md-6"><p class="card-text">N <?= $value['price']?></p></div>

            <div class="col-md-6"><button class="btn btn-outline-success" type="add"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button></div>
          </div>
        </div>
        <?php
      }
      ?>

    </div>

  </div>
</div>

<footer class="text-muted">
  <div class="container">
    <p class="float-xs-right">
      <a href="#"><i class="fa fa-angle-double-up" aria-hidden="true" id="brandcolor"></i> Back to top</a>
    </p>
    <p>Copyright E&C 2016</p>
  </div>
</footer>

<script src="./js/jquery-3.1.1.min.js"></script>
<script src="./js/tether.min.js" ></script>
<script src="./js/holder.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
