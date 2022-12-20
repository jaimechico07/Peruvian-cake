<?php
include_once(__DIR__ . '/../../public/data/attributes.php');

if (isset($_GET["product"]) && isset($_GET["type"])) {
  $slug = $_GET["product"];
  $type = $_GET["type"];
  $relateds_products = [];

  foreach ($allProducts as $product) {
    if ($product["id_category"] === $type && $product["slug"] !== $slug) {
      array_push($relateds_products, $product);
    }

    if ($product["slug"] === $slug) {
      $titleDetail = $product["titleDetail"];
      $description = $product["description"];
      $prices = $product["prices"];
      $imagenes = $product["image"];
    }
  }
} else {
  header('Location: //localhost:3000');
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Products | Peruvian Cakes"; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>

  <!-- VENDORS -->
  <link rel="stylesheet" href="/public/css/vendors/all.min.css">
  <link rel="stylesheet" href="/public/css/vendors/swiper-bundle.css" />

  <!-- CUSTOM -->
  <link rel="stylesheet" href="/public/css/details.css">
</head>

<body>
  <?php include_once(__DIR__ . "/../../components/nav.php"); ?>
  <main>
    <?php include_once("section-details-hero.php"); ?>
    <?php include_once("section-featured.php"); ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>

  <!-- VENDORS -->
  <script src="/public/js/swiper-bundle.min.js"></script>

  <!-- CUSTOM -->
  <script src="/public/js/index.js"></script>
  <script src="/public/js/slider.js"></script>
</body>

</html>