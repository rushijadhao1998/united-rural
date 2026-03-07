<footer id="footer" class="footer light-background">

    <div class="container">

        <div class="copyright text-center">

            <p>
                © <span>Copyright</span>
                <strong class="px-1 sitename-footer">United Rural</strong>
                <span>All Rights Reserved</span>
            </p>

        </div>

        <div class="social-links d-flex justify-content-center">

            <a href="#"><i class="bi bi-twitter-x"></i></a>

            <a href="#"><i class="bi bi-facebook"></i></a>

            <a href="#"><i class="bi bi-instagram"></i></a>

            <a href="#"><i class="bi bi-linkedin"></i></a>

        </div>

        <div class="credits">
            Designed by
            <a href="https://rushijadhao1998.github.io/new_port/">Hrushikesh Jadhao</a>
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


</body>

</html>