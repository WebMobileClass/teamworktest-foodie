<?php
session_start('cafetaria');
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
session_destroy('cafetaria');
header("Location:index.php");
?>
