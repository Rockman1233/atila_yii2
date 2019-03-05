<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'О нас';
?>
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('web/img/turkey.jpg')">
    <div class="container overlay">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">
                    <!--
                    <h1>About Us</h1>
                    <hr class="small">
                    -->
                    <h1 id="kingdom-font">Сделано в Турции</h1>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <p>В XXI веке Турция - один из крупнейших поставщиков текстиля для многих стран.
                Текстильная промышленность стала одним из ведущих секторов экономики.
                Турецкий хлопок, в достаточном количестве выращиваемый на солнечных плантациях
                различных провинций, обладает отличным качеством.</p>
            <p>Однако, сегодня Турция уже не конкурирует с другими странами-производителями текстиля за
                дешевизну продукции, а прочно заняла нишу высококачественных изделий, отвечающих всем европейским и мировым тенденциям моды со строгими стандартами качества.</p>
            <?= Html::img(('@web/img/underwear.jpg'), ['class' => 'img-responsive']); ?>
            <span class="caption text-muted">Grand Bazaar, в центре Стамбула. Один из крупнейших крытых рынков мира. Именно там мы заказываем наши товары.</span>
            <p>Турецкие ткани, постельное белье, пледы и другие текстильные изделия завоевали признание во всем мире. Прекрасное качество турецкого текстиля,
                уникальные национальные, классические и современные мотивы в сочетании с искусно подобранными расцветками позволяют этим товарам не залеживаться
                на прилавках магазинов.<br>
            <div id="copyright"> Подробнее - http://spim.ru/info/bed_linens/Tureckoe-postelnoe-bele-stil-i-kachestvo_1830_41_article.html</div>
            </p>

        </div>
    </div>
</div>