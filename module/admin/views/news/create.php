<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $imageModel app\models\ImageUpload */

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'imageModel' => $imageModel,
    ]) ?>

</div>
