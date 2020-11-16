<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Press+Start+2P">
  <title>IDM Esports</title>
</head>
  <body>
    <div id='wrapper-main'>
      <header>
        <img src="images/i/banner/razer.png" />
        <img src="images/i/banner/asus.png" />
        <img src="images/i/banner/nvidia.png" />
      </header>
      <div id='wrapper-content'>
        <div id='wrapper-navigation'>
          <div id='navigation-bar'>
            <div name="news" class='nav-div nav-h' id='nav-news'>
              <p>NEWS</p>
            </div>
            <div name="teams" class='nav-div nav-hhh' id='nav-teams'>
              <p>TEAMS</p>
            </div>
            <div name="stream" class='nav-div nav-hhh' id='nav-stream'>
              <p>STREAM</p>
            </div>
            <div name="contact" class='nav-div nav-hhh' id='nav-contact'>
              <p>CONTACT</p>
            </div>
          </div>
          <div id='navigation-teams'>
            <div class='nav-div display-1' id='nav-cs'>
            </div>
            <div class='nav-div display-1' id='nav-overwatch'>
            </div>
            <div class='nav-div display-1' id='nav-lol'>
            </div>
          </div>
        </div>
        <div id='content'>
          <div class='wrapper-news' id="wrapper-news">
<?php
  session_start();
    $pgnr = 0;
    $_SESSION['pgNr'] = 0;
    $link = mysqli_connect("eu-cdbr-west-01.cleardb.com", "b8f790c79aeba6", "f66a1016", "heroku_5f5cb1110080006");
    $query = mysqli_query($link, "SELECT * FROM news
      ORDER BY id DESC LIMIT 5 OFFSET $pgnr;");
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
<script>
  $(document).ready(function(){
    $('#page_form_1').submit(function(e) {
      $.ajax({
        type:"post",
        url:"dbNewsletterExtract.php",
        data:  $("#page_form_1").serialize(),
        success: function(response) {
          $('.news-item').remove();
          $('#wrapper-news').prepend(response);
        }
      });
      e.preventDefault();
    });
      $('#page_form_2').submit(function(e) {
        $.ajax({
          type:"post",
          url:"dbNewsletterAdd.php",
          data:  $("#page_form_2").serialize(),
          success: function(response) {
            $('.news-item').remove();
            $('#wrapper-news').prepend(response);
          }
        });
         e.preventDefault();
      });
   });
</script>
            <div id="page_container">
              <form id="page_form_1" method="post">
                <button type="submit" class="page_buttons"
                name="newww" id="newww" value="">
                  <section class="arrow" id="arrow_left"></section>
                  <div class="page_tag">
                    Newer&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  </div>
                </button>
                <br/>
              </form>
              <form id="page_form_2" method="post">
                  <button type="submit" class="page_buttons"
                  name="olddd" id="olddd" value="">
                    <section class="arrow" id="arrow_right"></section>
                    <div class="page_tag">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Older
                    </div>
                  </button>
                  <br/>
              </form>
            </div>
          </div>
          <div id='wrapper-teams'>
            <div id='cs'>
              <div class='member'id='cs-1'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='cs-2'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 18</p>
                  <p class='birthplace'>Birthplace: Cluj</p>
                </div>
              </div>
              <div class='member'id='cs-3'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 19</p>
                  <p class='birthplace'>Birthplace: Constanta</p>
                </div>
              </div>
              <div class='member'id='cs-4'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 23</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='cs-5'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 20</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                  <p class='ceva'>*Prefered role</p>
                </div>
              </div>
              <div id="cs_img_left_head"></div>
              <div id="cs_img_right_head"></div>
            </div>
            <div id='overwatch'>
              <div class='member'id='overwatch-1'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 18</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='overwatch-2'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 27</p>
                  <p class='birthplace'>Birthplace: Cluj</p>
                </div>
              </div>
              <div class='member'id='overwatch-3'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*name</p>
                  <p class='age'>Age: 17</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='overwatch-4'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Stockholm</p>
                </div>
              </div>
              <div class='member'id='overwatch-5'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Berlin</p>
                </div>
              </div>
              <div id="overwatch_img_left_head"></div>
              <div id="overwatch_img_right_head"></div>
            </div>
            <div id='lol'>
              <div class='member'id='lol-1'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='lol-2'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='lol-3'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='lol-4'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div class='member'id='lol-5'>
                <div class='upper'>
                  <div class='portrait'>
                  </div>
                  <div class='about'>
                    <p>
                       At vero eos et accusamus et iusto odio dignissimos
                      ducimus qui blanditiis praesentium voluptatum deleniti
                      atque corrupti quos dolores et quas molestias excepturi
                      sint occaecati cupiditate non provident.
                    </p>
                  </div>
                </div>
                <div class='lower'>
                  <p class='ceva'>*Name</p>
                  <p class='age'>Age: 21</p>
                  <p class='birthplace'>Birthplace: Bucharest</p>
                </div>
              </div>
              <div id="league_img_left_head"></div>
              <div id="league_img_right_head"></div>
            </div>
          </div>
          <div id='wrapper-stream'>
            <div id='stream'>
              <div class='stream-block' id='stream-1'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Monday/Tuesday 13pm-17pm/22pm-4am</p>
                </div>
              </div>
              <div class='stream-block' id='stream-2'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Monday-Friday 13pm-17pm/22pm-4am</p>
                </div>
              </div>
              <div class='stream-block' id='stream-3'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Friday-Sunday 13pm-17pm/22pm-4am</p>
                </div>
              </div>
              <div class='stream-block' id='stream-4'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Monday-Friday 13pm-17pm/22pm-4am</p>
                </div>
              </div>
              <div class='stream-block' id='stream-5'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Monday-Saturday 22pm-4am</p>
                </div>
              </div>
              <div class='stream-block' id='stream-6'>
                <div class='upper-s'>
                  <div class='portrait-s'>
                  </div>
                  <div class='banner-s'>
                  </div>
                </div>
                <div class='lower-s'>
                  <p>Usual streaming time:</p>
                  <p>Monday Friday between 13pm-17pm / 22pm-4am</p>
                </div>
              </div>
            </div>
          </div>
          <div id='wrapper-contact'>
            <div id='contact'>
              <p>Email : some-name@###.com</p>
              <p>07********</p>
              <p>Adress: IDM Club,</p>
              <p>Splaiul Independenței 319,</p>
              <p>Bucuresti 060044</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="warning">
      <p>Flip your device</p>
    </div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="script.js"></script>
  </body>
</html>
