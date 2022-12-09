<?php
require_once('conn.php');
session_start();
$uname = $_POST["name"];
$upassword = $_POST["password"];


$sqli = "SELECT * FROM nurse where user_name ='$uname' and user_password = '$upassword'  ";
$result = $conn -> query($sqli);
if ($result ->num_rows==1)
{
$rs = $result->fetch_array();
$_SESSION['login_name'] = $rs ['user_name'];
    $_SESSION['user_level'] = $rs['level_user'];

if ( $_SESSION['user_level']==0 )   {
        header("location :index.php");
    }elseif  ( $_SESSION['user_level']==1 ) {
        header("location:admin.php");
    }else  {
        header("location:sing_in.php");}
}else{
    header ("location:sing_in.php");
}

?>