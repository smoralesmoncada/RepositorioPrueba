<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */

$this->title = $model->f_idusuario;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="usuario-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->f_idusuario], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->f_idusuario], [
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
            'f_idusuario',
            'f_rutusuario',
            //'f_passusuario',
            'f_ingresousuario',
            'f_terminousuario',
            'f_username',
        ],
    ]) ?>

</div>
