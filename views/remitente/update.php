<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Remitente */

$this->title = 'Actualizar Remitente: ' . $model->f_idre;
$this->params['breadcrumbs'][] = ['label' => 'Remitentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->f_idre, 'url' => ['view', 'id' => $model->f_idre]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="remitente-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
