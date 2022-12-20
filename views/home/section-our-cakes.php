<?php include_once(__DIR__ . "/../../public/data/attributes.php"); ?>

<section class="section-our-cakes">
  <div class="section-our-cakes__content">
    <div class="section-our-cakes__contentText">
      <p class="section-our-cakes__description">Conoce nuestra variedad de</p>
      <h2 class="section-our-cakes__title">Nuestras tortas</h2>
    </div>
    <div class="section-our-cakes__contCard">
      <?php foreach ($our_cakes as $cake) : ?>
        <div class="section-our-cakes__card">
          <img src="/public/img/<?php echo $cake["image"] ?>" alt="<?php echo $cake["alt"] ?>">
          <h3 class="section-our-cakes__cardTitle"><?php echo $cake["cardTitle"] ?></h3>

          <a class="section-our-cakes__cardBtn" href="/views/products/cakes.php?type=<?php echo $cake["linkPage"] ?>">VER MÁS<i class="fa-solid fa-arrow-right section-our-cakes__btnArrow"></i></a>

        </div>
      <?php endforeach ?>
    </div>
  </div>
</section>