<?php
include_once(__DIR__ . '/../../public/data/attributes.php');

$tipo = 'panes'; // panes
foreach ($pages as $page) {
  if ($page["slug"] === $tipo) {
    $titleDetail = $page["titleDetail"];
    $products = $page["products"]; // bocaditos
  }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <?php $title = "Panes | Peruvian Cakes"; ?>
  <?php include_once(__DIR__ . "/../../components/head.php"); ?>

  <!-- VENDORS -->
  <link rel="stylesheet" href="/public/css/vendors/all.min.css">

  <!-- CUSTOM -->
  <link rel="stylesheet" href="/public/css/products.css">
</head>

<body>
  <?php
  include_once(__DIR__ . "/../../components/nav.php");
  ?>

  <main>
    <?php include("section-products.php"); ?>
  </main>

  <?php include_once(__DIR__ . "/../../components/footer.php"); ?>

  <!-- CUSTOM -->
  <script src="/public/js/index.js"></script>
</body>

</html>