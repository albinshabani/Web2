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
                <li class="nav-item">
                    <a href="blog.php" class="nav-link">Blog</a>
                </li>
                <li class="nav-item active">
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
            <h1>Contact Us</h1>
            <p>"Get in touch – we're here to help, anytime."</p>
          </div>
        </div>
      </div>
    </header>

    <section id="contact" class="py-3">
  <div class="container">
    <div class="row">
      <!-- Contact Details Column -->
      <div class="col-md-4">
        <div class="card p-4">
          <div class="card-body">
            <h4>Get In Touch</h4>
            <p>Questions or concerns? Reach out to us anytime. We're here to assist you!</p>
            <h4>Address</h4>
            <p>Rruga Adem Jashari 23, Prishtina, Kosovo</p>
            <h4>Email</h4>
            <p>bizwebacademy@gmail.com</p>
            <h4>Phone</h4>
            <p>(+383) 49-555-777</p>
          </div>
        </div>
      </div>

      <!-- Contact Form Column -->
      <div class="col-md-8">
    <form action="save_contact.php" method="post">
        <div class="card p-4">
            <div class="card-body">
                <h3 class="text-center">Please fill out this form to contact us</h3>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <input type="submit" value="Send E-Mail" class="btn btn-outline-danger btn-block">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


    <!-- STAFF -->
    <section id="staff" class="py-5 text-center bg-dark text-white">
      <div class="container">
        <h1>Our Staff</h1>
        <hr>
        <div class="row">
          <div class="col-md-3">
            <img src="img/person1.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Elira Gashi</h4>
            <small>Marketing Manager</small>
          </div>
          <div class="col-md-3">
            <img src="img/person2.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Liriana Krasniqi</h4>
            <small>Business Manager</small>
          </div>
          <div class="col-md-3">
            <img src="img/person3.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Arben Berisha</h4>
            <small>CEO</small>
          </div>
          <div class="col-md-3">
            <img src="img/person4.jpg" alt="" class="img-fluid rounded-circle mb-2">
            <h4>Lirim Mustafa</h4>
            <small>Web Developer</small>
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

    <script>
      // Get the current year for the copyright
      $('#year').text(new Date().getFullYear());

    </script>
  </body>

  </html>
