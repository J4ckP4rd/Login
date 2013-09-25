<?php
include "./lib/session.php";
include "./lib/dbcon.php";

$id = mysql_real_escape_string($username);
$pw = mysql_real_escape_string($password);

$result = mysql_query("SELECT id FROM usertable where id='$id' and pw=md5('$pw')");
$row = mysql_fetch_array($result);

if($row[id]=="admin")
{
  $_SESSION[uid] = "admin";
  echo "<script>alert('Welcome Admin !');location.replace('admin.php');</script>";
  exit();
}
else
{
  echo "<script>alert('Wrong !');history.go(-1);</script>";
  exit();
}
?>
