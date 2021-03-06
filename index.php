<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaration -->
    <title>Home | House of Language & Literature, CUET</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="icon" href="Assests/favicon.ico" type="image/ico">
    <!-- Embedded Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
    <!-- Scripts -->
    <link rel="stylesheet" href="Scripts/framework.css">
    <link rel="stylesheet" href="Scripts/hll_looks.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <!-- Navigation Bar -->
  <nav id="hll-navbar" class="w3-animate-opacity">
    <div id="hll-logo"><a href="index.php"><img src="Assests/hll_logo.png" alt=""></a></div>
    <ul class="navbar-links">
      <li><a href="newsfeed.php">Newsfeed</a></li>
      <li><a href="">Voice of HLL</a></li>
      <li><a href="events.php">Events</a></li>
      <li><a href="books.php">Books</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php" id="reg">Register</a></li>
    </ul>
    <div class="hamburg">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>
  </nav>
  <!-- Navbar Script -->
  <script src="Scripts/hll_navbar.js"></script>
  <!-- Slider -->
    <section id="slidez" class="w3-animate-opacity">
      <slider>
        <slide>
          <div id="slide-content">
            <div id="s_cntnt-1">
              <p><h2 id="title-txt">The House</h2></p>
              <p><h3 id="title-txt-2">Welcome to the website of House of Language & Literature, CUET<br>This organization is dedicated to practicing literature and foreign languages</h3></p>
              <p><a href="about.php"><button id="title-txt-3" class="w3-button w3-blue w3-hover-red w3-round-xxlarge">Read More</button></a></p>
            </div>
            <div id="s_cntnt-2">
              <img id="slide-img" src="Assests/s1.jpg">
            </div>
          </div>
        </slide>
        <slide>
          <div id="slide-content">
            <div id="s_cntnt-1">
              <p><h2 id="title-txt">The Libary</h2></p>
              <p><h3 id="title-txt-2">A vast array of books to provide knowlegde<br>Books can be issued online as well</p></h3>
              <p><a href="books.php"><button id="title-txt-3" class="w3-button w3-blue w3-hover-red w3-round-xxlarge">Visit Library</button></a></p>
            </div>
            <div id="s_cntnt-2">
              <img id="slide-img" src="Assests/s2.jpg">
            </div>
          </div>
        </slide>
        <slide>
          <div id="slide-content">
            <div id="s_cntnt-1">
              <p><h2 id="title-txt">The Events</h2></p>
              <p><h3 id="title-txt-2">Events are a vital part of our organization<br>Latest updates on upcoming events are always there on our website</h3></p>
              <p><a href="events.php"><button id="title-txt-3" class="w3-button w3-blue w3-hover-red w3-round-xxlarge">Learn More</button></a></p>
            </div>
            <div id="s_cntnt-2">
              <img id="slide-img" src="Assests/s3.jpg">
            </div>
          </div>
        </slide>
        <slide>
          <div id="slide-content">
            <div id="s_cntnt-1">
              <p><h2 id="title-txt">The Crew</h2></p>
              <p><h3 id="title-txt-2">Excited to be a part of the house ?<br>Stop waiting and join today !</h3></p>
              <p><a href="register.php"><button id="title-txt-3" class="w3-button w3-blue w3-hover-red w3-round-xxlarge">Join Now</button></a></p>
            </div>
            <div id="s_cntnt-2">
              <img id="slide-img" src="Assests/s4.jpg">
            </div>
          </div>
        </slide>
      </slider>
    </section>
  <!-- News -->
    <section id="news" class="w3-animate-opacity">
      <div id="title-n">
        <h1 class="w3-center">Latest News</h1>
        <hr>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F547952912562256&width=500" width="500" height="514" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F494142794609935&width=500" width="500" height="670" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F476812833009598&width=500" width="500" height="462" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-btn" class="w3-center">
        <a href="newsfeed.php">More News</a>
      </div>
    </section>
  <!-- Events -->
    <section id="events" class="w3-animate-opacity">
      <div id="event-n">
        <h1 class="w3-center">Upcoming Events</h1>
        <hr>
      </div>
      <div id="event-t">
        <table>
          <tr>
            <th><h1><i class="fa fa-calendar-o"></i> TBA</h1></th>
            <th><h2><i class="fa fa-flag-o"></i> Online Writing Competition for CUETians</h2></th>
            <th><h3><i class="fa fa-map-marker"></i> Online</h3></th>
            <th><h4><i class="fa fa-clock-o"></i> TBA</h4></th>
          </tr>
          <tr>
            <th><h1><i class="fa fa-calendar-o"></i> TBA</h1></th>
            <th><h2><i class="fa fa-flag-o"></i> Online Writing Competition for CUETians</h2></th>
            <th><h3><i class="fa fa-map-marker"></i> Online</h3></th>
            <th><h4><i class="fa fa-clock-o"></i> TBA</h4></th>
          </tr>
          <tr>
            <th><h1><i class="fa fa-calendar-o"></i> TBA</h1></th>
            <th><h2><i class="fa fa-flag-o"></i> Online Writing Competition for CUETians</h2></th>
            <th><h3><i class="fa fa-map-marker"></i> Online</h3></th>
            <th><h4><i class="fa fa-clock-o"></i> TBA</h4></th>
          </tr>
        </table>
      </div>
      <div id="event-btn" class="w3-center">
        <a href="events.php">Learn More</a>
      </div>
    </section>
  <!-- Footer -->
    <footer id="bottom" class="w3-animate-opacity">
      <div class="w3-center">
        <h1>
          <span class="bot1">House of Language & Literature, CUET</span>
          <span class="bot2">(C) 2020</span>
          <span class="bot3"> | All Rights Reserved</span>
        </h1>
      </div>
    </footer>
</body>
</html>