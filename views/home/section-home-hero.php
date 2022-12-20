<?php include_once(__DIR__ . "/../../public/data/attributes.php"); ?>
<section class="section-hero">
  <div class="section-hero__redes">
    <a class="section-hero__red" href="https://www.facebook.com/PeruvianCakes" target="_blank">FACEBOOK</a>
    <a class="section-hero__red" href="https://www.instagram.com/peruviancake/" target="_blank">INSTAGRAM</a>
    <a class="section-hero__red" href="https://www.pinterest.com/pin/299419075200862837/" target="_blank">PINTEREST</a>
  </div>
  <div class="swiper swiper--home-hero swiper__hero section-hero__slides">
    <div class="swiper-wrapper section-hero__wrapper">
      <?php
      foreach ($data_hero as $slide) :
      ?>
        <div class="swiper-slide section-hero__slide">
          <div class="section-hero__container-contain">
            <p class="section-hero__title"><?php echo $slide["title"]; ?></p>
            <a class="btn--hero" href="/views/products/cakes.php?type=<?php echo $slide["link"]; ?>">
              VER MÁS <i class="fa-solid fa-cake-candles"></i>

            </a>
          </div>
          <div class="section-hero__container-img">
            <img class="section-hero__img" src="/public/img/<?php echo $slide["img"]; ?>" alt="">
          </div>
        </div>
      <?php
      endforeach;
      ?>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>

  <!-- compoenente whatssapp -->
  <?php include_once(__DIR__ . "../../../components/social-networks.php"); ?>

</section>