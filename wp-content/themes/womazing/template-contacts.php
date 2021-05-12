<?php

/*
* Template name: Contacts
*/

get_header();

?>

<!-- ======= Breadcrumbs Section ======= -->
<section class="section-breadcrumbs">
    <div class="container">
      <div class="shop-info">
        <h2 class="shop-info__title"><?php echo $redux_params["contacts-section-title"]; ?></h2>
        <ol class="breadcrumbs">
          <li class="breadcrumbs__item">
              <a class="breadcrumbs__link" href="../index.html">Главная</a>
            </li>
          <li class="breadcrumbs__item">Контакты</li>
        </ol>
      </div>
    </div>
    </section><!-- Breadcrumbs Section -->
    <section class="section-contact-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2249.0538454422817!2d37.529893115486004!3d55.688051604452156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54cf681cd88db%3A0x2a3fadda3df86f1b!2sUlitsa%20Stroiteley%2C%2025%2C%20Moskva%2C%20Russia%2C%20119311!5e0!3m2!1sen!2slt!4v1618847887463!5m2!1sen!2slt" width="1109" height="476" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="row">
                <div class="contacts-info__wrapper d-flex">
                    <div class="col-lg-4">
                        <div class="phone">
                            <h3 class="contact-info__title">
                            <?php echo $redux_params["contacts-info-title-1"]; ?>
                            </h3>
                            <a href="#" class="contact-info__desc contact-info__desc_btn"><?php echo $redux_params["contacts-info-desc-first"]; ?></a>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="email">
                            <h3 class="contact-info__title">
                            <?php echo $redux_params["contacts-info-title-2"]; ?>
                            </h3>
                            <a href="#" class="contact-info__desc contact-info__desc_btn"><?php echo $redux_params["contacts-info-desc-second"]; ?></a>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="adress">
                            <h3 class="contact-info__title">
                            <?php echo $redux_params["contacts-info-title-3"]; ?>
                            </h3>
                            <p class="contact-info__desc"><?php echo $redux_params["contacts-info-desc-third"]; ?></p>
                        </div>
                    </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="forms/contact.php" id="mainForm" method="post" role="form" class="php-email-form">
                        <div class="row">
                          <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Имя" required>
                          </div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                          </div>
                        <div class="form-group">
                          <input type="text" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
                        </div>
                        <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" placeholder="Сообщение" required></textarea>
                        </div>
                        <div class="text-center"><button class="form-btn" type="submit">Отправить</button></div>
                    <div class="form-succed-content">
                        <span class="form-thanks">Сообщение успешно отправлено</span>
                    </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
    </section>


<?php
get_footer();
?>