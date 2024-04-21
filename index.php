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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/style.css">
  <title>BizWeb Academy</title>
</head>
<?php include 'Session_Cookies.php'; ?>
<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
      <a href="index.php" class="navbar-brand">BizWeb Academy</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
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

  <!-- SHOWCASE SLIDER -->
  <section id="showcase">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-image-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Business Academy</h1>
              <p class="lead">Learn essential business skills and strategies from industry experts. Join us and unlock your potential today!</p>
              <a href="#" class="btn btn-danger btn-lg">Sign Up Now</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block mb-5">
              <h1 class="display-3">Marketing Academy</h1>
              <p class="lead">Discover the latest marketing trends and techniques. Elevate your marketing game with us!</p>
              <a href="#" class="btn btn-primary btn-lg">Learn More</a>
            </div>
          </div>
        </div>

        <div class="carousel-item carousel-image-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3">Web Development Academy</h1>
              <p class="lead">Master the art of web development. Build dynamic websites and applications with our comprehensive courses.</p>
              <a href="#" class="btn btn-success btn-lg">Learn More</a>
            </div>
          </div>
        </div>
      </div>

      <a href="#myCarousel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#myCarousel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!--HOME ICON SECTION  -->
  <section id="home-icons" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-chart-line fa-3x mb-2"></i>
          <h3>Business Strategies</h3>
          <p>Learn effective business strategies to drive growth and success in your ventures.</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-database fa-3x mb-2"></i>
          <h3>Data Management</h3>
          <p>Master the art of data management and leverage it for informed decision-making.</p>
        </div>
        <div class="col-md-4 mb-4 text-center">
          <i class="fas fa-store-alt fa-3x mb-2"></i>
          <h3>E-commerce Solutions</h3>
          <p>Explore e-commerce solutions and learn how to effectively monetize your online presence.</p>
        </div>
      </div>
    </div>
  </section>


  <!-- HOME HEADING SECTION -->
  <section id="home-heading" class="p-5">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container pt-5">
            <h1>Welcome to our Academy!</h1>
            <p class="d-none d-md-block">Ready to embark on a journey of learning and discovery? Join us and unlock your potential!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- INFO SECTION -->
  <section id="info" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>About Us</h3>
          <p>Our academy offers comprehensive courses in business, marketing, and web development, designed to equip you with the skills and knowledge needed for success in today's competitive landscape.</p>
          <a href="about.php" class="btn btn-outline-danger btn-lg">Learn More</a>
        </div>
        <div class="col-md-6">
          <img src="img/laptop.png" alt="" class="img-fluid">
        </div>
      </div>
    </div>
  </section>


  <!-- VIDEO PLAY -->
  <section id="video-play">
    <div class="dark-overlay">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a href="#" class="video" data-video="https://www.youtube.com/embed/HnwsG9a5riA" data-toggle="modal" data-target="#videoModal">
              <i class="fas fa-play fa-3x"></i>
            </a>
            <h1>See What We Do</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PHOTO GALLERY -->
  <section id="gallery" class="py-5">
    <div class="container">
      <h1 class="text-center">Photo Gallery</h1>
      <p class="text-center">Check out our photos</p>
      <div class="row mb-4">
        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/560x560" data-toggle="lightbox" data-gallery="img-gallery" data-height="560"
            data-width="560">
            <img src="https://source.unsplash.com/random/560x560" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/561x561" data-toggle="lightbox" data-gallery="img-gallery" data-height="561"
            data-width="561">
            <img src="https://source.unsplash.com/random/561x561" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/562x562" data-toggle="lightbox" data-gallery="img-gallery" data-height="562"
            data-width="562">
            <img src="https://source.unsplash.com/random/562x562" alt="" class="img-fluid">
          </a>
        </div>
      </div>

      <div class="row mb-4">
        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/563x563" data-toggle="lightbox" data-gallery="img-gallery" data-height="563"
            data-width="563">
            <img src="https://source.unsplash.com/random/563x563" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/564x564" data-toggle="lightbox" data-gallery="img-gallery" data-height="564"
            data-width="564">
            <img src="https://source.unsplash.com/random/564x564" alt="" class="img-fluid">
          </a>
        </div>

        <div class="col-md-4">
          <a href="https://source.unsplash.com/random/565x565" data-toggle="lightbox" data-gallery="img-gallery" data-height="565"
            data-width="565">
            <img src="https://source.unsplash.com/random/565x565" alt="" class="img-fluid">
          </a>
        </div>
      </div>
    </div>
  </section>

 <!-- NEWSLETTER -->
  <section id="newsletter" class="text-center p-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Subscribe to Our Newsletter</h1>
          <p>Stay updated with the latest news, events, and course offerings. Sign up now!</p>
          <form class="form-inline justify-content-center">
            <input id="nameInput" type="text" class="form-control mb-2 mr-2" placeholder="Enter Your Name">
            <input id="emailInput" type="email" class="form-control mb-2 mr-2" placeholder="Enter Your Email">
            <button type="submit" onclick="subscribe()" class="btn btn-primary mb-2">Subscribe</button>
          </form>
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


  <!-- VIDEO MODAL -->
  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
          <iframe id="videoFrame" src="" frameborder="0" height="350" width="100%" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

  <script>
    class Newsletter {
      constructor(name, email) {
        this._name = name;
        this._email = email;
      }

      get name() {
        return this._name;
      }

      set name(value) {
        this._name = value;
      }

      get email() {
        return this._email;
      }

      set email(value) {
        this._email = value;
      }

      subscribe() {
        alert(`Subscribed: ${this.name}, ${this.email}`);
        // Here you can add the code to actually submit the form
      }
    }

    function subscribe() {
      let name = document.getElementById("nameInput").value;
      let email = document.getElementById("emailInput").value;

      let subscriber = new Newsletter(name, email);
      subscriber.subscribe();
    }

    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    // Configure Slider
    $('.carousel').carousel({
      interval: 6000,
      pause: 'hover'
    });

    // Lightbox Init
    $(document).on('click', '[data-toggle="lightbox"]', function (event) {
      event.preventDefault();
      $(this).ekkoLightbox();
    });

    // Video Play
    $(function () {
      // Auto play modal video
      $(".video").click(function () {
        var theModal = $(this).data("target"),
          videoSRC = $(this).attr("data-video"),
          videoSRCauto = videoSRC + "?modestbranding=1&rel=0&controls=0&showinfo=0&html5=1&autoplay=1";
        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.close').click(function () {
          $(theModal + ' iframe').attr('src', videoSRC);
        });
      });
    });

  </script>
</body>

</html>
