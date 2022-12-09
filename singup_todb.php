<?php
session_start();
if (isset($_SESSION['login_name'])) {
  header("location : index.php");
}
else {

    require_once "conn.php";
    $uname = $_POST['name'];
    $upasswd = $_POST['Password'];
    $email = $_POST['email'];


    if (trim($uname) != "") {
        $sql = "INSERT INTO nurse VALUES(0,'$uname','$upasswd','$email')";
        if ($conn->query($sql)) {
            $_SESSION["login_name"] = $uname;
            header("location: index.php");
        } elseif (trim($upasswd) != "") {
            header("location: sing_up.php");
        } else {
            echo "No!";
            header("location: sing_up.php");
        }
    } else {

        header("location: sing_up.php");
    }
} 
?>