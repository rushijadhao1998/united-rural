<footer class="footer-dark">

  <!-- particles background -->
  <div id="footer-particles"></div>

  <div class="container footer-wrapper">

    <div class="row gy-4">

      <!-- About -->
      <div class="col-xl-3 col-lg-4 col-md-6 col-12 footer-col">

        <h3 class="footer-logo">United Rural</h3>

        <p class="footer-text">
          United Rural Credit Co-Op. Society Ltd. provides trusted financial
          services including savings schemes, loan facilities and investment
          solutions for rural communities.
        </p>

        <div class="footer-social">

          <a href="#"><i class="bi bi-facebook"></i></a>

          <a href="https://www.instagram.com/ur_society_ltd?igsh=MXgwMGJ2aDU2d2MweQ=="><i class="bi bi-instagram"></i></a>

          <a href="#"><i class="bi bi-linkedin"></i></a>

        </div>

      </div>

      <!-- Quick Links -->
      <div class="col-xl-3 col-lg-4 col-md-6 col-12 footer-col">

        <h4 class="footer-title">Quick Links</h4>

        <ul class="footer-links">

          <li><a href="index.php">Home</a></li>

          <li><a href="about.php">About Us</a></li>

          <li><a href="interest.php">Interest Rates</a></li>

          <li><a href="service-loan.php">Loan Services</a></li>

          <li><a href="contact.php">Contact</a></li>

          <li><a href="https://banking.elioratechno.in/admin/index">Login</a></li>

        </ul>

      </div>


      <!-- Services Links -->
      <div class="col-xl-3 col-lg-4 col-md-6 col-12 footer-col">

        <h4 class="footer-title">Services</h4>

        <ul class="footer-links">

          <li><a href="service-deposite.php">Deposite Scheme</a></li>

          <li><a href="service-pigmy.php">Pigmy Services</a></li>

          <li><a href="service-sms.php">SMS Banking</a></li>

          <li><a href="service-neft.php">NEFT/RTGS Services</a></li>

          <li><a href="service-loan.php">Loan Services</a></li>

          <li><a href="service-emi.php">EMI Calculator</a></li>

        </ul>

      </div>

      <!-- Contact -->
      <div class="col-xl-3 col-lg-4 col-md-6 col-12 footer-col">

        <h4 class="footer-title">Contact Us</h4>

        <div class="footer-contact">

          <!-- Address -->
          <div class="contact-item">
            <span class="contact-icon">
              <i class="bi bi-geo-alt"></i>
            </span>
            <p>
              <a href="https://maps.app.goo.gl/GuptqS9fsrjB28137" target="_blank">
                At Post Patansaongi, Tah. Saoner, Dist. Nagpur - 441113
              </a>
            </p>
          </div>

          <!-- Phone -->
          <div class="contact-item">
            <span class="contact-icon">
              <i class="bi bi-telephone"></i>
            </span>
            <p>
              <a href="tel:+918446750779">+91 84467 50779</a>
            </p>
          </div>

          <!-- Email -->
          <div class="contact-item">
            <span class="contact-icon">
              <i class="bi bi-envelope"></i>
            </span>
            <p>
              <a href="mailto:info@unitedrural.in">info@unitedrural.in</a>
            </p>
          </div>

        </div>

      </div>

    </div>

  </div>

  <!-- bottom bar -->

  <div class="footer-bottom">

    <div class="container">

      <p>
        © <?php echo date("Y"); ?> <strong class="sitename-footer">United Rural</strong>
        | Designed & Developed by
        <a style="cursor: pointer;" href="https://unitedtech.in">United Technologies Pvt Ltd</a>
      </p>

    </div>

  </div>

</footer>


<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center">
  <i class="bi bi-arrow-up-short"></i>
</a>

<div id="preloader"></div>


<!-- Vendor JS -->

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/vendor/aos/aos.js"></script>

<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>


<!-- Main JS -->

<script src="assets/js/main.js"></script>


<!-- Swiper -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
  const swiper = new Swiper('.swiper', {

    effect: "fade",

    fadeEffect: {
      crossFade: true
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },

    speed: 2000,
    loop: true,

    pagination: {
      el: '.swiper-pagination',
      clickable: true
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev'
    },

    scrollbar: {
      el: '.swiper-scrollbar'
    }

  });
</script>

<script src="assets/js/emi.js"></script>

<script>
  document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
    document.querySelector('#navmenu ul').classList.toggle('mobile-active');
  });
</script>

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script>
  particlesJS("particles-js", {
    "particles": {
      "number": {
        "value": 50
      },
      "color": {
        "value": "#93296f"
      },
      "shape": {
        "type": "circle"
      },
      "opacity": {
        "value": 0.3
      },
      "size": {
        "value": 4
      },
      "line_linked": {
        "enable": true,
        "distance": 150,
        "color": "#c94fa1",
        "opacity": 0.3,
        "width": 1
      },
      "move": {
        "enable": true,
        "speed": 2
      }
    },
    "interactivity": {
      "events": {
        "onhover": {
          "enable": true,
          "mode": "repulse"
        }
      }
    },
    "retina_detect": true
  });
</script>


<script>
  const counters = document.querySelectorAll('.counter');

  counters.forEach(counter => {

    counter.innerText = '0';

    const updateCounter = () => {

      const target = +counter.getAttribute('data-target');
      const c = +counter.innerText;

      const increment = target / 200;

      if (c < target) {

        counter.innerText = `${Math.ceil(c + increment)}`;
        setTimeout(updateCounter, 10);

      } else {

        counter.innerText = target;

      }

    };

    updateCounter();

  });
</script>


<script>
  function toggleServices() {

    const menu = document.querySelector('.service-menu');
    const list = document.getElementById('servicesList');

    menu.classList.toggle('open');

    if (list.style.display === "block") {
      list.style.display = "none";
    } else {
      list.style.display = "block";
    }

  }
</script>


<script>
  particlesJS("footer-particles", {
    "particles": {
      "number": {
        "value": 35
      },
      "color": {
        "value": "#c94fa1"
      },
      "shape": {
        "type": "circle"
      },
      "opacity": {
        "value": 0.3
      },
      "size": {
        "value": 3
      },
      "move": {
        "enable": true,
        "speed": 1.2
      }
    },
    "retina_detect": true
  });
</script>






</body>

</html>