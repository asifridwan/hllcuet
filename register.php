<?php include('Scripts/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaration -->
    <title>Register | House of Language & Literature, CUET</title>
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
    <!-- Login -->
    <section id="signup" class="w3-animate-opacity">
        <h1 class="w3-center">Registration Form</h1>
        <?php include('Scripts/errors.php'); ?>
        <div class="wrapper">
            <div class="reg_form">
                <form class="w3-center" action="register.php" method="POST">
                    <input id="reg-ip" type="text" placeholder="First Name" name="first_name" required>
                    <input id="reg-ip" type="text" placeholder="Last Name" name="last_name" required>
                    <input id="reg-ip" type="text" placeholder="Student ID" name="student_id" required>
                    <input id="reg-ip" type="text" placeholder="Username" name="username" required>
                    <input id="reg-ip" type="password" placeholder="Password" name="password" required><br>
                    <select id="gender" type="text" name="gender" required>
                        <option value="">Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br>
                    <button id="reg-btn" class="w3-button w3-round-xxlarge w3-indigo w3-hover-blue" type="submit" name="signup">Register</button>
                </form>
            </div>
        </div>
        <h2 class="w3-center">Already in the crew ? <a href="login.php">Login Now !</a></h2>
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