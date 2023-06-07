<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>RAIL-EX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/booking.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="index.html">RAILEX</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Viewing</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Trains</a></li>
          <li><a class="nav-link scrollto" href="#team">Schedule</a></li>
          <li><a href="blog.html">Route</a></li>
          <li class="dropdown"><a href="#"><span>ACCOUNT</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Passenger</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Sign In</a></li>
                  <li><a href="#">Create Account</a></li>
                </ul>
              </li>
              <li><a href="#">Admin</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="getstarted scrollto" href="booking.php">BOOK NOW</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
              <!-------------------------------------BOOKING FORM-------------------------------------------->

    <form>
      <h1 class="form-title">Booking Form</h1>
      <label for="origin">Origin:</label>
      <select id="originsel" name="origin">
          <option value="New York">CAGAYAN DE ORO CITY</option>
          <option value="London">DAVAO CITY</option>
         
          <!-- Add more options as needed -->
      </select>
      <br><br>
      <label for="destination">Destination:</label>
      <select id="destinationsel" name="destination">
          <option value="Paris">DAVAO CITY</option>
          <option value="Sydney">MALAYBALAY</option>
          <option value="Dubai">QUEZON</option>
          <!-- Add more options as needed -->
      </select>
      <br><br>
      <label for="date">Departure Date:</label>
      <input type="date" id="date" name="date">
      <br><br>
      <div class="radio-group">
          <label class="traintype">Train Type:</label><br>
          <label for="ac">AC</label>
          <input type="radio" id="ac" name="trainType" value="AC">
          <label for="general">General</label>
          <input type="radio" id="general" name="trainType" value="General">
      </div>
      <br>
      <label class="fare">Fare:</label>
      <input type="number" id="fare" name="fare" value="PHP 0.00">
      <br><br>
      <button class="btn btn-outline-success" type="button" onclick="window.location.href='insert.php';">Book Now</button>
  </form>

<!-------------------------------------------------------------------------------------------------------------->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
<!-------------------------------------BOOKING FORM--------------------------------------------> 

<form>
  <h1 class="form-title">Booking Form</h1>
  <label for="origin">Origin:</label>
  <select id="originsel" name="origin">
      <option value="New York">CAGAYAN DE ORO CITY</option>
      <option value="London">DAVAO CITY</option>
     
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="destination">Destination:</label>
  <select id="destinationsel" name="destination">
      <option value="Paris">DAVAO CITY</option>
      <option value="Sydney">MALAYBALAY</option>
      <option value="Dubai">QUEZON</option>
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="date">Departure Date:</label>
  <input type="date" id="date" name="date">
  <br><br>
  <div class="radio-group">
      <label class="traintype">Train Type:</label><br>
      <label for="ac">AC</label>
      <input type="radio" id="ac" name="trainType" value="AC">
      <label for="general">General</label>
      <input type="radio" id="general" name="trainType" value="General">
  </div>
  <br>
  <label class="fare">Fare:</label>
  <input type="number" id="fare" name="fare" value="PHP 0.00">
  <br><br>
  <button class="btn btn-outline-success" type="button" onclick="window.location.href='insert.php';">Book Now</button>
</form>


<!-------------------------------------------------------------------------------------------------------------->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
<!-------------------------------------BOOKING FORM-------------------------------------------->


<form>
  <h1 class="form-title">Booking Form</h1>
  <label for="origin">Origin:</label>
  <select id="originsel" name="origin">
      <option value="New York">CAGAYAN DE ORO CITY</option>
      <option value="London">DAVAO CITY</option>
     
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="destination">Destination:</label>
  <select id="destinationsel" name="destination">
      <option value="Paris">DAVAO CITY</option>
      <option value="Sydney">MALAYBALAY</option>
      <option value="Dubai">QUEZON</option>
      <!-- Add more options as needed -->
  </select>
  <br><br>
  <label for="date">Departure Date:</label>
  <input type="date" id="date" name="date">
  <br><br>
  <div class="radio-group">
      <label class="traintype">Train Type:</label><br>
      <label for="ac">AC</label>
      <input type="radio" id="ac" name="trainType" value="AC">
      <label for="general">General</label>
      <input type="radio" id="general" name="trainType" value="General">
  </div>
  <br>
  <label class="fare">Fare:</label>
  <input type="number" id="fare" name="fare" value="PHP 0.00">
  <br><br>
  <button class="btn btn-outline-success" type="button" onclick="window.location.href='insert.php';">Book Now</button>
</form>


