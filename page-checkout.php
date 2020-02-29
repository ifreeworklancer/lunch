<?php

require_once('store.php');
require_once('functions.php');
require_once('views/base/header.php');
?>

    <!-- Page checkout -->
    <section id="checkout">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Главная</a></li>
                            <li class="breadcrumb-item active"><?= $page_contacts['title']; ?></li>
                        </ol>
                    </nav>
                    <h2 class="section-title text-center">
                        <?= $page_contacts['title']; ?>
                    </h2>
                </div>
                <div class="col-sm-11 col-lg-7">
                    <form class="checkout-form">
                        <div class="checkout-form-item">
                            <h5 class="checkout-form__title">
                                Ваши контактные данные
                            </h5>
                            <div class="form-column">
                                <div class="form-group">
                                    <label for="name">
                                        ФИО
                                    </label>
                                    <input type="text" id="name" name="name" class="form-control"
                                           placeholder="Введите имя и фамилию" required>
                                </div>
                                <div class="form-group">
                                    <label for="phone">
                                        Телефон
                                    </label>
                                    <input type="tel" id="phone" name="phone" class="form-control"
                                           placeholder="Введите номер телефона" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email
                                    </label>
                                    <input type="email" id="email" name="email" class="form-control"
                                           placeholder="Введите email">
                                </div>
                                <div class="form-group">
                                    <label for="address">
                                        Адрес доставки
                                    </label>
                                    <input type="text" id="address" name="address" class="form-control"
                                           placeholder="Введите улицу, дом, квартиру" required>
                                </div>
                                <div class="additional-info">
                                    * Адрес доставки можно менять до 12:00 текущего дня
                                </div>
                            </div>
                        </div>
                        <div class="checkout-form-item">
                            <h5 class="checkout-form__title">
                                Выберите дни доставки
                            </h5>
                            <div class="form-column">
                                <div class="form-group form-group--date">
                                    <label for="date">
                                        Выберите даты *
                                    </label>
                                    <input type="text" id="date" name="date" class="form-control"
                                           placeholder="25.03.2019" required>
                                    <div class="date-icon">
                                        <svg width="18" height="18">
                                            <use xlink:href="#calendar-icon"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="additional-info">
                                    * При заказе бизнес-ланчей на текущий день, доставка
                                    возможна только на следующий день
                                </div>
                            </div>
                        </div>
                        <div class="checkout-form-item">
                            <h5 class="checkout-form__title">
                                Выберите способ оплаты
                            </h5>
                            <div class="form-column">
                                <div class="form-group form-group-radio form-group-radio--long">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="cash-payment" name="type_payment"
                                               checked="checked"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="cash-payment">
                                            Наличными
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="card-payment" name="type_payment"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="card-payment">
                                            На карту ПриватБанка
                                        </label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="cashless-payment" name="type_payment"
                                               class="custom-control-input">
                                        <label class="custom-control-label" for="cashless-payment">
                                            Безналичный рассчет
                                        </label>
                                    </div>
                                </div>
                                <button class="btn btn-primary">
                                    оплатить
                                </button>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="terms" name="terms">
                                    <label class="custom-control-label" for="terms">
                                        Я согласен с условиями <a href="#">соглашения</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-9 col-lg-5 px-1 px-sm-2">
                    <div class="basket-card">
                        <div class="basket-card-header">
                            <h5 class="basket-card__title">
                                Ваша корзина
                            </h5>
                        </div>
                        <div class="basket-card-body">
                            <div class="basket-item">
                                <div class="basket-item__title">
                                    Бизнес-ланч «Light»
                                </div>
                                <div class="quantity">
                                    <div class="quantity-button quantity-down">-</div>
                                    <input type="number" class="quantity-input form-control"
                                           name="basket_quantity" min="1" value="1">
                                    <div class="quantity-button quantity-up">+</div>
                                </div>
                                <div class="product-price">
                                <span>
                                    165
                                </span>
                                    грн
                                </div>
                                <div class="basket-item-close">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                            <div class="basket-item">
                                <div class="basket-item__title">
                                    Бизнес-ланч «Light»
                                </div>
                                <div class="quantity">
                                    <div class="quantity-button quantity-down">-</div>
                                    <input type="number" class="quantity-input form-control"
                                           name="basket_quantity" min="1" value="1">
                                    <div class="quantity-button quantity-up">+</div>
                                </div>
                                <div class="product-price">
                                <span>
                                    165
                                </span>
                                    грн
                                </div>
                                <div class="basket-item-close">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                            <div class="basket-item">
                                <div class="basket-item__title">
                                    Бизнес-ланч «Light»
                                </div>
                                <div class="quantity">
                                    <div class="quantity-button quantity-down">-</div>
                                    <input type="number" class="quantity-input form-control"
                                           name="basket_quantity" min="1" value="1">
                                    <div class="quantity-button quantity-up">+</div>
                                </div>
                                <div class="product-price">
                                    <span>
                                        165
                                    </span>
                                    грн
                                </div>
                                <div class="basket-item-close">
                                    <div class="line line--left"></div>
                                    <div class="line line--right"></div>
                                </div>
                            </div>
                            <div class="basket-card-additional">
                                <a href="#" class="btn btn-outline-primary btn-additional">
                                    добавить к заказу
                                    <svg width="10" height="10">
                                        <use xlink:href="#arrow-down"></use>
                                    </svg>
                                </a>
                                <div class="basket-item">
                                    <div class="basket-item__title">
                                        Хлеб «Белый»
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-button quantity-down">-</div>
                                        <input type="number" class="quantity-input form-control"
                                               name="basket_quantity" min="1" value="1">
                                        <div class="quantity-button quantity-up">+</div>
                                    </div>
                                    <div class="product-price">
                                <span>
                                    165
                                </span>
                                        грн
                                    </div>
                                    <div class="basket-item-close">
                                        <div class="line line--left"></div>
                                        <div class="line line--right"></div>
                                    </div>
                                </div>
                                <div class="basket-item">
                                    <div class="basket-item__title">
                                        Соль
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-button quantity-down">-</div>
                                        <input type="number" class="quantity-input form-control"
                                               name="basket_quantity" min="1" value="1">
                                        <div class="quantity-button quantity-up">+</div>
                                    </div>
                                    <div class="product-price">
                                <span>
                                    165
                                </span>
                                        грн
                                    </div>
                                    <div class="basket-item-close">
                                        <div class="line line--left"></div>
                                        <div class="line line--right"></div>
                                    </div>
                                </div>
                                <div class="basket-item">
                                    <div class="basket-item__title">
                                        Перец
                                    </div>
                                    <div class="quantity">
                                        <div class="quantity-button quantity-down">-</div>
                                        <input type="number" class="quantity-input form-control"
                                               name="basket_quantity" min="1" value="1">
                                        <div class="quantity-button quantity-up">+</div>
                                    </div>
                                    <div class="product-price">
                                    <span>
                                        165
                                    </span>
                                        грн
                                    </div>
                                    <div class="basket-item-close">
                                        <div class="line line--left"></div>
                                        <div class="line line--right"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="basket-card-footer">
                            <div class="basket-card-total basket-card-total--delivery">
                                <span class="basket-card-total__title">
                                Доставка:*
                                </span>
                                <span class="basket-card-total__value">
                                    <span>
                                        10
                                    </span>
                                    грн
                                </span>
                            </div>
                            <div class="basket-card-total basket-card-total--product">
                                <span class="basket-card-total__title">
                                Итого:
                                </span>
                                <span class="basket-card-total__value">
                                    <span>
                                        560
                                    </span>
                                    грн
                                </span>
                            </div>
                            <div class="additional-info">
                                * При заказе до 3 порций стоимость доставки - 10 грн за кадую порцию, свыше 3 порций (4
                                и более) - доставка бесплатна.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
require_once('views/base/footer.php');