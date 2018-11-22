<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ciudad".
 *
 * @property integer $f_idciudad
 * @property integer $f_idreg
 * @property string $f_nombreciudad
 *
 * @property Region $fIdreg
 * @property Destinatario[] $destinatarios
 * @property Remitente[] $remitentes
 */
class Ciudad extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ciudad';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idreg'], 'required'],
            [['f_idreg'], 'integer'],
            [['f_nombreciudad'], 'required'],
            [['f_nombreciudad'], 'string', 'max' => 100, ],
            [['f_idreg'], 'exist', 'skipOnError' => true, 'targetClass' => Region::className(), 'targetAttribute' => ['f_idreg' => 'f_idreg']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idciudad' => 'Código ciudad',
            'f_idreg' => 'Código región',
            'f_nombreciudad' => 'Nombre ciudad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdreg()
    {
        return $this->hasOne(Region::className(), ['f_idreg' => 'f_idreg']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDestinatarios()
    {
        return $this->hasMany(Destinatario::className(), ['f_idciudad' => 'f_idciudad']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemitentes()
    {
        return $this->hasMany(Remitente::className(), ['f_idciudad' => 'f_idciudad']);
    }
}
