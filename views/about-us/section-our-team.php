<?php include_once(__DIR__ . "/../../public/data/attributes.php") ?>

<section class="section-our-team">
  <div class="section-our-team__content">
    <div class="section-our-team__contText">
      <p class="section-our-team__subTitle">Lorem ipsum dolor</p>
      <h2 class="section-our-team__title">Nuestro Equipo</h2>
    </div>

    <div class="swiper swiper--ourTeam">
      <div class="swiper-wrapper">
        <?php foreach ($our_team as $data) : ?>
          <div class="swiper-slide">
            <div class="section-our-team__infoCont">
              <picture class="section-our-team__picture">
                <source media="(min-width: 1024px)" srcset="/public/img/<?php echo $data["image"] ?>">
                <img class="section-our-team__img" src="/public/img/<?php echo $data["imageMobile"] ?>" alt="">
              </picture>
              <div class="section-our-team__infoText ">
                <h3 class="section-our-team__infoTitle"><?php echo $data["title"] ?></h3>
                <p class="section-our-team__infoSubTitle"><?php echo $data["subtitle"] ?></p>
                <p class="section-our-team__infoDescription"><?php echo $data["description"] ?></p>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

</section>