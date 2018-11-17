<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PostSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '木木子图书馆';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= Html::encode($this->title) ?></h1>

<div class="post-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="row">
        <div class="col-md-9">
            <?= $form->field($searchModel, 'book_name',['options'=>['class'=>'saerch_box']])->label('',['class'=>'hidden'])->textInput(['placeHolder'=>'请输入图书名称搜索']) ?>

            <?php // echo $form->field($model, 'publish') ?>

            <?php // echo $form->field($model, 'price') ?>
        </div>
        <div class="form-group col-md-3">
            <?= Html::submitButton('搜  索', ['class' => 'btn btn-primary']) ?>
            <?= Html::a('添  加', ['create'], ['class' => 'btn btn-info']) ?>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>
<div class="post-index">


    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            // ['class' => 'yii\grid\SerialColumn'],
            'id',
            'catalog',
            'book_name',
            'author',
            'create_time',
            'publish',
            'price',

            ['class' => 'yii\grid\ActionColumn', 'template' => '{delete}'],
        ],
    ]); ?>
</div>
