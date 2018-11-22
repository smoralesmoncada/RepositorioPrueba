<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idusuario'], 'integer'],
            [['f_rutusuario', 'f_passusuario', 'f_ingresousuario', 'f_terminousuario', 'f_username'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'f_idusuario' => $this->f_idusuario,
            'f_ingresousuario' => $this->f_ingresousuario,
            'f_terminousuario' => $this->f_terminousuario,
        ]);

        $query->andFilterWhere(['like', 'f_rutusuario', $this->f_rutusuario])
            ->andFilterWhere(['like', 'f_passusuario', $this->f_passusuario])
            ->andFilterWhere(['like', 'f_username', $this->f_username]);

        return $dataProvider;
    }
}
