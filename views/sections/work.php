<!-- Work -->
<section id="work">
    <div class="container">
        <div class="row position-relative justify-content-center align-items-center">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $work['title']; ?>
                </h2>
            </div>
            <?php $count = 0;
            foreach ($work['items'] as $item) : $count++; ?>
                <div class="col-sm-8 <?php if ($count !== 4) echo 'col-lg-4'; else echo 'col-lg-5'; ?>">
                    <div class="work-item work-item--<?= $count; ?>">
                        <div class="work-item__image">
                            <img src="<?= $item['icon']; ?>" alt="work image">
                        </div>
                        <div class="work-item__description">
                            <?= $item['description']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <figure style="background-image: url('../../images/content/work/decor-image-1.png')" class="decor-image decor-image--1"></figure>
            <figure style="background-image: url('../../images/content/work/decor-image-2.png')" class="decor-image decor-image--2 d-none d-lg-block"></figure>
            <figure style="background-image: url('../../images/content/work/decor-image-2.png')" class="decor-image decor-image--3"></figure>
            <figure style="background-image: url('../../images/content/work/decor-image-3.png')" class="decor-image decor-image--4"></figure>
            <figure style="background-image: url('../../images/content/work/decor-image-3.png')" class="decor-image decor-image--5"></figure>
            <figure style="background-image: url('../../images/content/work/decor-image-3.png')" class="decor-image decor-image--6"></figure>
        </div>
    </div>
</section>