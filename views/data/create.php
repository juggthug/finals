<?php

use yii\helpers\Html;


$this->title = 'Create Data';
$this->params['breadcrumbs'][] = ['label' => 'Data', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
