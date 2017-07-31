<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $link=mysqli_connect("localhost", "root", "", "esports");
	$title = mysqli_real_escape_string($link, $_POST['title']);
	$date = strftime("%B %d, %Y");
	$content = mysqli_real_escape_string($link, $_POST['content']);
	mysqli_query($link, "INSERT INTO news (title, date_posted, content)
  VALUES ('$title', '$date', '$content')");
	header("location: newsletter.php");
}
?>
