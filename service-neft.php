<?php 
$page_title = "Fund Transfer | United Rural Credit Co-Op Society Ltd Patansaongi";
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
            <h1>NEFT/RTGS</h1>
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

              <a href="service-sms.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>SMS Banking</span>
              </a>

              <a href="service-neft.php" class="active">
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

          <img src="assets/img/online.jpg" alt="NEFT RTGS Service"
            class="img-fluid services-img">

          <h3>United Rural - NEFT/RTGS Facility</h3>

          <p>
            United Rural Credit Co-Op. Society Ltd. offers seamless and secure
            <b>NEFT (National Electronic Funds Transfer)</b> and
            <b>RTGS (Real Time Gross Settlement)</b> services to help you
            transfer money to any bank account across India. These services
            are enabled through RBI-authorized partner banks, ensuring
            reliability, compliance, and nationwide reach.
          </p>


          <p><b>What is NEFT?</b></p>

          <p>
            NEFT is an electronic fund transfer system that allows individuals,
            firms, and corporates to transfer funds from one bank account to
            another on a deferred net settlement basis. Funds are settled in
            batches and are usually credited within a few hours during banking
            hours.
          </p>


          <p><b>What is RTGS?</b></p>

          <p>
            RTGS is a high-value, real-time fund transfer system. The transfer
            occurs instantly and individually, making it ideal for large-value
            transactions. It is available only for transactions of ₹2 lakhs
            and above.
          </p>


          <p><b>Benefits of NEFT/RTGS through United Rural:</b></p>

          <ul>
            <li><i class="bi bi-check2-square"></i> Transfer money to any bank across India</li>
            <li><i class="bi bi-check2-square"></i> Secure, fast, and RBI-regulated system</li>
            <li><i class="bi bi-check2-square"></i> No need to visit other bank branches</li>
            <li><i class="bi bi-check2-square"></i> Fund transfer available during working hours</li>
            <li><i class="bi bi-check2-square"></i> Ideal for individuals, businesses, and institutions</li>
          </ul>


          <p><b>NEFT/RTGS Timings:</b></p>

          <ul>
            <li>
              <i class="bi bi-clock"></i>
              NEFT: 10:00 AM to 6:30 PM (Monday to Saturday, except 2nd & 4th Saturdays and holidays)
            </li>

            <li>
              <i class="bi bi-clock"></i>
              RTGS: 10:00 AM to 4:30 PM (Monday to Saturday, except 2nd & 4th Saturdays and holidays)
            </li>
          </ul>


          <p><b>Details Required for NEFT/RTGS Transfer:</b></p>

          <ul>
            <li><i class="bi bi-arrow-right-circle"></i> Beneficiary Name</li>
            <li><i class="bi bi-arrow-right-circle"></i> Beneficiary Bank Name</li>
            <li><i class="bi bi-arrow-right-circle"></i> Account Number</li>
            <li><i class="bi bi-arrow-right-circle"></i> IFSC Code of the beneficiary's branch</li>
            <li><i class="bi bi-arrow-right-circle"></i> Amount to be transferred</li>
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