<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destinatario".
 *
 * @property integer $f_iddes
 * @property integer $f_idciudad
 * @property string $f_rutdes
 * @property string $f_nombredes
 * @property string $f_apellidosdes
 * @property integer $f_celulardes
 * @property string $f_emaildes
 * @property string $f_direcciondes
 *
 * @property Ciudad $fIdciudad
 * @property Encomienda[] $encomiendas
 */
class Destinatario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'destinatario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idciudad','f_rutdes'], 'required'],
            [['f_idciudad', 'f_celulardes'], 'integer'],
            [['f_rutdes'], 'string', 'max' => 12],
            [['f_emaildes'], 'string', 'max' => 100],
            [['f_nombredes'], 'string', 'max' => 100],
            [['f_apellidosdes'], 'string', 'max' => 100],
            [['f_direcciondes'], 'string', 'max' => 100],
            [['f_idciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['f_idciudad' => 'f_idciudad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_iddes' => 'Código Destinatario',
            'f_idciudad' => 'Ciudad',
            'f_rutdes' => 'Rut',
            'f_nombredes' => 'Nombre',
            'f_apellidosdes' => 'Apellidos',
            'f_celulardes' => 'Celular',
            'f_emaildes' => 'E-mail',
            'f_direcciondes' => 'Dirección',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdciudad()
    {
        return $this->hasOne(Ciudad::className(), ['f_idciudad' => 'f_idciudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncomiendas()
    {
        return $this->hasMany(Encomienda::className(), ['f_iddes' => 'f_iddes']);
    }
}
