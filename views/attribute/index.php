<?php 

use yii\helpers\Html;


$this->title = "Attribute";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest ): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a post.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Attribute',['/attribute/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Data Type</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/attribute/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->datatype ?></td
    </tr>
    <?php endforeach; ?>
</table>
