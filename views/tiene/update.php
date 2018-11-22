<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tiene */

$this->title = 'Update Tiene: ' . $model->f_idestado;
$this->params['breadcrumbs'][] = ['label' => 'Tienes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_idestado, 'url' => ['view', 'f_idestado' => $model->f_idestado, 'f_idenc' => $model->f_idenc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tiene-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
