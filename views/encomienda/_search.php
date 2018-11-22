<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EncomiendaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="encomienda-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'f_idenc') ?>

    <?= $form->field($model, 'f_iddes') ?>

    <?= $form->field($model, 'f_idusuario') ?>

    <?= $form->field($model, 'f_idre') ?>

    <?= $form->field($model, 'f_anchoenc') ?>

    <?php // echo $form->field($model, 'f_largoenc') ?>

    <?php // echo $form->field($model, 'f_altoenc') ?>

    <?php // echo $form->field($model, 'f_pesoenc') ?>

    <?php // echo $form->field($model, 'f_descripcionenc') ?>

    <?php // echo $form->field($model, 'f_fecharegistroenc') ?>

    <?php // echo $form->field($model, 'f_fechaentregaenc') ?>

    <?php // echo $form->field($model, 'f_valorenc') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
