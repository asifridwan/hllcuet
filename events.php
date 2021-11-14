<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaration -->
    <title>Events | House of Language & Literature, CUET</title>
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
    <!-- Upcoming Events -->
    <section id="events_comingup" class="w3-animate-opacity">
        <h1 class="w3-center">Events Coming Soon</h1>
        <div id="event-card" class="w3-card-2">
            <header class="w3-container w3-blue w3-center">
                <h3>Online Writing Competition for CUETians</h3>
            </header>
            <div class="w3-container w3-white">
                <p>This is an online writing competition for CUETians</p>
                <p>Participants will be tasked to write about any topic</p>
                <p class="w3-center"><button class="w3-button w3-indigo w3-hover-blue" onclick="document.getElementById('event-modal').style.display='block'">Read More</button></p>
            </div>
        </div>
        <div id="event-card" class="w3-card-2">
            <header class="w3-container w3-blue w3-center">
                <h3>Online Writing Competition for CUETians</h3>
            </header>
            <div class="w3-container w3-white">
                <p>This is an online writing competition for CUETians</p>
                <p>Participants will be tasked to write about any topic</p>
                <p class="w3-center"><button class="w3-button w3-indigo w3-hover-blue" onclick="document.getElementById('event-modal').style.display='block'">Read More</button></p>
            </div>
        </div>
        <div id="event-card" class="w3-card-2">
            <header class="w3-container w3-blue w3-center">
                <h3>Online Writing Competition for CUETians</h3>
            </header>
            <div class="w3-container w3-white">
                <p>This is an online writing competition for CUETians</p>
                <p>Participants will be tasked to write about any topic</p>
                <p class="w3-center"><button class="w3-button w3-indigo w3-hover-blue" onclick="document.getElementById('event-modal').style.display='block'">Read More</button></p>
            </div>
        </div>
        <div id="event-modal" class="w3-modal">
            <div class="w3-modal-content">
                <header class="w3-container w3-center w3-indigo">
                    <span onclick="document.getElementById('event-modal').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Online Writing Competition for CUETians</h2>
                </header>
                <div class="w3-container">
                    <p>This is an online writing competition for CUETians</p>
                    <p>Participants will be tasked to write about any topic</p>
                    <p>More details coming soon</p>
                </div>
                <footer class="w3-container w3-center w3-indigo">
                    <p>Status --> TBA</p>
                </footer>
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