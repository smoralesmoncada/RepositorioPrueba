<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "remitente".
 *
 * @property integer $f_idre
 * @property integer $f_idciudad
 * @property string $f_rutre
 * @property string $f_nombrere
 * @property string $f_apellidosre
 * @property integer $f_celularre
 * @property string $f_emailre
 * @property string $f_direccionre
 *
 * @property Encomienda[] $encomiendas
 * @property Ciudad $fIdciudad
 */
class Remitente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remitente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idciudad','f_rutre'], 'required'],
            [['f_idciudad', 'f_celularre'], 'integer'],
            [['f_rutre'], 'string', 'max' => 12],
            [['f_emailre'], 'string', 'max' => 100],
            [['f_nombrere'], 'string', 'max' => 100],
            [['f_apellidosre'], 'string', 'max' => 100],
            [['f_direccionre'], 'string', 'max' => 100],
            [['f_idciudad'], 'exist', 'skipOnError' => true, 'targetClass' => Ciudad::className(), 'targetAttribute' => ['f_idciudad' => 'f_idciudad']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idre' => 'Código remitente',
            'f_idciudad' => 'Ciudad',
            'f_rutre' => 'Rut',
            'f_nombrere' => 'Nombre',
            'f_apellidosre' => 'Apellidos',
            'f_celularre' => 'Celular',
            'f_emailre' => 'E-mail',
            'f_direccionre' => 'Dirección',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncomiendas()
    {
        return $this->hasMany(Encomienda::className(), ['f_idre' => 'f_idre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdciudad()
    {
        return $this->hasOne(Ciudad::className(), ['f_idciudad' => 'f_idciudad']);
    }
}
