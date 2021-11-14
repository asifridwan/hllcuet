<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Declaration -->
    <title>Books | House of Language & Literature, CUET</title>
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
    <!-- Library -->
    <section id="library" class="w3-animate-opacity">
      <h1 class="w3-center">Books</h1>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book1.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">A Thousand Splendid Suns</div>
                <div class="author">Khaled Hosseini</div>
                <button onclick="document.getElementById('book_modal1').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book2.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">পূর্ব-পশ্চিম</div>
                <div class="author">সুনীল গঙ্গোপাধ্যায়</div>
                <button onclick="document.getElementById('book_modal2').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book3.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">ডাবল স্ট্যান্ডার্ড</div>
                <div class="author">ডা.শামসুল আরেফিন</div>
                <button onclick="document.getElementById('book_modal3').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book4.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">কারবালা বাস্তবতা বনাম কল্পকথা</div>
                <div class="author">ফরিদ আল-বাহরাইনি</div>
                <button onclick="document.getElementById('book_modal4').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book5.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">একলব্য</div>
                <div class="author">হরিশংকর জলদাস</div>
                <button onclick="document.getElementById('book_modal5').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book6.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">My Not So Perfect Life</div>
                <div class="author">Sophie Kinsella</div>
                <button onclick="document.getElementById('book_modal6').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book7.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">প্রথম আলো</div>
                <div class="author">সুনীল গঙ্গোপাধ্যায়</div>
                <button onclick="document.getElementById('book_modal7').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book8.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">জলদাসীর গল্প</div>
                <div class="author">হরিশংকর জলদাস</div>
                <button onclick="document.getElementById('book_modal8').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book9.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">তোপসের নোটবুক</div>
                <div class="author">কৌশিক মজুমদার</div>
                <button onclick="document.getElementById('book_modal9').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book10.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">একজন কমলালেবু</div>
                <div class="author">শাহাদুজ্জামান</div>
                <button onclick="document.getElementById('book_modal10').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book11.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">চক্র</div>
                <div class="author">শীর্ষেন্দু মুখোপাধ্যায়</div>
                <button onclick="document.getElementById('book_modal11').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book12.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">Think And Grow Rich</div>
                <div class="author">Napoleon Hill</div>
                <button onclick="document.getElementById('book_modal12').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book13.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">দেবদাস</div>
                <div class="author">শরৎচন্দ্র</div>
                <button onclick="document.getElementById('book_modal13').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book14.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">The Alchemist</div>
                <div class="author">Paulo Coelho</div>
                <button onclick="document.getElementById('book_modal14').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book15.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">মাশরাফি</div>
                <div class="author">দেবব্রত মুখোপাধ্যায়</div>
                <button onclick="document.getElementById('book_modal15').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book16.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">গাভী বিত্তান্ত</div>
                <div class="author">আহমদ ছফা</div>
                <button onclick="document.getElementById('book_modal16').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book17.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">The Illiad</div>
                <div class="author">HOMER</div>
                <button onclick="document.getElementById('book_modal17').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book18.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">আরশিনগর</div>
                <div class="author">সাদাত হোসাইন</div>
                <button onclick="document.getElementById('book_modal18').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div><div class="w3-row">
        <div class="w3-col l6 s12 w3-center">
          <div id="book_info" class="w3-card w3-center">
            <img src="Assests/book19.jpg">
            <div id="book_info2" class="w3-container w3-center">
              <p>
                <div class="title">শংকুসমগ্র</div>
                <div class="author">সত্যজিৎ রায়</div>
                <button onclick="document.getElementById('book_modal19').style.display='block'" class="w3-button w3-blue w3-hover-indigo">Details</button>
              </p>
            </div>
          </div>
        </div>
      </div>
      <!-- Book Info -->
      <div id="book_modal1" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal1').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book1.jpg"></div>
            <p>Title : A Thousand Splendid Suns<br>Author : Khaled Hosseini<br>Rating (GoodReads) : 4.37/5</p>
            <p>Review (GoodReads) : A Thousand Splendid Suns is a breathtaking story set against the volatile events of Afghanistan's last thirty years from the Soviet 
              invasion to the reign of the Taliban to post - Taliban rebuilding that puts the violence, fear, hope, and faith of this country in intimate, human terms. 
              It is a tale of two generations of characters brought jarringly together by the tragic sweep of war, where personal lives the struggle to survive, raise 
              a family, find happiness are inextricable from the history playing out around them.
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/676758169813983/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal2" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal2').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book2.jpg"></div>
            <p>Title : পূর্ব-পশ্চিম<br>Author : সুনীল গঙ্গোপাধ্যায়<br>Rating (GoodReads) : 4.38/5</p>
            <p>Review (GoodReads) : This is a Bengali novel set against the backdrop of the biggest exodus in human history - the 1947 Partition of India. This novel is a 
              record of the tumultuous times in East Pakistan as well as in Indian Bengal. But their problems were vastly different. The story, revolving around two college 
              friends, both Bengali though one Hindu and the other Muslim soon takes into its expanding orbit other characters, families, issues. The two friends drift 
              apart, separated by the political division. Under the deceptively simple surface are hidden deeper and more complex human issues.
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/680156272807506/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal3" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal3').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book3.jpg"></div>
            <p>Title : ডাবল স্ট্যান্ডার্ড<br>Author : ডা.শামসুল আরেফিন<br>Rating : 4.27/5</p>
            <p>Review : বইটিতে ইসলামের বিভিন্ন দিক নিয়ে সংশয়বাদীদের কিছু প্রশ্নের জবাব দেওয়া হয়েছে গল্পের ছলে।পাশাপাশি সে দিকগুলোর উপকারিতা,উপযোগিতা এবং বর্তমান নিয়মের উপরে সেগুলোর 
              গ্রহণযোগ্যতা বিবেচনা করা হয়েছে।যাকাত ভিত্তিক ইসলামিক অর্থব্যবস্থা,সমাজতন্ত্র এবং পুঁজিবাদি অর্থনীতির সাথে তার তুলনা,ইসলামে দাসপ্রথার স্বরূপ এবং সঙ্গত কারণ,জিযিয়া করের ব্যাখা,না দেখে 
              বিশ্বাস এবং প্রাচীন ধর্মবিশ্বাসের উপর বইতে আলোকপাত করা হয়েছে। লেখকের মতে,বর্তমান সমাজবিজ্ঞানীরা পলিথিজম (Polytheism) বা বহু ঈশ্বরে বিশ্বাসকে সর্বপ্রাচীন ধর্মবিশ্বাস মনে করলেও
              প্রকৃতপক্ষে প্রাচীন সমাজগুলোতে একেশ্বরবাদ (Monotheism) এর দেখা মেলে হরহামেশাই।প্রাচীন মিং সভ্যতা সহ আরো বহু সভ্যতাই এর প্রমাণ।এক্ষেত্রে লেখক বিভিন্ন আর্টিকেল ও গবেষণাপত্র থেকে 
              সংগত রেফারেন্স উল্লেখ করেছেন সুন্দর যুক্তিমূলক একটি বই,পড়ার আমন্ত্রণ রইলো।লেখককে ধন্যবাদ,পরম করুণাময় তাকে উত্তম প্রতিদান দিক।
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/704129530410180/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal4" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal4').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book4.jpg"></div>
            <p>Title : কারবালা বাস্তবতা বনাম কল্পকথা<br>Author : ফরিদ আল-বাহরাইনি<br>Rating : 3.87/5</p>
            <p>Review : প্রথমত,বাংলা সাহিত্যের প্রথিতযশা লেখক মীর মশাররফ হোসেনের বিষাদ-সিন্ধু বইটি থেকে আমরা জানতে পারি আল হাসান (রাদি'য়াল্লাহু 'আনহু)-কে তার স্ত্রী বিষপ্রয়োগের মাধ্যমে হত্যা করে।
              কিন্তু উমাইর ইবনু ইসহাক্ব বলেন, "তারা যখন আল হাসান (রাদি'য়াল্লাহু 'আনহু) এর সাথে দেখা করতে যান তখন আল হাসান (রাদি'য়াল্লাহু 'আনহু) বলেন,'বেশ কয়েকবার আমার উপর বিষপ্রয়োগ করা 
              হয়েছে।তবে এবারের মত সেগুলো এত মারাত্মক ছিল না।'পরের দিন আল হুসাইন (রাদি'য়াল্লাহু 'আনহু) তার বিষপ্রয়োগকারী সম্পর্কে জানতে চাইলে আল হাসান (রাদি'য়াল্লাহু 'আনহু) বলেন'আমি যাকে ভাবছি 
              সেই যদি আসল অপরাধী হয় তাহলে জেনে রাখ,আল্লাহর প্রতিশোধ তোমার প্রতিশোধ গ্রহনের চেয়ে কঠিনতর,আর যদি সে নিরাপরাধ হয়ে থাকে তবে আমি কোন নিরাপরাধ হত্যার কারণ হতে রাজি নই।'"এখান 
              থেকে দেখা যায় বিষপ্রয়োগকারী সম্পর্কে আল হাসান (রাদি'য়াল্লাহু 'আনহু) নিশ্চিত ছিলেন না।এটা ঐতিহাসিক ভুল।
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/703335123822954/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal5" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal5').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book5.jpg"></div>
            <p>Title : একলব্য<br>Author : হরিশংকর জলদাস<br>Rating (GoodReads) : 3.91/5</p>
            <p>Review (GoodReads) : বইয়ের নাম দেখে এতক্ষণে বুঝে যাবার কথা বইটি কাকে নিয়ে লেখা হয়েছে ? জি হ্যাঁ, ঠিক ধরেছেন । বইটি মহাভারতের এক অগুরুত্বপূর্ণ চরিত্র (পান্ডব-কৌরব আর তাঁদের মিত্রদের কথা 
              বিবেচনা করলে আরকি ) একলব্য কে নিয়ে লেখা । একলব্য এক নিষাদ রাজপুত্র । যাকে ঘিরেই আবর্তীন হয়েছে বইটি । সেইসাথে প্রয়োজনে সাথে সাথে ঘটনা এগিয়েছে তাঁকে ঘিরে মানুষদের সাথেও । আর সেইসাথে 
              ঘটনার পরিসমাপ্তি দিকে । যা আমার চেয়ে আপনারই ভালো জানেন । একলব্য ছাড়াও বইয়ে উল্লেখিত চরিত্রের মধ্যে পুরোটা সময় যাকে কাহিনী এগিয়েছে সে হচ্ছে দ্রোণ । দ্রোণকে দেখানো হয়েছে একজন লোভী, 
              উচ্চাভিলাষী, দুর্দশাগ্রস্থ আর ভাগ্যবিড়ম্বিত ব্রাক্ষণ হিসেবে । সেইসাথে শুধু অস্ত্রবিদ্যায় পারদর্শী একজন ব্রাক্ষন নয় একজন অসাধারণ শিক্ষক , আর হালের ফ্যাশনে আমরা যাকে বলি গুটিবাজ লোক । যিনি উপরে উঠার 
              সিঁড়ি হিসেবে যাকে যখন প্রয়োজন সেই হিসেবে ব্যাবহার করেছেন। কিন্তু দিন শেষে একজন অসাধারণ যোদ্ধা ।
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/683880829101717/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal6" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal6').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book6.jpg"></div>
            <p>Title : My Not So Perfect Life<br>Author : Sophie Kinsella<br>Rating (GoodReads) : 3.8/5</p>
            <p>Review (GoodReads) : Katie Brenner has the perfect life- a flat in London, a glamorous job, and a super-cool Instagram feed. OK, so the truth is that she rents a tiny room with no 
              space for a wardrobe, has a hideous commute to a lowly admin job, and the life she shares on Instagram isn't really hers. But one day her dreams are bound to come true, aren't they? 
              Until her not-so-perfect life comes crashing down when her mega-successful boss Demeter gives her the sack. All Katie's hopes are shattered. She has to move home to Somerset, where 
              she helps her dad with his new glamping business. Then Demeter and her family book in for a holiday, and Katie sees her chance. But should she get revenge on the woman who ruined her 
              dreams - or try to get her job back? Does Demeter - the woman who has everything - actually have such an idyllic life herself? Maybe they have more in common than it seems. And 
              what's wrong with not-so-perfect, anyway?
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/683265662496567/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal7" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal7').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book7.jpg"></div>
            <p>Title : প্রথম আলো<br>Author : সুনীল গঙ্গোপাধ্যায়<br>Rating : 3.9/5</p>
            <p>Review : Surely, one of the finest works in the history of Bengali literature which illustrates the society of Bengal from perspectives of all class of people in the later part of the 
              nineteenth century. It can be very tough because of the number of pages and number of characters. I myself took around 6 months to read it. I also left the book and read another books 
              in between. But once I got into the book, I was extraordinary. The true facts and frictions are presented in a mesmerizing way. The storyline demonstrates brutal stories of the timeline, 
              politics, poetry and the act of physical and spiritual love. The novel is ornamented with almost all eminent personalities of the timeline like Tagore family, Ishawar Chandra, 
              Bankim Chandra, Mahendra Kumar, Vivekananda, Tilok, Girish Ghosh, Aravindo etc. For example, those midnight sweet talks of Rabi Thakur and Kadombari were fascinating. No wonder those deviceless 
              lively lives were more realistic, aesthetic and innovative. It felt like Sunil was always there in all those places like a ghost. The writer’s imagination is of course beyond imagination.
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/680092906147176/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal8" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal8').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book8.jpg"></div>
            <p>Title : পজলদাসীর গল্প<br>Author : হরিশংকর জলদাস<br>Rating : 4.5/5</p>
            <p>Review : জলদাস হচ্ছে জেলে শব্দের সমার্থক। সে হিসেবে জেলেদের মা, বোন, স্ত্রী কিংবা কন্যাদেরকে বলা হয় জলদাসী। এই বইটাতে জেলেনিদের কেন্দ্র করে দশটি ছোট গল্প রয়েছে। যেখানে বিভিন্ন ভাবে বিস্তৃত হয়েছে জেলেনিদের 
              জীবন সংগ্রামের।চিত্র। জেলেজীবনে নারী-পুরুষের অবদান সমান হলেও অন্যান্য সকল সমাজের মতই এখানেও নারীরা বঞ্চিত অবহেলিত। পাশাপাশি কঠিন দারিদ্র্যের সাথে মোকাবেলা করতে হয় প্রতিনিয়ত। সে মোকাবেলায় জয়ী হতে গিয়ে 
              তাদের বহুগামিতা এমনকি পতিতাবৃত্তি পর্যন্ত অবলম্বন করতে হয় কখনো, কখনো অপমান অবহেলার রুখে দিতে হয় আপনশক্তিতে বলিয়ান হয়ে। এসকল কিছুর প্রতিফলন পড়ে তাদের মানসিকতায়, কালো দাগ লাগে দাম্পত্য জীবনে, 
              সংসারে। যাপিত জীবনের যাতনা আর হাহাকার তাদের গভীর রাতের সঙ্গী। এভাবেই বয়ে চলে জেলেনিদের জীবন। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/678453409644459/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal9" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal9').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book9.jpg"></div>
            <p>Title : তোপসের নোটবুক<br>Author : কৌশিক মজুমদার<br>Rating : 4.3/5</p>
            <p>Review : ঘটনা শুরু হয় পুরোনো বইয়ের দোকান থেকে লেখক খুজে পান সবুজ মলাটে বাধাই করা একটা পুরোনো ডাইরি। এই ডাইরির মালিক হলেন তপেস রঞ্জন মিত্র যিনি আমাদের চিরচেনা তোপসে। তোপসে যখন এই ডাইরি লিখেছে 
              তখন তার বয়স ৬০ বছর। ফেলুদা ও লালমোহন ওরফ জটায়ু ইতমধ্যেই গত হয়েছেন। তোপসেও বিয়ে করেনি। জীবনের শেষ প্রান্তে এসে থ্রি মাস্কেটিয়ার্স এর স্মৃতি রোমন্থন আর ফেলুদা’র কিছু অপ্রকাশিত কেইস প্রকাশ করতে লেখা এই ডাইরি।
              ডাইরি শুরু হয় ফেলুদা’র জন্মের অনেক আগে মিত্র বংশের পূর্ব ইতিহাস দিয়ে।এর পর আসে ফেলুদার জন্ম। এর পর দেশ ভাগের সময় ঢাকা ছেড়ে কোলকাতা যাওয়া এবং সেখানে বেড়ে ওঠা। এই বইয়ের সবচেয়ে মজার ব্যপার হল এখানে 
              সত্যজিৎ রায়ের অন্যান্য চরিত্রদেরকে ফেলুদা সাথে লিনক করা হয়েছে যেমন তারিনি খুড়োকে ফেলুদার সম্পর্কে খুড়ো দেখানো হয়েছে যার গল্প শোনার জন্য শিশু ফেলু উন্মুখ হয়ে থাকতো। সিধু জ্যাঠার লাইব্রেরিতে গিয়ে গিলতো একের পর এক বই।
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/463045544518581/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal10" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal10').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book10.jpg"></div>
            <p>Title : একজন কমলালেবু<br>Author : শাহাদুজ্জামান<br>Rating : 3.7/5</p>
            <p>Review : বলব বাংলা সাহিত্যের এক কীর্তিমান এর কথা, যিনি জীবন কে দেখেছেন বিপন্ন বিস্ময়ে, নাটোরের কোন এক রমনীর মুখে দেখেছেন শ্রাবস্তির কারুকার্য, যিনি মৃত্যুর পর ও শঙ্খচিল কিংবা শালিকের বেশে ফিরে আসতে চেয়েছেন এ সবুজ করুণ 
              ডাঙায়। বাংলা কবিতার সাথে যাদের সামান্যও পরিচয় আছে তারা নিশ্চয় বুঝে গেছেন তিনি হচ্ছেন নির্জনতম কবি বলে খ্যাত জীবনানন্দ দাশ। লেখক শাহাদুজ্জামান এর ব্যপারে নতুন করে কিছু বলতে যাবো না। যারা ইতোমধ্যে ওনার "ক্রাচের কর্ণেল" পড়েছেন, 
              নিশ্চয়ই ওনার জাৎ চিনেছেন। যারা পড়েননি নির্দ্বিধায় পড়ে ফেলতে পারেন "ক্রাচের কর্ণেল" যাই হোক, ফিরে আসি আবার একজন কমলালেবু তে। বইটি আগাগোড়া ই জীবনানন্দের জীবনী। আমি ব্যক্তিগত ভাবে মনে করি সাধারণ কল্প কাহিনীর চেয়ে কোন 
              মনীষীর রোমাঞ্চকর জীবনী পড়া অনেক মজাদার এবং এর প্রভাব টা ও গভীর ভাবে প্রত্যক্ষ করা যায়। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/458878928268576/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal11" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal11').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book11.jpg"></div>
            <p>Title : চক্র<br>Author : শীর্ষেন্দু মুখোপাধ্যায়<br>Rating : 3.4/5</p>
            <p>Review : বেশ অনেক গুলো চরিত্র এই উপন্যাস এ। পারুল, অমল, পান্না, সোহাগ, মোনা, বিজু, ধীরেন, গৌরহরি, রসিক বাঙাল আরও অনেকে... কোন চরিত্রে কোন পক্ষপাতিত্ব করেন কি লেখক। সবার ভূমিকাই সমান। নেই কোন ভিলেইন বা কোন সুপার 
              হিরো। প্রত্যেকের মধ্য দিয়েই এক গভীর জীবনবোধ এর ব্যপ্তি ঘটিয়েছেন লেখক। লেখক বোঝাতে চেয়েছেন, জীবন আসলে কষ্টের কিংবা আনন্দের নয়, জীবন গাঢ় অনুভবের। প্রেম অপ্রেমের মধ্যে বন্দী। লেখক বুঝিয়েছেন প্রাপ্তির চেয়ে তৃপ্তি ই মুখ্য বিষয়। লেখক 
              প্রত্যেক চরিত্রের মধ্য দিয়েই প্রগাঢ় কোন বার্তা দিয়ে গেছেন তার সুনিপুণ লেখনশৈলী তে। সত্যিই! জীবন কত অমেয় চক্র সে গল্প বলেছে আশ্চর্য আন্তরিকতায়।  
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/416491652507304/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal12" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal12').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book12.jpg"></div>
            <p>Title : Think And Grow Rich<br>Author : Napoleon Hill<br>Rating (GoodReads) : 4.2/5</p>
            <p>Review (GoodReads) : "Think and Grow Rich" is a motivational personal development book which discusses how to achieve success and become ‘rich’ not only monetarily but in all aspects of one’s life. In the book, Napoleon Hill 
              tells the story of how Andrew Carnegie offered to teach him the ropes of success, for as long as he promised to commit to the job for the next twenty years, without pay. So then Hill got to meet more than 500 high-profile 
              billionaires and millionaires (e.g. Henry Ford And Thomas Edison) who may have otherwise been impossible to get hold of. At the end of his experience, Hill learnt that those who become the most successful are individuals who 
              simply refuse to conform to their circumstances. They believe in themselves and in an idea that to others may seem impossible to achieve. Their belief system and burning desire to succeed is their fuel. Whereas everyone has 
              desires, not everyone is willing to follow through by taking every action necessary and relentlessly continue to pursue their dreams. This is a great book, especially for those who may have ambition but are often clouded by 
              their own self-doubt and complacency. 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/417069739116162/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal13" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal13').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book13.jpg"></div>
            <p>Title : দেবদাস<br>Author : শরৎচন্দ্র<br>Rating : 4.3/5</p>
            <p>Review : কিছু কিছু বন্ধুত্ব জীবনে এমনই প্রবল হয়ে যায় যে আলাদা করে আর প্রেমের জন্য জায়গা থাকে না।বন্ধুত্বের শেকড়ে গাথাঁ বাল্যকালের প্রেমের গল্প,জীবনশেষে কি পরিণতি হয় তার?সবচেয়ে শুদ্ধ,সবচেয়ে গভীর প্রেম হয় জীবনের প্রথম প্রেমটি।দেবদাস-পার্বতীর ক্ষেত্রেও এর ব্যত্যয় 
              ঘটে নি।বাংলা সাহিত্যের সবচেয়ে জনপ্রিয় কথাসাহিত্যিক শরৎচন্দ্রের "দেবদাস" উপন্যাসে বাল্যকালের এমনই এক করুণ প্রেমের কাহিনী বর্ণিত হয়েছে।যেখানে লেখক তার কলমের জাদুতে ব্যক্ত করছে প্রথম ব্যথা,প্রথম সুখ,প্রথম প্রেম এবং প্রথম কারও জন্য নিজেকে ভুলে যাওয়ার গল্প।ত্রিভুজ 
              প্রেমের এই গল্পে আরেকটি মূখ্য চরিত্র চন্দ্রমুখী,যাকে লেখক সবসময় লেখক রেখেছে ফাকিঁর খাতায়।দেবদাসের সঙ্গ পেয়েও কখনও সে তার জন্য "একমাত্র" হয়ে উঠতে পারে নি,তবুও দেবদাসের কাছে নিজেকে সপেঁ দিয়ে শুদ্ধ হয়েছে সে বারবার।অন্যতম সার্থক এই ট্র্যাজিক উপন্যাসে বিরহের 
              দুটি মাত্রা সুস্পষ্টভাবে বিদ্যমান,দূরে থেকে দেবদাস ও পার্বতী আর কাছে থেকেও বিরহব্যথায় জর্জরিত চন্দ্রমুখীকে।উনবিংশ শতাব্দীর অসম প্রেম এবং সমাজ-ব্যবস্থা ও সংস্কারের বোঝার নিচে চাপা পরে তার করুণ পরিণতি,অতঃপর বিরহের মাত্রা সর্বোচ্চ হওয়ার মধ্যে ইতি ঘটে এই উপন্যাসের। বিরহের 
              জন্য বিখ্যাত এই কালজয়ী উপন্যার প্রতিবার নতুন এক করুণরসে সিক্ত করবে পাঠককে এই আশাই ব্যক্ত করি। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/456763021813500/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal14" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal14').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book14.jpg"></div>
            <p>Title : The Alchemist<br>Author : Paulo Coelho<br>Rating (GoodReads) : 4.3/5</p>
            <p>Review (GoodReads) : Paulo Coelho's enchanting novel has inspired a devoted following around the world. This story, dazzling in its powerful simplicity and soul-stirring wisdom, is about an Andalusian shepherd boy named Santiago who travels 
              from his homeland in Spain to the Egyptian desert in search of a treasure buried near the Pyramids. Along the way he meets a Gypsy woman, a man who calls himself king, and an alchemist, all of whom point Santiago in the direction of his quest. 
              No one knows what the treasure is, or if Santiago will be able to surmount the obstacles in his path. But what starts out as a journey to find worldly goods turns into a discovery of the treasure found within. Lush, evocative, and deeply 
              humane, the story of Santiago is an eternal testament to the transforming power of our dreams and the importance of listening to our hearts. 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/430024977820638/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal15" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal15').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book15.jpg"></div>
            <p>Title : মাশরাফি<br>Author : দেবব্রত মুখোপাধ্যায়<br>Rating : 4.1/5</p>
            <p>Review : রখ্যাত ক্রীড়াসাংবাদিক দেবব্রত মুখোপাধ্যায় সাংবাদিকতার সুবাধে খুব কাছ থেকে দেখার সুযোগ পেয়েছেন মাশরাফিকে। খেলোয়াড় মাশরাফিকে আমরা কম বেশী সবাই চিনলেও মাশরাফির শুরু,থেমে যাওয়া আবার শুরু করা,সন্তান মাশরাফি,বন্ধু মাশরাফি কিংবা প্রেমিক মাশরাফি সবকিছুকেই বিস্তর 
              পরিসরে মলাটবদ্ধ করার মুন্সিয়ানা দেখিয়েছে লেখক। মাশরাফি শুধু একজন ছোট ছোট ইনসুইং আর কাটারে ব্যাটসম্যানকে বোকা বানানো একজন পেসবোলার নয়,মাশরাফি একটা আবেগের নাম,শ্রদ্ধা,ভালোবাসা,অনুপ্রেরণার নাম।"মাশরাফি" বইটির পড়াকালীন পাঠক শুধু মাশরাফির জীবন নয়,পাশাপাশি 
              একবিংশ শতাব্দীর বাংলাদেশ ক্রিকেটের উত্থানেরও সাক্ষী হতে পারবে। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/419693452187124/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal16" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal16').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book16.jpg"></div>
            <p>Title : গাভী বিত্তান্ত<br>Author : আহমদ ছফা<br>Rating : 3.8/5</p>
            <p>Review : লেখক 'আহমদ ছফা' সম্পর্কে তাঁর মূল্যায়ন, বঙ্গীয় মুসলমান সাহিত্যদর্শনে অগ্রগণ্য মীর মোশাররফ হোসেন এবং কাজী নজরুল এর পরেই মহামতি আহমদ ছফার নামটি নিতে হয়। বলা হয়ে থাকে,বাংলাদেশ জন্মের পর শ্রেষ্ঠ বুদ্ধিজীবীদের একজন আহমদ ছফা। যিনি কখনোই অন্যায়ের সাথে আপোস 
              করেননি, ভুল কে ভুল বলতে সামান্যতম কুন্ঠিত হন নি। শাসকের নানা লোভনীয় প্রস্তাব প্রত্যাখ্যান করেছেন শুধুমাত্র নীতি আদর্শের কারণে। ছফার লেখা অন্যান্য মাস্টারপিস গুলোর মধ্যে এটি একটি। পুরোদস্তুর উপন্যাসে তিনি হাস্যরসের মাধ্যমে আমাদের দেশের বিশ্ববিদ্যালয় গুলোর নানা অসংগতি,প্রশাসনের 
              অসাড়তা, রাজনৈতিক প্রভাব, নোংরা রাজনীতির জালে আবদ্ধ ছাত্রসমাজের বিভিন্ন নেতিবাচক দিকগুলো তুলে ধরেছেন। পাশাপাশি বিশ্ববিদ্যালয় ভিসির ব্যাক্তিগত জীবনের ইতিবাচক নেতিবাচক বিভিন্ন বিষয় চমৎকারভাবে শব্দায়ন করেছেন। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/418907012265768/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal17" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal17').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book17.jpg"></div>
            <p>Title : The Illiad<br>Author : HOMER<br>Rating : 4.4/5</p>
            <p>Review : The Greeks believed that "The Illiad" was composed by HOMER. In our ignorance of the man, his life and his work, we are free to believe it or not. The composition date has many conspiracy but the most accurate information is about 700 BC in the place 
              of Ionia, the Greek-inhabited coast and islands off central western Turkey. Which states "The Illiad" is one of the most ancient literature of all time. "The Illiad" by HOMER is basically a 15,693 line epic poem which has been published and translated by many 
              writers and specialists since it is believed to be the first work of Western literature. The Illiad covers the quarrels and fighting near the end of the Trojan War. The story opens nine years into the war, which basically started because Paris, son of King 
              Priam of Troy, blessed by the Greek Goddess of Beauty APHRODITE kidnapped Helen (who was thought to be the most beautiful woman on Earth) from Menelaus, the brother of the Great Greek King Agamemnon of Mycenae.
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/417931919029944/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal18" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal18').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book18.jpg"></div>
            <p>Title : আরশিনগর<br>Author : সাদাত হোসাইন<br>Rating : 3.4/5</p>
            <p>Review : গল্প টা মূলত একটা মেয়ের যার চোখ অসাধারণ, আরশি। কিংবা গল্পটা তার বাবা মজিবর মিয়ার। যাই হোক বিস্তৃত এই উপন্যাস পড়ে একসময় হয়ত মনে হবে এটা কোন প্রেমকাহিনী, কখনো মনে হবে এটা থ্রিলার। কিন্তু এটা মূলত একটা সামাজিক উপন্যাস যার মধ্যে গ্রামীন রাজনীতি খুব নিবিড়ভাবে গোছালো হাতে 
              তুলে ধরেছেন লেখক। এর মধ্যেই লেখক আপনাকে বুঝিয়ে দিবে গভীর কোন দর্শন, গভীর কোন জীবনআখ্যান। পুরো গল্প জুড়ে লেখক আপনাকে আরশির সাথে ঘোরাবে চক্রাকারে এক বৃত্ত থেকে অন্য বৃত্তে। এক গল্প থেকে অন্য গল্পে। আরশি মানে আয়না। লেখক তাই অনায়ায়াসেই বলে যান, জীবন রোজ খানিক টা করে আয়নার 
              সামনে দাড়ানোর মত। আমরা তাতে শুধু শরীর টাই দেখতে পাই, বুকের ভেতর টা নয়। অথচ আমাদের দেখার কথা ছিল চোখ। যে চোখ মানবজীবনের সব টাই দেখে, শরীর ও মন। জগতের সব কিছুর ঋণ চোখের কাছে। আর চোখের ঋন আয়নার কাছে। জীবন ও জগতের সব টা দেখা এই চোখ কেবল আয়নাতেই নিজেকে দেখতে 
              পায়। কি অদ্ভুত! আয়নার কাছে এ ঋণ তাই জগতের ও। তাই তো লেখক এই জীবনের নাম দিয়েছেন আরশিনগর। যে নগরে হেঁটে চলি আমি আর আমার মত ঘোরগ্রস্ত তাবৎ নাগরিক। 
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/417608095728993/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
          </div>
        </div>
      </div>
      <div id="book_modal19" class="w3-modal">
        <div class="w3-modal-content">
          <div id="book_modal_content" class="w3-container">
            <span onclick="document.getElementById('book_modal19').style.display='none'" class="w3-button w3-display-topright">&times;</span>
            <div id="book_modal_img" class="w3-center"><img src="Assests/book19.jpg"></div>
            <p>Title : শংকুসমগ্র<br>Author : সত্যজিৎ রায়<br>Rating : 3.58/5</p>
            <p>Review :  প্রফেসর শংকুর অভিযানের শুরু হয় ব্যোমযাত্রীর ডায়েরি নামের গল্প থেকে। এরপর থেকে ধীরে ধীরে শংকু সিরিজের প্রায় ৪০ টির মত ছোটগল্প বিভিন্ন সময়ে প্রকাশিত হয়েছে। এই সিরিজের গল্পগুলি আসলে প্রোফেসর শঙ্কুর নিজের লেখা ডায়েরি,উত্তম পুরুষে লেখা। অবিশ্বাস্য অভিযান,টানটান উত্তেজনা,সত্যজিতের কল্পবিজ্ঞানের 
              মশলা, অদ্ভুত সব চরিত্র, প্রেক্ষাপট সব মিলিয়ে শংকুর প্রতিটা গল্পই অতুলনীয় ! তীক্ষ্ণ বুদ্ধি, অসামান্যপ্রতিভা, দেশপ্রেম, উপস্থিত বুদ্ধি, হিউমার, বিনয় এবং সরলতা সব মিলিয়ে বাঙালী বিজ্ঞানী শংকু সাহিত্যের সেরা একটি চরিত্র। শংকুর আবিষ্কারগুলো তার অভিযানের মতই চমকপ্রদ। তার সর্বমোট আবিষ্কারের সংখ্যা ৭২টি!! এদের মাঝে 
              সকল বস্তু অদৃশ্যকারী অ্যানাইহিলিন পিস্তল, ক্ষুধানাশক বড়ি বটিকা ইণ্ডিকা, সর্বরোগের উপশমকারী মিরাকিউরল, অনুবাদক যন্ত্র লিঙ্গুয়াগ্রাফ, রোবু ও বিধুশেখর নামক দুটি রোবট, শ্যাঙ্কোপ্লেন বিশেষভাবে উল্লেখযোগ্য !
            </p>
            <p><a href="https://www.facebook.com/groups/316611025828701/permalink/417556162400853/">Review from HLL</a><br><a href="login.html">Login to issue this book</a></p>
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