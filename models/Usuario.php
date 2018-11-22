<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $f_idusuario
 * @property string $f_rutusuario
 * @property string $f_passusuario
 * @property string $f_ingresousuario
 * @property string $f_terminousuario
 * @property string $f_username
 *
 * @property Encomienda[] $encomiendas
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_ingresousuario', 'f_terminousuario'], 'safe'],
            [['f_rutusuario'], 'string', 'max' => 12],
            [['f_passusuario'], 'string', 'max' => 50],
            [['f_username'], 'string', 'max' => 50],
            [['f_rutusuario', 'f_username','f_passusuario'],'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idusuario' => 'Id usuario',
            'f_rutusuario' => 'Rut',
            'f_passusuario' => 'Password',
            'f_ingresousuario' => 'Inicio contrato',
            'f_terminousuario' => 'Término contrato',
            'f_username' => 'Username',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEncomiendas()
    {
        return $this->hasMany(Encomienda::className(), ['f_idusuario' => 'f_idusuario']);
    }
}
