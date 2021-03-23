<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\AssignBook */

$this->title = 'Create Assign Book';
$this->params['breadcrumbs'][] = ['label' => 'Assign Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assign-book-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
