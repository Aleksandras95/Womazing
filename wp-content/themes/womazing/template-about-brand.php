<?php

/*
* Template name: About brand
*/

get_header();

global $redux_params;
?>

<!-- ======= Breadcrumbs Section ======= -->
<section class="section-breadcrumbs">
    <div class="container">
      <div class="shop-info">
        <h2 class="shop-info__title"><?php echo $redux_params["about-brand-section-title"];?></h2>
        <ol class="breadcrumbs">
          <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="../index.html">Главная</a>
            </li>
          <li class="breadcrumbs__item">О бренде</li>
        </ol>
      </div>
    </div>
    </section><!-- Breadcrumbs Section -->
    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="about-info__content d-flex align-items-center">
                    <div class="col-lg-5 col-md-4 col-12">
                        <img class="about-idea-img" src="<?php echo $redux_params["about-brand-image-first"]["url"];?>" alt="Идея и женщина">
                    </div>
                    <div class="col-lg-7 col-md-8 col-12">
                        <div class="about-idea__wrapper">
                            <h2 class="about-idea__title"><?php echo $redux_params["about-brand-title-1"];?></h2>
                            <p class="about-idea__desc"><?php echo $redux_params["about-brand-section-desc-first"];?>
                            </p>
                            <p class="about-idea__desc"><?php echo $redux_params["about-brand-section-desc-second"];?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="about-info__content_second d-flex align-items-center">
                    <div class="col-lg-7 col-md-8 col-12">
                        <div class="about-idea-second__wrapper">
                            <h2 class="about-idea__title"><?php echo $redux_params["about-brand-title-2"];?></h2>
                            <p class="about-idea__desc about-idea__desc_two"><?php echo $redux_params["about-brand-section-desc-third"];?>
                            </p>
                            <p class="about-idea__desc about-idea__desc_two"><?php echo $redux_params["about-brand-section-desc-fourth"];?> 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-12">
                        <img class="about-idea-img" src="<?php echo $redux_params["about-brand-image-second"]["url"];?>" alt="Магия в деталях">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="btn-wrapper">
                        <a href="<?php echo $redux_params["about-brand-section-link"];?>" class="offer__btn">
                            Перейти в магазин
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
?>