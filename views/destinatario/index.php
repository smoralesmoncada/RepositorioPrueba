<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DestinatarioSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Destinatarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="destinatario-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear un destinatario', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'f_iddes',
            'f_idciudad',
            'f_rutdes',
            'f_nombredes',
            'f_apellidosdes',
            // 'f_celulardes',
            // 'f_emaildes:email',
            // 'f_direcciondes',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
