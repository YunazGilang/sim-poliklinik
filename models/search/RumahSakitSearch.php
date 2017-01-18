<?php

namespace app\models\search;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\RumahSakit;

class RumahSakitSearch extends RumahSakit
{
    public function search($params)
    {
        $query = RumahSakit::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // jika tidak ada parameter
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'alamat', $this->alamat]);

        return $dataProvider;
    }
}