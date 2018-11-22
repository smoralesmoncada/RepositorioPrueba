<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiene */

$this->title = 'Create Tiene';
$this->params['breadcrumbs'][] = ['label' => 'Tienes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiene-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
