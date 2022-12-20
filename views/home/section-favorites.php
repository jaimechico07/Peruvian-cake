<?php include_once(__DIR__ . "/../../public/data/attributes.php") ?>

<section class="section-favorites">
  <div class="section-favorites__content">
    <div class="section-favorites__contentText">
      <p class="section-favorites__description">Nuestras delicias destacados</p>
      <h2 class="section-favorites__title">Los favoritos</h2>
    </div>

    <div class="swiper swiper--favorites">
      <div class="swiper-wrapper">
        <?php foreach ($favorites as $favorite) : ?>
          <div class="swiper-slide">
            <a href="/views/details/details.php?product=torta-selva-negra&type=tortas-tradicionales">
              <div class="section-favorites__contCard">
                <figure class="section-favorites__figure">
                  <img src="/public/img/<?php echo $favorite["image"] ?>" alt="<?php echo $favorite["alt"] ?>">
                </figure>
                <div class="section-favorites__contCardText">
                  <h3 class="section-favorites__cardTitle"><?php echo $favorite["cardTitle"] ?></h3>
                  <p class="section-favorites__cardDescription">Desde S/.<?php echo $favorite["price"] ?>.00</p>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </div>
</section>