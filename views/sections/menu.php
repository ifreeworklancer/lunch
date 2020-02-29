<!-- Menu -->
<section id="menu">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-lg-6 text-center">
                <h2 class="section-title">
                    <?= $menu['title']; ?>
                </h2>
                <p class="section-subtitle">
                    <?= $menu['subtitle']; ?>
                </p>
            </div>
            <div class="col-md-10 col-lg-12">
                <div class="custom-tabs">
                    <nav class="custom-tabs-nav">
                        <ul class="custom-tabs-nav-list">
                            <?php
                            $count = 0;
                            foreach ($menu['tabs'] as $tab) :
                                $count++; ?>
                                <li class="btn <?php if ($count === 1) echo 'active' ?>">
                                    <?= $tab['nav_title']; ?>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </nav>
                    <div class="custom-tabs-body">
                        <?php
                        $count = 0;
                        foreach ($menu['tabs'] as $tab) :
                            $count++; ?>
                            <div class="custom-tabs-body-item <?php if ($count === 1) echo 'active' ?>">
                                <nav class="menu-nav">
                                    <ul class="menu-nav-list menu-nav-list--<?= $count; ?>">
                                        <?php
                                        $countItem = 0;
                                        foreach ($tab['items'] as $items) :
                                            $countItem++; ?>
                                            <li class="<?php if ($count === 2 && $countItem === 1) echo 'active' ?>">
                                                <?= $items['item_title']; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </nav>
                                <div class="menu-slider menu-slider--<?= $count; ?>">
                                    <?php
                                    foreach ($tab['items'] as $items) : ?>
                                        <div class="menu-slider-item">
                                            <div class="menu-card">
                                                <div class="menu-card-prev">
                                                    <figure style="background-image: url(<?= $items['image']; ?>);"
                                                            class="menu-card__image"></figure>
                                                </div>
                                                <div class="menu-card-body">
                                                    <?php
                                                    foreach ($items['item'] as $item) : ?>
                                                        <div class="menu-card-body-item">
                                                            <div class="menu-card-description">
                                                                <div class="menu-card__weight">
                                                                    <?= $item['weight']; ?>
                                                                </div>
                                                                <div>
                                                                    <h3 class="menu-card__title">
                                                                        <?= $item['title']; ?>
                                                                    </h3>
                                                                    <div class="menu-card__calorie">
                                                                        <?= $item['calorie']; ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="menu-card__ingredient">
                                                                <?php foreach ($item['ingredient'] as $ingredient) : ?>
                                                                    <li>
                                                                        <img src="<?= $ingredient; ?>" alt="ingredient">
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        </div>
                                                    <?php endforeach; ?>
                                                    <a href="#" class="btn btn-primary">
                                                        Заказать
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="slider-arrow slider-arrow--menu">
                                        <div class="slider-arrow-item slider-arrow-item--prev">
                                            <svg width="12" height="20">
                                                <use xlink:href="#arrow-prev"></use>
                                            </svg>
                                        </div>
                                        <div class="slider-arrow-item slider-arrow-item--next">
                                            <svg width="12" height="20">
                                                <use xlink:href="#arrow-next"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>