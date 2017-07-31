<html>
  <head>
    <title>My first PHP Website</title>
      <style>
        body {
          width: 100%;
          height: 100vh;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          background-color: #011f38;
          overflow: hidden;
        }
        h2 {
          font-size: 7vh;
          color: #32a3ff;
        }
        a {
          font-size: 5vh;
          margin-bottom: 3vh;
          text-decoration: none;
          color: #32a3ff;
        }
        a:visited {
          color: #32a3ff;
        }
        form  {
          font-size: 5vh;
          color: #32a3ff;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }
        input {
          font-size: 5vh;
          margin-bottom: 3vh;
          color: #32a3ff;
        }
      </style>
  </head>
  <body>
      <h2>Registration Page</h2>
      <a href="login.php">LOGIN</a><br/><br/>
      <form action="register.php" method="POST">
         Enter Username: <input type="text" name="username" required="required" /> <br/>
         Enter password: <input type="password" name="password" required="required" /> <br/>
         <input type="submit" value="Register"/>
      </form>
  </body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $link=mysqli_connect("localhost", "root", "", "esports");
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
  $bool = true;
	$query = mysqli_query($link, "Select * from users");
  //Query the users table
	while($row = mysqli_fetch_array($query))
  //display all rows from query
	{
		$table_users = $row['username'];
    // the first username row is passed on to $table_users, and so on until the query is finished
		if($username == $table_users)
    // checks if there are any matching fields
		{
			$bool = false;
      // sets bool to false
			Print '<script>alert("Username has been taken!");</script>';
      //Prompts the user
			Print '<script>window.location.assign("register.php");</script>';
      // redirects to register.php
		}
	}
	if($bool) // checks if bool is true
	{
		mysqli_query($link, "INSERT INTO users (username, password) VALUES ('$username','$password')");
    //Inserts the value to table users
		Print '<script>alert("Successfully Registered!");</script>';
    // Prompts the user
		Print '<script>window.location.assign("login.php");</script>';
    //Redirects to register.php
	}
}
?>
