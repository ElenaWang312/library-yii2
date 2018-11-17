<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\post */
// echo "<pre>";
// print_r($this);
// echo "<pre>";
$this->title = '添加书籍';
$this->params['breadcrumbs'][] = ['label' => '木木子图书馆', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="post-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
