<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Usuario;
use kartik\select2\Select2;


/* @var $this yii\web\View */
/* @var $model app\models\Encomienda */
/* @var $form yii\widgets\ActiveForm */

/*<?= $form->field($model, 'f_iddes')->textInput() ?>
    <?= $form->field($model, 'f_idre')->textInput() ?>
*/
?>

<table>
    <tr>
        <div class="col-lg-5"> 
            <div class="destinatario-form">
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'f_idusuario')->widget(Select2::classname(), [
            'data' => ArrayHelper::map(Usuario::find()->all(),'f_idusuario','f_username'),
            'language' => 'es',
            'options' => ['placeholder' => 'Selecciona un usuario'],
            'pluginOptions' => [
            'allowClear' => true
            ],
    ])?>

    <?= $form->field($model, 'f_anchoenc')->textInput() ?>

    <?= $form->field($model, 'f_largoenc')->textInput() ?>

    <?= $form->field($model, 'f_altoenc')->textInput() ?>

    <?= $form->field($model, 'f_pesoenc')->textInput() ?>

    <?= $form->field($model, 'f_descripcionenc')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'f_fecharegistroenc')->textInput() ?>

    <?= $form->field($model, 'f_fechaentregaenc')->textInput() ?>

    <?= $form->field($model, 'f_valorenc')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

            </div>
        </div>
    </tr>
</table>