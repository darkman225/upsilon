<?php
 include('lang/launch_lang.php');

 if (isset($_GET['page'])&&!empty($_GET['page'])) {
  $_SESSION['content'] = $_GET['page'];
 }

 if (isset($_GET['lang'])) {
  if ($_GET['lang']=='fr') $_SESSION['lang'] = $_GET['lang'];
  else $_SESSION['lang'] = 'en';
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>upsilon business solution</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/upson business solotion logo.png" rel="icon">
  <link href="assets/img/upson business solotion logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
    
      <a href="index.php" class="logo me-auto"><img src="assets/img/upson business solotion logo.png" alt="" class="img-fluid"></a>
      <div class="lang-mnu">
              <div class="selected-lang">
              <?php if ($_SESSION['lang']=='fr') {?>
                <img src='https://flagsapi.com/FR/flat/32.png' >
              <?php ; } else { ?>
                <img src='https://flagsapi.com/US/flat/32.png' >
              <?php ;} ?>             
                LANG
              </div>
              <ul>
                <li><a class="fr" href="index.php?lang=fr&page=<?php echo $_SESSION['content'] ?>">Fr</a></li>
                <li><a class="en" href="index.php?lang=en&page=<?php echo $_SESSION['content'] ?>">En</a></li>
              </ul>
        
            </div>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto <?php if($_SESSION['content']=='home') echo 'active' ?>" href="index.php?page=home"><?php echo $navbar['home'] ;?></a></li>
                <li><a class="nav-link scrollto <?php if($_SESSION['content']=='secteur') echo 'active' ?>" href="index.php?page=secteur" ><?php echo $navbar['secteur'] ;?></a></li>
                <li class="dropdown nav-link scrollto <?php if($_SESSION['content']=='realisation') echo 'active' ?>"><a href="index.php?page=service"><span><?php echo $navbar['service'] ;?></span></a>
                    <ul>
                      <li><a href="index.php?page=service">Conseil </a></li>
                      <li><a href="index.php?page=service">Integration </a></li>
                      <li><a href="index.php?page=service">Transformation digitale </a></li>
                      <li><a href="index.php?page=service">Gouvernance SI </a></li>
                      <li><a href="index.php?page=service">Référence PMO </a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto <?php if($_SESSION['content']=='realisation') echo 'active' ?>" href="index.php?page=realisation"><?php echo $navbar['realisation'] ;?></a></li>
                <li><a class="nav-link scrollto <?php if($_SESSION['content']=='partenaire') echo 'active' ?>" href="index.php?page=partenaire"><?php echo $navbar['partenaire'] ;?></a></li>          
                <li><a class="nav-link scrollto <?php if($_SESSION['content']=='contact') echo 'active' ?>" href="index.php?page=contact"><?php echo $navbar['contact'] ;?></a></li>
            </ul>                
            
            
            <i class="bi bi-list mobile-nav-toggle"></i>
            
            
      </nav><!-- .navbar -->
      
      
    </div>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center hero-home <?php echo $_SESSION['content'] ;?>">

    <div class="container">
      <div class="row">
        <div class="col d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h2>
            <?php 
              if($_SESSION['content']=='home') echo $navbar['home'];
              if($_SESSION['content']=='secteur') echo $navbar['secteur'];
              if($_SESSION['content']=='service') echo $navbar['service'];
              if($_SESSION['content']=='partenaire') echo $navbar['partenaire'];
              if($_SESSION['content']=='realisation') echo $navbar['realisation'];
              if($_SESSION['content']=='contact') echo $navbar['contact'];
              
            ?>
          </h2>
          <div class="title">
            <h1>UPSILON BUSINESS SOLUTIONS</h1> 
            <h4><?php echo $slogan['value'] ; ?></h4>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <?php
      if ($_SESSION['content'] == 'home') include 'home.php';
      if ($_SESSION['content'] == 'contact') include 'contact.php';
      if ($_SESSION['content'] == 'service') include 'service.php';
      if ($_SESSION['content'] == 'partenaire') include 'partenaire.php';
      if ($_SESSION['content'] == 'secteur') include 'secteur.php';
      if ($_SESSION['content'] == 'realisation') include 'realisation.php';
    ?>

    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <?php
      include 'utils/footer.php'
    ?>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://kit.fontawesome.com/08cda9a955.js" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>