<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Remitente */

$this->title = 'Inserte los datos del remitente';
$this->params['breadcrumbs'][] = ['label' => 'Remitentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remitente-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
