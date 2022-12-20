<section class="section-featured">
  <div class="section-featured__inner">
    <h2 class="section-featured__title">Tortas Relacionadas</h2>
    <div class="section-featured__cards">
      <div class="swiper swiper--featured-details">
        <div class="swiper-wrapper">
          <?php foreach ($relateds_products as $p_related) : ?>
            <div class="swiper-slide">
              <div class="card-product">
                <picture class="card-product__picture card-product__picture--small">
                  <img src="/public/img/<?= $p_related["image"]["src"]["movil"] ?>" alt="<?= $p_related["image"]["alt"] ?>">
                </picture>
                <div class="card-product__content">
                  <h3 class="card-product__title"><?= $p_related["title"] ?></h3>
                  <a href="/views/details/details.php?product=<?= $p_related["slug"] ?>&type=<?= $p_related["id_category"] ?>" class="card-product__link">Ver Detalle</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>