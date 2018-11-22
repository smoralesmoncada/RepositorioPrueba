<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ciudad;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Destinatario */
/* @var $form yii\widgets\ActiveForm */
?>

<table>
    <tr>
        <div class="col-lg-5"> 
            <div class="destinatario-form">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'f_idciudad')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(Ciudad::find()->all(),'f_idciudad','f_nombreciudad'),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Selecciona una ciudad'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])?>

                <?= $form->field($model, 'f_rutdes')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_nombredes')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_apellidosdes')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_celulardes')->textInput() ?>

                <?= $form->field($model, 'f_emaildes')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_direcciondes')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Siguiente' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>
    </tr>
</table>