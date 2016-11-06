<?php
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ArrayDataProvider */

$this->title = Yii::t('frontend', 'Work');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'app_name',
            'step',
//            'action',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{view}'],
        ],
    ]); ?>



    </div>
</div>
