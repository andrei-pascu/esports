<?php
  session_start();
  $link = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b8f790c79aeba6", "f66a1016", "heroku_5f5cb1110080006");
  $counter = mysqli_query($link, "SELECT COUNT(*) AS id FROM news");
  $num = mysqli_fetch_array($counter);
  $count = $num["id"];
	if($_SESSION['pgNr'] > $count - 5) {
		$_SESSION['pgNr'] = $_SESSION['pgNr'];
		$pgNr = $_SESSION['pgNr'];
	} else if($_SESSION['pgNr'] < $count - 5) {
		$_SESSION['pgNr']+=5;
		$pgNr = $_SESSION['pgNr'];
	}
  $query = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC LIMIT 5 OFFSET $pgNr;");
  while($row = mysqli_fetch_array($query))
  {
    Print "<div class='news-item'>";
      Print "<div class='news-upper'>";
        Print "<h1>". $row['title'] ."</h2>";
        Print '<h6>'. $row['date_posted'] ."</h6>";
      Print "</div>";
      Print "<div class='news-lower'>";
        Print '<p>'. $row['content'] ."</p>";
      Print "</div>";
      Print "<div class='news-change'>";
      Print "</div>";
    Print "</div>";
  }
?>
