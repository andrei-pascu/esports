<html>
  <head>
    <title>Uhm EDIT</title>
      <style>
          body {
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #011f38;
            overflow-x: hidden;
          }
          h2 {
            font-size: 7vh;
            color: #32a3ff;
          }
          #return {
            font-size: 2vh;
            color: #32a3ff;
            padding-bottom: -3vh;
          }
          #greeting {
            font-size: 2vh;
            color: #32a3ff;
          }
          form {
            width: 100%;
            font-size: 2vh;
            color: #32a3ff;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
          }
          #iii {
            width: 40%;
            font-size: 1.2em;
            color: #32a3ff;
          }
          #ttt {
            width: 60%;
            font-size: 1em;
          }
          #bbb {
            font-size: 2vh;
            color: #32a3ff;
            background-color: rgb(21, 0, 48);
            padding: 1em;
          }
          #dev-new-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            flex-direction: column;
            width: 80%;
            box-sizing: border-box;
            overflow-y: auto;
            font-size: 1.5em;

          }
        .news-item {
          width: 60%;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
          margin-bottom: 1vh;
          border-radius: 30%;
        }
          .news-upper {
            width: 100%;
            color: #32a3ff;
            display: flex;
            text-align: center;
            justify-content: space-between;
            flex-direction: row;
          }
            .news-upper h1 {
              font-size: 1.5em;
              margin: 5px 0 0 10px;
            }
            .news-upper h6 {
              font-size: 1em;
              margin: 10px 10px 10px 0;
            }
          .news-lower {
            width: 100%;
            background-color: #32a3ff;
          }
            .news-lower p {
              white-space: pre-wrap;
              padding: 20px;
              text-indent: 10px;
            }
      </style>
  </head>
<?php
  session_start();
  if($_SESSION['user']){
  } else {
    header("location:developer.php");
  }
  $user = $_SESSION['user'];
  $id_exists = false;
?>
  <body>
    <a id="return" href="newsletter.php">Return to Home page</a>
    <div id="dev-new-container">
<?php
  if(!empty($_GET['id']))
  {
    $link = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b8f790c79aeba6", "f66a1016", "heroku_5f5cb1110080006");
    $id = $_GET['id'];
    $_SESSION['id'] = $id;
    $id_exists = true;
    $query = mysqli_query($link, "SELECT * FROM news WHERE id='$id'");
    $count = mysqli_num_rows($query);
    if($count > 0)
    {
      while($row = mysqli_fetch_array($query))
      {
      Print "<div class='news-item'>";
        Print "<div class='news-upper'>";
          Print "<h1>". $row['title'] ."</h2>";
          Print '<h6>'. $row['date_posted'] ."</h6>";
        Print "</div>";
        Print "<div class='news-lower'>";
          Print '<pre><p>'. $row['content'] ."</p></pre>";
        Print "</div>";
        Print "<div class='news-change'>";
        Print "</div>";
      Print "</div>";
        Print '
        <form action="edit.php" method="POST">
          Enter Title:   <br/><input id="iii" type="text" name="title" required="required" value='. $row['title'] .' /> <br/>
          Enter Content: <br/><textarea id="ttt" cols="50"rows="15" type="text" name="content" required="required">'. $row['content'] .'</textarea> <br/>
                          <input id="bbb" type="submit" value="Update List"/>
        </form>
      ';
      }

      if($id_exists) { }
      else
      {
        Print '<h2 align="center"> There is no data to be edited.</h2>';
      }
    }
    else
    {
      $id_exists = false;
    }
  }
?>
    </div>
    </br>
  </body>
</html>
<?php
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $link = mysqli_connect("localhost", "root", "", "esports");
    $id = $_SESSION['id'];
  	$title = mysqli_real_escape_string($link, $_POST['title']);
  	$date = strftime("%B %d, %Y");
  	$content = mysqli_real_escape_string($link, $_POST['content']);
    foreach($_POST['public'] as $list)
    {
      if($list != null)
      {
        $public = "yes";
      }
    }
    mysqli_query($link, "UPDATE news SET title='$title',
      content='$content' WHERE id='$id'");
    header("location: newsletter.php");
  }
?>
