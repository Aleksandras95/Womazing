<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */

?>

<footer class="footer" id="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-12">
                    <div class="footer-info">
						<a href="#" class="logo footer-logo"></a>
						<p class="footer-info__text">
							© Все права защищены
                        </p>
                        <a class="footer-info__text" href="#">Политика конфиденциальности</a>
                        <a class="footer-info__text" href="#">Публичная оферта</a>
					</div>
                </div>
                <div class="col-md-7 col-12">
                    <ul class="footer-nav d-flex flex-column flex-md-row">
                        <li class="footer-nav__item">
                            <a href="#" class="footer-nav__link footer-nav__link_active">Главная</a>
                        </li>
                        <li class="footer-nav__item">
                            <a href="#" class="footer-nav__link">Магазин</a>
                            <ul class="footer-subnav">
								<li class="footer-subnav__item"> 
									<a href="#" class="footer-subnav__link">
										Пальто
									</a>
								</li>
								<li class="footer-subnav__item">
									<a href="#" class="footer-subnav__link">
										Свитшоты
									</a>
								</li>
								<li class="footer-subnav__item">
									<a href="#" class="footer-subnav__link">
										Кардиганы
									</a>
								</li>
								<li class="footer-subnav__item">
									<a href="#" class="footer-subnav__link">
										Толстовки
									</a>
								</li>
							</ul>
                        </li>
                        <li class="footer-nav__item">
                            <a href="#" class="footer-nav__link">О бренде</a>
                        </li>
                        <li class="footer-nav__item">
                            <a href="#" class="footer-nav__link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-12">
                    <div class="footer-contact">
                        <div class="footer-contact__info">
                            <button id="callback-open-footer" type="button" class="footer__phone-number">+7 (495) 823-54-12</button>
                            <a href="mailto:info@womazing.ru" class="footer__email">hello@womazing.com</a>
                        </div>
                        <div class="footer-contact__social">
                            <a href="#" class="social-icon">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/insta-icon.png" alt="Instagram">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/facebook-icon.png" alt="Facebook">
                            </a>
                            <a href="#" class="social-icon">
                                <img src="<?php bloginfo('template_directory')?>/assets/img/twitter-icon.png" alt="Twitter">
                            </a>
                        </div>
                        <div class="footer-contact__cards">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/visa-mastercard.png" alt="Visa/Mastercard">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!---Modal window--->
  <div class="modal-wrapper" id="wrapper-modal">
    <!-- <div id="overlay"></div> -->
    <div class="modal-window" id="modal-window">
      <div class="content">
            <button type="button" id="btn-close" class="btn btn-close">
                <img class="close-btn" src="<?php bloginfo('template_directory')?>/assets/img/close.png" alt="Close">
            </button>
            <h2 class="modal-title">Заказать обратный звонок</h2>
            <form action="forms/contact.php" id="modalForm" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Имя" required>
                </div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Телефон" required>
              </div>
              <button class="submit-btn" type="submit" data-submit>Заказать звонок</button>
            </form>
          </div>
    </div>
    <div class="thanks-window text-center">
      <h2 class="thanks-window-title">Отлично! Мы скоро вам перезвоним.</h2>
      <button id="thanks-btn-close" class="thanks-btn" type="submit" data-submit>Закрыть</button>
  </div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>
