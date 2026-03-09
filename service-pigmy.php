<?php 
$page_title = "Pigmy | Small Saving | United Rural Credit Co-Op Society Ltd Patansaongi";
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
            <h1>Pigmy Scheme</h1>
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

              <a href="service-pigmy.php" class="active">
                <i class="bi bi-arrow-right-circle"></i>
                <span>Pigmy Scheme</span>
              </a>

              <a href="service-sms.php">
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

          <img src="assets/img/saving.jpg" alt="Pigmy Saving Scheme"
            class="img-fluid services-img">

          <h3>United Rural - Pigmy Scheme</h3>

          <p>
            The Pigmy Deposit Scheme is a daily savings scheme designed to
            help individuals develop a regular saving habit by making small
            daily deposits. It is especially popular among small traders,
            daily wage earners, and rural individuals who may not have
            access to regular banking facilities.
          </p>

          <p>
            Under this scheme, a small fixed amount is collected daily by
            authorized agents at your doorstep or business place.
            Pigmy accounts offer flexibility, convenience, and encourage
            disciplined saving over time.
          </p>

          <p>
            The accumulated amount, along with interest, is paid to the
            customer at maturity. It is a secure and accessible way to build
            long-term savings with small contributions.
          </p>


          <p><b>Key Benefits:</b></p>

          <ul>
            <li><i class="bi bi-check2-square"></i> Start saving with as little as ₹10 per day</li>
            <li><i class="bi bi-check2-square"></i> Daily collection at your doorstep</li>
            <li><i class="bi bi-check2-square"></i> Attractive interest rates</li>
            <li><i class="bi bi-check2-square"></i> Ideal for small vendors, shopkeepers, and daily wage earners</li>
            <li><i class="bi bi-check2-square"></i> Helps build a financial habit and a secure future</li>
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