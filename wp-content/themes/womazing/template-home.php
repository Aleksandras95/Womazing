<?php

/*
* Template name: Home
*/

get_header();

global $redux_params;
?>

<section class="section-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-5 col-xs-12">
                    <div class="offer">
                        <div class="offer__slider">
                            <h1 class="offer__title">
                            <?php echo $redux_params["slider-title-1"];?>
                            </h1>
                            <p class="offer__text">
                            <?php echo $redux_params["slider-description1"]; ?>
                            </p>
                        </div>
                        <div class="offer__slider">
                            <h1 class="offer__title">
                            <?php echo $redux_params["slider-title-2"];?>
                            </h1>
                            <p class="offer__text">
                            <?php echo $redux_params["slider-description2"]; ?>
                            </p>
                        </div>
                        <div class="offer__slider">
                            <h1 class="offer__title">
                            <?php echo $redux_params["slider-title-3"];?>
                            </h1>
                            <p class="offer__text">
                            <?php echo $redux_params["slider-description3"]; ?>
                            </p>
                        </div>
                    </div>
                    <div class="offer__btns d-flex">
                        <a href="#" class="offer__btn-arrow">
                            <img class="arrow-down_icon" src="<?php bloginfo('template_directory')?>/assets/img/arrow-down1.png" alt="Arrow down">
                        </a>
                        <a href="<?php echo $redux_params["home-offer-section-link"]; ?>" class="offer__btn">
                            Открыть магазин
                        </a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7 image-bg">
                    <div class="image-bg__wrapper">
                        <div class="image-bg__slider">
                            <div class="slide">
                                <img class="hero-img" src="<?php echo $redux_params["offer-image-slide-first"]["url"];?>" alt="Hero-img">
                            </div>
                            <div class="slide">
                                <img class="hero-img" src="<?php echo $redux_params["offer-image-slide-second"]["url"];?>" alt="Hero-img-2">
                            </div>
                            <div class="slide">
                                <img class="hero-img" src="<?php echo $redux_params["offer-image-slide-third"]["url"];?>" alt="Hero-img-3">
                            </div>
                        </div>
                        <img class="hero-img__secondary" src="<?php echo $redux_params["offer-image-small-first"]["url"];?>" alt="Hero-secondary">
                        <img class="hero-img__third" src="<?php echo $redux_params["offer-image-small-second"]["url"];?>" alt="Hero-third">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-collections" id="section-collections">
        <div class="container">
            <div class="row align-items-center">
            <div class="col-lg-12">
                <h2 class="section-title section-title_collection">
                <?php echo $redux_params["collection-section-title"]; ?>
                </h2>
            </div>  
            </div>
            <div class="row align-items-center">
                <div class="collection d-flex">
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="collection-photo">
                            <img src="<?php echo $redux_params["collection-image-first"]["url"];?>" alt="Collection-1">
                            <a href="product-details.html" class="collection-photo__overlay">
                                <img class="collection-icon" src="<?php bloginfo('template_directory')?>/assets/img/overlay-arrow.svg" alt="search">
                            </a>
                        </div>
                        <h3 class="collection__title"><?php echo $redux_params["collection-image-description-first"]; ?></h3>
                        <p class="collection__price"><s>$229</s> $129</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="collection-photo">
                            <img src="<?php echo $redux_params["collection-image-second"]["url"];?>" alt="Project-1">
                            <a href="product-details.html" class="collection-photo__overlay">
                                <img class="collection-icon" src="<?php bloginfo('template_directory')?>/assets/img/overlay-arrow.svg" alt="search">
                            </a>
                        </div>
                        <h3 class="collection__title"><?php echo $redux_params["collection-image-description-second"]; ?></h3>
                        <p class="collection__price">$129</p>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="collection-photo">
                            <img src="<?php echo $redux_params["collection-image-third"]["url"];?>" alt="Project-1">
                            <a href="product-details.html" class="collection-photo__overlay">
                                <img class="collection-icon" src="<?php bloginfo('template_directory')?>/assets/img/overlay-arrow.svg" alt="search">
                            </a>
                        </div>
                        <h3 class="collection__title"><?php echo $redux_params["collection-image-description-third"]; ?></h3>
                        <p class="collection__price">$129</p>
                    </div>
                </div>
                <a href="<?php echo $redux_params["collection-section-link"]; ?>" class="offer__btn collection__btn">
                    Открыть магазин
                </a>
            </div>
        </div>
    </section>
    <section class="section-features" id="section-features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h2 class="section-title section-title_features">
                    <?php echo $redux_params["features-section-title"]; ?>
                    </h2>
                </div>  
            </div>
            <div class="row align-items-center">
                <div class="features d-flex">
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="feature-item">
                            <img class="feature-item__icon" src="<?php echo $redux_params["features-image-first"]["url"];?>" alt="Качество">
                            <div class="feature-item_info">
                                <h3 class="feature-item_info__title"><?php echo $redux_params["features-image-title-first"]; ?></h3>
                            <p class="feature-item_info__desc feature-item_info__desc-first">
                            <?php echo $redux_params["features-image-description-first"]; ?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="feature-item">
                            <img class="feature-item__icon" src="<?php echo $redux_params["features-image-second"]["url"];?>" alt="Скорость">
                            <div class="feature-item_info">
                                <h3 class="feature-item_info__title"><?php echo $redux_params["features-image-title-second"]; ?></h3>
                            <p class="feature-item_info__desc">
                            <?php echo $redux_params["features-image-description-second"]; ?>
                            </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-12">
                        <div class="feature-item">
                            <img class="feature-item__icon" src="<?php echo $redux_params["features-image-third"]["url"];?>" alt="Ответственность">
                            <div class="feature-item_info">
                                <h3 class="feature-item_info__title"><?php echo $redux_params["features-image-title-third"]; ?></h3>
                            <p class="feature-item_info__desc">
                            <?php echo $redux_params["features-image-description-third"]; ?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-team" id="section-team">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <h2 class="section-title section-title_team">
                    <?php echo $redux_params["team-section-title"]; ?>
                    </h2>
                </div>  
            </div>
            <div class="row align-items-center">
                <div class="col-xl-9 col-12">
                    <div class="team">
                        <div class="team-slider">
                            <img src="<?php echo $redux_params["team-slider-image-first"]["url"];?>" alt="Team-1">
                        </div>
                        <div class="team-slider">
                            <img src="<?php echo $redux_params["team-slider-image-second"]["url"];?>" alt="Team-2">
                        </div>
                        <div class="team-slider">
                            <img src="<?php echo $redux_params["team-slider-image-third"]["url"];?>" alt="Team-3">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-12">
                    <div class="team-info">
                        <h3 class="team-info__title"><?php echo $redux_params["team-content-title"]; ?></h3>
                        <p class="team-info__desc">
                        <?php echo $redux_params["team-content-description-first"]; ?>
                        </p>
                        <p class="team-info__desc">
                        <?php echo $redux_params["team-content-description-second"]; ?>
                        </p>
                        <a class="team-info__btn" href="<?php echo $redux_params["team-section-link"]; ?>">Подробнее о бренде</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    get_footer();
    ?>