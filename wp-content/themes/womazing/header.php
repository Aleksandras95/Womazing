<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package womazing
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header class="header" id="header">
        <div class="container">
            <div class="row d-flex align-items-center flex-lg-row">
                <div class="col-xl-3 col-lg-4 col-md-4 col-6 d-flex align-items-center">
                    <a href="<?php echo esc_url(home_url( '/' ) ); ?>" class="logo"><?php the_custom_logo(); ?></a>
                </div>
                <div class="col-xl-5 col-lg-2 col-md-3 col-1 d-flex justify-content-end">
                    <div class="menu-mobile">
                        <div id="close-nav-menu" class="close-nav-menu d-none">
                            <img src="<?php bloginfo('template_directory')?>/assets/img/close.png" alt="close-nav">
                        </div>
                        <nav class="menu d-xl-block">
						<?php
							wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'container'       => 'menu',
								'menu_id'        => 'primary-menu',
								'container_class' => 'menu__item',
								'container_id' => '',
								'menu_class' => 'menu-list d-flex',
								)
							);
						?>
                            <!-- <ul class="menu-list d-flex">
                                <li class="menu__item">
                                    <a href="index.html" class="menu__link menu__item_active">Главная</a>
                                </li>
                                <li class="menu__item">
                                    <a href="shop.html" class="menu__link">Магазин</a>
                                </li>
                                <li class="menu__item">
                                    <a href="about-brand.html" class="menu__link">О бренде</a>
                                </li>
                                <li class="menu__item">
                                    <a href="contacts.html" class="menu__link">Контакты</a>
                                </li>
                            </ul> -->
                        </nav>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-5 col-5 d-flex align-items-center ml-auto">
                    <div class="callback ml-auto">
                        <button id="callback-open" type="button">
                            <img class="callback-icon" src="<?php bloginfo('template_directory')?>/assets/img/zakazzvonka.svg" alt="Заказ звонка">
                            +7 (495) 823-54-12
                        </button>
                    </div>
                    <div class="cart ml-auto">
                        <a href="cart.html">
                            <img class="cart-icon" src="<?php bloginfo('template_directory')?>/assets/img/shopping-bags 1.png" alt="Корзина">
                        </a>
                    </div>
                    <button id="menu-mobile-open" class="d-xl-none d-lg-flex ml-auto" type="button">
                        <img src="<?php bloginfo('template_directory')?>/assets/img/menu-dark.png" alt="menu">
                    </button>
                </div>
            </div>
        </div>
    </header>
