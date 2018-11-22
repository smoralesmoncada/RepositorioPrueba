<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Encomienda;
use voime\GoogleMaps\Map;

/* @var $this yii\web\View */
/* @var $model app\models\Encomienda */

$this->title = $model->f_idenc;
$this->params['breadcrumbs'][] = ['label' => 'Encomiendas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="encomienda-view">

    <h1 align="center">Datos encomienda</h1>
    <h3>Numero de seguimiento:<?= Html::encode($this->title) ?></h3>

    <button type="button" class="btn btn-danger" onclick="window.print()">
        <span class="glyphicon glyphicon-print"></span> Imprimir
    </button>

            <h3>Remitente</h3>
                <table class="table" style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <?php 
                            $con = pg_connect("host=localhost dbname=Isw user=postgres password=pgadmin")
                                    or die('No se ha podido conectar: ' . pg_last_error());

                            $consulta = "SELECT DISTINCT coalesce(r.f_nombrere, '') || ' ' || coalesce(r.f_apellidosre, '') AS remitente, r.f_rutre, r.f_celularre, r.f_emailre
                                        FROM encomienda e, remitente r, destinatario d 
                                        WHERE e.f_idenc = $model->f_idenc AND 
                                        r.f_idre = e.f_idre";

                            $ejecutar = pg_query($con, $consulta);

                            $i = 0;

                            while($fila = pg_fetch_array($ejecutar)){
                                $remitente = $fila['remitente'];
                                $f_rutre = $fila['f_rutre'];
                                $f_celularre = $fila['f_celularre'];
                                $f_emailre = $fila['f_emailre'];

                                $i++;   
                        ?>  
                        <tr>
                            <td><?php echo $remitente; ?></td>
                            <td><?php echo $f_rutre; ?></td>
                            <td><?php echo $f_celularre; ?></td>
                            <td><?php echo $f_emailre; ?></td>
                        </tr>
                        <?php 
                        }
                         ?>
                        </tr>
                    </thead>
                </table>
                <br/>
                <hr>
                <br/>
                <h3>Destinatario</h3>
                <table class="table" style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Celular</th>
                            <th>Email</th>
                            <?php 
                            $con = pg_connect("host=localhost dbname=Isw user=postgres password=pgadmin")
                                    or die('No se ha podido conectar: ' . pg_last_error());

                            $consulta = "SELECT coalesce(d.f_nombredes, '') || ' ' || coalesce(d.f_apellidosdes, '') AS destinatario, d.f_rutdes, d.f_celulardes, d.f_emaildes
                                        FROM encomienda e, destinatario d 
                                        WHERE e.f_idenc = $model->f_idenc AND 
                                       d.f_iddes = e.f_iddes";

                            $ejecutar = pg_query($con, $consulta);

                            $i = 0;

                            while($fila = pg_fetch_array($ejecutar)){
                                $destinatario = $fila['destinatario'];
                                $f_rutdes = $fila['f_rutdes'];
                                $f_celulardes = $fila['f_celulardes'];
                                $f_emaildes = $fila['f_emaildes'];


                                $i++;   
                        ?>  
                        <tr>
                            <td><?php echo $destinatario; ?></td>
                            <td><?php echo $f_rutdes; ?></td>
                            <td><?php echo $f_celulardes; ?></td>
                            <td><?php echo $f_emaildes; ?></td>
                        </tr>
                        <?php 
                        }
                         ?>
                        </tr>
                    </thead>
                </table>
                <br/>
                <hr>
                <br/>
            <h3>Datos de entrega</h3>
                <table class="table" style="table-layout: fixed;">
                    <thead>
                        <tr>
                            <th>Dirección</th>
                            <th>Ciudad</th>
                            <?php 
                            $con = pg_connect("host=localhost dbname=Isw user=postgres password=pgadmin")
                                    or die('No se ha podido conectar: ' . pg_last_error());

                            $consulta = "SELECT d.f_direcciondes,c.f_nombreciudad
                                        FROM encomienda e, destinatario d, ciudad c
                                        WHERE e.f_idenc = $model->f_idenc AND 
                                       d.f_iddes = e.f_iddes AND
                                       d.f_idciudad = c.f_idciudad";

                            $ejecutar = pg_query($con, $consulta);

                            $i = 0;

                            while($fila = pg_fetch_array($ejecutar)){
                                $f_direcciondes = $fila['f_direcciondes'];
                                $f_nombreciudad = $fila['f_nombreciudad'];


                                $i++;   
                        ?>  
                        <tr>
                            <td><?php echo $f_direcciondes; ?></td>
                            <td><?php echo $f_nombreciudad; ?></td>
                        </tr>
                        <?php 
                        }
                         ?>
                        </tr>
                    </thead>
                </table>
    <?php 
echo Map::widget([
    'width' => '50%',
    'height' => '600px',
    'mapType' => Map::MAP_TYPE_HYBRID,
    'markers' => [
        ['position' => 'Universidad del Bio Bio Concepción'],
        ['position' => $f_direcciondes],
    ],
    'markerFitBounds'=>true
]);
?>
<br/>
</div>
<!--
    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->f_idenc], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->f_idenc], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'f_idenc',
            'f_iddes',
            'f_idusuario',
            'f_idre',
            'f_anchoenc',
            'f_largoenc',
            'f_altoenc',
            'f_pesoenc',
            'f_descripcionenc',
            'f_fecharegistroenc',
            'f_fechaentregaenc',
            'f_valorenc',
        ],
    ]) ?>

</div>-->
