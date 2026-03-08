<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="shortcut icon" type="x-icon" href="assets/img/logo.png">

  <title>United Rural</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Poppins&family=Raleway&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Baumans&display=swap" rel="stylesheet">

  <!-- Vendor CSS -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS -->
  <link href="assets/css/main.css" rel="stylesheet">
  <link href="assets/css/header.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/new.css">
  <link href="assets/css/about.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/servicedetails.css">
  <link href="assets/css/contact.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/interest.css">


  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center sticky-top">

    <!-- this is use for moving items in header background  -->
    <div id="particles-js"></div>

    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">

        <img src="assets/img/logo.png" alt="">

        <div>
          <p class="sitename">
            <span class="ltr">U</span>NITED <span class="ltr">R</span>URAL
          </p>
          <p class="co-op">CREDIT CO-OP. SOCIETY LTD.</p>
        </div>

      </a>

      <nav id="navmenu" class="navmenu">

        <ul>

          <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">Home</a></li>

          <li class="dropdown <?= (strpos($currentPage, 'service') !== false) ? 'active' : '' ?>"><a href="#"><span>Services</span><i class="bi bi-chevron-down toggle-dropdown"></i></a>

            <ul>
              <li><a href="service-deposite.php" class="<?= ($currentPage == 'service-deposite.php') ? 'active' : '' ?>">Deposit Scheme</a></li>

              <li><a href="service-loan.php" class="<?= ($currentPage == 'service-loan.php') ? 'active' : '' ?>">Loan Scheme</a></li>

              <li><a href="service-pigmy.php" class="<?= ($currentPage == 'service-pigmy.php') ? 'active' : '' ?>">Pigmy Scheme</a></li>

              <li><a href="service-sms.php" class="<?= ($currentPage == 'service-sms.php') ? 'active' : '' ?>">SMS Banking</a></li>

              <li><a href="service-neft.php" class="<?= ($currentPage == 'service-neft.php') ? 'active' : '' ?>">NEFT/RTGS</a></li>

              <li><a href="service-emi.php" class="<?= ($currentPage == 'service-emi.php') ? 'active' : '' ?>">EMI Calculator</a></li>

            </ul>

          </li>

          <li>
            <a href="interest.php" class="<?= ($currentPage == 'interest.php') ? 'active' : '' ?>">
              Interest
            </a>
          </li>

          <li>
            <a href="about.php" class="<?= ($currentPage == 'about.php') ? 'active' : '' ?>">
              About Us
            </a>
          </li>

          <li>
            <a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">
              Contact
            </a>
          </li>

          <li class="dropdown">

            <a href="#">
              <span>Downloads</span>
              <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>

            <ul>

              <li>
                <a href="assets/forms/SHARE AC.pdf">Membership Form</a>
              </li>

              <li>
                <a href="assets/forms/fd new form.pdf">Account Opening Form</a>
              </li>

              <li>
                <a href="assets/forms/GOLD LOAN.pdf">Gold Loan Form</a>
              </li>

              <li>
                <a href="assets/forms/EM LOAN.pdf">Emergency Loan Form</a>
              </li>

              <li>
                <a href="assets/forms/Loan Form.pdf">Loan Form</a>
              </li>

              <li>
                <a href="#">Vehicle Loan Form</a>
              </li>

            </ul>

          </li>

          <li>
            <a class="login_btn" id="login_btn" href="https://banking.elioratechno.in/admin/index">
              LOGIN
            </a>
          </li>

        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>

      </nav>

    </div>

  </header>


  