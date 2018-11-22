<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiene".
 *
 * @property integer $f_idestado
 * @property integer $f_idenc
 * @property string $f_descripcion
 * @property string $fecha_estado
 *
 * @property Encomienda $fIdenc
 * @property Estado $fIdestado
 */
class Tiene extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiene';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idestado', 'f_idenc'], 'required'],
            [['f_idestado', 'f_idenc'], 'integer'],
            [['fecha_estado'], 'safe'],
            [['f_descripcion'], 'string', 'max' => 100],
            [['f_idestado', 'f_idenc'], 'unique', 'targetAttribute' => ['f_idestado', 'f_idenc'], 'message' => 'The combination of F Idestado and F Idenc has already been taken.'],
            [['f_idenc'], 'exist', 'skipOnError' => true, 'targetClass' => Encomienda::className(), 'targetAttribute' => ['f_idenc' => 'f_idenc']],
            [['f_idestado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['f_idestado' => 'f_idestado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idestado' => 'F Idestado',
            'f_idenc' => 'F Idenc',
            'f_descripcion' => 'F Descripcion',
            'fecha_estado' => 'Fecha Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdenc()
    {
        return $this->hasOne(Encomienda::className(), ['f_idenc' => 'f_idenc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdestado()
    {
        return $this->hasOne(Estado::className(), ['f_idestado' => 'f_idestado']);
    }
}
