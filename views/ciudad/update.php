<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudad */

$this->title = 'Actualizar Ciudad: ' . $model->f_idciudad;
$this->params['breadcrumbs'][] = ['label' => 'Ciudads', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_idciudad, 'url' => ['view', 'id' => $model->f_idciudad]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ciudad-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
