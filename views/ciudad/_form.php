<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Region;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudad */
/* @var $form yii\widgets\ActiveForm */
?>

<table>
    <tr>
        <div class="col-lg-5">
            <div class="ciudad-form">
                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'f_idreg')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(Region::find()->all(),'f_idreg','f_nombrereg'),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Selecciona una región'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])?>

                <?= $form->field($model, 'f_nombreciudad')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </tr>
</table>

