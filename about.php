<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
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
          <li class="nav-item active">
            <a href="about.php" class="nav-link">About Us</a>
          </li>
          <li class="nav-item">
            <a href="services.php" class="nav-link">Services</a>
          </li>
          <li class="nav-item">
            <a href="blog.php" class="nav-link">Blog</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- PAGE HEADER -->
  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center">
          <h1>About Us</h1>
          <p>"Inspiring growth, one click at a time."</p>
        </div>
      </div>
    </div>
  </header>

  <!-- ABOUT SECTION -->
  <section id="about" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>What We Do</h1>
          <p>In today's dynamic digital landscape, success hinges on the ability to navigate the intricacies of business, marketing, and web development with finesse. At BizWeb, we understand the significance of staying ahead in these domains. That's why we've curated a range of comprehensive courses designed to equip individuals with the knowledge and skills needed to thrive in the competitive market.</p>
          <p>Our mission is simple: to empower aspiring entrepreneurs, marketers, and web developers to realize their full potential and achieve their goals. Whether you're a seasoned professional looking to enhance your skill set or a newcomer eager to dive into the world of business and technology, our courses offer something for everyone.</p>
        </div>
        <div class="col-md-6">
          <img src="https://source.unsplash.com/random/700x700/?technology" alt="" class="img-fluid rounded-circle d-none d-md-block about-img">
        </div>
      </div>
    </div>
  </section>

  <!-- ICON BOXES -->
  <section id="icon-boxes" class="p-5">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-4">
          <div class="card bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-building fa-3x"></i>
              <h3>Business</h3>
              Foundations of Business Management,Marketing Strategy and Planning,Strategic Business Development and Business Ethics and Corporate Social Responsibility
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark text-white text-center">
            <div class="card-body">
              <i class="fas fa-bullhorn fa-3x"></i>
              <h3>Marketing</h3>
              Introduction to Marketing,Social Media Marketing,Content Marketing Strategy,Brand Management,Market Research and Consumer Behavior and Integrated Marketing Communications
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-danger text-white text-center">
            <div class="card-body">
              <i class="fas fa-comments fa-3x"></i>
              <h3>Web</h3>
              Web Development Fundamentals,Frontend Web Development,Backend Web Development,Web Design Principles and Web Security and Performance Optimization
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS -->
  <section id="testimonials" class="p-4 bg-dark text-white">
    <div class="container">
      <h2 class="text-center">Testimonials</h2>
      <div class="row text-center">
        <div class="col">
          <div class="slider">
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                "Outstanding marketing insights! Thanks to BizWeb Academy, I've seen a significant boost in my business's online presence."
                </p>
                <footer class="blockquote-footer">John Doe From
                  <cite title="Company 1"> Washington, D.C. </cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                "Highly recommend BizWeb Academy's business courses. Practical, insightful, and worth every penny!"
                </p>
                <footer class="blockquote-footer">Giovanni Rossi From
                  <cite title="Company 2">Rome</cite>
                </footer>
              </blockquote>
            </div>
            <div>
              <blockquote class="blockquote">
                <p class="mb-0">
                "Impressed by the web development skills I gained with BizWeb Academy. Clear instruction, great results!"
                </p>
                <footer class="blockquote-footer">Camille Dubois From
                  <cite title="Company 3">Marseille</cite>
                </footer>
              </blockquote>
            </div>
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


  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    $('.slider').slick({
      infinite: true,
      slideToShow: 1,
      slideToScroll: 1
    });
  </script>
</body>

</html>

<?php

class Page {
  // Properties
  public $pageName;
  public $pageTitle;
  
  // Constructor
  public function __construct($name, $title) {
    $this->pageName = $name;
    $this->pageTitle = $title;
    echo "<script>console.log('Page Created: $this->pageName');</script>";
  }

  // Destructor
  public function __destruct() {
    echo "<script>console.log('Page Destroyed: $this->pageName');</script>";
  }
}

$page = new Page("about", "About Us");
?>

