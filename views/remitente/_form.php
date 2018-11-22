<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Ciudad;
use kartik\select2\Select2;
use voime\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $model app\models\Remitente */
/* @var $form yii\widgets\ActiveForm */
?>



<?php /*
    echo Map::widget([
    'zoom' => 16,
    'center' => 'Red Square',
    'width' => '700px',
    'height' => '400px',
    'mapType' => 'roadmap',
]);*/

 ?>

<table>
    <tr>
        <div class="col-lg-5"> 
            <div class="remitente-form">
                <?php $form = ActiveForm::begin(); ?>
               
                <?= $form->field($model, 'f_idciudad')->widget(Select2::classname(), [
                    'data' => ArrayHelper::map(Ciudad::find()->all(),'f_idciudad','f_nombreciudad'),
                    'language' => 'es',
                    'options' => ['placeholder' => 'Selecciona una ciudad'],
                    'pluginOptions' => [
                        'allowClear' => true
                    ],
                ])?>

                <?= $form->field($model, 'f_rutre')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_nombrere')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_apellidosre')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_celularre')->textInput() ?>

                <?= $form->field($model, 'f_emailre')->textInput(['maxlength' => true]) ?>

                <?= $form->field($model, 'f_direccionre')->textInput(['maxlength' => true]) ?>

                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Siguiente' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </tr>
</table>
