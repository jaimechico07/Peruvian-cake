<section class="section-products">
  <h1 class="section-products__title"><?= $titleDetail ?></h1>
  <div class="section-products__contCards">
    <?php foreach ($products as $product) : ?>
      <div class="section-products__card">
        <figure class="section-products__figure">
          <img src="/public/img/<?= $product["image"]["src"]["desktop"] ?>" alt="<?= $product["image"]["alt"] ?>">
          <?php if ($product["isNew"]) : ?>
            <div class="section-products__new">
              <p>New</p>
            </div>
          <?php endif; ?>
        </figure>
        <h2 class="section-products__cardText"><?= $product["title"] ?></h2>
        <a href="/views/details/details.php?product=<?= $product["slug"] ?>&type=<?= $product["id_category"]  ?>" class="section-products__cardBtn">VER DETALLE</a>
      </div>
    <?php endforeach ?>
  </div>
</section>