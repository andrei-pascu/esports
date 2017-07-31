<html>
  <head>
    <title>Add/Edit</title>
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
        #greeting {
          font-size: 2vh;
          color: #32a3ff;
        }
        form {
          width: 50vh;
          font-size: 2vh;
          color: #32a3ff;
          display: flex;
          align-items: center;
          justify-content: center;
          flex-direction: column;
        }
        #iii {
          width: 80%;
          font-size: 1.2em;
        }
        #ttt {
          width: 100%;
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
          padding-top: 7vh;
          box-sizing: border-box;
          overflow-y: auto;
          font-size: 1.5em;
        }
      .news-item {
        width: 70%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        margin-bottom: 10vh;
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
        .news-change {
          display: flex;
          align-items: center;
          justify-content: space-around;
          flex-direction: row;
          width: 100%;
          box-sizing: border-box;
          border: solid 0.3vh #32a3ff;
        }
      .news-change a {
        text-decoration: none;
        color: #32a3ff;
        font-size: 1.5em;
      }
    .news-change a:visited {
      text-decoration: none;
      color: #32a3ff;
    }
    </style>
  </head>
  <?php session_start();
  if($_SESSION['user']){}
  else{header("location:developer.php");}
  $user = $_SESSION['user'];
?>
  <body>
    <h2>Newsletter</h2>
    <p id="greeting" >Hello <?php Print "$user"?>!</p> <!-- display user name-->
    <a href="logout.php" method="POST"></a><br/><br/>
    <form action="add.php" method="POST">
      Enter Title:   <br/><input id="iii" type="text" name="title" required="required" /> <br/>
      Enter Content: <br/><pre><textarea id="ttt" type="text" name="content" required="required" cols="40" rows="15"></textarea> <br/></pre>
      <input id="bbb" type="submit" value="Add to list"/>
    </form>
    <div id="dev-new-container" border="1px" width="100%" height="800px" background-color="lightgray">
<?php
  $link = mysqli_connect("localhost", "root", "", "esports");
  $query = mysqli_query($link, "SELECT * FROM news ORDER BY id DESC;");
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
        Print '<p><a href="edit.php?id='. $row['id'] .'">EDIT</a> </p>';
        Print '<p><a href="#" onclick="myDel('. $row['id'] .')">DELETE</a> </p>';
      Print "</div>";
    Print "</div>";
  }
?>
    </div>
<script>
  function myDel(id) {
    var r = confirm("Are you sure you want to delete this entry?");
    if (r == true) {
      window.location.assign("delete.php?id=" + id);
    }
  }
</script>
  </body>
</html>
