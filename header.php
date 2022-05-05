<?php
ini_set("display_errors",1);
error_reporting(E_ALL);
//code goes here
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>"/>
    <meta content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title><?php wp_title( '«', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet"/>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper" id="wrapper">
    <header>
        <div class="header__contacts">
            <div class="contacts__item">
                <img class="contacts__item__icon"
                     src="<?php echo get_template_directory_uri(); ?>/images/icon/phone_icon.svg" alt="Регистратура">
                <p class="contacts__item__title">Ригестратура : 8(0152)31-54-04</p>
            </div>
            <div class="contacts__item">
                <img class="contacts__item__icon"
                     src="<?php echo get_template_directory_uri(); ?>/images/icon/phone_icon.svg" alt="Платные услуги">
                <p class="contacts__item__title">Платные услуги : 8(0152)31-54-07</p>
            </div>
            <div class="contacts__item">
                <img class="contacts__item__icon"
                     src="<?php echo get_template_directory_uri(); ?>/images/icon/location_icon.svg" alt="Адрес">
                <p class="contacts__item__title">230020 г. Гродно, ул. Кабяка, 22</p>
            </div>
        </div>
        <div class="header__box">
            <a href="/" class="logo_box">
                <img alt="logo" class="header_logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png"/>
            </a>
            <div class="header_title-box">
                <a href="/" class="header_subtitle text_left">Государственное учереждение здравоохранения</a>
                <a href="/" class="header_title text_left">Гродненский областной центр трансфузиологии</a>
                <a href="/" class="header_slogan">Стань донором - спаси одну жизнь!</a>
            </div>
        </div>
    </header>
    <nav role="navigation">
        <div class="nav__burger" id="nav__burger">
            <div class="burger__bar1"></div>
            <div class="burger__bar2"></div>
            <div class="burger__bar3"></div>
        </div>
        <ul class="nav__box" id="nav__box">
            <li class="nav-item"><a href="/">Главная</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item"><a href="/services">Услуги</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item">
                <a href="/to-donors">Донорам</a>
                <div class="nav-item-plank"></div>
                <ul class="nav__submenu">
                    <li class="nav-item"><a href="#">Часто задаваемые вопросы</a></li>
                    <li class="nav-item"><a href="#">Нормативные документы</a></li>
                </ul>
            </li>
            <li class="nav-item"><a href="/news">Новости</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item"><a href="/web-resources">Веб-ресурсы</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item"><a href="/employees">Сотрудникам</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item"><a href="/about-us">О нас</a>
                <div class="nav-item-plank"></div>
            </li>
            <li class="nav-item"><a href="">Кабинет донора</a>
                <div class="nav-item-plank"></div>
            </li>
        </ul>
    </nav>
