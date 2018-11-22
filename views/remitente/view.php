<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Remitente */

$this->title = $model->f_idre;
$this->params['breadcrumbs'][] = ['label' => 'Remitentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remitente-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->f_idre], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->f_idre], [
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
            'f_idre',
            'f_idciudad',
            'f_rutre',
            'f_nombrere',
            'f_apellidosre',
            'f_celularre',
            'f_emailre:email',
            'f_direccionre',
        ],
    ]) ?>

</div>
