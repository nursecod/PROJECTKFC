
<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> admin editer </h1>    
    <?php
      if (isset($_SESSION['login_name'])) {
            echo "welcome ";

            echo $_SESSION['login_name'];
            echo "<br>";
            echo $_SESSION['user_level'];
            echo "<a href='logout.php'>logout </a>";

      ?>
       
      <?php
      }else {?>
      <a href="sing_in.php"> login </a><br>
      <a href="sing_up.php">singup</a>

      <?php
      }
       ?>
</body>
</html>