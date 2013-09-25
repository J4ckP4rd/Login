<?php
include "./lib/session.php";
include "./lib/dbcon.php";

if($_SESSION[uid]!="admin")
{
  echo "<script>alert('you are not admin !');location.replace('index.php');</script>";
  exit();
}

$key = file_get_contents('/var/key');
?>

<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
        <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title>Login bypass</title>

        <!--- CSS --->
        <link rel="stylesheet" href="style.css" type="text/css" />

        </head>

        <body>
                <div id="container">
                        <div class="welcome">
                                <div class="welcome-user">Welcome Admin !</div>
                                <div class="welcome-text">The key is <b><?=$key?></b></div>
                                <div class="home"><a href="index.php">HOME</a></div>
                        </div>
                </div>
        </body>
</html>
