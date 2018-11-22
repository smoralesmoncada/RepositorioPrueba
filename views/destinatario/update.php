<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Destinatario */

$this->title = 'Actualizar destinatario: ' . $model->f_iddes;
$this->params['breadcrumbs'][] = ['label' => 'Destinatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_iddes, 'url' => ['view', 'id' => $model->f_iddes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="destinatario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
