<?php

use yii\helpers\Html;


$this->title = 'Create Attribute';
$this->params['breadcrumbs'][] = ['label' => 'Attribute', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="attribute-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
