<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ArrayDataProvider */

$this->title = Yii::t('frontend', 'Apps');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Create App', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'name',
            'language',
//            'action',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>



    </div>
</div>
