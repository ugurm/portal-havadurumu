<?php

namespace kouosl\havadurumu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use kouosl\havadurumu\models\Fav;

/**
 * FavSearch represents the model behind the search form of `vendor\kouosl\havadurumu\models\Fav`.
 */
class FavSearch extends Fav
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'il_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Fav::find();

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
            'id' => $this->id,
            'user_id' => $this->user_id,
            'il_id' => $this->il_id,
        ]);

        return $dataProvider;
    }
}
