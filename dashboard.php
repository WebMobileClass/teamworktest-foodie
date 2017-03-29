<?php
//session_start('cafetaria');
//if(!isset($_SESSION["admin_id"])) {
//header("Location:index.php");
//}
$link = mysqli_connect("localhost","root","","se");
$query = "SELECT * FROM food_list";
$sql = "SELECT * FROM user_list";
$result = mysqli_query($link,$query);
$result1 = mysqli_query($link,$sql);
$food = [];
$user = [];
while ($row = mysqli_fetch_assoc($result)){
  array_push($food,$row);

}
while ($row1 = mysqli_fetch_assoc($result1)){
  array_push($user,$row1);
}
//$remove = mysqli_query($link,"INSERT INTO food_list (name,price,image) VALUES('$food_name','$food_price','$food_image');");

if (!empty($_POST['addsubmit'])) {
  //$link = mysqli_connect("localhost","root","","se");
  //  $result = mysqli_query($link, "SELECT * FROM user_list WHERE email='" . $_POST["email"] . "' and password = '". $_POST["password"]."'");
  $food_name = $_POST['foodname'];
  $food_price = $_POST['foodprice'];
  $food_image = $_POST['foodimage'];


  $send = mysqli_query($link,"INSERT INTO food_list (name,price,image) VALUES('$food_name','$food_price','$food_image');");

}
else{
  mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Dashboard</title>

  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/dashboard.css" rel="stylesheet">
  <link href="./font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
</head>

<body>

  <nav class="navbar navbar-dark navbar-fixed-top bg-inverse">
    <button type="button" class="navbar-toggler hidden-sm-up" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" aria-label="Toggle navigation"></button>
    <a class="navbar-brand" href="#">Eat & Chill</a>
    <div id="navbar">
      <nav class="nav navbar-nav float-xs-left">
        <a class="nav-item nav-link" href="#">Dashboard</a>
        <a class="nav-item nav-link" href="#">Settings</a>

      </nav>
      <div class="float-xs-right">
      <a href="admin.php"><button class="btn btn-md btn-outline-primary" href="admin.php"  tite="Logout" style="padding-left: 14px; color: white;">Logout</button></a>
    </div>
      <form class="float-xs-right">

        <input type="text" class="form-control" placeholder="Search...">
      </form>
    </div>
  </nav>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-md-2 sidebar">
        <ul class="nav nav-sidebar">
          <li class="#"><a href="#"> </a></li>
          <li><a href="#"></a></li>


        </ul>

      </div>
      <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
        <!-- Nav tabs -->
        <h1>Dashboard</h1>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#food" role="tab">Manage Foods</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#users" role="tab">Manage Users</a>
          </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="food" role="tabpanel">
          </br>
          <h2>List of Foods</h2>
        </br>
        <div class="row">
          <form action="" method="post">
            <div class="col-md-3 col-lg-3">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Food</span>
                <input type="text" name="foodname" class="form-control" placeholder="Food Name" aria-describedby="sizing-addon2" required=""  autofocus="">
              </div>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon">#</span>
                <input type="text" name="foodprice" class="form-control" maxlength="4" placeholder="Price" aria-describedby="sizing-addon2" required="">
              </div>
            </div>
            <div class="col-md-3 col-lg-3">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2">Img</span>
                <input type="text" name="foodimage" class="form-control" placeholder="Image Name" aria-describedby="sizing-addon2" required="">
              </div>
            </div>

            <input class="btn btn-outline-primary" type="submit" name="addsubmit"></input>
          </form>
        </div>
      </br>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>

            <tr>
              <th>#</th>
              <th>Food name</th>
              <th>Price</th>
              <th>Image File Name</th>
              <!--th>Remove</th-->

            </tr>
          </thead>
          <tbody>
            <?php
            foreach($food as $key=>$value){
              ?>
              <tr>
                <td><?= $value['id']?></td>
                <td><?= $value['name']?></td>
                <td>N <?= $value['price']?></td>
                <td><?= $value['image']?></td>
                <!--td><?= $value['remove']?></td-->

              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
    <div class="tab-pane" id="users" role="tabpanel">
    </br>
    <h2>List of Registered Users</h2>
  </br>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead>

        <tr>
          <th>#</th>
          <th>Username</th>
          <th>Email Address</th>


        </tr>
      </thead>
      <tbody>
        <?php
        foreach($user as $key=>$value){
          ?>
          <tr>
            <td><?= $value['id']?></td>
            <td><?= $value['username']?></td>
            <td><?= $value['email']?></td>

          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</div>

</div>




</div>
</div>
</div>

<script src="./js/jquery-3.1.1.min.js"></script>
<script src="./js/tether.min.js" ></script>
<script src="./js/holder.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
