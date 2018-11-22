<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TieneSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tiene-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'f_idestado') ?>

    <?= $form->field($model, 'f_idenc') ?>

    <?= $form->field($model, 'f_descripcion') ?>

    <?= $form->field($model, 'fecha_estado') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
