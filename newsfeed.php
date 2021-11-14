<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaration -->
    <title>Newsfeed | House of Language & Literature, CUET</title>
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
    <link rel="stylesheet" href="Scripts/hll_xtra.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Navigation Bar -->
    <nav id="hll-navbar" class="w3-animate-opacity">
        <div id="hll-logo">
            <a href="index.php"><img src="Assests/hll_logo.png" alt=""></a>
        </div>
        <ul class="navbar-links">
            <li><a href="newsfeed.php">Newsfeed</a></li>
            <li><a href="">Voice of HLL</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="books.php">Books</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a id="reg" href="register.php">Register</a></li>
        </ul>
        <div class="hamburg">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>
    <!-- Navbar Script -->
    <script src="Scripts/hll_navbar.js"></script>
    <!-- Facebook Post-->
    <section id="fb_post" class="w3-animate-opacity">
      <h1 class="w3-center">Facebook Posts</h1>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F556083455082535&width=500" width="500" height="423" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F547952912562256&width=500" width="500" height="514" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F535986870425527&width=500" width="500" height="525" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F503007243723490&width=500" width="500" height="734" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F494142794609935&width=500" width="500" height="670" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
      <div id="news-n" class="w3-center">
        <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fhllcuet%2Fposts%2F476812833009598&width=500" width="500" height="462" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
      </div>
    </section>
    <!-- Blog Posts-->
    <section id="blog_post" class="w3-animate-opacity">
      <h1 class="w3-center">Blog Posts</h1>
      <div id="event-card" class="w3-card-2">
        <header class="w3-container w3-indigo w3-center">
            <h3>Blog Post ABC</h3>
        </header>
        <div class="w3-container w3-white">
            <p>Blog Post Line No.1</p>
            <p>Blog Post Line No.2</p>
            <p class="w3-center"><button class="w3-button w3-blue w3-hover-indigo" onclick="document.getElementById('blog-modal').style.display='block'">Read More</button></p>
        </div>
      </div>
      <div id="blog-modal" class="w3-modal">
        <div class="w3-modal-content">
            <header class="w3-container w3-center w3-blue">
                <span onclick="document.getElementById('blog-modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                <h2>Blog Post ABC</h2>
            </header>
            <div class="w3-container">
                <p>Blog Post Line No.1</p>
                <p>Blog Post Line No.2</p>
                <p>Blog Post Line No.3</p>
            </div>
        </div>
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