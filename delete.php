<?php
  session_start();
  if($_SESSION['user']) {
  } else {
    header("location:developer.php");
  };
  if($_SERVER['REQUEST_METHOD'] == "GET")
  {
    $link = mysqli_connect("localhost", "root", "", "esports") or die(mysql_error());
    $id = $_GET['id'];
    mysqli_query($link, "DELETE FROM news WHERE id='$id'");
    header("location: newsletter.php");
  }
?>
