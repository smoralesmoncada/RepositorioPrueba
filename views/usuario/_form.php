<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'f_rutusuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_passusuario')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_ingresousuario')->textInput() ?>

    <?= $form->field($model, 'f_terminousuario')->textInput() ?>

    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
