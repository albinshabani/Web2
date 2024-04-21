<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
    integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>Bootstrap Theme</title>
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
          <li class="nav-item active">
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
          <h1>Our Services</h1>
          <p>
            "Service is not just what we do, it's who we are, dedicated to making every interaction remarkable."
          </p>
        </div>
      </div>
    </div>
  </header>

  <!-- SERVICES SECTION -->
  <section id="services" class="py-5">
    <div class="container">
      <div class="row">
        <!-- Sorting Dropdown -->
        <div class="col-md-12 mb-3 text-center">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="sortingMenuButton" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Sort By
            </button>
            <div class="dropdown-menu" aria-labelledby="sortingMenuButton">
              <a class="dropdown-item" href="services.php?sort=name">Service Name</a>
              <a class="dropdown-item" href="services.php?sort=price-asc">Price: Low to High</a>
              <a class="dropdown-item" href="services.php?sort=price-desc">Price: High to Low</a>
            </div>
          </div>
        </div>
        <!-- End Sorting Dropdown -->

        <?php
          // Service data
          $services = array(
            "Business" => array(
              "price" => 59.99,
              "features" => array(
                "Comprehensive Curriculum",
                "Expert Instruction",
                "Flexible Learning",
                "Networking Opportunities",
                "Career Support"
              )
            ),
            "Marketing" => array(
              "price" => 69.99,
              "features" => array(
                "Cutting-Edge Content",
                "Hands-On Projects",
                "Personalized Feedback",
                "Certification Programs",
                "Continuous Updates"
              )
            ),
            "Web" => array(
              "price" => 79.99,
              "features" => array(
                "Comprehensive Web Development",
                "Responsive Design",
                "Interactive Learning",
                "Portfolio Building",
                "Community Support"
              )
            )
          );

          // Sorting
          $sortType = isset($_GET['sort']) ? $_GET['sort'] : 'name'; // Default sorting by name
          switch ($sortType) {
            case 'price-asc':
              asort($services); // Sort by service price, maintain index association
              break;
            case 'price-desc':
              arsort($services); // Sort by service price in reverse order, maintain index association
              break;
            case 'name':
            default:
              ksort($services); // Sort by service name, maintain index association
              break;
          }

          // Display services
          foreach ($services as $service_name => $service_details) {
            echo '<div class="col-md-4">
                    <div class="card text-center">
                      <div class="card-header bg-dark text-white">
                        <h3>'.$service_name.'</h3>
                      </div>
                      <div class="card-body">
                        <h4 class="card-title">$'.$service_details["price"].'/Month</h4>
                        <p class="card-text"></p>
                        <ul class="list-group">';
            foreach ($service_details["features"] as $feature) {
              echo '<li class="list-group-item">
                              <i class="fas fa-check"></i> '.$feature.'
                            </li>';
            }
            echo '</ul>
                        <a href="#" class="btn btn-danger btn-block mt-2">Get It</a>
                      </div>
                      <div class="card-footer text-muted">
                        1 Year Plan
                      </div>
                    </div>
                  </div>';
          }
        ?>

      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq" class="p-5 bg-dark text-white">
    <div class="container">
      <h1 class="text-center">Frequently Asked Questions</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseOne" data-toggle="collapse" data-parent="accordion">
                    Can I access the courses on any device?
                  </a>
                </h5>
              </div>

              <div id="collapseOne" class="collapse">
                <div class="card-body">
                  Yes, our courses are accessible on any device with an internet connection, including desktops,
                  laptops, tablets, and smartphones. You can learn anytime, anywhere at your convenience.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseTwo" data-toggle="collapse" data-parent="accordion">
                    Are there any prerequisites for enrolling in the courses?
                  </a>
                </h5>
              </div>

              <div id="collapseTwo" class="collapse">
                <div class="card-body">
                  No specific prerequisites are required for most of our courses. However, some advanced courses may
                  recommend
                  prior knowledge or experience in related fields. Each course description includes information about
                  any recommended prerequisites.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseThree" data-toggle="collapse" data-parent="accordion">
                    How long do I have access to the course materials?
                  </a>
                </h5>
              </div>

              <div id="collapseThree" class="collapse">
                <div class="card-body">
                  Once you enroll in a course, you have lifetime access to the course materials, including video
                  lectures, downloadable resources, and assignments. You can review the content at your own pace and
                  revisit it whenever you need to.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseFour" data-toggle="collapse" data-parent="accordion">
                    Can I interact with instructors or ask questions during the course?
                  </a>
                </h5>
              </div>

              <div id="collapseFour" class="collapse">
                <div class="card-body">
                  Absolutely! Our instructors are available to provide support and answer questions throughout the
                  duration of the course. You can interact with instructors through discussion forums, live Q&A
                  sessions, and email.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseFive" data-toggle="collapse" data-parent="accordion">
                    Will I receive a certificate upon completion of the course?
                  </a>
                </h5>
              </div>

              <div id="collapseFive" class="collapse">
                <div class="card-body">
                  Yes, upon successfully completing a course, you will receive a digital certificate of completion.
                  Our certificates are industry-recognized and can be shared on your resume, LinkedIn profile, or
                  portfolio to showcase your skills and achievements
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <h5 class="mb-0">
                  <a href="#collapseSix" data-toggle="collapse" data-parent="accordion">
                    Is financial assistance available for the courses?
                  </a>
                </h5>
              </div>

              <div id="collapseSix" class="collapse">
                <div class="card-body">
                  We offer various payment options, including installment plans and scholarships, to make our
                  courses accessible to learners from diverse backgrounds. Additionally, many of our courses are
                  eligible for employer reimbursement or government funding programs. Please contact our support
                  team for more information on financial assistance options.
                </div>
              </div>
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


  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"
    integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
  </script>
</body>

</html>
