<!-- Extra -->
<section id="extra">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-8 col-lg-5 text-center text-lg-left">
                <h2 class="section-title">
                    <?= $extra['title']; ?>
                </h2>
            </div>
            <div class="col-sm-10 col-lg-7">
                <div class="extra-slider">
                    <?php foreach ($extra['items'] as $item) : ?>
                        <div class="extra-slider-item">
                            <div class="extra-item">
                                <div class="extra-item__image">
                                    <img src="<?= $item['image']; ?>" alt="extra image">
                                </div>
                                <div class="product-price">
                                    <?= $item['price']; ?> грн
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-arrow slider-arrow--extra">
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
    </div>
</section>