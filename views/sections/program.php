<!-- Program -->
<section id="program">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center">
                    <?= $program['title']; ?>
                </h2>
            </div>
            <?php foreach ($program['items'] as $item) : ?>
                <div class="col-sm-6 col-xl-3">
                    <div class="program-card program-card--<?= $item['class'] ?>">
                        <h3 class="program-card__title">
                            <?= $item['title']; ?>
                        </h3>
                        <div class="program-card-body">
                            <div class="program-card-icon">
                                <img src="<?= $item['icon']; ?>" alt="program icon">
                            </div>
                            <ul class="program-card-list">
                                <?php foreach ($item['ingredient'] as $value) : ?>
                                    <li><?= $value; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="program-card-footer">
                            <div class="quantity">
                                <div class="quantity-button quantity-down">-</div>
                                <input type="number" class="quantity-input form-control"
                                       name="basket_quantity" min="1" value="1">
                                <div class="quantity-button quantity-up">+</div>
                            </div>
                            <div class="product-price">
                                <span><?= $item['price']; ?></span> грн
                            </div>
                        </div>
                        <a href="#" class="btn btn-outline-primary w-100">
                            в корзину
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>