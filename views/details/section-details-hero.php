<section class="section-hero-details">
  <div class="section-hero-details__grid">
    <h1 class="section-hero-details__title"><?= $titleDetail ?></h1>
    <div class="producto-card--showcase">
      <picture class="producto-card__picture">
        <source media="(min-width: 768px)" srcset="/public/img/<?= $imagenes["src"]["desktop"] ?>">
        <img src="/public/img/<?= $imagenes["src"]["movil"] ?>" alt="<?= $imagenes["alt"] ?>">
      </picture>
    </div>

    <div class="section-hero-details__content">
      <div class="mb-4">
        <span class="section-hero-details__subtitle">Descripción</span>
        <p class="section-hero-details__text"><?= $description ?></p>
      </div>
      <div class="">
        <span class="section-hero-details__subtitle">Precios (No incluye delivery)</span>
        <div class="section-hero-details__prices">
          <?php foreach ($prices as $price) : ?>
            <div class="section-hero-details__price">
              <i class="fa-solid fa-cake-candles"></i>
              <span><?= $price["size"] ?>: S/. <?= $price["price"] ?>.00</span>
            </div>
          <?php endforeach ?>
        </div>
        <div class="flex mt-8">
          <a href="/views/contact/contact.php" class="section-hero-details__btn">Cotizar Aqui</a>
        </div>
      </div>
    </div>
  </div>
</section>