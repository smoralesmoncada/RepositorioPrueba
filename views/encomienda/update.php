<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Encomienda */

$this->title = 'Actualizar Encomienda: ' . $model->f_idenc;
$this->params['breadcrumbs'][] = ['label' => 'Encomiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_idenc, 'url' => ['view', 'id' => $model->f_idenc]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="encomienda-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
