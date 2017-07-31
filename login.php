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
    <h2>Login Page</h2>
    <a href="register.php">REGISTER<br/><br/></a>
    <form action="checklogin.php" method="POST">
      Enter Username: <input type="text" name="username" required="required" /> <br/>
      Enter Password: <input type="password" name="password" required="required" /> <br/>
      <input type="submit" value="LOGIN"/>
    </form>
  </body>
</html>
