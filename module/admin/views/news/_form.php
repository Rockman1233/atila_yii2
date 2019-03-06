<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $imageModel app\models\ImageUpload */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'header')->textInput(['maxlength' => true])->label('Заголовок') ?>

    <?= $form->field($model, 'text')->textarea(['maxlength' => true])->label('Текст') ?>

    <?= $form->field($imageModel, 'image')->fileInput()->label('Картинка к новости') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
