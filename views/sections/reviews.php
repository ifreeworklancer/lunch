<!-- Reviews -->
<section id="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $reviews['title']; ?>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 px-0">
                <div class="reviews-slider">
                    <?php foreach ($reviews['items'] as $item) : ?>
                        <div class="reviews-slider-item">
                            <div class="reviews-item">
                                <div class="reviews-item-header">
                                    <figure style="background-image: url(<?= $item['image']; ?>);"
                                            class="reviews-item__image flex-shrink-0"></figure>
                                    <div>
                                        <div class="reviews-item__name">
                                            <?= $item['name']; ?>
                                        </div>
                                        <div class="reviews-item__position">
                                            <?= $item['position']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="reviews-item__description">
                                    <?= $item['description']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="slider-arrow slider-arrow--reviews">
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