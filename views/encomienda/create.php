<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Encomienda */

$this->title = 'Inserte los datos de la encomienda';
$this->params['breadcrumbs'][] = ['label' => 'Encomiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomienda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
