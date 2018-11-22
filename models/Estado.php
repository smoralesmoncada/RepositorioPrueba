<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $f_idestado
 * @property string $f_nombreestado
 *
 * @property Tiene[] $tienes
 * @property Encomienda[] $fIdencs
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_nombreestado'], 'string', 'max' => 30],
            [['f_nombreestado'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idestado' => 'Código',
            'f_nombreestado' => 'Nombre estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTienes()
    {
        return $this->hasMany(Tiene::className(), ['f_idestado' => 'f_idestado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdencs()
    {
        return $this->hasMany(Encomienda::className(), ['f_idenc' => 'f_idenc'])->viaTable('tiene', ['f_idestado' => 'f_idestado']);
    }
}
