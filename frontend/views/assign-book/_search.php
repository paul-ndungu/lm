<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\AssignBookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="assign-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'assignBookId') ?>

    <?= $form->field($model, 'studentId') ?>

    <?= $form->field($model, 'bookId') ?>

    <?= $form->field($model, 'borrowDate') ?>

    <?= $form->field($model, 'returnDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
