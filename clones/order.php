<?php
    session_start();
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
        <link type="text/css" rel="stylesheet" href="bootstrap/css/font-awesome.min.css" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Styles -->
        <style>
            /* Let's get this party started */
            ::-webkit-scrollbar {
                width: 5px;
            }
            /* Track */
            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
                -webkit-border-radius: 3px;
                -webkit-width: 3px;
                border-radius: 3px;
            }
             
            /* Handle */
            ::-webkit-scrollbar-thumb {
                -webkit-border-radius: 3px;
                border-radius: 3px;
                background: rgba(200,200,200,0.8); 
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
            }
            ::-webkit-scrollbar-thumb:window-inactive {
                background: rgba(255,0,0,0.4); 
            }
            ::-webkit-scrollbar-thumb:window-active {
                background: rgba(255,0,0,0.4); 
        }
            body{
                font-family: 'Montserrat',sans-serif;
                padding:0px!important;

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
                display:none;
            }
        </style>
    </head>
    <body>
        <div class="container" >
            <div class="row">
                <div col="col-xs-12" style="backgrfound-color:white;height:50px;color:#474747;padding-left:50px">
                    <h3>Quick Chaw</h3> <div id="nav" style="text-align:center;background:#fff;width:30px;height:30px;border-radius:15px;cursor:pointer;margin-left:160px;margin-top:-40px;padding-top:4px;border: 1px solid #474747"><i  class="fa fa-navicon" ></i></div>
                    <span><h4 id="id" style="display:none"><?php echo(" ".$_SESSION['id'])?></h4><h4 id="email" style="color:#474747;margin-left:700px;margin-top:-24px;"><span style="font-size:12px">Welcome</span> <?php echo(" ".$_SESSION['email'])?></h4></span>
                    <div id="cart" style="text-align:center;background:#fff;color:#2e6da4;width:30px;height:30px;border-radius:15px;cursor:pointer;margin-left:1000px;margin-top:-30px;padding-top:4px;border: 1px solid #2e6da4"><i class="fa fa-shopping-cart" ></i></div>
                </div>
            </div>


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:200px">
                            <div class='modal-header' style="color:black;text-align:center">
                                <h3>Confirm Order</h3>
                            </div>
                            <div class='modal-body' id='modalBody'>
                                <form action="" method="post" class="form-signin" style="padding:15px">
                                    <label for="inputEmail" class="sr-only"><i class="glyphicon glyphicon-plus"></i>Address</label>
                                    <input name="address" type="text" id="address" class="form-control " placeholder="Address" required autofocus>
                                    <br/>
                                </form>
                            </div>
                            <div class='modal-footer' id='modalBody'>
                                <button id="close" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button>
                                <button id="confirm" class="btn btn-success">Confirm</button>

                                
                            </div>
                        </div>
                    </div>
            </div>


             <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content" style="margin-top:200px">
                            <div class='modal-header' style="color:black;text-align:center">
                                <h3>Order Complete</h3>
                            </div>
                            <div class='modal-body' id='modalBody'>
                                <p>Thanks For Shopping with Us.Your Goods would be delivered to your address shortly</p>
                            </div>
                            <div class='modal-footer' id='modalBody'>
                                <button id="confirm" class="btn btn-success" data-dismiss="modal" aria-label="Close">Confirm</button>
                            </div>
                        </div>
                    </div>
            </div>



            <div class="row" style="background:#a8a8a8;margin-right:-200px!important">
                <div id="side"class="col-xs-3" style="background:#474747;height:768px!important;color:white;cursor: pointer">
                    <img src="bootstrap/img/logo.png" style="margin-left:50px;margin-top:30px">
                    <br><br><br><br>
                    <div id="breakfasts"class="active" style="background:#337ab7;height:40px;width:280px;margin-top:-17px;">
                        <h3 style="text-align:center;margin-top:5px;cursor: pointer">Breakfast</h3>
                    </div>
                    <div id="lunchs" class="menu" style="background:#a8a8a8;height:40px;width:275px;margin-top:-17px;">
                        <h3 style="text-align:center">Lunch</h3>
                    </div>
                    <div class="menu" style="background:#a8a8a8;height:40px;width:275px;margin-top:-17px;">
                        <h3 style="text-align:center">Dinner</h3>
                    </div>
                    <div class="menu" style="background:#a8a8a8;height:40px;width:275px;margin-top:-17px;">
                        <h3 style="text-align:center">Snacks</h3>
                    </div>
                    <div id ="logout"class="menus" style="background:#E21124;height:32px;width:275px;margin-top:4px;padding-top:1px">
                        <h5 style="text-align:center">Logout</h5>
                    </div>
                </div>
                <div id="breakfast" class="col-xs-9" style="padding:50px">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay" ></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px;"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food1.jpg" class="img-responsive" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Jollof Rice and Plantain</p>
                                <p style="text-align:left">600NGN<span style="margin-left:140px;margin-top:-50px"><button id="food1"class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img class="img-responsive" src="bootstrap/img/food2.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Classic Gizdodo</p>
                                <p style="text-align:left">800NGN<span style="margin-left:140px;margin-top:-50px"><button id="food2"class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:190px">
                                <img class="img-responsive" src="bootstrap/img/food3.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Plantain & Stew</p>
                                <p style="text-align:left">500NGN<span style="margin-left:140px;margin-top:-50px"><button id="food3" class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:190px">
                                <img class="img-responsive" src="bootstrap/img/food4.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Special Suya pack</p>
                                <p style="text-align:left">1000NGN<span style="margin-left:140px;margin-top:-50px"><button id="food4"class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carts" style="background:#fff;height:768px!important;color:#474747;cursor: pointer;position:absolute;width:0px;margin-left:1180px;padding:5px">
                    <br>
                    <h4 style="text-align:center">Cart<span><i class="fa fa-shopping-cart" ></i></span></h4><br><br>
                    <div><p>TOTAL<span id="total"style="margin-left:150px"></span></p></div>
                    <div id="cartsInner" style="position:absolute"></div>
                    <button id="checkout"class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal" style="margin-top:500px;margin-left:70px;position:relative">CHECKOUT</button>

                    <button id="done" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#myModal1" style="display:none">DONE</button>
                </div>
                <div id="lunch" class="col-xs-9" style="padding:50px;display:none">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay" ></div>
                            <div class="row" style="background:#f0ad4e;border:1px solid transparent;border-color:#eea236;height:10px;"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food1.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Jollof Rice and Plantain</p>
                                <p style="text-align:left">600NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-warning" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#f0ad4e;border:1px solid transparent;border-color:#eea236;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food2.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Classic Gizdodo</p>
                                <p style="text-align:left">800NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-warning" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>`
                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#f0ad4e;border:1px solid transparent;border-color:#eea236;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food3.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Plantain & Stew</p>
                                <p style="text-align:left">500NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-warning" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#f0ad4e;border:1px solid transparent;border-color:#eea236;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food4.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Special Suya pack</p>
                                <p style="text-align:left">1000NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-warning" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="dinner" class="col-xs-9" style="padding:50px;display:none">
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay" ></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px;"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food1.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Jollof Rice and Plantain</p>
                                <p style="text-align:left">600NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food2.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Classic Gizdodo</p>
                                <p style="text-align:left">800NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>`
                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food3.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Plantain & Stew</p>
                                <p style="text-align:left">500NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                        <div class="col-xs-1"></div>
                        <div class="col-xs-4" style="cursor: pointer">
                            <div class="overlay"></div>
                            <div class="row" style="background:#337ab7;border:1px solid transparent;border-color:#2e6da4;height:10px"></div>
                            <div class="row" style="background:#fff;height:170px">
                                <img src="bootstrap/img/food4.jpg" >
                            </div>
                            <div class="row" style="background:#f0eeee;height:70px;border-bottom:1px solid #a8a8a8;padding-left:5px">
                                <p style="margin-top:10px">Special Suya pack</p>
                                <p style="text-align:left">1000NGN<span style="margin-left:140px;margin-top:-50px"><button class="btn btn-sm btn-primary" style="padding:3px 8px">Order</button></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <script src="bootstrap/js/jquery-2.1.4.js"></script>
        <script>
            jQuery(document).ready(function(){
                var i = 0;
                var j = 0;
                $("div.menu").hover(
                    function(){
                        $( this ).css( "background-color","#2e6da4");
                        $( this ).css( "width","280px");
                    }, 
                    function(){
                        $( this ).css( "background-color","#a8a8a8");
                        $( this ).css( "width","275px");
                    }
                );

            

                $("div.menus").hover(
                    function(){
                        $( this ).css( "width","280px");
                    }, 
                    function(){
                        $( this ).css( "width","275px");
                    }
                );
                $("#nav").hover(
                    function(){
                        $( this ).css( "background-color","#a8a8a8");
                    }, 
                    function(){
                        $( this ).css( "background-color","#fff");
                    }
                );
                $("#cart").hover(
                    function(){
                        $( this ).css( "background-color","#a8a8a8");
                    }, 
                    function(){
                        $( this ).css( "background-color","#fff");
                    }
                );
                $("#nav").click(function(){
                    if(i == 0){
                        $("#side").animate({
                            left:'-200px'
                        });
                        i++;  
                    }
                    else if(i == 1){
                        $("#side").animate({
                            left:'0px'
                        });
                        i--;  
                    }
                });
                $("#cart").click(function(){
                    if(j == 0){
                        $("#carts").animate({
                            left:'-350px',
                            width:'350px'
                        });
                        j++;  
                    }
                    else if(j == 1){
                        $("#carts").animate({
                            left:'0px',
                            width:'0px'
                        });
                        j--;  
                    }
                });
                var i = 0;
                var inside1 = false;
                var inside2 = false;
                var inside3 = false;
                var inside4 = false;
                var no1 = 1;
                var no2 = 1;
                var no3 = 1;
                var no4 = 1;
                var id = $("#id").text();
                var prc1 = 0;
                var prc2 = 0; 
                var prc3 = 0;
                var prc4 = 0;
                var one = false;
                var two = false;
                var three = false;
                var four = false;
                var total = 0;

                $('#food1').click(function(){
                    if(inside1 === false){
                        var i ="<div style='width:290px;height:70px;background:#DEDCDC;padding-top:10px;border:1px solid #474747;margin-top:1px'><div><img src='bootstrap/img/food1.jpg' alt='' style='width:50px;height:50px;border-radius:50px' /></div><div style='margin-left:50px;margin-top:-37px'>Jollof Rice and Plantain <p style='display:inline-block;margin-left:2px;font-size:12px;font-weight:700;padding-top:10px;text-align:right' id='price1' ></p><small id='number1'></small></div></div>";
                        $('#cartsInner').append(i);
                        inside1 = true;
                        $('#price1').html("600 NGN");
                    }
                    else{
                        no1++;
                        price1 = no1 * 600;
                        $('#price1').html(price1+" NGN");

                    }
                    one = true;
                    prc1 = no1 * 600;
                    total = prc1 + prc2 + prc3 + prc4;
                    $("#total").text(total + " NGN");
                });

                $('#food2').click(function(){
                    if(inside2 === false){
                        var i ="<div style='width:290px;height:70px;background:#DEDCDC;padding-top:10px;border:1px solid #474747;margin-top:1px'><div><img src='bootstrap/img/food2.jpg' alt='' style='width:50px;height:50px;border-radius:50px' /></div><div style='margin-left:50px;margin-top:-37px'>Classic Gizdodo<p style='display:inline-block;margin-left:2px;font-size:12px;font-weight:700;padding-top:10px;text-align:right' id='price2' ></p><small id='number2'></small></div></div>";
                        $('#cartsInner').append(i);
                        inside2 = true;
                        $('#price2').html("800 NGN");
                    }
                    else{
                        no2++;
                        price2 = no2 * 800;
                        prc2 = price2;
                        $('#price2').html(price2+" NGN");
                    }
                    prc2 = no2 * 800;
                    two = true;
                    total = prc1 + prc2 + prc3 + prc4;
                    $("#total").text(total + " NGN");
                    
                });

                $('#food3').click(function(){
                    if(inside3 === false){
                        var i ="<div style='width:290px;height:70px;background:#DEDCDC;padding-top:10px;border:1px solid #474747;margin-top:1px'><div><img src='bootstrap/img/food3.jpg' alt='' style='width:50px;height:50px;border-radius:50px' /></div><div style='margin-left:50px;margin-top:-37px'>Plantain & Stew<p style='display:inline-block;margin-left:2px;font-size:12px;font-weight:700;padding-top:10px;text-align:right' id='price3' ></p><small id='number3'></small></div></div>";
                        $('#cartsInner').append(i);
                        inside3 = true;
                        $('#price3').html("500 NGN");
                    }
                    else{
                        no3++;
                        price3 = no3 * 500;
                        prc3 = price3;
                        $('#price3').html(price3+" NGN");
                    }
                    prc3 = no3 * 500;
                    three = true;
                    total = prc1 + prc2 + prc3 + prc4;
                    $("#total").text(total + " NGN");
                    
                });

                $('#food4').click(function(){
                    if(inside4 === false){
                        var i ="<div style='width:290px;height:70px;background:#DEDCDC;padding-top:10px;border:1px solid #474747;margin-top:1px'><div><img src='bootstrap/img/food4.jpg' alt='' style='width:50px;height:50px;border-radius:50px' /></div><div style='margin-left:50px;margin-top:-37px'>Special Suya pack<p style='display:inline-block;margin-left:2px;font-size:12px;font-weight:700;padding-top:10px;text-align:right' id='price4'></p><small id='number4'></small></div></div>";
                        $('#cartsInner').append(i);
                        inside4 = true;
                        $('#price4').html("1000 NGN");
                    }
                    else{
                        no4++;
                        price4 = no4 * 1000;
                        prc4 = price4;
                        $('#price4').html(price4+" NGN");
                    }
                    prc4 = no4 * 1000;
                     four = true;
                     total = prc1 + prc2 + prc3 + prc4;
                    $("#total").text(total + " NGN");
                });
                
                $('#confirm').click(function(){
                    if(one == true){
                        var food = 2;
                        var price = prc1;
                        var address= $("#address").val();
                        var details = {
                            "user":id,
                            "food":food,
                            "price":price,
                            "address":address
                        }
                        
                        jQuery.ajax({
                            url: "http://localhost/csc310/checkout.php",
                            type: "POST",
                            dataType: "json",
                            data: details,
                            success: function(response){
                                console.log(response);
                                jQuery.each(response, function(key,value){  
                                });
                                
                            },
                            error: function(){
                                console.log("error Posting data");
                            }
                        });  
                    }
                    if(two == true){
                        var food = 3;
                        var price = prc2;
                        var address= $("#address").val();
                        var details = {
                            "user":id,
                            "food":food,
                            "price":price,
                            "address":address
                        }
                        
                        jQuery.ajax({
                            url: "http://localhost/csc310/checkout.php",
                            type: "POST",
                            dataType: "json",
                            data: details,
                            success: function(response){
                                console.log(response);
                                jQuery.each(response, function(key,value){  
                                });
                                
                            },
                            error: function(){
                                console.log("error Posting data");
                            }
                        }); 
                    }
                    if(three == true){
                        var food = 4;
                        var price = prc3;
                        var address= $("#address").val();
                        var address= $("#address").val();
                        var details = {
                            "user":id,
                            "food":food,
                            "price":price,
                            "address":address
                        }
                        
                        jQuery.ajax({
                            url: "http://localhost/csc310/checkout.php",
                            type: "POST",
                            dataType: "json",
                            data: details,
                            success: function(response){
                                console.log(response);
                                jQuery.each(response, function(key,value){  
                                });
                                
                            },
                            error: function(){
                                console.log("error Posting data");
                            }
                        }); 
                    }
                    if(four == true){
                        var food = 5;
                        var price = prc4;
                        var address= $("#address").val();
                        var details = {
                            "user":id,
                            "food":food,
                            "price":price,
                            "address":address
                        }
                        
                        jQuery.ajax({
                            url: "http://localhost/csc310/checkout.php",
                            type: "POST",
                            dataType: "json",
                            data: details,
                            success: function(response){
                                console.log(response);
                                jQuery.each(response, function(key,value){  
                                });
                                
                            },
                            error: function(){
                                console.log("error Posting data");
                            }
                        });
                    }

                    $("#close").click();
                    $("#done").click();
                    $("#cartsInner").html("");
                });

                $('#logout').click(function(){
                    location.href = "logout.php";
                });
                               
                
            });        
        </script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
