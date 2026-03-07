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
      </div><!-- End Page Title -->

      <!-- Service Details Section -->
      <section id="service-details" class="service-details section">

        <div class="container">

          <div class="row gy-5">

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">

              <div class="service-box">
                <h4>Serices List</h4>
                <div class="services-list">
                  <a href="service-deposite.html"><i
                      class="bi bi-arrow-right-circle"></i><span>Deposite
                      Scheme</span></a>
                  <a href="service-loan.html"><i
                      class="bi bi-arrow-right-circle"></i><span>Loan
                      Scheme</span></a>
                  <a href="service-pigmy.html"><i
                      class="bi bi-arrow-right-circle"></i><span>Pigmy
                      Scheme</span></a>
                  <a href="service-sms.html"><i
                      class="bi bi-arrow-right-circle"></i><span>SMS
                      Banking</span></a>
                  <a href="service-neft.html"><i
                      class="bi bi-arrow-right-circle"></i><span>NEFT/RTGS</span></a>
                  <a href="service-emi.html" class="active"><i
                      class="bi bi-arrow-right-circle"></i><span>EMI
                      Calculator</span></a>
                </div>
              </div><!-- End Services List -->

              <div class="help-box-up">
              <div
                class="help-box">
                <i class="bi bi-headset help-icon"></i>
                <h4>Have a Question?</h4>
                <p class="d-flex align-items-center mt-2 mb-0"><i
                    class="bi bi-telephone me-2"></i> <span>+91 84467
                    50779</span></p>
                <p class="d-flex align-items-center mt-1 mb-0"><i
                    class="bi bi-envelope me-2"></i>
                  <a
                    href="mailto:contact@example.com">info@unitedrural.in</a>
                </p>
              </div>
              </div>

            </div>

            <style>

              .help-box{
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
              }

              @media (max-width: 990px) {
	              .service-box, .help-box-up{
		            display: none;
	              }

              }
            </style>

            <div class="col-lg-8 ps-lg-4" data-aos="fade-up"
              data-aos-delay="200">
              <!-- <img src="assets/img/services.jpg" alt class="img-fluid services-img"> -->
              <h3 style="text-align: center; padding-bottom: 10px;">Loan EMI
                Calculator</h3>
              <p> <b>Note : This EMI Calculator provides only for Vehicle Loan
                  EMI
                  Calculation,</b> If you want to know about other loan EMI,
                you should contact with United Rural Credit Co-Op. Society
                Ltd.</p>

              <div class="row gy-6">
                <div style="padding-top: 30px;" class="col-lg-6 ps-lg-2"
                  data-aos="fade-up"
                  data-aos-delay="200">

                  <div class="ln">
                    <div class="col">
                      <label for>Vehicle Amount</label>
                      <input type="number" id="amt"
                        placeholder="Enter Vehicle On-Road Price">
                    </div>

                    <div class="col">
                      <label for>Down Payment</label>
                      <input type="number" id="d_pay"
                        placeholder="Enter Down Payment Amount">
                    </div>

                    <div class="col" id="p_amt">
                      <label for>Principle</label>
                      <input type="number" id="ln_amt"
                        placeholder="Principle Amount" readonly>
                    </div>

                    <!-- <div class="col">
                      <label for>Interest Rate</label>
                      <input type="number" id="rate"
                        placeholder="Enter Rate of Interest">
                    </div> -->

                    <div class="col">
                      <label for>Loan Duration</label>
                      <input type="number" id="time"
                        placeholder="Enter Loan Duration in Month">
                    </div>

                    <button class="btn-calc"
                      onclick="answer()">Calculate</button>

                  </div>

                </div>

                <style>
                  label{
                    font-size: 20px;
                    font-weight: 500;
                  }
                  .ln{
                    border: 1px solid gray;
                    padding: 10px;
                    border-radius: 10px;
                    box-shadow: 2px 5px 6px gray;
                  }

                  .col{
                    padding: 20px 0 0 0;
                  }
                  
                  #p_amt{
                    display: none;
                  }

                  input{
                    border: 1px solid black;
                    border-radius: 5px;
                    width: 100%;
                    height: 40px;
                    padding-left: 10px;
                    box-shadow: 2px 2px 5px gray;
                  }

                  input::-webkit-outer-spin-button,
                  input::-webkit-inner-spin-button {
                  -webkit-appearance: none;
                  margin: 0;
                  }

                 
                  .btn-calc{
                    margin: 30px 0 20px 0;
                    width: 100%;
                    border: 2px solid #7a50c2;
                    border-radius: 5px;
                    height: 40px;
                    color: #fff;
                    font-size: 20px;
                    font-weight: 500;
                    background-color: #7a50c2;
                  }

                  .btn-calc:hover{
                    color: #7a50c2;
                    background-color: #fff;
                    transition: background-color 0.4s ease-out;
                  }
                </style>

                <div style="padding-top: 30px;" class="col-lg-6 ps-lg-2"
                  data-aos="fade-up"
                  data-aos-delay="200">
                  <div class="ln">
                    <div class="col">
                      <label for>Monthly EMI</label>
                      <input type="text" id="emi" readonly>
                    </div>

                    <div class="col">
                      <label for>Interest Amount to Pay</label>
                      <input type="text" id="int_pay" readonly>
                    </div>

                    <div style="padding-bottom: 20px;" class="col">
                      <label for>Total Principle & Interest Amt</label>
                      <input type="text" id="pi_pay" readonly>
                    </div>

                  </div>
                </div>

              </div>

            </div>

          </div>


          <div class="help-box-down" data-aos="fade-up" data-aos-delay="100">
          <div
            class="help-box">
            <i class="bi bi-headset help-icon"></i>
            <h4>Have a Question?</h4>
            <p class="d-flex align-items-center mt-2 mb-0"><i
                class="bi bi-telephone me-2"></i> <span>+91 84467
                50779</span></p>
            <p class="d-flex align-items-center mt-1 mb-0"><i
                class="bi bi-envelope me-2"></i>
              <a
                href="mailto:contact@example.com">info@unitedrural.in</a>
            </p>
          </div>
          </div>

        </div>

        <style>
          .help-box-down{
            display: none;
          }

          @media (max-width: 990px) {
	              .help-box-down{
                  display: block;
                }
              }

        </style>

      </section>
      <!-- /Service Details Section -->

    </main>

   <?php include 'footer.php'; ?>
  