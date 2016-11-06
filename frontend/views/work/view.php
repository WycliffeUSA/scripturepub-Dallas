<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $id integer */
/* @var $model \frontend\models\Work */
$this->title = $model->step;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Work'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->app_name;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="app-view">
    <h1><?= Html::encode($this->title) ?></h1>


    <!-- TODO: Ansible view of $model->fields, $model->values -->
</div>