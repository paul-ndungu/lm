<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AssignBook */

$this->title = 'Update Assign Book: ' . $model->assignBookId;
$this->params['breadcrumbs'][] = ['label' => 'Assign Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->assignBookId, 'url' => ['view', 'id' => $model->assignBookId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="assign-book-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
