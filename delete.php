<?php
  session_start();
  if($_SESSION['user']) {
  } else {
    header("location:developer.php");
  };
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {
    $link = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b8f790c79aeba6", "f66a1016", "heroku_5f5cb1110080006") or die(mysql_error());
    $id = $_GET['id'];
    mysqli_query($link, "DELETE FROM news WHERE id='$id'");
    header("location: newsletter.php");
  }
?>
