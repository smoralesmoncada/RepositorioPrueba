<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DestinatarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="destinatario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'f_iddes') ?>

    <?= $form->field($model, 'f_idciudad') ?>

    <?= $form->field($model, 'f_rutdes') ?>

    <?= $form->field($model, 'f_nombredes') ?>

    <?= $form->field($model, 'f_apellidosdes') ?>

    <?php // echo $form->field($model, 'f_celulardes') ?>

    <?php // echo $form->field($model, 'f_emaildes') ?>

    <?php // echo $form->field($model, 'f_direcciondes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
