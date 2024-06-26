<!DOCTYPE html>
<?php
// Start the session
session_start();
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>BizWeb Academy</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a href="index.php" class="navbar-brand">BizWeb Academy</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about.php" class="nav-link">About Us</a>
                </li>
                <li class="nav-item">
                    <a href="services.php" class="nav-link">Services</a>
                </li>
                <li class="nav-item active">
                    <a href="blog.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact</a>
                </li>
            </ul>
            <?php
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) { 
                // If logged in, display user-specific links
                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Welcome, <?php echo $_SESSION['first_name']; ?></a>
                    </li>
                    <li class="nav-item">
                        <a href="logout.php" class="nav-link">Logout</a>
                    </li>
                </ul>
                <?php
            } else {
                // If not logged in, display login and sign up links
                ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Login</a>
                    </li>
                    <li class="nav-item">
                        <a href="sign_up.php" class="nav-link">Sign Up</a>
                    </li>
                </ul>
                <?php
            }
            ?>
        </div>
    </div>
</nav>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>Read Our Blog</h1>
          <p>"Discover the world through stories and insights"</p>
        </div>
      </div>
    </div>
  </header>

  <!-- BLOG SECTION -->
  <section id="blog" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card-columns">
            <!-- Blog Post One -->
            <a href="BlogPosts/Post1.php" class="card-link">
              <div class="card">
                <img src="./img/BlogPostsImg/Post1Img.jpeg" alt="" class="img-fluid card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Unlocking Opportunities: The Benefits of Learning a New Skill Online</h4>
                  <small class="text-muted">Written by Eron on 04/20</small>
                  <hr>
                  <p class="card-text">In today's fast-paced world, the pursuit of knowledge and skills has evolved beyond the confines of traditional classrooms. The digital age has ushered in a new era of learning, offering countless opportunities to acquire expertise and enhance one's capabilities from the comfort of one's own home.
                  </p>
                </div>
              </div>
            </a>

           <!-- Blog Post Two -->
            <a href="BlogPosts/Post2.php" class="card-link">
              <div class="card">
                <img src="./img/BlogPostsImg/Post2Img.jpg" alt="" class="img-fluid card-img-top">
                <div class="card-body">
                  <h4 class="card-title">10 Essential Tips for Building a Successful Online Business</h4>
                  <small class="text-muted">Written by Albin on 04/21</small>
                  <hr>
                  <p class="card-text">Briefly introduce the importance of online businesses in today's digital landscape. Mention the increasing number of entrepreneurs turning to the internet to start and grow their businesses.</p>

                  </p>
                </div>
              </div>
            </a>

            <!-- Blog Post Three -->
            <a href="BlogPosts/Post3.php" class="card-link">
              <div class="card">
                <img src="./img/BlogPostsImg/Post3Img.jpg" alt="" class="img-fluid card-img-top">
                <div class="card-body">
                  <h4 class="card-title">Mastering Social Media: Tips for Growing Your Online Presence</h4>
                  <small class="text-muted">Written by Amir on 04/21</small>
                  <hr>
                  <p class="card-text">Discuss the importance of building a strong social media presence for businesses, including increased brand visibility, engagement, and customer loyalty.
                  </p>
                </div>
              </div>
            </a>

          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright &copy;
            <span id="year"></span> BizWeb Academy</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScript links and script for copyright year -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>
