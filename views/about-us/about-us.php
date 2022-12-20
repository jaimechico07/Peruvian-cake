<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Nosotros | Peruvian Cakes"; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>

  <!-- VENDORS -->
  <link rel="stylesheet" href="/public/css/vendors/all.min.css">
  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />

  <!-- CUSTOM -->
  <link rel="stylesheet" href="/public/css/about-us.css">
</head>

<body>
  <?php include_once(__DIR__ . "/../../components/nav.php"); ?>
  <main>
    <?php include("section-about-us-hero.php"); ?>
    <?php include("section-mission-vision.php"); ?>
    <?php include("section-our-values.php"); ?>
    <?php include("section-featured.php"); ?>
    <?php //include("section-our-team.php"); ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>

  <!-- VENDORS -->
  <script src="/public/js/swiper-bundle.min.js"></script>

  <!-- CUSTOM -->
  <script src="/public/js/index.js"></script>
  <script src="/public/js/slider.js"></script>
</body>

</html>