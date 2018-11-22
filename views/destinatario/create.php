<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Destinatario */

$this->title = 'Inserte los datos del destinatario';
$this->params['breadcrumbs'][] = ['label' => 'Destinatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destinatario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
