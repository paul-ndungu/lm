<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\BorrowedBookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="borrowed-book-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'bbId') ?>

    <?= $form->field($model, 'studentId') ?>

    <?= $form->field($model, 'bookId') ?>

    <?= $form->field($model, 'borrowDate') ?>

    <?= $form->field($model, 'expectedReturn') ?>

    <?php // echo $form->field($model, 'actualReturnDate') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
