<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RemitenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Remitentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remitente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Remitente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'f_idre',
            'f_idciudad',
            'f_rutre',
            'f_nombrere',
            'f_apellidosre',
            // 'f_celularre',
            // 'f_emailre:email',
            // 'f_direccionre',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
