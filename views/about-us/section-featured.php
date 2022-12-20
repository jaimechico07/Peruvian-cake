<section class="section-featured">
  <div class="section-featured__inner">
    <h2 class="section-featured__title">Tortas Relacionadas</h2>
    <div class="section-featured__cards">
      <div class="swiper swiper--featured-details">
        <div class="swiper-wrapper">
          <?php for ($i=0; $i < 6; $i++) { ?>
            <div class="swiper-slide">
              <div class="card-product">
                <picture class="card-product__picture card-product__picture--small">
                  <img src="/public/img/cakes/traditional-cakes/selva-negra.png" alt="alt">
                </picture>
                <div class="card-product__content">
                  <h3 class="card-product__title">Torta Selva Negra</h3>
                  <a href="/views/details/details.php?product=torta-selva-negra&type=tortas-tradicionales" class="card-product__link">Ver Detalle</a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>