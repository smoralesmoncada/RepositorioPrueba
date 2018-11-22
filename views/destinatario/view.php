<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Destinatario */

$this->title = $model->f_iddes;
$this->params['breadcrumbs'][] = ['label' => 'Destinatarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destinatario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->f_iddes], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->f_iddes], [
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
            'f_iddes',
            'f_idciudad',
            'f_rutdes',
            'f_nombredes',
            'f_apellidosdes',
            'f_celulardes',
            'f_emaildes:email',
            'f_direcciondes',
        ],
    ]) ?>

</div>
