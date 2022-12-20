<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Inicio | Peruvian Cakes"; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>
  <!-- VENDORS -->
  <link rel="stylesheet" href="/public/css/vendors/all.min.css">
  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />

  <!-- CUSTOM -->
  <link rel="stylesheet" href="/public/css/home.css">
</head>

<body>
  <?php include_once(__DIR__ . "/../../components/nav.php"); ?>
  <main>
    <?php include_once("section-home-hero.php") ?>
    <?php include_once("section-favorites.php") ?>
    <?php include_once("section-our-cakes.php") ?>
    <?php include_once("section-our-desserts.php") ?>
    <?php include_once("section-our-gallery.php") ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>

  <!-- VENDORS -->
  <script src="/public/js/swiper-bundle.min.js"></script>

  <!-- CUSTOM -->
  <script src="/public/js/index.js"></script>
  <script src="/public/js/slider.js"></script>
</body>

</html>