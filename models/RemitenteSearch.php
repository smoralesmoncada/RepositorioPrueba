<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Remitente;

/**
 * RemitenteSearch represents the model behind the search form about `app\models\Remitente`.
 */
class RemitenteSearch extends Remitente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_idre', 'f_idciudad', 'f_celularre'], 'integer'],
            [['f_rutre', 'f_nombrere', 'f_apellidosre', 'f_emailre', 'f_direccionre'], 'safe'],
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
        $query = Remitente::find();

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
            'f_idre' => $this->f_idre,
            'f_idciudad' => $this->f_idciudad,
            'f_celularre' => $this->f_celularre,
        ]);

        $query->andFilterWhere(['like', 'f_rutre', $this->f_rutre])
            ->andFilterWhere(['like', 'f_nombrere', $this->f_nombrere])
            ->andFilterWhere(['like', 'f_apellidosre', $this->f_apellidosre])
            ->andFilterWhere(['like', 'f_emailre', $this->f_emailre])
            ->andFilterWhere(['like', 'f_direccionre', $this->f_direccionre]);

        return $dataProvider;
    }
}
