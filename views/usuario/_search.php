<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'f_idusuario') ?>

    <?= $form->field($model, 'f_rutusuario') ?>

    <?= $form->field($model, 'f_passusuario') ?>

    <?= $form->field($model, 'f_ingresousuario') ?>

    <?= $form->field($model, 'f_terminousuario') ?>

    <?php // echo $form->field($model, 'f_username') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
