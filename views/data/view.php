<?php
use yii\widgets\DetailView;
use yii\helpers\Html;

$this->title = "Data: $model->value";
$this->params['breadcrumbs'][] = ['label'=>'Data', 'url'=>['/data/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<h1><?= $this->title; ?></h1>
<?php if(Yii::$app->user->isGuest): ?>

<?php echo("  ")?>

<?php else: ?>

<span class="pull-left">
    <?= Html::a('Update Data',
        ['/data/update','id'=>$model->id],
        ['class'=>'btn btn-primary']);?>
    <?= Html::a('Delete', ['delete', 'id' => $model->id], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this Data?',
            'method' => 'post',
        ],
    ]) ?>
</span>
<?php endif;?>

<?= DetailView::widget([
    'model' => $model,
    'attributes' => [
        'id',
        'patient_iD',
        'attribute_id',
        'date',
        'value',
    ]
]);