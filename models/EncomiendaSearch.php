<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Encomienda;

/**
 * EncomiendaSearch represents the model behind the search form about `app\models\Encomienda`.
 */
class EncomiendaSearch extends Encomienda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idenc', 'f_iddes', 'f_idusuario', 'f_idre', 'f_valorenc'], 'integer'],
            [['f_anchoenc', 'f_largoenc', 'f_altoenc', 'f_pesoenc'], 'number'],
            [['f_descripcionenc', 'f_fecharegistroenc', 'f_fechaentregaenc'], 'safe'],
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
        $query = Encomienda::find();

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
            'f_idenc' => $this->f_idenc,
            'f_iddes' => $this->f_iddes,
            'f_idusuario' => $this->f_idusuario,
            'f_idre' => $this->f_idre,
            'f_anchoenc' => $this->f_anchoenc,
            'f_largoenc' => $this->f_largoenc,
            'f_altoenc' => $this->f_altoenc,
            'f_pesoenc' => $this->f_pesoenc,
            'f_fecharegistroenc' => $this->f_fecharegistroenc,
            'f_fechaentregaenc' => $this->f_fechaentregaenc,
            'f_valorenc' => $this->f_valorenc,
        ]);

        $query->andFilterWhere(['like', 'f_descripcionenc', $this->f_descripcionenc]);

        return $dataProvider;
    }
}
