<?php 
$page_title = "SMS Service | United Rural Credit Co-Op Society Ltd Patansaongi";
$page_description = "Learn about United Rural Credit Co-Op Society Ltd Patansaongi Nagpur and our cooperative banking services.";
include 'header.php'; 
?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h4 class="mb-0">Service Details</h4>
            <h1>SMS Banking</h1>
          </div>
        </div>
      </div>
    </div>

    <nav class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="index.html">Home</a></li>
          <li class="current">Service Details</li>
        </ol>
      </div>
    </nav>
  </div>
  <!-- End Page Title -->


  <!-- Service Details Section -->
  <section id="service-details" class="service-details section">

    <div class="container">

      <div class="row gy-5">

        <!-- Sidebar -->
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

          <!-- Services List -->
          <div class="service-box service-menu">

            <div class="service-menu-header" onclick="toggleServices()">
              <h4>Services List</h4>
              <i class="bi bi-chevron-down service-toggle-icon"></i>
            </div>

            <div class="services-list" id="servicesList">

              <a href="service-deposite.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>Deposite Scheme</span>
              </a>

              <a href="service-loan.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>Loan Scheme</span>
              </a>

              <a href="service-pigmy.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>Pigmy Scheme</span>
              </a>

              <a href="service-sms.php" class="active">
                <i class="bi bi-arrow-right-circle"></i>
                <span>SMS Banking</span>
              </a>

              <a href="service-neft.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>NEFT/RTGS</span>
              </a>

              <a href="service-emi.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>EMI Calculator</span>
              </a>

            </div>

          </div>
          <!-- End Services List -->


          <!-- Help Box (Desktop) -->
          <div class="desktop-help">
            <div class="help-box d-flex flex-column justify-content-center align-items-center">

              <i class="bi bi-headset help-icon"></i>
              <h4>Have a Question?</h4>

              <p class="d-flex align-items-center mt-2 mb-0">
                <i class="bi bi-telephone me-2"></i>
                <span>+91 84467 50779</span>
              </p>

              <p class="d-flex align-items-center mt-1 mb-0">
                <i class="bi bi-envelope me-2"></i>
                <a href="mailto:contact@example.com">info@unitedrural.in</a>
              </p>

            </div>
          </div>

        </div>
        <!-- End Sidebar -->


        <!-- Main Content -->
        <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">

          <img src="assets/img/smsbanking.jpg"
            alt="SMS Banking Service"
            class="img-fluid services-img">

          <h3>United Rural - SMS Banking</h3>

          <p>
            United Rural Credit Co-Op. Society Ltd. offers convenient
            <b>SMS Banking</b> services to help members stay updated on their
            account activities without needing internet access. With just a
            simple text message, you can check your balance, view mini
            statements, and receive instant alerts for all transactions.
          </p>


          <p><b>Key Features:</b></p>

          <ul>
            <li><i class="bi bi-check2-square"></i> Receive SMS alerts for all deposits and withdrawals</li>
            <li><i class="bi bi-check2-square"></i> Loan EMI Due Reminder</li>
            <li><i class="bi bi-check2-square"></i> FD/RD Maturity Alerts</li>
            <li><i class="bi bi-check2-square"></i> New Scheme Announcements & Offers</li>
            <li><i class="bi bi-check2-square"></i> Secure and real-time updates</li>
            <li><i class="bi bi-check2-square"></i> No internet or smartphone required — works on any mobile</li>
          </ul>


          <p><b>Upcoming Features:</b></p>

          <ul>
            <li><i class="bi bi-check2-square"></i> Instant access to key banking services</li>
            <li><i class="bi bi-check2-square"></i> Stay connected to your account 24/7 — wherever you are</li>
            <li><i class="bi bi-check2-square"></i> Check account balance via SMS anytime</li>
            <li><i class="bi bi-check2-square"></i> Get mini statements directly to your phone</li>
          </ul>

        </div>
        <!-- End Main Content -->

      </div>


      <!-- Help Box (Mobile) -->
      <div class="col-12 mobile-help">
        <div class="help-box d-flex flex-column justify-content-center align-items-center">

          <i class="bi bi-headset help-icon"></i>
          <h4>Have a Question?</h4>

          <p class="d-flex align-items-center mt-2 mb-0">
            <i class="bi bi-telephone me-2"></i>
            <span>+91 84467 50779</span>
          </p>

          <p class="d-flex align-items-center mt-1 mb-0">
            <i class="bi bi-envelope me-2"></i>
            <a href="mailto:info@unitedrural.in">info@unitedrural.in</a>
          </p>

        </div>
      </div>

    </div>

  </section>
  <!-- End Service Details Section -->

</main>

<?php include 'footer.php'; ?>