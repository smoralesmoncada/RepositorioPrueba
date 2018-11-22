<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EncomiendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Encomiendas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomienda-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::a('Nuevo registro', ['remitente/create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'f_idenc',
            'f_iddes',
            'f_idre',
            'f_idusuario',
            //'f_anchoenc',
            // 'f_largoenc',
            // 'f_altoenc',
            // 'f_pesoenc',
            // 'f_descripcionenc',
             'f_fecharegistroenc',
             'f_fechaentregaenc',
            // 'f_valorenc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
