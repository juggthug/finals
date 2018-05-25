<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Patient;
use app\models\Attribute;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use dosamigos\datepicker\DatePicker;

?>

<div class="attribute-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'patient_iD')->dropDownList(ArrayHelper::map(
            Patient::find()->asArray()->all(), 'id','name'))?>

    <?= $form->field($model, 'attribute_id')->dropDownList(ArrayHelper::map(
            Attribute::find()->asArray()->all(), 'id','name'))?>

    <div class="form-group">
    <label for="date">Date</label>
    <?= DatePicker::widget([
        'model' => $model,
        'attribute' => 'date',
        'template' => '{addon}{input}',
            'clientOptions' => [
                'autoclose' => true,
                'format' => 'yyyy-mm-dd'
            ]
    ]);?>

    <?= $form->field($model, 'value')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
