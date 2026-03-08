<?php include 'header.php'; ?>

<main class="main">

  <!-- Page Title -->
  <div class="page-title" data-aos="fade">
    <div class="heading">
      <div class="container">
        <div class="row d-flex justify-content-center text-center">
          <div class="col-lg-8">
            <h2 class="mb-0">Service Details</h2>
            <h1>EMI Calculator</h1>
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

              <a href="service-neft.php">
                <i class="bi bi-arrow-right-circle"></i>
                <span>NEFT/RTGS</span>
              </a>

              <a href="service-emi.php" class="active">
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
                <a href="mailto:info@unitedrural.in">info@unitedrural.in</a>
              </p>
            </div>
          </div>

        </div>
        <!-- End Sidebar -->


        <!-- Main Content -->
        <div class="col-lg-8 ps-lg-4" data-aos="fade-up" data-aos-delay="200">

          <div class="emi-card">

            <h3 class="emi-title">
              <i class="bi bi-calculator"></i> Loan EMI Calculator
            </h3>

            <p class="emi-note">
              <b>Note :</b> This EMI Calculator provides only for Vehicle Loan EMI
              Calculation. If you want to know about other loan EMI, please contact
              United Rural Credit Co-Op. Society Ltd.
            </p>

            <div class="row g-4">

              <!-- Input Section -->
              <div class="col-lg-6">

                <div class="emi-box">

                  <div class="input-group">
                    <label><i class="bi bi-cash-stack"></i> Vehicle Amount</label>
                    <input type="number" id="amt"
                      placeholder="Enter Vehicle On-Road Price">
                  </div>

                  <div class="input-group">
                    <label><i class="bi bi-wallet2"></i> Down Payment</label>
                    <input type="number" id="d_pay"
                      placeholder="Enter Down Payment Amount">
                  </div>

                  <div class="input-group" id="p_amt">
                    <label><i class="bi bi-calculator"></i> Principle</label>
                    <input type="number" id="ln_amt"
                      placeholder="Principle Amount" readonly>
                  </div>

                  <div class="input-group">
                    <label><i class="bi bi-clock-history"></i> Loan Duration</label>
                    <input type="number" id="time"
                      placeholder="Enter Loan Duration (Months)">
                  </div>

                  <button class="btn-calc" onclick="answer()">
                    <i class="bi bi-lightning-charge"></i> Calculate EMI
                  </button>

                </div>

              </div>


              <!-- Result Section -->
              <div class="col-lg-6">

                <div class="emi-box emi-result">

                  <div class="result-group">
                    <label><i class="bi bi-currency-rupee"></i> Monthly EMI</label>
                    <input type="text" id="emi" readonly>
                  </div>

                  <div class="result-group">
                    <label><i class="bi bi-graph-up"></i> Interest Amount</label>
                    <input type="text" id="int_pay" readonly>
                  </div>

                  <div class="result-group">
                    <label><i class="bi bi-bank"></i> Total Payment</label>
                    <input type="text" id="pi_pay" readonly>
                  </div>

                </div>

              </div>

            </div>

          </div>

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