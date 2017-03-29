<?php
session_start('cafetaria');
if(!isset($_SESSION["user_id"])) {
  header("Location:index.php");
}
$link = mysqli_connect("localhost","root","","se");
$query = "SELECT * FROM food_list";
$result = mysqli_query($link,$query);
$food = [];
while ($row = mysqli_fetch_assoc($result)){
  array_push($food,$row);
}
//var_dump($_SESSION['cart']);
if(count($_POST)>0){
  $name = $_POST['foodname'];
  $image = $_POST['image'];
  $price = $_POST['price'];

  array_push($_SESSION['cart'],array('foodname'=>$name,'image' => $image,'price' => $price));

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
  #frame {
    float: left;
    width: 33.333%;
    padding: .75rem;
    margin-bottom: 2rem;
    border: 0;
  }
  </style>
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-static-top navbar-dark">

      <a href="#" class="navbar-brand" id="brandcolor">Eat and Chill</a>
      <div class="container">
        <div class="pull-right">
          <div class="col-md-6 col-lg-9">
            <?php
            if($_SESSION["user_name"]) {
              ?>
              Welcome <?php echo $_SESSION["user_name"]; ?><a href="logout.php"  tite="Logout" style="padding-left: 14px; color: green;">Logout
                <?php
              }
              ?>
            </a>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="btn-group">
              <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-bag" aria-hidden="true" id="brandcolor"> </i> Cart</button>

              <div class="dropdown-menu">
                <div class="">
                  <?php
                  foreach($_SESSION['cart'] as $key=>$value){
                    ?>
                    <div class="row">
                      <div class="col-xs-3">
                        <img class="img-fluid" src="./img/<?= $value['image']?>" />
                      </div>
                      <div class="col-xs-6">
                        <p><?= $value['foodname']?></p>
                      </div>
                      <div class="col-xs-3">
                        <p>N<?= $value['price']?></p>
                      </div>
                    </div>
                    <div class="dropdown-divider"></div>
                    <?php
                  }
                  ?>
                </div>
                <div class="">
                  <div class="pull-right" >
                    <button class="btn btn-outline-success btn-sm" href="./cart.html"> Checkout</button>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
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
  <div class="album text-muted">
    <div class="container">

      <div class="row">
        <?php
        foreach($food as $key=>$value){
          ?>
          <div class="card">
            <img class="img-fluid" src="./img/<?= $value['image']?>" alt="Food List">
            <p class="card-title"><?= $value['name']?></p>
            <div class="row">
              <div class="col-md-6"><p class="card-text">N <?= $value['price']?></p></div>

              <div class="col-md-6">
                <form action="" method="post">
                  <input type="hidden" name="foodname" value="<?= $value['name']?>"/>
                  <input type="hidden" name="image" value="<?= $value['image']?>"/>
                  <input type="hidden" name="price" value="<?= $value['price']?>"/>
                  <button class="btn btn-outline-success" type="submit"><i class="fa fa-cart-plus" aria-hidden="true"></i> Add to Cart</button>
                </form>
              </div>
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
