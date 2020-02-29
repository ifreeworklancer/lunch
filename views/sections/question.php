<!-- Question -->
<section id="question">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h2 class="section-title">
                    <?= $question['title']; ?>
                </h2>
            </div>
            <div class="col-sm-10">
                <?php foreach ($question['items'] as $item) : ?>
                    <div class="question-item">
                        <div class="question-item-input">
                            <div class="question-item__title">
                                <?= $item['title']; ?>
                            </div>
                            <div class="question-item__icon">
                                <div class="line line--left"></div>
                                <div class="line line--right"></div>
                            </div>
                        </div>
                        <div class="question-item-body">
                            <div class="question-item__description">
                                <?= $item['description']; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <div class="text-center mt-4 mt-sm-5">
                    <a href="#" class="btn btn-outline-primary">
                        смотреть остальные ответы
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>