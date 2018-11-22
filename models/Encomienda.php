<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "encomienda".
 *
 * @property integer $f_idenc
 * @property integer $f_iddes
 * @property integer $f_idusuario
 * @property integer $f_idre
 * @property double $f_anchoenc
 * @property double $f_largoenc
 * @property double $f_altoenc
 * @property double $f_pesoenc
 * @property string $f_descripcionenc
 * @property string $f_fecharegistroenc
 * @property string $f_fechaentregaenc
 * @property integer $f_valorenc
 *
 * @property Destinatario $fIddes
 * @property Remitente $fIdre
 * @property Usuario $fIdusuario
 * @property Tiene[] $tienes
 * @property Estado[] $fIdestados
 */
class Encomienda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'encomienda';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_iddes', 'f_idusuario', 'f_idre','f_anchoenc','f_largoenc','f_altoenc', 'f_pesoenc', 'f_descripcionenc','f_fecharegistroenc', 'f_fechaentregaenc','f_valorenc'], 'required'],
            [['f_iddes', 'f_idusuario', 'f_idre', 'f_valorenc'], 'integer'],
            [['f_anchoenc', 'f_largoenc', 'f_altoenc', 'f_pesoenc'], 'number'],
            [['f_fecharegistroenc', 'f_fechaentregaenc'], 'safe'],
            [['f_descripcionenc'], 'string', 'max' => 100],
            [['f_iddes'], 'exist', 'skipOnError' => true, 'targetClass' => Destinatario::className(), 'targetAttribute' => ['f_iddes' => 'f_iddes']],
            [['f_idre'], 'exist', 'skipOnError' => true, 'targetClass' => Remitente::className(), 'targetAttribute' => ['f_idre' => 'f_idre']],
            [['f_idusuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['f_idusuario' => 'f_idusuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'f_idenc' => 'Código',
            'f_iddes' => 'Destinatario',
            'f_idusuario' => 'Administrativo',
            'f_idre' => 'Remitente',
            'f_anchoenc' => 'Ancho',
            'f_largoenc' => 'Largo',
            'f_altoenc' => 'Alto',
            'f_pesoenc' => 'Peso',
            'f_descripcionenc' => 'Descripción',
            'f_fecharegistroenc' => 'Fecha de registro',
            'f_fechaentregaenc' => 'Fecha de entrega',
            'f_valorenc' => 'Valor',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIddes()
    {
        return $this->hasOne(Destinatario::className(), ['f_iddes' => 'f_iddes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdre()
    {
        return $this->hasOne(Remitente::className(), ['f_idre' => 'f_idre']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdusuario()
    {
        return $this->hasOne(Usuario::className(), ['f_idusuario' => 'f_idusuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTienes()
    {
        return $this->hasMany(Tiene::className(), ['f_idenc' => 'f_idenc']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFIdestados()
    {
        return $this->hasMany(Estado::className(), ['f_idestado' => 'f_idestado'])->viaTable('tiene', ['f_idenc' => 'f_idenc']);
    }
}
