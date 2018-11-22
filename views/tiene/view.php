<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tiene */

$this->title = $model->f_idestado;
$this->params['breadcrumbs'][] = ['label' => 'Tienes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiene-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'f_idestado' => $model->f_idestado, 'f_idenc' => $model->f_idenc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'f_idestado' => $model->f_idestado, 'f_idenc' => $model->f_idenc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar este dato?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'f_idestado',
            'f_idenc',
            'f_descripcion',
            'fecha_estado',
        ],
    ]) ?>

</div>
