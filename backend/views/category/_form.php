<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Имя') ?>

    <?= $form->field($model, 'parent_id')->textInput()->label('Основная категория') ?>

    <?= $form->field($model, 'position')->textInput() ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'meta_title')->textInput(['maxlength' => true])->label('Метатег Title:') ?>

    <?= $form->field($model, 'meta_description')->textInput(['maxlength' => true])->label('Метатег Description:') ?>

    <?= $form->field($model, 'meta_keywords')->textarea(['rows' => 6])->label('Метатег Keywords:') ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6])->label('Описание категории') ?>

    <?= $form->field($model, 'status')->textInput()->label('Статус') ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
