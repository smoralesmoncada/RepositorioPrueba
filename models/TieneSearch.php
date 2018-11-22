<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tiene;

/**
 * TieneSearch represents the model behind the search form about `app\models\Tiene`.
 */
class TieneSearch extends Tiene
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idestado', 'f_idenc'], 'integer'],
            [['f_descripcion', 'fecha_estado'], 'safe'],
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
        $query = Tiene::find();

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
            'f_idestado' => $this->f_idestado,
            'f_idenc' => $this->f_idenc,
            'fecha_estado' => $this->fecha_estado,
        ]);

        $query->andFilterWhere(['like', 'f_descripcion', $this->f_descripcion]);

        return $dataProvider;
    }
}
