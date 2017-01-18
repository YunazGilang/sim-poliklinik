<?php

namespace app\models\search;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\Pasien;

class PasienSearch extends Pasien
{
    public function search($params)
    {
        $query = Pasien::find();

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
            'puskesmas_id' => $this->puskesmas_id,
            'dalam_wilayah' => $this->dalam_wilayah,
            'tanggal_daftar' => $this->tanggal_daftar,
            'tanggal_lahir' => $this->tanggal_lahir,
            'umur' => $this->umur,
            'umur_bulan' => $this->umur_bulan,
            'umur_hari' => $this->umur_hari,
            'kabupaten' => $this->kabupaten,
            'kecamatan' => $this->kecamatan,
            'desa' => $this->desa,
            'perokok' => $this->perokok,
            'tanggal_lahir_ayah' => $this->tanggal_lahir_ayah,
            'tanggal_lahir_ibu' => $this->tanggal_lahir_ibu,
            'jenis_pembayaran_id' => $this->jenis_pembayaran_id,
            'status' => $this->status,
            'antrian_poli_id' => $this->antrian_poli_id,
        ]);

        $query->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'kode_lama', $this->kode_lama])
            ->andFilterWhere(['like', 'kode_folder_kk', $this->kode_folder_kk])
            ->andFilterWhere(['like', 'no_indeks_kk', $this->no_indeks_kk])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'nama_kepala_keluarga', $this->nama_kepala_keluarga])
            ->andFilterWhere(['like', 'status_kawin', $this->status_kawin])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'kota', $this->kota])
            ->andFilterWhere(['like', 'no_ktp', $this->no_ktp])
            ->andFilterWhere(['like', 'no_telpon1', $this->no_telpon1])
            ->andFilterWhere(['like', 'no_telpon2', $this->no_telpon2])
            ->andFilterWhere(['like', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['like', 'pendidikan_id', $this->pendidikan_id])
            ->andFilterWhere(['like', 'profesi_id', $this->profesi_id])
            ->andFilterWhere(['like', 'agama_id', $this->agama_id])
            ->andFilterWhere(['like', 'suku_id', $this->suku_id])
            ->andFilterWhere(['like', 'golongan_darah', $this->golongan_darah])
            ->andFilterWhere(['like', 'nomor_kelahiran', $this->nomor_kelahiran])
            ->andFilterWhere(['like', 'profesi_ayah', $this->profesi_ayah])
            ->andFilterWhere(['like', 'pendidikan_ayah', $this->pendidikan_ayah])
            ->andFilterWhere(['like', 'agama_ayah', $this->agama_ayah])
            ->andFilterWhere(['like', 'nama_ibu', $this->nama_ibu])
            ->andFilterWhere(['like', 'pendidikan_ibu', $this->pendidikan_ibu])
            ->andFilterWhere(['like', 'profesi_ibu', $this->profesi_ibu])
            ->andFilterWhere(['like', 'agama_ibu', $this->agama_ibu])
            ->andFilterWhere(['like', 'no_asuransi', $this->no_asuransi])
            ->andFilterWhere(['like', 'keterangan_alergi_obat', $this->keterangan_alergi_obat]);

        return $dataProvider;
    }
}