<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Destinatario;

/**
 * DestinatarioSearch represents the model behind the search form about `app\models\Destinatario`.
 */
class DestinatarioSearch extends Destinatario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['f_iddes', 'f_idciudad', 'f_celulardes'], 'integer'],
            [['f_rutdes', 'f_nombredes', 'f_apellidosdes', 'f_emaildes', 'f_direcciondes'], 'safe'],
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
        $query = Destinatario::find();

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
            'f_iddes' => $this->f_iddes,
            'f_idciudad' => $this->f_idciudad,
            'f_celulardes' => $this->f_celulardes,
        ]);

        $query->andFilterWhere(['like', 'f_rutdes', $this->f_rutdes])
            ->andFilterWhere(['like', 'f_nombredes', $this->f_nombredes])
            ->andFilterWhere(['like', 'f_apellidosdes', $this->f_apellidosdes])
            ->andFilterWhere(['like', 'f_emaildes', $this->f_emaildes])
            ->andFilterWhere(['like', 'f_direcciondes', $this->f_direcciondes]);

        return $dataProvider;
    }
}
