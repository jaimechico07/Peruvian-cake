<?php include_once(__DIR__ . "/../../public/data/attributes.php") ?>

<section class="section-gallery">
  <div class="section-gallery__content">
    <div class="section-gallery__contentText ">
      <p class="section-gallery__description">Conoce la variedad de</p>
      <h2 class="section-gallery__title">Nuestra Galeria</h2>
    </div>

    <div class="section-gallery__contGallery">
      <div class="section-gallery__contImg section-gallery__contImg--1">
        <figure>
          <img src="/public/img/home/gallery/cake-1.svg" alt="Torta">
        </figure>
        <figure>
          <img src="/public/img/home/gallery/cup-cake-1.svg" alt="cup cake">
        </figure>
        <figure>
          <img src="/public/img/home/gallery/cake-2.svg" alt="Torta">
        </figure>
      </div>
      <div class="section-gallery__contImg section-gallery__contImg--2">
        <figure>
          <img src="/public/img/home/gallery/cake-3.svg" alt="Torta">
        </figure>
        <figure>
          <img src="/public/img/home/gallery/snacks-1.svg" alt="bocaditos">
        </figure>
      </div>
      <div class="section-gallery__contImg section-gallery__contImg--3">
        <figure>
          <img src="/public/img/home/gallery/snacks-2.svg" alt="bocaditos">
        </figure>
        <figure>
          <img src="/public/img/home/gallery/cup-cake-2.svg" alt="cup cake">
        </figure>
        <figure>
          <img src="/public/img/home/gallery/cake-4.svg" alt="torta">
        </figure>
      </div>
    </div>

    <!-- swiper -->
    <div class="swiper swiper--gallery ">
      <div class="swiper-wrapper">
        <?php foreach ($gallery as $images) : ?>
          <div class="swiper-slide">
            <figure class="w-full">
              <img class="" src="<?php echo $images["image"]; ?>" alt="<?php echo $images["alt"] ?> ">
            </figure>
          </div>
        <?php endforeach ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>