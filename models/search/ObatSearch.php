<?php

namespace app\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Obat;

/**
 * ObatSearch represents the model behind the search form about `app\models\Obat`.
 */
class ObatSearch extends Obat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'kemasan_id', 'jenis', 'harga_satuan', 'harga_gflk', 'is_utama', 'stok_saat_ini', 'stok_gflk', 'status'], 'integer'],
            [['kode', 'nama'], 'safe'],
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
        $query = Obat::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'kemasan_id' => $this->kemasan_id,
            'jenis' => $this->jenis,
            'harga_satuan' => $this->harga_satuan,
            'harga_gflk' => $this->harga_gflk,
            'is_utama' => $this->is_utama,
            'stok_saat_ini' => $this->stok_saat_ini,
            'stok_gflk' => $this->stok_gflk,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nama', $this->nama]);

        return $dataProvider;
    }
}
