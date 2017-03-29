<?php
    header('Access-Control-Allow-Origin: *');
    mysql_connect("localhost","root","");
    mysql_select_db("quickChaw");
    
        $uid = $_POST['user'];
        $fid = $_POST['food'];
        $price = $_POST['price'];
        $address = $_POST['address'];

        $sql1 = "INSERT INTO user_food(u_id,f_id,price,address) VALUES('$uid','$fid','$price','$address')";
        $query = mysql_query($sql1) or die(mysql_error());
        if(mysql_affected_rows()>1){
            $arr = array();
        array_push($arr, array("message" => "success"));
        print_r(json_encode($arr));
        }
        

?>