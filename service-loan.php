<?php include 'header.php'; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h4 class="mb-0">Service Details</h4>
            <h1>Loan Scheme</h1>
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

              <a href="service-loan.php" class="active">
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

          <img src="assets/img/loans.jpg" alt="Loan Services" class="img-fluid services-img">

          <h3>United Rural - Types of Loans</h3>

          <p>
            United Rural Credit Co-Op. Society Ltd. offers a range of loan
            products designed to meet the diverse financial needs of
            individuals, farmers, entrepreneurs, and small businesses in
            rural and semi-urban areas. Whether it's for personal needs,
            business growth, or agriculture, we provide loans with flexible
            terms, competitive interest rates, and quick approvals.
          </p>


          <!-- Gold Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Gold Loan</span>
            </li>
          </ul>

          <p>
            A gold loan allows you to borrow money by pledging your gold
            ornaments as collateral. It offers instant liquidity with minimal
            documentation and low interest rates. Your gold remains safe with
            us and is returned upon repayment. Get up to 75% of the gold's
            value as a loan disbursed within minutes.
          </p>


          <!-- Vehicle Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Vehicle Loan</span>
            </li>
          </ul>

          <p>
            Whether you're buying a two-wheeler or other vehicle, our vehicle
            loan helps you get the vehicle you need with affordable EMIs and
            fast disbursal. We offer up to 80% of the on-road price with
            repayment tenures up to 3 years.
          </p>


          <!-- Mortgage Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Morgage Loan</span>
            </li>
          </ul>

          <p>
            A property mortgage loan allows you to unlock the value of your
            residential, commercial, or agricultural property by using it as
            collateral. This loan is ideal for business expansion, education,
            or medical emergencies while retaining ownership of your property.
          </p>


          <!-- Personal Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Personal Loan</span>
            </li>
          </ul>

          <p>
            A personal loan is an unsecured loan used for medical emergencies,
            education, weddings, travel, or other personal needs. Enjoy fast
            processing and attractive interest rates. Loan amounts up to
            ₹2 lakhs are available depending on eligibility.
          </p>


          <!-- Emergency Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Emergency Loan</span>
            </li>
          </ul>

          <p>
            Our emergency loan offers quick disbursal for urgent medical or
            financial needs. These loans are available for existing members
            and account holders with minimal documentation.
          </p>


          <!-- LIC Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>LIC Against Loan</span>
            </li>
          </ul>

          <p>
            Get a loan against your LIC policy’s surrender value without
            closing the policy. This option helps policyholders access
            short-term funds easily.
          </p>


          <!-- Deposit Loan -->
          <ul>
            <li style="font-weight:600;">
              <i class="bi bi-check-circle"></i>
              <span>Loan Against Deposit</span>
            </li>
          </ul>

          <p>
            Use your Fixed Deposit (FD) or Recurring Deposit (RD) as
            collateral to obtain a loan without breaking the deposit.
            Enjoy lower interest rates compared to regular personal loans.
          </p>

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