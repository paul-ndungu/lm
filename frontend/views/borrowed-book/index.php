<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\BorrowedBookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Borrowed Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="borrowed-book-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Borrowed Book', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'bbId',
            'studentId',
            'bookId',
            'borrowDate',
            'expectedReturn',
            //'actualReturnDate',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