<!-------------------------------------------------------------------------------------------------------------->
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="image col-xl-5 d-flex align-items-stretch juhttp://localhost/groovin/#heroCarouselstify-content-center justify-content-lg-start"></div>
          <div class="col-xl-7 ps-0 ps-lg-5 pe-lg-1 d-flex align-items-stretch">
            <div class="content d-flex flex-column justify-content-center">
              <h3>Railex: A Railway Reservation System</h3>
              <p>
              The aim of the system is to facilitate the passengers to enquire about the trains available on
            the basis of source and destination, booking and cancellation of tickets, enquire about the status of the
            booked ticket, etc. The aim of case study is to design and develop a database maintaining the records of
            different trains, train status, and passengers. The record of train includes its number, name, source, 
            destination, and days on which it is available, whereas record of train status includes dates for which
            tickets can be booked, total number of seats available, and number of seats already booked.
              </p>
            </div><!-- End .content-->
          </div>
        </div>

      </div>s
    </section><!-- End About Section -->

     <!-- ======= Clients Section ======= -->
     <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

         

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>No of Bookings</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Total passengers each day</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Support Hours</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="10 " data-purecounter-duration="1" class="purecounter"></span>
              <p>No of Trains</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

         

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Viewing Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>VIEWING</h2>
          <p>The table below shows the origin and destination of the train with their designated fare, the availability of the train in each day is also monitored and updated daily </p>
        </div>

        <?php
    $conn = mysqli_connect("localhost", "root", "", "railwayressystem");

    if ($conn === false) {
        die("ERROR: Could not connect" . mysqli_connect_error());
    }

    $query = "SELECT * FROM trainlist";
    $result = mysqli_query($conn, $query);

    echo '<table class=" opacity-75 table table-hover" opacity-50 border=5 style="color: black;"  >
        <tr>
           
            <td> <font face="Arial">TRAIN NO</font></td>
            <td> <font face="Arial">TRAIN NAME</font></td>
            <td> <font face="Arial">ORIGIN</font></td>
            <td> <font face="Arial">DESTINATION</font></td>
            <td> <font face="Arial">AC_FARE</font></td>
            <td> <font face="Arial">GEN_FARE</font></td>
            <td> <font face="Arial">MONDAY</font></td>
            <td> <font face="Arial">TUESDAY</font></td>
            <td> <font face="Arial">WEDNESDAY</font></td>
            <td> <font face="Arial">THURSDAY</font></td>
            <td> <font face="Arial">FRIDAY</font></td>
            <td> <font face="Arial">SATURDAY</font></td>
            <td> <font face="Arial">SUNDAY</font></td>
        </tr> ';

    while ($row = $result->fetch_assoc()) {
        $field1name = $row["TrainNumber"];
        $field2name = $row["TrainName"];
        $field3name = $row["Source"];
        $field4name = $row["Destination"];
        $field5name = $row["FareAC"];
        $field6name = $row["FareGeneral"];
        $field7name = $row["Monday"];
        $field8name = $row["Tuesday"];
        $field9name = $row["Wednesdy"];
        $field10name = $row["Thursday"];
        $field11name = $row["Friday"];
        $field12name = $row["Saturday"];
        $field13name = $row["Sunday"];

        echo '<tr>
            <td>'.  $field1name. '</td>
            <td>'.  $field2name. '</td>
            <td>'.  $field3name. '</td>
            <td>'.  $field4name. '</td>
            <td>'.  $field5name. '</td>
            <td>'.  $field6name. '</td>
            <td>'.  $field7name. '</td>
            <td>'.  $field8name. '</td>
            <td>'.  $field9name. '</td>
            <td>'.  $field10name. '</td>
            <td>'.  $field11name. '</td>
            <td>'.  $field12name. '</td>
            <td>'.  $field13name. '</td>
        </tr>';
    }

    echo '</table>';

    mysqli_close($conn);
?>


      </div>
    </section><!-- End Viewing Section -->

    <!-- ======= Trains Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title">
          <h2>Trains</h2>
          <p>Rail-Ex offers affordable ticket for your travel experience. Comfortable airconditioned seats or cheapest general seats. HAPPY TRAVEL </p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Air-Conditioned</li>
              <li data-filter=".filter-card">General</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Trains Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>The team behind this project</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-xl-3 col-lg-4 col-md-6">
            <div class="member">
              <img src="assets/img/team/karen.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Karen Cadalo</h4>
                  <span>Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.1s">
            <div class="member">
              <img src="assets/img/team/leokanette.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Leokanette Cailing</h4>
                  <span>Developer</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-wow-delay="0.2s">
            <div class="member">
              <img src="assets/img/team/gerico.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gerico Go</h4>
                  <span>Unknown</span>
                  <div class="social">
                    <a href=""><i class="bi bi-twitter"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="bi bi-geo-alt"></i>
              <h3>Address</h3>
              <address>C.M Recto Avenue, Lapasan, CDO, Philippines</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="bi bi-phone"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+155895548855">+1 2345 6789 10</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="bi bi-envelope"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@example.com">it2r1@ustp.edu.com</a></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Railex</h3>
              <p>
                C.M Recto Avenue, Lapasan <br>
                Cagayan De Oro City, Philippines<br><br>
                <strong>Phone:</strong> +1 2345 6789 10<br>
                <strong>Email:</strong> it2r1@ustp.edu.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Subscribe for more updates and news with Railex the fastest railway express</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>RAILEX</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a >Leokanette and Karen</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>