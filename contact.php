<?php
$page_title = "Contact | United Rural Credit Co-Op Society Ltd Patansaongi Nagpur";
$page_description = "Contact United Rural Credit Society Patansaongi Nagpur for cooperative banking services, loans and deposits.";
include 'header.php';
?>



<main class="main">

  <!-- =========================
   CONTACT HERO
========================== -->
  <section class="contact-hero">

    <div class="hero-bg-icons">

      <i class="bi bi-telephone"></i>
      <i class="bi bi-envelope"></i>
      <i class="bi bi-chat-dots"></i>
      <i class="bi bi-geo-alt"></i>

    </div>

    <div class="container text-center hero-content">

      <h1 class="contact-title">Contact Us</h1>

      <p class="contact-subtitle">
        We're here to assist you with any queries, services, or support you need.
      </p>

    </div>

    <!-- floating particles -->

    <div class="particles">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>



    <!-- Animated Waves -->
    <div class="wave-container">
      <svg class="waves" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 24 150 28" preserveAspectRatio="none">

        <defs>
          <path id="wave-path"
            d="M-160 44c30 0 58-18 88-18s
                    58 18 88 18
                    58-18 88-18 
                    58 18 88 18 
                    v44h-352z" />
        </defs>

        <g class="wave-parallax">
          <use href="#wave-path" x="48" y="0" fill="rgba(255,255,255,0.5)" />
          <use href="#wave-path" x="48" y="3" fill="rgba(255,255,255,0.3)" />
          <use href="#wave-path" x="48" y="5" fill="rgba(255,255,255,0.2)" />
          <use href="#wave-path" x="48" y="7" fill="#ffffff" />
        </g>

      </svg>
    </div>

  </section>


  <!-- =========================
   CONTACT SECTION
========================== -->
  <section id="contact" class="contact section">

    <div class="container">

      <div class="row g-4 align-items-stretch">

        <!-- Contact Info -->
        <div class=" col-lg-4 contact-info">

          <div class="info-item">
            <i class="bi bi-geo-alt-fill"></i>
            <p>
              <a href="https://maps.app.goo.gl/GuptqS9fsrjB28137" target="_blank">
                At Post Patansaongi,<br>
                Tah. Saoner, Dist. Nagpur,<br>
                Maharashtra, <br>
                India - 441113
              </a>
            </p>
          </div>

          <div class="info-item">
            <i class="bi bi-envelope-fill"></i>
            <p>
              <a href="mailto:info@unitedrural.in">info@unitedrural.in</a>
            </p>
          </div>

          <div class="info-item">
            <i class="bi bi-telephone-fill"></i>
            <p>
              <a href="tel:+918446750779">+91 84467 50779</a>
            </p>
          </div>

        </div>

        <!-- Contact Form -->
        <div class="col-lg-8">

          <div class="contact-form">

            <h3>Send us a Message</h3>


            <form id="contact-form">

              <div class="row g-3">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6">
                  <input type="tel" name="phone" class="form-control" placeholder="Mobile Number" required>
                </div>

                <div class="col-12">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="col-12">
                  <textarea name="message" rows="5" class="form-control" placeholder="Write your message..." required></textarea>
                </div>

              </div>

              <div class="text-center mt-4">
                <button type="submit" class="btn-contact" id="submit-btn">
                  Send Message
                </button>
              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </section>


  <!-- =========================
   GOOGLE MAP
========================== -->

  <section class="map-section">

    <h2 class="about-title text-center">Find Our Branch Location</h2>

    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6250.771694291925!2d79.02602269977697!3d21.32163958908985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bd4dd5f043c09e7%3A0x3c597f36181659ee!2sUnited%20Rural%20Credit%20Co-Op.%20Society%20Ltd.!5e0!3m2!1sen!2sin!4v1773070073681!5m2!1sen!2sin"
      frameborder="0"
      allowfullscreen
      loading="lazy">
    </iframe>

  </section>

</main>

<?php include 'footer.php'; ?>