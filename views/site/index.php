<?php

/* @var $this yii\web\View */

$this->title = 'Кролевство нижнего белья';

use yii\bootstrap\Carousel;
use yii\helpers\Html; ?>

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<header class="intro-header" style="background-image: url('web/img/towels.jpeg')">
    <div class="container overlay">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1 id="kingdom-font" class="hidden-xs">Королевство нижнего белья</h1>
                    <h2 id="kingdom-font2" class="hidden-lg hidden-sm">Королевство нижнего белья</h2>
                    <span id="kingdom-font" class="subheading">Турецкое качество по умеренным ценам</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content -->


<div class="container-fluid container-90">
    <div class="row">

        <div class="col-md-4">
            <div class="post-preview">
                <?= Html::img(('@web/img/underwear.jpg'), ['class' => 'img-responsive']); ?>
                <h2 id="kingdom-font" class="post-title">
                    Нижнее белье
                </h2>
                <h4 class="post-subtitle">
                    Нижнее белье – это Ваше настроение и самоощущение. Даже если никто не знает о том,
                    какое на вас белье – вы будете чувствовать себя совершенно иначе. Кроме того, качественное и приятное
                    для тела белье очень удобно.
                </h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="post-preview">
                <?= Html::img(('@web/img/pizhamy_dlya_vsey_semi.jpg'), ['class' => 'img-responsive']); ?>
                <h2 id="kingdom-font" class="post-title">
                    Предпостельное
                </h2>
                <h4  class="post-subtitle">
                    Многие при выборе пижамы даже не задумываются о том, какое место она занимает в их гардеробе.
                    Особенно, когда речь идет о пижамах для всей семьи. Ведь это может стать доброй традицией,
                    которая дарит тепло и объединяет всех, заряжая радостью и хорошим настроением на весь день.
                </h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="post-preview">
                <?= Html::img(('@web/img/homewear.jpg'), ['class' => 'img-responsive']); ?>
                <h2 id="kingdom-font" class="post-title">
                    Одежда для дома и отдыха
                </h2>
                <h4 class="post-subtitle">
                    Откажитесь от спортивных костюмов с растянутыми коленками,
                    безразмерных футболок и старых потрёпанных вещей. Никаких «на улицу уже не выйдешь,
                    а дома сойдёт»! Дома на Вас смотрят ваши самые близкие и любимые люди – порадуйте их
                    обновленным домашним гардеробом.
                </h4>
            </div>
        </div>

    </div>
    <!-- Pager
    <ul class="pager">
        <li class="next">
            <a href="#">Older</a>
        </li>
    </ul> -->
    <div class="container">
        <?= Carousel::widget([
            'items' => [
                '<img class="img-responsive" src="/web/img/underwear.jpg" alt="">',
                [
                    'content' => '<img class="img-responsive" src="/web/img/homewear.jpg" alt="">',
                    'options' => ['interval' => '600']
                ],

                [
                    'content' => '<img class="img-responsive" src="/web/img/pizhamy_dlya_vsey_semi.jpg" alt="">',
                    'caption' => '<h4>This is title</h4><p>This is the caption text</p>',
                    'options' => ['interval' => '600']
                ],
            ],
            'options' => ['class' => 'slide']
        ]);
        ?>
    </div>
</div>
