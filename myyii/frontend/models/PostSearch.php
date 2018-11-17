<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\post;

/**
 * PostSearch represents the model behind the search form of `frontend\models\post`.
 */
class PostSearch extends post
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catalog', 'book_name', 'author', 'create_time', 'publish'], 'safe'],
            [['id'], 'integer'],
            [['price'], 'number'],
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
        $query = post::find();

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
            'create_time' => $this->create_time,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'catalog', $this->catalog])
            ->andFilterWhere(['like', 'book_name', $this->book_name])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'publish', $this->publish]);

        return $dataProvider;
    }
}
