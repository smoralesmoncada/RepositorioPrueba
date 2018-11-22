<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\RemitenteSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="remitente-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'f_idre') ?>

    <?= $form->field($model, 'f_idciudad') ?>

    <?= $form->field($model, 'f_rutre') ?>

    <?= $form->field($model, 'f_nombrere') ?>

    <?= $form->field($model, 'f_apellidosre') ?>

    <?php // echo $form->field($model, 'f_celularre') ?>

    <?php // echo $form->field($model, 'f_emailre') ?>

    <?php // echo $form->field($model, 'f_direccionre') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
