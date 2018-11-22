<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property integer $f_idreg
 * @property string $f_nombrereg
 *
 * @property Ciudad[] $ciudads
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_nombrereg'], 'string', 'max' => 100],
            [['f_nombrereg'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idreg' => 'Código región',
            'f_nombrereg' => 'Nombre región',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCiudads()
    {
        return $this->hasMany(Ciudad::className(), ['f_idreg' => 'f_idreg']);
    }
}
