<?php
include_once(__DIR__ . "/../public/data/attributes.php");
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<header class="header">
  <div class="header__inner">
    <a href="/views/home/home.php" class="header__logo">
      <img src="/public/img/Logo.png" alt="Logo">
    </a>
    <div class="header__icon">
      <i class="fa-solid fa-bars" id="burger"></i>
    </div>
    <nav class="nav-mobile" id="menu">
      <ul class="header__list">
        <li class="header__item"><a href="/views/home/home.php" class="header__link <?= ($activePage === "home") ? "active" : "" ?>">Inicio</a></li>
        <li class="header__item"><a href="/views/about-us/about-us.php" class="header__link <?= ($activePage === "about-us") ? "active" : "" ?>">Nosotros</a></li>
        <li class="header__item header__item--submenu">
          <a href="#!" class="header__link <?= ($activePage === "cakes") ? "active" : "" ?>">Tortas <i class="fa-solid fa-angle-down header__arrow"></i></a>
          <ul class="header__list--submenu">
            <?php foreach ($subMenuLinks as $subLink) : ?>
              <li class="header__item"><a href="/views/products/cakes.php?tipo=<?= $subLink["url"] ?>" class="header__link--sub"><?php echo $subLink["title"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="header__item"><a href="/views/products/desserts.php" class="header__link <?= ($activePage === "desserts") ? "active" : "" ?>">Postres</a></li>
        <li class="header__item"><a href="/views/products/snacks.php" class="header__link <?= ($activePage === "snacks") ? "active" : "" ?>">Bocaditos</a></li>
        <li class="header__item"><a href="/views/products/breads.php" class="header__link <?= ($activePage === "breads") ? "active" : "" ?>">Panes</a></li>
        <li class="header__item lg:hidden"><a href="/views/contact/contact.php" class="header__link <?= ($activePage === "contacto") ? "active" : "" ?>">Contacto</a></li>
        <li class="header__item header__item--group">
          <a href="https://es-la.facebook.com/PeruvianCakes/" target="_blank" class="header__link"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="https://www.instagram.com/peruviancake/" target="_blank" class="header__link"><i class="fa-brands fa-instagram"></i></a>
        </li>
      </ul>
    </nav>
    <nav class="nav-desktop">
      <ul class="header__list">
        <li class="header__item"><a href="/views/home/home.php" class="header__link <?= ($activePage === "home") ? "active" : "" ?>">Inicio</a></li>
        <li class="header__item"><a href="/views/about-us/about-us.php" class="header__link <?= ($activePage === "about-us") ? "active" : "" ?>">Nosotros</a></li>
        <li class="header__item header__item--submenu">
          <a href="#!" class="header__link <?= ($activePage === "cakes") ? "active" : "" ?>">Tortas <i class="fa-solid fa-angle-down header__arrow"></i></a>
          <ul class="header__list--submenu">
            <?php foreach ($subMenuLinks as $subLink) : ?>
              <li class="header__item"><a href="/views/products/cakes.php?type=<?= $subLink["url"] ?>" class="header__link--sub"><i class="fa-solid fa-cake-candles"></i> <?php echo $subLink["title"]; ?></a></li>
            <?php endforeach; ?>
          </ul>
        </li>
        <li class="header__item"><a href="/views/products/desserts.php" class="header__link <?= ($activePage === "desserts") ? "active" : "" ?>">Postres</a></li>
        <li class="header__item"><a href="/views/products/snacks.php" class="header__link <?= ($activePage === "snacks") ? "active" : "" ?>">Bocaditos</a></li>
        <li class="header__item"><a href="/views/products/breads.php" class="header__link <?= ($activePage === "breads") ? "active" : "" ?>">Panes</a></li>
      </ul>
      <ul class="header__list--contact">
        <li class="header__item"><a href="/views/contact/contact.php" class="header__link--btn">Contacto</a></li>
      </ul>
    </nav>
  </div>
</header>