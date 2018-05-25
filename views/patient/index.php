<?php 

use yii\helpers\Html;


$this->title = "Patient";
$this->params['breadcrumbs'][] = $this->title;
?>

<h1><?= $this->title?></h1>
<?php if(Yii::$app->user->isGuest ): ?>
    <span class="pull-left">Please <?= Html::a('login',['/site/login'])?> to create a post.</span>
<?php else: ?>
<p>
    <?= Html::a('Create Patient',['/patient/create'],
        ['class'=>'btn btn-success']); ?>
        </p>
<?php endif; ?>
<table class="table table-bordered">
    <tr>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Birth Date</th>
    </tr>
    <?php foreach($model as $model) : ?>
    <tr>
    
    <td>
            <?= Html::a($model->name, ['/patient/view', 'id'=>$model->id]); ?>
        </td>  
        <td><?= $model->dob ?></td>
        <td><?= $model->gender ?></td>
    </tr>
    <?php endforeach; ?>
</table>
