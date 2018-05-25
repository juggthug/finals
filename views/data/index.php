<?php 

use yii\helpers\Html;


$this->title = "Data";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest ): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a Data.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Data',['/data/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Patient ID</th>
        <th>Attribute ID</th>
        <th>Date</th>
        <th>Value</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->patient_iD, ['/data/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->attribute_id ?></td>
        <td><?= $model->date ?></td>
        <td><?= $model->value ?></td>
    </tr>
    <?php endforeach; ?>
</table>
