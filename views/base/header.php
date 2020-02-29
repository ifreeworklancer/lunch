<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>
    <link rel="stylesheet" href="../dist/app.css">
</head>

<body>

<!-- Svg -->
<?php include(__DIR__ . '/../modules/svgs.php'); ?>

<!-- App-header -->
<header id="app-header">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-3 col-md">
                <div class="burger-menu">
                    <div class="line line--top"></div>
                    <div class="line line--middle"></div>
                    <div class="line line--bottom"></div>
                </div>
            </div>
            <div class="col-6 col-md d-flex justify-content-center px-0 px-sm-2">
                <ul class="contacts-list">
                    <li class="text-center">
                        <a href="tel:+380670061200">
                            + 38 (067) <span class="text-primary">006-12-00</span>
                        </a>
                    </li>
                    <li class="text-center">
                        г. Запорожье
                    </li>
                </ul>
            </div>
            <div class="col-3 col-md d-flex justify-content-end">
                <div class="header-basket">
                    <div class="header-basket__icon">
                        <svg>
                            <use xlink:href="#basket-icon"></use>
                        </svg>
                    </div>
                    <div class="header-basket__value">
                        3
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="header-menu-list">
                        <li>
                            <a href="#">
                                Программы бизнес-лачней
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Меню
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Наши приоритеты
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Бонусная система
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Как это работает
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Вопросы
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Отзывы
                            </a>
                        </li>
                    </ul>
                    <ul class="contacts-list">
                        <li>
                            <a href="tel:+380670061200">
                                + 38 (067) <span class="text-primary">006-12-00</span>
                            </a>
                        </li>
                        <li>
                            г. Запорожье
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-menu-mask"></div>
    </div>
</header>

<!-- Modal -->
<?php include(__DIR__ . '/../modules/modal.php'); ?>

<!-- Main -->
<main>

    <!-- Basket modal -->
<?php include(__DIR__ . '/../modules/modal-basket.php'); ?>