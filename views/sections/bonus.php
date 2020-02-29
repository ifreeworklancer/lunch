<!-- Bonus -->
<section id="bonus" style="background-image: url('<?= $bonus['image_bg']; ?>');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="bonus-item">
                    <h2 class="bonus-item__title">
                        <?= $bonus['title'] ?>
                    </h2>
                    <div class="bonus-item__subtitle">
                        <?= $bonus['subtitle']; ?>
                    </div>
                    <div class="bonus-item-description">
                        <?= $bonus['description']; ?>
                    </div>
                    <a href="#" class="btn btn-secondary">
                        заказать
                    </a>
                </div>
            </div>
        </div>
    </div>
    <figure style="background-image: url('<?= $bonus['image']; ?>');" class="bonus-image"></figure>
</section>